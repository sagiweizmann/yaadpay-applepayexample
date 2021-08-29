<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
if ($_POST['action'] == 'callsoft') {
    $url = 'https://icom.yaad.net/p/';
    $data = array(
        'action' => 'soft',
        'Masof' => $_POST['Masof'],
        'Info' => $_POST['Info'],
        'Amount' => $_POST['Amount'],
        'PassP' => $_POST['PassP'],
        'UserId' => $_POST['UserId'],
        'ClientName' => $_POST['ClientName'],
        'ClientLName' => $_POST['ClientLName'],
        'street' => $_POST['street'],
        'zip' => $_POST['zip'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'Tash' => $_POST['Tash'],
        'FixTash' => $_POST['FixTash'],
        'Postpone' => $_POST['Postpone'],
        'Sign' => $_POST['Sign'],
        'MoreData' => $_POST['MoreData'],
        'sendemail' => $_POST['sendemail'],
        'SendHesh' => $_POST['SendHesh'],
        'heshDesc' => $_POST['heshDesc'],
        'ApplePay' => $_POST['ApplePay']
    );

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { 
        echo "500";
    }
    $result = iconv("windows-1255", "UTF-8", $result);
    parse_str(urldecode($result), $result);
    $retJson = json_encode($result, JSON_UNESCAPED_UNICODE);
    echo $retJson;
}


?>