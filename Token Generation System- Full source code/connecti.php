<html>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>     
            
<script>
function test(){
    $.ajax({url:"echo.php", success:function(result){
    $("div").text(result);}
})
} 
</script>

<button onclick="test()"> Click </button>
<div> </div>

</body>

</html>

