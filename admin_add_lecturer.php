<?php

session_start();

if(!isset($_SESSION['username']))
{
	header("location:login.php");

}

elseif($_SESSION['usertype']=='student')
{
	header("location:login.php");

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

</head>
<?php

include 'admin_css.php';



?>

<body>


<?php

	include 'admin_sidebar.php';




	?>


	<div class="content">
		

		<h1>Add Lecturer</h1>
	</div>

</body>
</html>