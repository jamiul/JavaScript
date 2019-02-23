<?php include "header.php"; ?>
<section class="maincontent">
<p id="demo"></p>

<script>
var x = myFunction(77);
document.getElementById("demo").innerHTML = "The Temperature is "+ x +" Celsius";

function myFunction(fahrenheit) {
    return (5/9) * (fahrenheit-32);
}
</script>
   
</section>
<?php include"footer.php"?>