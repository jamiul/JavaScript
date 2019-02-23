<?php include "header.php";?>
<section class="maincontent">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php 
    function trail(){
		echo "You are crossed the border (-_-) !";
	}
?>

<script>
$(document).ready(function(){
    $("#animation").click(function(){
        $(".inside").animate({
			left:'700px',
			opacity:'0.5',
			height:'250px',
			width:'250px',
		},5000, function(){
			alert("<?php echo trail(); ?>");
		});
    });
	$("#stop").click(function(){
		$(".inside").stop();
	});

});
</script>
<button id="animation">Animation Start</button>
<button id="stop">Animation Stop</button>


<div class="para">
	<div class="inside">
	</div>
</div>
</section>
<?php include"footer.php"?>