<h1><?php echo $title; ?></h1>
<button id="addFarmer" class="btn btn-primary" data-toggle="modal" data-target="#addNewFarmerModal">Add New Farmer</button>
<div class="modal fade" id="addNewFarmerModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h4 class="modal-title">Add New Farmer</h4>
      </div>
      <div class="modal-body">
      <form>

      <div class="validation_messages"></div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Farmer Name</label>
  <div class="controls">
    <input id="farmerName" name="name" type="text" placeholder="Joe Bloggs" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="county">County</label>
  <div class="controls">
    <input id="farmerCounty" name="county" type="text" placeholder="Devon" class="input-xlarge">
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="addFarmerSubmit" type="button" class="btn btn-primary" >Save changes</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
    	<td><button class="deleteFarmer btn btn-danger" farmerid="<?php echo $farmer['id']; ?>">Delete</button></td>
    </tr>

<?php endforeach ?>
	</tbody>
</table>