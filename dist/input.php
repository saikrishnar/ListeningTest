<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("localhost","root","asdf123");//database connection
mysql_select_db("listening");

//inserting data order
$order = "INSERT INTO test
			(equation)
			VALUES
			('$equation',
			)";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result){
	echo("<br>Input data is succeed");
} else{
	echo("<br>Input data is fail");
}
?>
