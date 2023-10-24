<?php


class Llmer{
    private $api_key;

    public function __construct($api_key){
        $this->api_key = $api_key;
    }
    public function get_response($user_prompt){
        $PALM_API_KEY = $this->api_key;
        $url = "https://generativelanguage.googleapis.com/v1beta2/models/text-bison-001:generateText?key=$PALM_API_KEY";
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $prompt = $user_prompt;
        $data = "{'prompt':{'text':'$prompt'}}";
        
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        
        $resp = curl_exec($curl);
        curl_close($curl);
        $answer = json_decode($resp);
        return $answer->candidates[0]->output;
    }

    public function get_modified_response(){

    }

}




?>