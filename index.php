<?php
session_start();
if(isset($_SESSION['isLoggedIn'])){
	if($_SESSION['isLoggedIn']==false){
		 header("location:login.php");
		//include 'login.php';
	}
}else{
	 header("location:login.php");
	//include 'login.php';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<li><a href="?p=condition">Condition</a></li>
		<li><a href="?p=variabel">Variabel &amp;
		Operator</a></li>
		<li><a href="?p=looping">Looping</a></li>
		<li><a href="?p=array">Array</a></li>
	</ul>
	<?php
		//if ($_GET['p']=="condition") {
		switch($_GET['p']) {
			case 'array':
				echo "<h1>Array</h1>";
				include 'array.php';
			break;

			case 'condition':
				echo "<h1>Condition</h1>";
				include 'condition.php';
			break;
		//}
		//else if ($_GET['p']=="variabel") {
			case 'variabel':	
				echo "<h1>Variabel</h1>";
				include 'variabel_operator.php';
			break;
		//}
		//else if ($_GET['p']=="looping") {
			case 'looping':
				echo "<h1>Looping</h1>";
				include 'looping.php';
			break;

		//}
		}
	?>
</body>
</html>