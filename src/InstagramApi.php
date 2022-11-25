<?php

namespace jamshidbekakhlidinov;

header('Content-Type: application/json; charset=utf-8');

class InstagramApi {

    public $url;

    public function __construct($url)
    {
        $this->url = $url;
    
    }

    public function run(){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://ssyoutube.com/api/convert");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(["url"=>$this->url]));

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return ($result);
    }


}
$video = new InstagramApi("https://www.instagram.com/p/CZy9LthA6q1/");
$video = $video->run();
print_r($video); 



?>