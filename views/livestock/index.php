<h1><?php echo $title; ?></h1>
<button id="addLivestock" class="btn btn-primary" data-toggle="modal" data-target="#addNewLivestockModal">Add New Livestock</button>
<div class="modal fade" id="addNewLivestockModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h4 class="modal-title">Add New Livestock</h4>
      </div>
      <div class="modal-body">
      <form>

      <div class="validation_messages"></div>

<!-- Text input-->
<div class="control-group">

<div class="control-group">
  <label class="control-label" for="farmer_id">Select Farmer</label>
  <div class="controls">
    <select id="livestockFarmer" name="farmer_id" class="input-xlarge">
      <?php
      foreach ($farmers as $farmer) {
          echo '<option value="' .$farmer['id']. '">' .$farmer['name'] . '</option>';
      }
      ?>
    </select>
  </div>
</div>

  <label class="control-label" for="cowname">Cow Name</label>
  <div class="controls">
    <input id="cowName" name="cowname" type="text" class="input-xlarge">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="admOutput">Average Daily Milk Output</label>
  <div class="controls">
    <input id="admOutput" name="admOutput" type="text" placeholder="20" class="input-xlarge">Litres
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="addLivestockSubmit" type="button" class="btn btn-primary" >Save changes</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
    	<td><button class="deleteLivestock btn btn-danger" livestockid="<?php echo $cow['id']; ?>">Delete</button></td>
    </tr>

<?php endforeach ?>
	</tbody>
</table>