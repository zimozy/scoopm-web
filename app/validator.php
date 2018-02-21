<?php
namespace scoopm;

use libphonenumber\PhoneNumberUtil;
use Twig\Cache\NullCache;

class Validator
{
    private $fields_array;
    private $errors_boolean;
    private $errors_array;

    public function __construct(&$fields_array) {
        $this->fields_array   = $fields_array;
        $this->errors_boolean = false;
        $this->errors_array   = [];
        return $this;
    }

    public function hasErrors() {
        return $this->errors_boolean;
    }

    public function success($success_callback) {
        if (! $this->hasErrors()) {
            call_user_func($success_callback);
        }
        return $this;
    }

    public function failure($failure_callback) {
        if ($this->hasErrors()) {
            call_user_func($failure_callback);
        }
        return $this;
    }

    public function getErrors() {
        return $this->errors_array;
    }

    private function setError(String $field_name, String $error) {
        $this->errors_array[$field_name][$error] = true;
        $this->errors_boolean = true;
    }

    private function setAsPassed($field_name) {
        $this->errors_array[$field_name]['passed'] = true;
    }

    private function isEmpty($string) {
        return $string == NULL && $string == '' && trim($string) == '';
    }

    public function validateUID($field_name) {
        if ( $this->isEmpty($this->fields_array[$field_name]) ) {
            $this->setError($field_name, 'empty');
        } else {
            $this->setAsPassed($field_name);
        }
    }

    public function validateText($field_name, $optional = false) {

        //essentially skip this check if the field is optional
        if ($optional) $first_condition = false;
        else $first_condition = $this->isEmpty($this->fields_array[$field_name]);

        if (
            $first_condition
            or
            strlen($this->fields_array[$field_name]) > 5000
        ) {
            $this->setError($field_name, 'tooLong');
        } else {
            $this->setAsPassed($field_name);
        }
    }

    public function validatePhone($field_name) {
        try {
            PhoneNumberUtil::getInstance()->parse($this->fields_array[$field_name], "US");
            $this->setAsPassed($field_name);
        } catch (\libphonenumber\NumberParseException $e) {
            $this->setError($field_name, 'invalid');
        }
    }

    public function validateEmail($field_name) {
        if (
            filter_var($this->fields_array[$field_name],FILTER_VALIDATE_EMAIL) === FALSE
            or
            !checkdnsrr(explode("@", $this->fields_array[$field_name])[1] . ".") //Fully qualified name needs a . at the end: https://secure.php.net/manual/en/function.checkdnsrr.php#119969
        ) {
            $this->setError($field_name, 'invalid');
        } else {
            $this->setAsPassed($field_name);
        }
    }
    
    public function validatePassword($field1_name, $field2_name) {
        $length = strlen($this->fields_array[$field1_name]);
        
        if ($length < 6 or $length > 20) {
            $this->setError($field1_name, 'size');
        } elseif ($this->fields_array[$field1_name] !== $this->fields_array[$field2_name]) {
            $this->setError($field2_name, 'mismatch');
        } else {
            $this->setAsPassed($field1_name);
            $this->setAsPassed($field2_name);
        }
    }

    private function validateFile($field_name, $upload_type) {
        $file = $this->fields_array['files'][$field_name];

        if ($file == NULL or $file->getSize() == 0) { // there is no file
            $this->setError($field_name, 'empty');
        } else { //check the file type
            switch ($upload_type) {
                case 'pdf':
                    $allowed_types = ['application/pdf'];
                    break;

                case 'doc':
                    $allowed_types = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword'];
                    break;

                case 'img':
                    $allowed_types = ['image/png', 'image/jpg', 'image/gif'];
                    break;

                case 'img/pdf':
                    $allowed_types = ['image/png', 'image/jpg', 'image/gif', 'application/pdf'];
                    break;

                default:
                    $allowed_types = []; //empty array
            }
            $file_type = $file->getClientMediaType();
            if (!in_array($file_type, $allowed_types)) { // if it's the wrong file type
                $this->setError($field_name,'invalid');
            } else {
                $this->setAsPassed($field_name);
            }
        }
    }

    public function validateImage($field_name) {
        $this->validateFile($field_name, 'img');
    }

    public function validatePDF($field_name) {
        $this->validateFile($field_name, 'pdf');
    }

    public function validateDoc($field_name) {
        $this->validateFile($field_name, 'doc');
    }

    public function validateImageOrPDF($field_name) {
        $this->validateFile($field_name, 'img/pdf');
    }

    public function validateCar($year_field_name, $make_field_name, $model_field_name) {

        // MUST ENABLE FOR LIVE SITE
        // echo ("=== CAR VALIDATION IS CURRENTLY DISABLED ===");

        $url = "https://www.carqueryapi.com/api/0.3/?callback=?&cmd=getModels&make="
            . $this->fields_array[$make_field_name]
            . "&year="
            . $this->fields_array[$year_field_name]
            . "&sold_in_us=1";

        $ch = curl_init($url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $result = curl_exec($ch);
        
        curl_close($ch);

        $regex = '/"model_name": ?"' . $this->fields_array[$model_field_name] . '"/';

        if (!preg_match($regex, $result)) {
            $this->setError($year_field_name, 'invalid');
            $this->setError($make_field_name, 'invalid');
            $this->setError($model_field_name, 'invalid');
        } else {
            $this->setAsPassed($year_field_name);
            $this->setAsPassed($make_field_name);
            $this->setAsPassed($model_field_name);
        }

        return $this;
    }

    public function validateSelect($field_name, $possibilities) {
        if (
            $this->isEmpty($this->fields_array[$field_name]) 
            or !in_array($this->fields_array[$field_name] , $possibilities)
        ) {
            $this->setError($field_name, 'invalid');
        } else {
            $this->setAsPassed($field_name);
        }   
    }

    public function validateAgreement($field_name) {
        if ($this->fields_array[$field_name] != '1') {
            $this->setError($field_name, 'invalid');
        } else {
            $this->setAsPassed($field_name);
        }
    }

    public function validateRegex($field_name, $regex) {
        if ( !preg_match($regex, $this->fields_array[$field_name]) ) {
            $this->setError($field_name, 'invalid');
        } else {
            $this->setAsPassed($field_name);
        }
    }
}
