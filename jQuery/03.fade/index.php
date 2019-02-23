<?php include "header.php";?>
<section class="maincontent">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#fadein").click(function(){
        $(".para").fadeIn(1000);
    });
	$("#fadeout").click(function(){
        $(".para").fadeOut(1000);
    });
	$("#fadeto").click(function(){
        $(".para").fadeTo(1000,0.4);
    });
	$("#fadetoggle").click(function(){
        $(".para").fadeToggle(1000);
    });
});
</script>
<button id="fadein">FadeIn</button>
<button id="fadeout">FadeOut</button>
<button id="fadeto">FadeTo</button>
<button id="fadetoggle">FadeToggle</button>
<div class="para">
<h2>What is jQuery?</h2>
<p>jQuery is a fast, small, and feature-rich JavaScript library. 
It makes things like HTML document traversal and manipulation, 
event handling, animation, and Ajax much simpler with an easy-to-use API 
that works across a multitude of browsers. With a combination of versatility and extensibility, 
jQuery has changed the way that millions of people write JavaScript.</p> 
</div>
</section>
<?php include"footer.php"?>