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
    $results_per_page = 12;
    function getNumberOfPage(){
        global $conn;
        global $results_per_page;
        $qry="SELECT * FROM property";
        $stm=$conn->prepare($qry);
        $stm->execute();
        $res=$stm->get_result();
        return  ceil ($res->num_rows / $results_per_page);
    }
    function getPropertyPerPage($page){
        global $results_per_page;
        $page_first_result = ($page-1) * $results_per_page;
        global $conn;
        $qry="SELECT * FROM property LIMIT " . $page_first_result . ',' . $results_per_page;
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
    function getPropertyImg($pid){
        global $conn;
        $qry="SELECT imgpath FROM property_photo WHERE pid=?";
        $stm=$conn->prepare($qry);
        $stm->bind_param("i",$pid);
        $res=$stm->execute();
        if($res){
            $res=$stm->get_result();
            if($res->num_rows>0){
                return $res->fetch_all(MYSQLI_ASSOC);
            }
        }
        return false;
    }
?>