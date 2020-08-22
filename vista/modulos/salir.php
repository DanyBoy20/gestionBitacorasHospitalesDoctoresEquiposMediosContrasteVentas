<?php
session_start();
session_unset();
session_destroy();
header("Location:ingreso"); // PHP 7+
/* PHP 5.6
echo "<script>window.location.replace('https://localhost/medikrom')</script>";
*/
?>