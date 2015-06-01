<!-- TITLE -->


<style>
		.panel {
  background-color: red;
}
.panel-heading-other {
	margin: 15;
	padding: 25;
background-color: pink;
//opacity: 0.8;
color: black;
}

.pull-right {
	//background-color: blue;
	
}
.panel-default {
	//background-color: blue;
	
}

.container {
	background-color: #EEDDCC;
	
}
.list-group, .list-group-item {
	background-color: green;
	
}
</style>







 
 



<div class="container">
	<h1><?php echo $title; ?></h1>
	<p>Stel hier je eigen survey samen.</p> 
	<div id="dragtext" class="dragtext">
        <p>Whats up? lol</p>
    </div>
	<?php
	//json ophalen 
	//echo "<pre>";
	//print_r($surveys);
	//echo "</pre>";
	//$jsonArray = json_decode(file_get_contents(base_url('assets/json/my_array.json')));
	?>
	<div class="row">
		<div class="col-sm-12">
			<ul>
				<li id="draggable3" class="ui-state-highlight">Drag me down</li>
			</ul>
			
			<ul id="sortable3"></li>
				<li class="ui-state-default" id="2">Item 2</li>
				<li class="ui-state-default" id="3">Item 3</li>
				<li class="ui-state-default" id="4">Item 4</li>
				<li class="ui-state-default" id="5">Item 5</li>
			
				<?php
					$id = 5;
					foreach ($surveys as $key => $survey) {
						$id++;
						//print_r($survey);
						?>
						<li class="ui-state-default"  id="<?php echo $id; ?>"><?php echo $survey["title"] ?> </li>
						
					<div class="input-group">
						<span class="input-group-addon">$</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
						<span class="input-group-addon">.00</span>
					</div>
					<br>
					
					<li class="ui-state-default"  id="<?php $id++; echo $id;?>">					
						<div class="input-group">
						<span class="input-group-addon">$</span>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
						<span class="input-group-addon">.00</span>
					</div>
					</li>
					
						<button type="button" class="btn-group btn-group-justified"><?php echo $survey["title"] ?></button>
						<div class="col-sm-10" style="background-color:lavender;">							
						</div>				
						<?php
						}
					
				?>
				</ul>
		</div>
	</div>
</div>							
<ul>
  <li id="draggable" class="ui-state-highlight">Drag me down</li>
</ul>
<ul id="sortable">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
</ul>
<ul>
  <li id="draggable2" class="ui-state-highlight">Drag me down</li>
</ul>
 
<ul id="sortable2">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>
  <li class="ui-state-default">Item 5</li>
</ul>