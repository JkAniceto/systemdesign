<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>view</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>
<body>

<div class="container">
		<form method="post"><button name="back">Back</button></form>
		<div class="box">

			<table class="table table-striped" border="1" cellpadding="5">
			    <tr>
			     <th>Customer Name</th>
           <th>Feedback</th>
			    </tr>
			  	<?php
					include_once('connection.php');
					$sql = mysqli_query($conn,"SELECT user_tb.name,feedback_tb.feedback FROM feedback_tb, user_tb WHERE feedback_tb.userlinkid = user_tb.userLinkId");
					if (mysqli_num_rows($sql))
  			  	    while($rows = mysqli_fetch_assoc($sql)){
			  	 ?>
			    <tr>
              <td><?php echo $rows['name']; ?></td>
			        <td><?php echo $rows['feedback']; ?></td>
			    </tr>
			    <?php } ?>
			</table>

		</div>
	</div>
</body>
</html>

<?php

	if(isset($_POST['back'])){
        header("location: dashboard1.php");
    }
?>
