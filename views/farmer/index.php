<h1>Farmers</h1>
<a id="addFarmer" class="btn btn-primary">Add New Farmer</a>
<table class="table">
	<thead>
		<th>Name</th>
		<th>County</th>
		<th>Number of Livestock</th>
		<th>Livestock</th>
		<th>Actions</th>
	</thead>
	<tbody>
<?php foreach ($farmers_livestock as $farmer): ?>
    <tr>
    	<td><?php echo $farmer['name'] ?></td>
    	<td><?php echo $farmer['county'] ?></td>
    	<td><?php echo count($farmer['livestock']) ?></td>
    	<td>
    	    <table class="table">
    			<thead>
					<th>Cow Name</th>
					<th>Average Daily Milk</th>
				</thead>
				<tbody>
    		<?php foreach ($farmer['livestock'] as $livestock): ?>
    			<tr>
					<td><?php echo $livestock['cowname'] ?></td>
    				<td><?php echo $livestock['averagedailymilk'] ?></td>
    			</tr>
    		<?php endforeach ?>
    			</tbody>
    		</table>
    	</td>
    	<td><a class="btn btn-danger">Delete</a></td>
    </tr>

<?php endforeach ?>
	</tbody>
</table>