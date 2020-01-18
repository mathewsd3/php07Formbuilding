<?php
$forms = [
    ["action"=>"management", "method"=>"post"],
    ["type" => "text" , "name" => "lastName", "label" => "LastName"],
    ["type" => "text" , "name" => "firstName", "label" => "FirstName"],
    ["type" => "password" , "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox" , "name" => "leasure","value"=>"roller" , "label" => "Roller"],
    ["type" => "checkbox" , "name" => "leasure","value"=>"running" , "label" => "Running"],
    ["type" => "submit" , "name" => "input", "value" => "Sent"],
];
//echo '<pre>';
//print_r($forms);
//echo '</pre>';


$string='';
$i=0;

$string .= '<div class="main-div">';
$string .= '<div class="first-div" style="background-color:skyblue">';
$string .= '<h1>My Form</h1>';
$string .= '</div>';

$string .= '<div class="second-div" style="background-color:lightgrey">';
foreach($forms as $items)
{
	if($i==0)
	{
		$string.='<form ';
	}
	else
	{
		
	
		//Loop to print the labels
		foreach($items as $key=>$value)
		{				
			if($key=='label')
			{
					$string.=$value.'<br>';
			}
		}
		
		$string.='<input ';
	}
	
	

	
	//2nd loop to build the td tags for html table
	foreach($items as $key=>$value)
	{		
		$string.=$key.'="'.$value.'" ';
	}

	$string.='>';
	
	$i++;

}

$string .= '</div>';
$string .= '</div>';


?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Exercise - Form</title>

<style>
h1 {
    display: block;
    font-size: 2.0em;
    margin-block-start: 0em;
    margin-block-end: 0em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	height: 60px;
}

.main-div{
	border:2px solid black;
	width:80%;
	margin:auto;
}

.first-div{
	color:white;
}

.second-div{
	color:brown;
	padding:20px;
}

.second-div input[type="text"], input[type="password"], input[type="submit"]{
	width:100%;
	height:30px;
}

.second-div input[type="checkbox"]{
	display:block;
	margin:auto;
}

</style>

</head>

<body>

<?php

echo $string;

?>

</body>

</html>