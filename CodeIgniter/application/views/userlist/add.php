
<?php echo form_open('/userlist/recive_data'); ?>

<div class="form-group row">
	<label class="control-label col-md-2 col-md-offset-2">Nombre</label>
	<div class="col-md-6">
		<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>"/>		
	</div>
	
</div>

<div class="form-group row">
	<label class="control-label col-md-2 col-md-offset-2">E-Mail</label>
	<div class="col-md-6">
		<input type="email" class="form-control" name="mail" value="<?php echo set_value('mail'); ?>"/>		
	</div>
	
</div>

<div class="form-group row">
	<label class="control-label col-md-2 col-md-offset-2">Fecha de Nacimiento</label>
	<div class="col-md-6">
		<input type="date" class="form-control" name="date" value="<?php echo set_value('date'); ?>"/>
	</div>
	
</div>

<div class="form-group row">
	<label class="control-label col-md-2 col-md-offset-2">Descripción</label>
	<div class="col-md-6">
		<input type="textarea" class="form-control" name="descritpion" value="<?php echo set_value('description'); ?>"/>
	</div>
	
</div>

<div class="form-group row"> 
	<div class="col-sm-offset-4 col-sm-6">
		<button type="submit" class="btn btn-default" value="Submit">
		Submit
		</button>
	</div>
</div>
</form>

<span><?php echo validation_errors(); ?></span>
