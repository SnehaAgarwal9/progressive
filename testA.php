<html>
<head>
<script type="text/javascript" src="widget.js"></script>
</head>
<body>

<div id="widgetContainer"></div>


<?php
//File to be checked for the words
$str = file_get_contents('test.html');
$result = (substr_count(strip_tags($str),"apple"));

if ($result > 3)	
 {
	echo'The Keyword occurs on the page MORE than 3 times';
	echo '<script type="text/javascript">    show_image();      </script>';
 }
 else
 { 
	echo'The Keyword occours on the page LESS than 3 times';
 	echo '<script type="text/javascript">    show_image1();      </script>';
 }
 	
?>
    
</body>

</html>
