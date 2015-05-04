<?php
header("Content-type: text/css");
$display = "none";
if (isset($_COOKIE["byteme"])) 
	{
		$display = "block";
}

?>

.user {
	display: $display;
}
