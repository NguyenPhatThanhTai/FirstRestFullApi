<?php
session_start();
//Load san pham dau trang
class DAO{
    function getProductRecommendations(){
        $listMainPage = [];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://taeiblog.000webhostapp.com/RestFullApi/Data/Data/View.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        $decode = json_decode($response);
        foreach ($decode as $value){
            $listMainPage = $value;
//        foreach ($value -> message as $list){
//            echo $list -> Laptop_Id;
//            echo "</br>";
//        }
        }
        $_SESSION["listRecommendation"] = $listMainPage;
    }

    function getAllproduct(){
        $listAllProduct = [];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://taeiblog.000webhostapp.com/RestFullApi/Data/Data/View.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        $decode = json_decode($response);
        foreach ($decode as $value){
            $listAllProduct = $value;
//        foreach ($value -> message as $list){
//            echo $list -> Laptop_Id;
//            echo "</br>";
//        }
        }
        $_SESSION["listAllProduct"] = $listAllProduct;
    }

//Them san pham
    function Insert(){
        if (isset($_POST["submit"]) && $_POST["submit"] == "Tạo sản phẩm"){
            $url = 'https://taeiblog.000webhostapp.com/RestFullApi/Data/Data/Insert.php';

            $ch = curl_init($url);

            $data = array(
                'name' => $_POST['name'],
                'name1' => $_POST['name-1'],
                'name2' => $_POST['name-2'],
                'name3' => $_POST['name-3'],
                'name4' => $_POST['name-4'],
                'name5' => $_POST['name-5'],
                'name6' => $_POST['name-6'],
                'name7' => $_POST['name-7'],
                'name8' => $_POST['name-8'],
                'name9' => $_POST['name-9'],
                'name10' => $_POST['name-10'],
                'name11' => $_POST['name-11'],
                'name12' => $_POST['name-12'],
                'name13' => $_POST['name-13'],
                'name14' => $_POST['name-14'],
                'name15' => $_POST['name-15'],
                'name16' => $_POST['name-16'],
                'name17' => $_POST['name-17'],
                'name18' => $_POST['name-18'],
            );
            $payload = json_encode($data);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $response = curl_exec($ch);

            $decode = json_decode($response);
            foreach ($decode as $value){
                $response = $value->status;
            }

            if ($response == "201"){
                header("location: ../../Trang-Chinh.php");
            }
            else{
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }else{
            echo "";
        }
    }
}

