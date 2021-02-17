<?php
        $url = 'http://localhost:8080/RestFullApi/Data/Data/Insert.php';

        $ch = curl_init($url);

        $data = array('name'=> '118233',
            'name1'=> 'm',
            'name2'=>'m',
            'name3'=> '200000',
            'name4'=> 'm',
            'name5'=> 'm',
            'name6'=> 'm',
            'name7'=> 'm',
            'name8'=> 'm',
            'name9'=> 'm',
            'name10'=> 'm',
            'name11'=> 'm',
            'name12'=> 'm',
            'name13'=> 'm',
            'name14'=> 'm',
            'name15'=> 'm',
            'name16'=> 'm',
            'name17'=> 'm',
            'name18'=> 'm');
        $payload = json_encode($data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $result = curl_exec($ch);

        //echo $httpcode;

//        if ($httpcode == 0){
//            header("location:../Data/page1.php");
//        }

        curl_close($ch);
