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
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                    <i class="fas fa-user icon"></i> 
                    <input name="user_name" type="text" placeholder="Your name">
                    <i class="fas fa-envelope icon"></i> 
                    <input type="email" name="user_email" placeholder="Your e-mail">
                    <i class="fas fa-lock icon"></i> 
					
                    <input type="password" placeholder="Create password">
                    
					<i class="fa fa-calendar icon"></i>
					<input type="date" name="event_date" placeholder="Select date of your event">
					 <input type="textarea" name="event_desc" class="text" placeholder="Describe your event..">
                    <div class="action-btn">
                        <button name="Submit" class="btn primary">SUBMIT</button> 
                        
                       
                    </div>
                    <a href="select.php">PEOPLE JOINED</a>
                       
                </form>
            </div>
        </div>
		</div>
</body>
</html>
<?php
include 'dbcon.php';


if(isset($_POST['Submit'])){
        $user_name=mysqli_real_escape_string($con,$_POST['user_name']);
         $user_email=mysqli_real_escape_string($con,$_POST['user_email']); 
         $event_date=mysqli_real_escape_string($con,$_POST['event_date']);
          $event_desc=mysqli_real_escape_string($con,$_POST['event_desc']);


          $insert=mysqli_query($con,"INSERT INTO `eventdb`(`user_name`, `user_email`, `event_date`, `event_desc`) VALUES ('$user_name','$user_email','$event_date','$event_desc') ;");

         

         
          if($insert){
    ?>
    <script>
        alert('Inserted successfull');
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Not inserted');
    </script>
    <?php


}

    
}

?>
