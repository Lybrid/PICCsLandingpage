<?php 
    if($_POST["message"]) {
        mail("sonia.m@piccsplustx.com", "Form to email message", $_POST["message"], "From:
        an@email.address");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>