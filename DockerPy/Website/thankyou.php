<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
    $mail_id=$_POST['mail_id'];
    $mob_no=$_POST['mob_no'];
    $college_company=$_POST['college_company'];
    $session_date=$_POST['session_date'];
    $summary=$_POST['summary'];


    require_once 'dbh.inc.php';
require_once 'thankyou.html';
    
    $sql = "INSERT INTO users (name,mail_id,mob_no,college_company,session_date,summary) VALUES ('$name','$mail_id','$mob_no','$college_company','$session_date','$summary'); ";
  	
  	mysqli_query($conn,$sql); 
 
 ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Thankyou</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="url-main">
		<h3>Your Attendance is Marked !</h3>
		<img src="mark.png" class="center"> 
            </div>
        </body>
        </html>

<?php   

   	mysqli_stmt_close($stmt);
   	mysqli_close($conn);
}    
else{
    header("Location: index.php");
    exit();
}
?>
