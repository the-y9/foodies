<?php
$backpic = "foodbg.jpg";
?>
<html lang="en">

<style type="text/css">
body{
	background-image: url('<?php echo $backpic;?>');
	background-repeat: no-repeat;
	background-attachment: fixed;
}
</style>

<?php include_once("head.php");?>
<body>

<?php include_once("navbar.php");?>
<?php include_once("mask.php");?>
	<hr class="my-5">

<?php include_once("mainContent.php");?>
	<hr class="my-5">
<?php include_once("contact.php");?>
<?php include_once("footer.php");?>
<?php include_once("script.php");?>
</body>
</html>