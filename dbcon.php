<?php
$server="localhost";
$user="root";
$password="";
$db="event";
$con= mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
    <script>
    	alert('connection successfull');
    </script>
    <?php
}else{
    ?>
    <script>
    	alert('connection failure');
    </script>
    <?php


}
?>