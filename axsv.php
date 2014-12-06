<center><img src='image/3.gif' width=60px height=60px style='padding-top:15%; padding-center:15%;'></center>
<?php
require ('axsc.php');
$user=$_POST['user'];
$psw=$_POST['psw'];

$compAcx = new compAcx();
$compAcx->compAcxAct($user,$psw);
?>

<?php
require('template/footer.php');
?>