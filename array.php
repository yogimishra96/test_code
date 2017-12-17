<!DOCTYPE html>
<html>
<head>
<title>Jquery</title>

<script src="https://code.jquery.com/jquery-3.1.1.js"></script>

<script> 
$(document).ready(function(){

$("button").click(function(){  
$("div").width(100);
$("div").css("background-color","green");

});
});     


</script>
<body>
<style> 
 p {
  background-color:red;
  color: white;
}
</style> 

<div>div content goes here ....... </div>
<button> button </button>
</body>
</html>
