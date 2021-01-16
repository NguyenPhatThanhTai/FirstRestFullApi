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
    function getAllUser(){
        $this->dbReference = new DataConfig();
        $this->dbConnect = $this->dbReference->connectDB();
        if ($this->dbConnect == null){
            $this->dbReference->sendResponse(503, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(503).'}');
        }
        else{
            $sql = "select * from infdata";
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

    function insertUser(){
        $this->dbReference = new DataConfig();
        $this->dbConnect = $this->dbReference->connectDB();
        if ($this->dbConnect == null){
            $this->dbReference->sendResponse(503, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(503).'}');
        }
        else{
            if (isset($_POST['UserName']) && isset($_POST['FullName']) && isset($_POST['Password']) && isset($_POST['Email']) &&
                isset($_POST['PhoneNum'])){

                $UserName = $_POST['UserName'];
                $FullName = $_POST['FullName'];
                $Password = $_POST['Password'];
                $Email = $_POST['Email'];
                $PhoneNum = $_POST['PhoneNum'];

                $sql = "insert into infdata (UserName, FullName, Password, Email, PhoneNum) 
                        values ('$UserName', '$FullName', '$Password', '$Email', '$PhoneNum')";
                if($this->dbConnect->query($sql) === true){
                    $this->dbReference->sendResponse(201, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(201).'}');
                }
                else{
                    $this->dbReference->sendResponse(400, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(400).'}');
                }
            }
            else{
                $this->dbReference->sendResponse(204, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(204).'}');
            }
        }
    }

    function insertUserJson(){
        $this->dbReference = new DataConfig();
        $this->dbConnect = $this->dbReference->connectDB();

        $json  = file_get_contents('php://input', true);
        $data = json_decode($json);
        if($json != null && $data->UserName != ""){
            $sql = "insert into infdata (UserName, FullName, Password, Email, PhoneNum) 
                        values ('$data->UserName', '$data->FullName', '$data->Password', '$data->Email', '$data->PhoneNum')";
            if($this->dbConnect->query($sql) === true){
                $this->dbReference->sendResponse(201, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(201).'}');
            }
            else{
                $this->dbReference->sendResponse(400, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(400).'}');
            }
        }
        else{
            $this->dbReference->sendResponse(400, '{"error_message":'.$this->dbReference->getStatusCodeMeeage(400).'}');
        }
    }
}
