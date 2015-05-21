<style>
	
	.col-md-4 {
	color: red;
	}
	
	.col-md-2 {
	color: blue;
	}
	
	.col-md-3 {
	color: red;
	}
	
	."col-xs-4 col-sm-6"{
	color: blue;
	}
</style>




	
	<div class="container">
	
	
	<?php	
		echo $title."<br><br>";
		
		echo '<div class="row">';
		foreach ($projecten as $project) {
			//echo "PROJECT: ";
			
			
			
			echo '<div class="col-md-4">';
			echo '<div class="row">';
			foreach ($project as $key => $line) {
				echo '<div class="col-xs-8 col-sm-6">';
				echo $key." - ";
				echo '</div>';
				
				echo '<div class="col-xs-4 col-sm-6">';
				echo $line;
				echo '</div>';
				echo "<br>";
			}
			echo '</div>';
			echo '</div>';
			
			//echo '<div class="col-md-3">';
			/*foreach ($project as $key => $line) {
				echo $line; 	
				echo "<br>";
			}*/
			//echo '</div>';

			//echo "<br><br>";
		}
		echo '</div>';
	?>
	</div>
