hello


<!-- <section class="content-header">
  <h1>Users
    <small>
      Control Panel
    </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashborad"></i></a></li>
    <li class="active">Users</li>
  </ol>
  
</section>

<section class="content">

  <div class="box">
  	<div class="box-header" >
  		<h3 class="box-tittle">Add Users</h3>
  		<div class="pull-right">
  			<a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
  				<i class="fa fa-undo"></i>Back
  			</a>
  		</div>
  	</div>
  	<div class="box-body">
  		<div class="row">
  			<div class="col-md-4 col-md-offset-4">
				<?php //echo validation_errors(); ?>
  				<form action="" method="post">
  					<div class="form-group">
  						<label>Nama *</label>
  						<input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control">
  						<?=form_error('fullname')?>
  					</div>
  					<div class="form-group">
  						<label>Username *</label>
  						<input type="text" name="username" value="<?=set_value('username')?>" class="form-control">
  						<?=form_error('username')?>
  					</div>
  					<div class="form-group">
  						<label>Password *</label>
  						<input type="password" name="password" value="<?=set_value('password')?>" class="form-control">
  						<?=form_error('password')?>
  					</div>
  					<div class="form-group">
  						<label>Password Confirmation *</label>
  						<input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control">
  						<?=form_error('passconf')?>
  					</div>
  					<div class="form-group">
  						<label>Address</label>
  						<textarea name="alamat" class="form-control"><?=set_value('alamat')?></textarea>
  						<?=form_error('alamat')?>
  					</div>
  					<div class="form-group">
  						<label>Level *</label>
  						<select name="level" class="form-control">
  							<option value="">- Pilih -</option>
  							<option value="1" <?=set_value('level') == 1 ? 'selected' : null ?>>Admin</option>
  							<option value="2" <?=set_value('level') == 2 ? 'selected' : null ?>>Mahasiswa</option>
  						</select>
  						<?=form_error('level')?>
  					</div>
  					<div class="form-group">
  						<button type="submit" class="btn btn-success btn-flat">Save</button>
  						<button type="Reset" class="btn btn-flat">Reset</button>
  					</div>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>
  
</section> -->