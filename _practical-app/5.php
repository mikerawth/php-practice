<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it anything


	Step 3:  Use a pre-built Array function here and echo it

 */

 echo pow(5,2);
 echo "<br>";
 echo strlen("I love cookies!");
 echo "<br>";
 echo print_r(array(120,30,1,-4,5,1234));
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>