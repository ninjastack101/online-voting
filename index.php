<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<p> This is the voting system in PHP and MYSQL.</p>
    <p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>
