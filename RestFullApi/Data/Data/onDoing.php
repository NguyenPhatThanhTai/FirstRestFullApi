<?php
    if ($_POST["submit"] == "Create"){
        $url = 'http://localhost:8080/RestFullApi/Data/Data/Insert.php';

        $ch = curl_init($url);

        $data = array(
            'UserName' => $_POST['UserName'],
            'FullName' => $_POST['FullName'],
            'Password' => $_POST['Password'],
            'Email' => $_POST['Email'],
            'PhoneNum' => $_POST['PhoneNum']
        );
        $payload = json_encode($data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $result = curl_exec($ch);

        //echo $httpcode;

        if ($httpcode == 0){
            header("location:../Data/page1.php");
        }

        curl_close($ch);
    }
