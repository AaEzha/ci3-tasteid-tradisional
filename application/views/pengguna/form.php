<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<?php echo form_open_multipart(); ?>

				<input type="hidden" name="id" value="<?php echo $data->id ?? null; ?>">

				<div class="form-group">
					<label for="nama">Nama Pengguna</label>
					<?php echo form_error('nama'); ?>
					<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data->nama_user ?? set_value('nama'); ?>" placeholder="Nama Pengguna">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<?php echo form_error('email'); ?>
					<input type="email" class="form-control" name="email" id="email" value="<?php echo $data->email_user ?? set_value('email'); ?>" placeholder="Email">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<?php echo form_error('password'); ?>
					<input type="password" class="form-control" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
				</div>

				<div class="form-group">
					<label for="daerah">Daerah</label>
					<select class="form-control" name="daerah" id="daerah">
						<option value="">Pilih Daerah</option>
						<?php foreach($provs as $prov): ?>
						<option value="<?=$prov->provinsi;?>" <?php if(!is_null(@$data->provinsi)){ if($data->provinsi == $prov->provinsi){ echo "selected"; } }; ?>><?=$prov->provinsi;?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group">
					<label for="gambar">Gambar</label>
					<?php echo form_error('gambar'); ?>
					<input type="file" class="form-control" name="gambar" id="gambar" placeholder="gambar">
					<br>
					<?php if (isset($data->img_user)) { ?>
						<img src="<?= base_url('assets/uploads/' . $data->img_user); ?>" height="200">
					<?php } ?>
				</div>

				<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Simpan</button>
				<a class="btn btn-dark" href="<?= base_url('pengguna'); ?>" role="button" onclick="return confirm('Are you sure?')">Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
