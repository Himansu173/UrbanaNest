<?php
    require_once "dbconnect.php";
    function getAllProperties(){
        global $conn;
        $qry="SELECT * FROM property";
        $stm=$conn->prepare($qry);
        $res=$stm->execute();
        if($res){
            $res=$stm->get_result();
            if($res->num_rows>0){
                return $res;
            }
        }
        return false;
    }
    function getPropertyLocation($pid){
        global $conn;
        $qry="SELECT * FROM address WHERE pid=?";
        $stm=$conn->prepare($qry);
        $stm->bind_param("i",$pid);
        $res=$stm->execute();
        if($res){
            $res=$stm->get_result();
            if($res->num_rows>0){
                return $res->fetch_assoc();
            }
        }
        return false;
    }
    function getPropertyPrice($pid){
        global $conn;
        $qry="SELECT * FROM finance_details WHERE pid=?";
        $stm=$conn->prepare($qry);
        $stm->bind_param("i",$pid);
        $res=$stm->execute();
        if($res){
            $res=$stm->get_result();
            if($res->num_rows>0){
                return $res->fetch_assoc()['rent_amount'];
            }
        }
        return "NA";
    }
?>