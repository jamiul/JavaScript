<?php include "header.php";?>
<section class="maincontent">
<p id="demo"></p>

<script>
var x = myFunction(4, 3);
document.getElementById("demo").innerHTML = x;

function myFunction(a, b) {
    return a * b;
}
</script>
   
</section>
<?php include"footer.php"?>