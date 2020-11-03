<?php
include 'dbcon.php';

$id=$_GET['id'];

$delete = mysqli_query($con,"DELETE FROM `eventdb` WHERE id = '$id' ");

if($delete){
    ?>
    <script>
        alert('deleted successfull');
    </script>
    <?php
    header('location:select.php');
}else{
    ?>
    <script>
        alert('Not deleted');
    </script>
    <?php


}

    


?>