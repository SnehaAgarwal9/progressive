<html>
<head>

<script type="text/javascript">
function show_image()
{
	
	var img = document.createElement('img');
    img.src = "img/dog.jpg";
    document.getElementById('widgetContainer').appendChild(img);
  
}

function show_image1()
{
	var img = document.createElement('img');
    img.src = "img/kitten.jpg";
	document.getElementById('widgetContainer').appendChild(img);
}
</script>

</head>

<body>
<h1>My Web Page</h1>
<div id="widgetContainer"></div>


<?php
//File to be checked for the words
$str = file_get_contents('test.html');

 //connect to the database
$servername = "localhost";
$username = "root";
$password = "myrootpassword";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//get all keywords from column A
$sql = "SELECT * FROM sampledata";
$query =  $conn->query($sql);


$prevCount=0;
$result=0;
$A='';


if ($query->num_rows > 0) {
   //for each keyword in column A check for No. of occourances of the keyword on the page
    while($row = $query->fetch_assoc()) {
		$result = (substr_count(strip_tags($str),$row["A"]));
		if($prevCount<$result)
		{
			$prevCount=$result;
			$A=$row["A"];
		}
    }
} 

//display corresponding value of B of the keyword which occurred maximum number of times
$sql= "Select B from sampledata where A='".$A."'";
$query = $conn->query($sql);
if ($query->num_rows > 0) {
    // output data of each row
    while($row = $query->fetch_assoc()) {
        echo "key pair from column B : " . $row["B"]. "<br>";
	}
}
else {
    echo "No Keywords from Column A found in the file";
}


if ($prevCount > 3)
{
	echo'The Keyword occurs on the page MORE than 3 times';
	echo '<script type="text/javascript">    show_image();      </script>';
 }
 else
 { 
	echo'The Keyword occours on the page LESS than 3 times';
 	echo '<script type="text/javascript">    show_image1();      </script>';
 }
$conn->close();



?>
    
</body>

</html>
