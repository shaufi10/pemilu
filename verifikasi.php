<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'login1'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$ID = $_POST['username'];
$Password = $_POST['password'];
function SignIn() { session_start(); //starting the session for user profile page 
if(!empty($_POST['username'])) { 
	$query = mysql_query("SELECT * FROM userName where userName = '$_POST[username]' AND pass = '$_POST[password]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['username']) AND !empty($row['password'])) {
		$_SESSION['usermame'] = $row['password']; echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
		} else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } } } 
		if(isset($_POST['submit'])) { 
			SignIn();
 } 
 ?>
