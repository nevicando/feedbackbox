<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<style>
body{
	font-family:Arial,Helvetica,sans-serif;
	font-size:small;
}


ul.feedbackboxlist{
	list-style-type: none;
	padding: 0;
	margin: 0;

}

ul.feedbackboxlist li{
	border-bottom: 1px solid #ddd;
	padding: 20px 0;
}


ul.feedbackboxlist li a.username{
	text-decoration: none;
	color: #003366;
	margin: 0 5px 0 10px;
	font-weight: normal;
	width: 110px;
	display: inline-block;
}

ul.feedbackboxlist li a.username:hover{
	text-decoration: underline;
}


</style>

</head>

<body>



<?

include "feedbackbox.php";
feedbackbox("artopweb", "10");

?>



</body>
</html>