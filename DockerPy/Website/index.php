<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="index-main">
        <form action="thankyou.php" method="post">
            <input required type="text" name="name" placeholder="Name of the Candidate">
            <input required type="text" name="mail_id" placeholder="Mail-ID">
            <input required type="text" name="mob_no" placeholder="Mobile No.">
            <input required type="text" name="college_company" placeholder="College/Company Name">
            <input required type="text" name="session_date" placeholder="session_date">
            <textarea required name="summary" rows="3" placeholder="Enter Summary..."></textarea>
            <input type="submit" name="submit" value="Submit !">
        </form>
    </div>
</body>
</html>
