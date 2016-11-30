<?php
$NamaDepan=$_POST['NamaDepan'];
$NamaBelakang=$_POST['NamaBelakang'];
$Email=$_POST['Email'];
$Telepon=$_POST['Telepon'];
$Alamat=$_POST['Alamat'];
$KodePos=$_POST['KodePos'];
$Kecamatan=$_POST['Kecamatan'];
$Propinsi=$_POST['Propinsi'];
$KotaKab=$_POST['KotaKab'];
$Password=$_POST['Password'];
$Password2=$_POST['Password2'];
if ($Password2 != $Password)
    echo "Konfirmasi password salah";

$psswrd=password_hash('password', PASSWORD_BCRYPT, array('cost' => 12 ));


mysql_connect("localhost","root","");
mysql_select_db("jilbabafrasda");
$select="insert into datacustomer(NamaDepan, NamaBelakang, Email, Telepon, Alamat, KodePos, Kecamatan, Propinsi, KotaKab, Password, Password2) values ('".$NamaDepan."','".$NamaBelakang."','".$Email."', '".$Telepon."', '".$Alamat."', '".$KodePos."', '".$Kecamatan."', '".$Propinsi."', '".$KotaKab."', '".$psswrd."', '".$Password2."')";
$sql=mysql_query($select);

print '<script type="text/javascript">';
print 'alert("The data is inserted.")';
print '</script>';

mysql_close();
?> 