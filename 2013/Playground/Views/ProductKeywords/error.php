<div class="container">
	
	
	<pre> print_r($errors);</pre>	
	<h3>Unable to delete <?= $model['Keywords_id']?></h3>
	
	
	<?
	
		
		foreach ($errors as $key => $value) {
			
				echo($key);
				echo("value".$value);

			
		}
		
	
	?>

</div>


