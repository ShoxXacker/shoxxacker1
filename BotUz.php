<?php
ob_start();
define('API_KEY','1206762749:AAFWxk9BXac5JJJn8MCEYDw1rmyPARUfOqg');

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
if ($text == '/start') {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"Salom"
        'text'=>"Assalomu Aleykum Siz @Hacker_Bey Kanalini Adminiga murojat qilayapsiz"
    ])
}