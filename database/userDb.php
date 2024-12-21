<?php
    require_once "dbconnect.php";
    function getUserById($uid){
        global $conn;
        $qry="SELECT * FROM user WHERE uid=?";
        $stm=$conn->prepare($qry);
        $stm->bind_param("i",$uid);
        $res=$stm->execute();
        if($res){
            $res=$stm->get_result();
            if($res->num_rows>0){
                return $res->fetch_assoc();
            }
        }
        return false;
    }

    function getTotalUser() {
        global $conn;
        $stmt = $conn->prepare("SELECT COUNT(*) AS total_user FROM user");
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // echo "No of contacts ".$row['total_user'];
                return $row['total_user']; 
            } else {
                return 0; 
            }
        }
    }

    function getUsers() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM user");
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                return $result;
            } else {
                return null;
            }
        }
    }
    
?>