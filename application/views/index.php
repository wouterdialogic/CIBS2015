<!-- TITLE -->

<div class="container">
	<h1>My First Bootstrap Page - <?php echo $title; ?></h1>
	<p>This is some text.</p> 
	<div class="row">
		<div class="col-sm-12">
			Hier komen alle artikelen onder:
			<div class="row">
				<?php
					foreach ($artikelen as $artikel) {
						if ($artikel['artikel_actief'] == 1) {
						?>
						<div class="col-sm-4" style="background-color:lavender;">
							<?php
								
								echo "ARTIKEL:<br><br>";
								echo "<pre>";
								print_r($artikel);
								echo "</pre>";
								//foreach ($artikel as $key => $line) {							
								//echo $key.": - ";
								//echo $line."<br>";
								//}	
								
								?>
					</div>
					
					
					<?php
					}
					}
				?>
				</div>
			</div>
		</div>
	</div>							