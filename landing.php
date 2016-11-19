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
   // $topic = 'abc';
            $conn = new mysqli('localhost',$user,$pass,$dbname) or die("Connection failed");
            $sql = "SELECT * FROM project" ;
            $result = $conn->query($sql);
            $row=mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html  lang="en">
<head>
	<title>ProjectHub | Welcome</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="jquery/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<div class="header1">
	<div class="row">
		<div class="col-md-3" style="font-size: 25px;">ProjectHub</div>
		<div class="col-md-6"></div>
		<div class="col-md-2"><button id="add-project-click">Add Project</button></div>
		<div class="col-md-1"><a href="http://localhost/ProjectHub-master/index.php?id=0"><button style="color: white">Logout</button></a></div>

	</div>
</div>
<div class="row">
	<div class="col-md-2" id="sidebar">
		<div id="interest">
			<div class="row" id="wd" ><a href="http://localhost/ProjectHub-master/landing.php?id=1">Web designing</a></div>
			<div class="row" id="cc" ><a href="http://localhost/ProjectHub-master/landing.php?id=2">Cloud Computing</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=3">Big Data</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=4">Machine learning</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=5">Android</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=6">iOS Development</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=7">Matlab</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=8">Image Processing</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=9">Cryptography</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=10">Technical Papers</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=11">Aptitude</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=12">Java</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=13">C++</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=14">C</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=15">Python</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=16">PHP</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=17">JavaScript</a></div>
			<div class="row" id=""><a href="http://localhost/ProjectHub-master/landing.php?id=18">IOT</a></div>
		</div>
	</div>
	<div class="col-md-5" id="posts">
		<?php
		$txt=$_GET["id"];
		$sql = "SELECT * FROM project where category_id='".$txt."'" ;
        $result = $conn->query($sql);
      //  $row=mysqli_fetch_row($result);
		$index = 0;
		while($row=mysqli_fetch_assoc($result))	
	{
		$index = $index + 1;
		?>
	
	
		<a><div id="post1" >	
			<div class="row">
				<div class="col-md-9 protitle" id="pro-title">Project Title:<?php echo $row["project_title"];?></div>
				<div class="col-md-1" id="pro-status">Status:<?php echo $row["status"];?></div>
			</div><hr>
			<div class="row description" id="pro-desc">
				 <!--Description in 180 words. I think this much description will be enough to get an idea about the project. If you need then we can increase the length but the div height will increase. -->
				 <?php echo $row["description"];?>
			</div>
		</div></a>
		<?php
	}
	?>

	 <?php 
	/*$index = 0;
	foreach ($row as $key => $value) {
		$index = $index + 1;
		// var_dump($row['proj_title']);
		printf("<a href=''><div id='post_".$index."'>");
		printf("<div class='row'>");
				printf("<div class='col-md-10 protitle' id='pro-title'>".$row['proj_title']."</div>");
				printf("<div class='col-md-1' id='pro-status'>".$row['status']."</div>");
			printf("</div><hr>");
			printf("<div class='row description' id='pro-desc'>");
			printf ($row['description']);
			printf("</div>");
		printf("</div></a>");*/
		/*$txt=$_GET["id"];
		$sql = "SELECT * FROM project where Project_id='".$txt."'" ;
        $result = $conn->query($sql);
      //  $row=mysqli_fetch_row($result);
		$index = 0;

	while($row=mysqli_fetch_assoc($result))	
	{
		$index = $index + 1;
		// var_dump($row['proj_title']);

		echo  "<a href=''><div id='post_".$index."'>";
		echo "<div class='row'>";
		echo "<div class='col-md-10 protitle' id='pro-title'>".$row["Project_id"]."</div>";
				echo "<div class='col-md-1' id='pro-status'>".$row["status"]."</div>";
			echo "</div><hr>";
			echo "<div class='row description' id='pro-desc'>";
			echo $row["description"];
			echo "</div>";
		echo "</div></a>" ;

}*/


	 ?> 
	</div>

	<div class="col-md-5" id="full_details">
		<div id="add-project">
			<center><h2>Wow! Tell Us About Your Project</h2></center><br>
			<form action="http://localhost/ProjectHub-master/createPost.php" method="POST">
				<input type="text" name="project-title" placeholder="Project Title" required><br><Br>
				<input type="date" name="start-date" placeholder="When did you start?" required><br><Br>
				<!-- <input type="text" name="project-topic" placeholder="Project Topic" required><br><Br> -->
				<select name="project-topic">
    				<option value=1>Web designing</option>
    				<option value=2>Cloud Computing</option>
    				<option value=3>Big Data</option>
    				<option value=4>Machine Learning</option>
    				<option value=5>Android</option>
    				<option value=6>IOS Development</option>
    				<option value=7>Matlab</option>
    				<option value=8>Image Processing</option>
    				<option value=9>Cryptography</option>
    				<option value=10>Technical Papers</option>
    				<option value=11>Aptitude</option>
    				<option value=12>Java</option>
    				<option value=13>C++</option>
    				<option value=14>C</option>
    				<option value=15>Python</option>
    				<option value=16>PHP</option>
    				<option value=17>Javascript</option>
    				<option value=18>IOT</option>
  				</select><br><Br>

				<textarea name="project-description" placeholder="Project Description" required class="inputclass3"></textarea><br><Br>
				<div class="row">
					<div class="col-md-6">
						<input type="radio" name="project-status" value="running" class="radio-button"><span class="radio-field">Running</span> 
					</div>
					<div class="col-md-6">
						<input type="radio" name="project-status" value="done" class="radio-button"><span class="radio-field">Done</span><br><Br>
					</div>
				</div>
				<input type="submit" value="Inspire The World With This Project">

			</form>
		</div>
		<div id="project-full-descp">
			<div class="row">
				<div class="col-md-10 protitle" id="full-pro-title">Project Title</div>
				<div class="col-md-1" id="full-pro-status">Status</div>
			</div><hr>
			<div class="row description" id="full-pro-desc">Full Description here</div><hr>
			<div class="row buttons">
				<button>Join</button>
				<button>Request</button>
			</div>
		</div>

	</div>
</div>

</body>
<script type="text/javascript">
$(document).ready(function(){
    $("#add-project-click").click(function(){
        $("#add-project").toggle(1000);
        $("#project-full-descp").toggle(1000);

    });
    $("#post1").click(function(){
    	$("#add-project").toggle(1000);
        $("#project-full-descp").toggle(1000);
        document.getElementById('full-pro-title').innerHTML = document.getElementById('pro-title').innerHTML;
        document.getElementById('full-pro-status').innerHTML = document.getElementById('pro-status').innerHTML;
        document.getElementById('full-pro-desc').innerHTML = document.getElementById('pro-desc').innerHTML;
    });
});

</script>
</html>