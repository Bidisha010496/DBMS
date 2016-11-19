<?php
    session_start();
    function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }


	$email_login=$_POST["email1"];
	$password_login=$_POST["password1"];
    $user='root';
    $pass='';
    $dbname='projecthub';

	   if ($email_login && $password_login) {
            $conn = new mysqli('localhost',$user,$pass,$dbname) or die("Connection failed");

            $sql = "SELECT * FROM user WHERE '".$email_login."' = email";
            $result = $conn->query($sql);
            $row=mysqli_fetch_assoc($result);
            if($row)
            {
                $password=$row["password"];
                $_SESSION['id'] = $row["id"];
            }
            
            if($password==$password_login)
            {
                //echo "correct password";
                redirect('http://localhost/ProjectHub-master/landing.php');
                 
             

            }
            else{
                 echo "<h1>Incorrect Password</h1>"; 
                 redirect('index.html?id=1');
              
             }
           

        }
	$conn->close();

?>