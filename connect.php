<?
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Name=$_POST['Name'];
$Phone Number=$_POST['Phone Number'];
$IDNO=$_POST['IDNO'];
$Password=$_POST['password'];
//Database connection
$conn=new mysqli('localhost,''root','','OCHIENG');
// check connection
if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);}
else
    {
    $stmt= $conn->prepare("insert into registration(username,email,name,phone number,idno,password)values(?,?,?,?,?,?)");
    $stmt->bind_param("sisiii", $username,$email,$name,$phone number,$idno,$password);
    $stmt->excute();
    echo "registration successfully...";
    $stmt->close();
    $stmt->close();
}
?>
