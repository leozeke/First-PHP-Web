
	<center>
		<h1>Control de usuarios</h1>
	</center>
	<!-- <?= get_some_text(); ?>-->

	<div class="col-md-8 col-md-offset-2">
		<h3>Lista de usuarios registrados</h3>
	</div>

 	<ul class="list-group">
		<?php foreach ($query->result() as $row): ?>
			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<li class="list-group-item" >

						<div class="row">
							
							<div class="col-md-1">
								<?= $row->Name ?>	
							</div>
							
							<a href="<?= base_url() ?>index.php/userlist/detail/<?= $row->ID ?>" class="btn btn-info btn-md col-md-2 col-md-offset-8">
								Deatil
							</a>	

						</div>
							
					</li>

				</div>	
			</div>
		<?php endforeach; ?>
	</ul>
