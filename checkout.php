<?php
 print_r($_SESSION);
include_once("connection.php");
$datecheckedout=date_create()->format("Y-m-d H:i:s");
print_r($datecheckedout);

 
 
 
 /* session_start();
        $howmany=count($_SESSION["lunchbasket"]);
        echo("You have ". $howmany . " items in your basket")
        include_once("connection.php");
        foreach ($_SESSION["lunchbasket"] as $item){
            echo($item["foodid"]);
           
            $fid=$item["foodid"];
            $stmt=$conn->prepare("SELECT * FROM tblfood WHERE FoodID=:fid");
            $stmt->bindParam(":fid",$fid);
            $stmt->execute();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                print_r($row);
                echo("<br>");
            }
            
        } */
?>