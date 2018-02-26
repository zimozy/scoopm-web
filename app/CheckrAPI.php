<?php
namespace ScoopM\CheckrAPI;
class CheckrAPI
{
    // PROPERTIES
    protected $urlEnding = NULL, $curl_response, $id;

    private $postFields;

    public function __construct(Array $postFields) {
        foreach ($postFields as $field => $value) {
            $this->postFields[$field] = $value;
        }
        return $this;
    }

    public function execute() {

        //CURL
        //init
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.checkr.com/v1/' . $this->urlEnding,
            CURLOPT_POST => 1,
            CURLOPT_USERNAME => '9619351fe75d0715e331cd80cc2ac89fa2149a83',
            CURLOPT_POSTFIELDS => $this->postFields,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FAILONERROR => true, //if we get a 404, for example
            CURLOPT_USERAGENT => 'ScoopM REST'
        ));

        //execute
        $this->curl_response = curl_exec($curl);
        curl_close($curl);

        //check for bad response from Checkr.com
        if (!$this->curl_response) { 
            throw new \Exception("Error Processing Request", 1);
        }

        //set ID
        $this->id = json_decode($this->curl_response)->id;

        return $this;
    }

    public function getID() {
        return $this->id;
    }
}