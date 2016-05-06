
	<?php echo form_open('/userlist/edit_data'); ?>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<?php foreach ($query->result() as $row): ?>
				<?= $row->Name ?> <br/>
				<?= $row->Mail ?> <br/>
				<?= $row->Date ?> <br/>
				<?= $row->Description ?>

				<input type="hidden" name="id" value="<?= $row->ID ?>" />
				<input type="hidden" name="name" value="<?= $row->Name ?>" />
				<input type="hidden" name="mail" value="<?= $row->Mail ?>" />
				<input type="hidden" name="date" value="<?= $row->Date ?>" />
				<input type="hidden" name="description" value="<?= $row->Description ?>" />
			<?php endforeach; ?> 

		</div>
	</div>
	<div class="row">
			<div class="col-md-1 col-md-offset-4">
				<button type="submit" class="btn btn-primary" name="sbm" value="Edit">Edit</button>
			</div>
			<div class="col-md-1">
				<button type="submit" class="btn btn-danger" name="sbm" value="Delete">Delete</button>
			</div>
			<div class="col-md-1">
				<button type="submit" class="btn btn-success" name="sbm" value="Back">Back</button>
			</div>
	</div>
	
	<?php echo form_close(); ?>