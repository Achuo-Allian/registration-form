<?php
$servername="localhost";
$username="root";
$dbname="ACHUO";
//if(isset ($_POST["SUBMIT"])){


$sql=")
VALUES('$Username,'$Email','$name',$phonenumber', '$idno', '$Password',)";
if ($conn->query($sql)===TRUE){
    echo"Record created successfully";
    
}
else {
    echo"errror:" . $sql ."<br>".$conn->error;
}
$conn->close();

}