<h1><?php echo $title; ?></h1>
<?php
switch($title)
{
	case "Report of Top Ten Farmers by Average Daily Milk":
	?>
	<table class="table">
		<thead>
			<th>Farmer</th>
			<th>Total Average Daily Milk</th>
		</thead>
		<tbody>
	<?php foreach ($reportdata as $data): ?>
	    <tr>
	    	<td><?php echo $data['farmer'] ?></td>
	    	<td><?php echo $data['totaldailymilk'] ?>L</td>
	    </tr>
	<?php endforeach ?>
		</tbody>
	</table>
	<?php
	break;
	case "Report of Top Ten Farmers by Combined Weekly Milk":
	?>
	<table class="table">
		<thead>
			<th>Farmer</th>
			<th>Combined Weekly Milk</th>
		</thead>
		<tbody>
	<?php foreach ($reportdata as $data): ?>
	    <tr>
	    	<td><?php echo $data['farmer'] ?></td>
	    	<td><?php echo $data['combinedweeklymilk'] ?>L</td>
	    </tr>
	<?php endforeach ?>
		</tbody>
	</table>
	<?php
	break;
	case "Report of Top Five Cows with Highest Weekly Milk":
	?>
	<table class="table">
		<thead>
			<th>Cow Name</th>
			<th>Weekly Milk</th>
		</thead>
		<tbody>
	<?php foreach ($reportdata as $data): ?>
	    <tr>
	    	<td><?php echo $data['cowname'] ?></td>
	    	<td><?php echo $data['weeklymilk'] ?>L</td>
	    </tr>
	<?php endforeach ?>
		</tbody>
	</table>
	<?php
	break;
}
?>