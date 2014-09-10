<?php

session_start();
if(!isset($_SESSION["userEmail"])){
	header("location:index.php");
}
?>

<?php include("header.php"); ?>

	<p>Hej</p>

	</div>
</body>
</html>