<?php
require_once 'vendor/autoload.php'; // Chemin vers autoload.php généré par Composer

use PhpSerial\Serial;

$serial = new Serial();
$serial->deviceSet("/dev/ttyUSB0"); // Remplacez "/dev/ttyUSB0" par votre port série (COM3 sur Windows)
$serial->confBaudRate(9600);
$serial->deviceOpen();

while (true) {
    $read = $serial->readPort();
    if ($read) {
        $data = trim($read);
        if (strpos($data, "Card UID: ") !== false) {
            $card_uid = str_replace("Card UID: ", "", $data);
            
            // Envoyer les données à Laravel via une requête HTTP POST
            $url = 'http://localhost:8000/api/rfid'; // Remplacez par l'URL de votre API Laravel
            $ch = curl_init($url);
            $payload = json_encode(array('card_uid' => $card_uid));

            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);

            echo $result;
        }
    }
    usleep(100000); // Délai pour éviter de lire trop souvent
}

$serial->deviceClose();
?>
