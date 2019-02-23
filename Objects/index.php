<?php include "header.php";?>
<section class="maincontent">
<h1>JavaScripts Objects</h1>


<script>
var person = {
	firstName : 'Jamiul',
	lastName : 'Alam',
	age       : '30',
	PassYear  : '2018',
	eyeColor  : 'Brown',
	fullName  : function(){
		return this.firstName+" "+this.lastName;
	}
};

document.write(person.fullName()+" is "+person.age+" years old.</br> "
+person['lastName']+"'s Passing Year : "+person['PassYear']+"</br> Eye Color: "+person.eyeColor);
</script>
   
</section>
<?php include"footer.php"?>