<?php
include ("../Database/DataConfig.php");
class getData{
    private $dbReference;
    var $dbConnect;
    var $result;


    function __construct(){

    }

    function __destruct(){

    }



    //get User
    function getAllItems(){
        $this->dbReference = new DataConfig();
        $this->dbConnect = $this->dbReference->connectDB();
        if ($this->dbConnect == null){
            $this->dbReference->sendResponse(503, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(503).'}');
        }
        else{
            $sql = "select * from product_inf";
            if (isset($_POST['number'])){
                $number = $_POST['number'];
                $sql = "select * from infdata limit $number";
            }
            $this->result = $this->dbConnect->query($sql);
            if ($this->result->num_rows > 0) {
                $resultSet = array();
                while ($row = $this->result->fetch_assoc()) {
                    $resultSet[] = $row;
                }
                $this->dbReference->sendResponse(200,'{"items":'.json_encode($resultSet).'}');
            }else{
                $this->dbReference->sendResponse(200, '{"items":null}');
            }
        }
    }

//    function insertNewItems(){
//        $this->dbReference = new DataConfig();
//        $this->dbConnect = $this->dbReference->connectDB();
//        if ($this->dbConnect == null){
//            $this->dbReference->sendResponse(503, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(503).'}');
//        }
//        else{
//            if (isset($_POST['name']) && isset($_POST['name-1']) && isset($_POST['name-2']) && isset($_POST['name-3']) &&
//                isset($_POST['name-4']) && isset($_POST['name-5']) && isset($_POST['name-6']) && isset($_POST['name-7'])
//                && isset($_POST['name-8']) && isset($_POST['name-9']) && isset($_POST['name-10'])
//                && isset($_POST['name-11']) && isset($_POST['name-12']) && isset($_POST['name-13']) && isset($_POST['name-14'])){
//
//                $Id = date("d").date("hs");
//                $Name = $_POST['name'];
//                $Name1 = $_POST['name-1'];
//                $Name2 = $_POST['name-2'];
//                $Name3 = $_POST['name-3'];
//                $Name4 = $_POST['name-4'];
//                $Name5 = $_POST['name-5'];
//                $Name6 = $_POST['name-6'];
//                $Name7 = $_POST['name-7'];
//                $Name8 = $_POST['name-8'];
//                $Name9 = $_POST['name-9'];
//                $Name10 = $_POST['name-10'];
//                $Name11 = $_POST['name-11'];
//                $Name12 = $_POST['name-12'];
//                $Name13 = $_POST['name-13'];
//                $Name14 = $_POST['name-14'];
//
//                $sql = "insert into product_detail (Laptop_Id, Laptop_OS, Laptop_CPU, Laptop_Ram, Laptop_VGA, Laptop_Hdd, Laptop_Ssd
//                                    , Laptop_Display, Laptop_Lan, Laptop_WirelessLan, Laptop_ConnectionGate, Laptop_KeyBoard, Laptop_Pin, Laptop_Weight, Laptop_OpticalDrive)
//                        values ('$Id', '$Name', '$Name1', '$Name2', '$Name3', '$Name4', '$Name5', '$Name6', '$Name7', '$Name8', '$Name9'
//                        , '$Name10', '$Name11', '$Name12', '$Name13', '$Name14')";
//                if($this->dbConnect->query($sql) === true){
//                    $this->dbReference->sendResponse(201, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(201).'}');
//                }
//                else{
//                    $this->dbReference->sendResponse(400, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(400).'}');
//                }
//            }
//            else{
//                $this->dbReference->sendResponse(204, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(204).'}');
//            }
//        }
//    }



    function insertItemsJson(){
        $this->dbReference = new DataConfig();
        $this->dbConnect = $this->dbReference->connectDB();

        if ($this->dbConnect == null){
            echo "nope";
        }

        $json  = file_get_contents('php://input', true);
        $data = json_decode($json);
        if($json != null && $data->name != ""){
            $sql = "insert into product_inf (Laptop_Id, Laptop_Name, Laptop_Manufacturer, Laptop_Money, Laptop_Picture)
                    values ('$data->name', '$data->name1', '$data->name2', '$data->name3', '$data->name4')";
            if($this->dbConnect->query($sql) === true){
                $this->dbReference->sendResponse(201, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(201).'}');
            }
            else{
                $this->dbReference->sendResponse(400, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(400).'}');
            }
            //======
            $sql = "insert into product_detail (Laptop_Id, Laptop_OS, Laptop_CPU, Laptop_Ram, Laptop_VGA, Laptop_Hdd, Laptop_Ssd
                        , Laptop_Display, Laptop_Lan, Laptop_WirelessLan, Laptop_ConnectionGate, Laptop_KeyBoard, Laptop_Pin, Laptop_Weight, Laptop_OpticalDrive)
                        values ('$data->name', '$data->name5', '$data->name6', '$data->name7', '$data->name8', '$data->name9', '$data->name10', '$data->name11', '$data->name12', '$data->name13', '$data->name14'
                        , '$data->name15', '$data->name16', '$data->name17', '$data->name18')";
            if($this->dbConnect->query($sql) === true){
                $this->dbReference->sendResponse(201, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(201).'}');
            }
            else{
                $this->dbReference->sendResponse(400, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(400).'}');
            }
        }
        else{
            $this->dbReference->sendResponse(400, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(300).'}');
        }
    }
}
