<?php

$NameServer = "localhost";
$UserName = "blokch_Admin_tmrin_landing";
$Password = "4Yko7_PORdPx";
$Database = "blokch_Message_tmrin";


$conn = mysqli_connect($NameServer , $UserName , $Password , $Database);

if ($conn) {
	$name = $_POST['name'];
	$emil = $_POST['email'];
	$textbody = $_POST['textm'];
$query = "INSERT INTO `send`(`name` , `emil` , `message`) VALUES('$name' , '$emil' , '$textbody')";

$result = mysqli_query($conn , $query);

if($result){
   $ture = "Your message has been send to support !";
   header("location: ../?message=Ture");
}else {
    $eror2 = "There is a problem sending the message <br> if this eror persists contact us";
}
}else {
    $eror2 = "There is a problem sending the message <br> if this eror persists contact us";
}
?>