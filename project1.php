
	<?php
	include('includes/header.php')
	?>

<form action="file1.php" method="post">
<img src="img/pic5.png" alt="pic" class="pic">

<div class="box1">
<form action="file.php" method="post">

	<h3 class="h3">Master</h3>
	<h5 class="h5">Health:</h5>
	<input type="number" name="health" min="1"max="10" class="box5">
	<h5 class="h5">Attack</h5>
	<input type="number" name="attack"min="6"max="10" class="box5">
	<h5 class="h5">Resistance:</h5>
	<input type="number" name="resistance"min="1"max="10" class="box5">
	<h5 class="h5">Fighters:</h5> 
	<input type="text" name="fighters">
	
	<input type="submit" name="submit" class="start">
</form>
</div>


<div class="pics">
<img src="img/pic6.png" alt="logo" class="logo">
</div>
<div class="ress">
<img src="img/logo.png" alt="logo" class="logo10">
<h5 class="h5">
A local fight club has hired you to provide statistics for their fight championships.
The Championships always follow the same rules:
A Master will fight against some other fighters with different characteristics.
The Master always lets the fighter attack first.
The Master attacks right after the fighter (if the Master still has some health points).
The fighters come to battle one by one, from the first to the last.
It's a 1 vs 1 fight, and if the first fighter loses, then the next one comes in, until the Master either loses or beats all the fighters.
The Master is declared winner when all fighters have no health remaining.
The Fighters are declared winners when the Masters health is grounded to zero.
The Master and the Fighters have 3 attributes, they are:
Health (from 1 to 20)
Attack (from 6 to 10)
Resistance (from 1 to 5)

</h5>

</div>

<?php
include('includes/footer.php')

?>
</html>