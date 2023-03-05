<?php  
$uno=40;
$dos=20;

function todo(){
if ($uno==$dos) {
 echo "ok";
 
} else{
echo "no";

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<button onclick="myFunction()">Try it</button>
<script type="text/javascript">
function myFunction() {
	document.write('<?php echo todo(); ?>');
}

</script>
	

</body>
</html>