 <?php
 session_start();
if (isset($_POST['submit'])){
$username = $_POST['username'];
//$mail= filter_input(INPUT_POST,'mail');
$password = $_POST['password'];
echo $username;
echo $password;

if(!empty($username)){
    if(!empty($password)){
    $host="localhost:3306";
    $dbusername="root";
    $dbpassword="";
    $dbname="login";
    
    $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $sql="INSERT INTO loginform (username,password)values('$username','$password')";
        if(mysqli_query($conn,$sql)){
            echo "New record is insetesr ";
        }
    }
    }
    else{
        echo "password should not empty " ;
        die() ;
       }
   } 
}
else{
 echo "Username should not empty " ;
 die() ;
}

?>