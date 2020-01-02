<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	<form action="6.php" method="post">
		
		<input type="tex" name="name">
		<input type="submit">
	
		
	</form>

	<?php  

/*  Step1: Make a form that submits one value to POST super global
		

 */
	echo $_POST['name'];
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>