<?php
$conn = new mysqli("localhost","root","","portfolio_db");
if ($conn->connect_error) {
    die("Connection failed:  " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
    if($conn->query($sql)===TRUE) {
        echo"<script>alert('Message sent successfully!')</script>";
        }
        else{
            echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title> AMEERA AHMED| PORTFOLIO</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<header>
<h1>Ameera Ahmed<h1>
<p>BCA Student | Aspiring Web Developer</p>
</header>
<section>
<h2>About me</h2>
<p>
I am a passionate BCA student interestewd in web developement and learning full-stack technologies.
</p>
</section>
<section>
<h2> Skills</h2>
<ul>
<li>HTMl</li>
<li>CSS</li>
<li>Basic python</li>
<li> Database (My SQL)</li>
</ul>
</section>
<section>
<h2>Contact me</h2>
<form method="POST" action="">
<input type="text" name="name" placeholder="Your name" required>
<input type="email" name="email" placeholder="Your email" required>
<textarea name="message" placeholder="Your message" required></textarea>
<button type="submit">Send message</button>
</form>
</section>
</div>
</body>
</html>