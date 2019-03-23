<?php
$conn = pg_connect("host=localhost dbname=bmtc user=postgres password=root");
if(!$conn)
{
	echo " no connection";
}
?>
