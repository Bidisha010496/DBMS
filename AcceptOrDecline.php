<?php
    session_start();
    function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }

    $user='root';
    $pass='';
    $dbname='projecthub';
    $conn = new mysqli('localhost',$user,$pass,$dbname) or die("Connection failed");
    $del=$_GET["delId"];
    $pro=$_GET["proId"];
     if (isset($_POST['Accept'])) {

        $sql = "Delete from request where request_id='".$del."'";
            $result = $conn->query($sql);
        $sql = "Update project set no_of_people=no_of_people+1 where Project_id='".$pro."'";
            $result = $conn->query($sql);
            
    }
    elseif (isset($_POST['Decline'])) {
        $sql = "Delete from request where request_id='".$del."'";
            $result = $conn->query($sql);
       
    }
    redirect('http://localhost/ProjectHub-Master/requests.php');

?>