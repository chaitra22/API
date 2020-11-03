<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="inner">
            <div class="photo">
                <img src="http://localhost/CRUD/images/slider-4.png">
            </div>
			
            <div class="user-form">
                <h1>Welcome!</h1>
                <form action="" method="POST">
                    <?php
include 'dbcon.php';
$id=$_GET['id'];
$selectquery="select * from eventdb where id=$id";

$query=mysqli_query($con,$selectquery);

$result= mysqli_fetch_assoc($query);

if(isset($_POST['Submit'])){
      $id=$_GET['id'];

        $user_name=mysqli_real_escape_string($con,$_POST['user_name']);
         $user_email=mysqli_real_escape_string($con,$_POST['user_email']); 
         $event_date=mysqli_real_escape_string($con,$_POST['event_date']);
          $event_desc=mysqli_real_escape_string($con,$_POST['event_desc']);


          $update=mysqli_query($con,"UPDATE `eventdb` SET `id`='$id',`user_name`='$user_name',`user_email`='$user_email',`event_date`='$event_date',`event_desc`='$event_desc' WHERE id=$id");

         

         
          if($update){
    ?>
    <script>
        alert('update successfull');
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Not updated');
    </script>
    <?php


}

    
}

?>
                    <i class="fas fa-user icon"></i> 
                    <input name="user_name" type="text" value="<?php echo $result['user_name']; ?>"  placeholder="Your name" required>
                    <i class="fas fa-envelope icon"></i> 
                    <input type="email" name="user_email" value="<?php echo $result['user_email']; ?>" placeholder="Your e-mail" required>
                    <i class="fas fa-lock icon"></i> 
					
                    <input type="password" placeholder="Create password">
                    
					<i class="fa fa-calendar icon"></i>
					<input type="date" name="event_date" value="<?php echo $result['event_date']; ?>" placeholder="Select date of your event" required>
					 <input type="textarea" name="event_desc" value="<?php echo $result['event_desc']; ?>" class="text" placeholder="Describe your event.."  required>
                    <div class="action-btn">
                        <button  name="Submit" class="btn primary">EDIT</button> 
                        
                       
                    </div>
                    <a href="select.php">PEOPLE JOINED</a>
                       
                </form>
            </div>
        </div>
		</div>
</body>
</html>

