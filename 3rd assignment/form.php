<?php
if(isset($_POST['submit'])){
$name = "Name: ".$_POST['name']."\n";
$address = "Address: ".$_POST['address']."\n";
$phone = "Phone Number: ".$_POST['phone']."\n";
$gender = "Gender: ".$_POST['gender']."\n";
$faculty = "Faculty: ".$_POST['faculty']."\n";
$class = "Class of: ".$_POST['class']."\n";
$reason = "Reason to join Lensa UAD: ".$_POST['reason']."\n";
$file=fopen("form.txt", "a+");
fwrite($file, $name);
fwrite($file, $address);
fwrite($file, $phone);
fwrite($file, $gender);
fwrite($file, $faculty);
fwrite($file, $class);
fwrite($file, $reason);
fclose($file);
}
?>