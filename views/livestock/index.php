<h1>Livestock</h1>
<a id="addLivestock" class="btn btn-primary">Add New Livestock</a>
<table class="table">
	<thead>
		<th>Farmer</th>
		<th>Cow Name</th>
		<th>Average Daily Milk Production</th>
		<th>Actions</th>
	</thead>
	<tbody>
<?php foreach ($livestock as $cow): ?>
    <tr>
    	<td><?php echo $cow['farmer'] ?></td>
    	<td><?php echo $cow['name'] ?></td>
    	<td><?php echo $cow['averagedailymilk'] ?></td>
    	<td><a class="btn btn-danger">Delete</a></td>
    </tr>

<?php endforeach ?>
	</tbody>
</table>