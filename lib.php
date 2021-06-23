<?php
    //  API와 소통하는 엔진
    $api_key = "d300d467a35aa8b6f17106c6897e057f"; 
    $search_city = urlencode($_POST["search_city"]);    //  사용자가 요청한 도시 정보
    $lat = $_POST["lat"];
    $lon = $_POST["lng"];

    if($lat && $lon)
    {
        $url = "api.openweathermap.org/data/2.5/weather?lat=".$lat. "&lon=".$lon. "&appid=" . $api_key . "&units=metric&lang=kr";
    }
    else if($search_city)
    { 
        $url = "api.openweathermap.org/data/2.5/weather?q=".$search_city."&appid=" . $api_key . "&units=metric&lang=kr";
    }

    $url = "api.openweathermap.org/data/2.5/weather?q=".$search_city."&lat=".$lat. "&lon=".$lon. "&appid=" . $api_key . "&units=metric&lang=kr";

    $is_post = false;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, $is_post);     
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec ($ch);
    $state_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);
    if($state_code == 200)
    {
        echo $response;
    }
?>