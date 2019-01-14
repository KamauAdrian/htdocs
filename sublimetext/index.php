<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="jquery-1.12.0.min.js"></script>
</head>
<body>
<a href="#">Home</a>
<a href="#">About us</a>
<a href="#">blog</a>
$(document).ready(function(){
	$("button").click(function(){
	$("p").hide();
});
});


</body>

</html>