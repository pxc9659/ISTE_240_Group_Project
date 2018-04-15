<?php
	$title='PALTS : man';
	$path='../../';
	$nav='';
	include($path.'assets/inc/head.php');
?>

<?php
		
//Vignesh Kumar
//ISTE-240
//PHP-Part 2- MySQL
		//establishing a connection with sql server by using the 240dbConn.php file.
		require("../240dbConn.php");
		
		
		
		
		
		$stmt=$conn->prepare("INSERT Comments (Name, Comment) VALUES (?,?)");
		
		$stmt->bind_param("ss", $_POST['Name'], $_POST['Comment'] );
		
		$stmt->execute();
		$stmt->close();
		
		
	?>
   <body>
	<main>
	<h2> About Us &amp; Contact</h2>
	<p>For this project is for the team project for ISTE-240. Our team-leader is <a href = "https://people.rit.edu/znl2181/ISTE240/">Lichvar, Zachary</a>. The teammate are 
	<a href = "https://people.rit.edu/pxc9659/ISTE240/">Chesarek, Peter</a>, 
	<a href="https://people.rit.edu/~xxl7750/ISTE240/index.html">XU LIU</a>

	<a href = "https://people.rit.edu/vk4534/ISTE240/">Kumar, Vignesh</a>, 
	<a href = " https://people.rit.edu/jnl9935/ISTE240/">Loomis, Jordan</a>
,   <a href = "https://people.rit.edu/jxs3969/ISTE240/">Stein, Justin</a>.</p>

	<h2> Feedback </h2>
	<form action="comments.php" method="post">
		<span>Name:</span><input type="text" name="Name"><br><br>
		<span>Comment:</span><input type="text" name="Comment"><br><br>
		<input type="submit">
	</form>
	
	<?php
	
	$sql = "SELECT name, comment from comments";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    $output = '<table border="1">';
	$output.='<tr><th>'.'Name'.'</th><th>'.'Comments'.'</th></tr>';
	while($row = $result->fetch_assoc()) {
    $output.='<tr>';   
		
	$output.='<td>'.$row["Name"].'</td>'.'<td>'.$row["Comment"].'</td>';
    }
	$output.='</tr>';
	} else {
    echo "0 results";
}

echo $output.'</table>';

$conn->close();
	
		
	?>
	
<?php
	include($path.'assets/inc/footer.php');
?>