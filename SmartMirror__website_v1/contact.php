<?php

$from = 'kontakt@smart-mirror.pl';
$sendTo = 'kontakt@smart-mirror.pl';
$subject = 'Nowa wiadomosc ze Smart-Mirror.pl';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'email' => 'Email', 'message' => 'Message');
$okMessage = 'Wiadomość wysłana pomyślnie.';
$errorMessage = 'Wiadomość nie została wysłana. Spróbuj później.';
error_reporting(E_ALL & ~E_NOTICE);

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
