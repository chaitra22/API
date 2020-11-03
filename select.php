<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
      
  
   

    	.table{
    		 margin: auto;
    		 color: #6C63FF
  width: 60%;
  border: 3px solid #6C63FF;
  padding: 10px;
  border-radius: 9px;
box-shadow: 10px 10px 68px -6px rgba(0,0,0,0.5);}

   #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:  #6C63FF;
  color: white;
}
    </style>
</head>
<body>

	<div class="main-div">
	<h1 style="text-align: center;
  	font-size:300%; color:#8e6fc3; ">List of people</h1>
	<div class="center-div">
		<div class="table">
			<table  id="customers">
				<thead>
					<th>id</th>
					<th>Customer Name</th>
					<th>Email</th>
					<th>Event date</th>
					<th >Event description</th>
					<th colspan="2">Operations</th>
				</thead>
				<tbody>
<?php
include 'dbcon.php';
$selectquery="select * from eventdb";
$query=mysqli_query($con,$selectquery);
while($result= mysqli_fetch_assoc($query)){

	?>
                   <tr>
					<td><?php echo $result['id']?></td>
					<td><?php echo $result['user_name']?></td>
					<td><?php echo $result['user_email']?></td>
					<td><?php echo $result['event_date']?></td>
					<td><?php echo $result['event_desc']?></td>
					
					<td><a href="edit.php?id=<?php echo $result['id'] ;?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
					<td><a href="delete.php?id=<?php echo $result['id'] ;?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                  </tr>
                  <?php
                  
}
?>
				</tbody>


			</table>
		</div>
	</div>
</div>
	</body>
	</html>