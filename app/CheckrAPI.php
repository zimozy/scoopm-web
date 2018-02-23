<?php
namespace ScoopM\CheckrAPI;
class CheckrAPI
{
    //set by child classes
    protected $url = NULL;

    //set by execute()
    private $curl_response, $id;

    //set by initializer
    public $firstName, $middleName, $lastName, $email, $phone, $zipcode, $dob, $ssn, $driverLicenseNumber, $driverLicenseState;

    public function __invoke(Array $data) {
        $this->firstName = "HELLO";/////WHERE I LEFT
        $this->middleName = $data[2];
        $this->lastName = $data[3];
        $this->email = $data[4];
        $this->phone = $data[5];
        $this->zipcode = $data[6];
        $this->dob = $data[7];
        $this->ssn = $data[8];
        $this->driverLicenseNumber = $data[9];
        $this->driverLicenseState = $data[10];
        return $this;
    }

    public function execute() {
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.checkr.com/v1/' + $url,
                CURLOPT_POST => 1,
                CURLOPT_USERNAME => '9619351fe75d0715e331cd80cc2ac89fa2149a83',
                CURLOPT_POSTFIELDS => array(
                    'first_name' => $this->firstName,
                    'middle_name' => $this->middleName,
                    'last_name' => $this->lastName,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'zipcode' => $this->zipcode,
                    'dob' => $this->dob,
                    'ssn' => $this->ssn,
                    'driver_license_number' => $this->licenseNumber,
                    'driver_license_state' => $this->licenseState
                ),
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_FAILONERROR => true, //if we get a 404, for example
                CURLOPT_USERAGENT => 'ScoopM REST'
            ));
            $this->curl_response = curl_exec($curl);
            // if (FALSE === $this->curl_response) throw new \Exception(curl_error($curl), curl_errno($curl));

            curl_close($curl);
        } catch (Exception $e) {
            $this->e = $e;
        }

        if ($this->e) {
            echo $this->e->getCode();
            echo $this->e->getMessage();
        }

        var_dump($this);
        //set ID
        $this->id = json_decode($this->curl_response)->id;

        return $this;
    }

    public function getID() { return $this->id; }
}