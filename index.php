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

<?php

$dbname = "nahid";
$dbpass = 12341234;
    $name = $_REQUEST['name'];
    $pass = $_REQUEST['pass'];
  

    echo"$name";
    echo"<br>";
    echo "$pass";

    if($dbname == $name)
    {
        if(strlen($pass) >= 8)
        {
            if($dbpass == $pass){
                echo"<font color='green'> You are successfully login</font>";
            }

            else{
            echo"<font color='red'> Enter valid password</font>";
            }   
        }
        else{
            echo"<font color='red'>Enter at lest egiht number of password</font>";
        }
    }

   else{
    echo"<font color='red'> Enter valid user name</font>";
   }
    
?>