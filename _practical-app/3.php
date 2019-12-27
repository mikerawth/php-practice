<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

$number = 35;

 if ($number > 20){
	echo "somehthing";
 } elseif($number < 5){
	echo "something else";
 } else {
	 echo "I love php";
 }

 echo "<br>";

 for ($counter = 0; $counter < 10; $counter++) {
	 echo $counter . "<br>";
 }


 switch($number) {
	 case 10:
		echo "it's 10";
	 break;
	 case 15:
		echo "it's 15";
	 break;
	 case 24:
		echo "it's 24";
	 break;
	 case 35:
		echo "it's 35";
	 break;
	 default:
		 echo "we couldn't find number";
	break;
 }
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>