<?php

  $con = mysqli_connect("localhost","root","","my_db");
  //$db = mysqli_select_db("my_db", $con) or die(mysql_error());
  
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  

  
    if(mysqli_query($con,"INSERT INTO my_db (username,email,password) 
    VALUES ('$username','$email','$password')")){
    	echo "Record added";	
    } else{
		echo "Error ", $sql, "<br>", mysqli_error($con);
	}

?>





<html>
<head>
	<title>QUIZ</title>
	<script src="quiz.js"></script>
<link type='text/css' rel='stylesheet' href='main.css'/>
		
		
</head>
	<header class="t-header">
		<div class="t-container">
			<img class="t-logo" src="camera.jpg" alt="logo" width="60" height="60">
			<nav class="t-nav">
				<ul>Showbiz Quiz&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<li><a href="#">Home</a></li>
					<li><a href="option.html">Quiz</a></li>
					<li><a href="#">About</a></li>	
					<li><a href="am.html">Log Out</a></li><!-- # links to the same page -->
				</ul>
			</nav>
		</div>	
	</header>

	<div class="t-container ">
		<div class="t-content">
			<section>
				<img src="https://cdn.mos.cms.futurecdn.net/7d2485cc5f7e38a024fbcb48854d89b1.jpg" width="1200" height="400" id="social" onclick="change();">
			</section>
			<article class="t-article">
				<h1>Welcome To ShowBiz Quiz</h1>
				<p>
				</p>
				<h2>Lets Test Your Knowledge</h2>
				<p>
					
				</p>
			</article>
	    </div>
		<aside class="t-sidebar">
			<ul>
				Leaderboard
				<li>First</li>
				<li>Second</li>
				<li>Third</li>
			</ul>
		</aside>
	</div>

	<footer class="t-footer">
		&copy; copyright RAM 2018
	</footer>






</body>
</html>


