<?php
require($_SERVER['DOCUMENT_ROOT']."/Hernya/model/constants.php");

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
@mysqli_query ($con, 'set character_set_results = "utf8"');

?>
