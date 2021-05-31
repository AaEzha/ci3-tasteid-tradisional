<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<?php echo form_open_multipart();?>

					<input type="hidden" name="id" value="<?php echo $data->id ?? null; ?>">
					
					<div class="form-group">
						<label for="nama">Nama Banner</label>
						<?php echo form_error('nama'); ?>
						<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data->nama ?? set_value('nama'); ?>" placeholder="Nama Banner">
					</div>

					<div class="form-group">
						<label for="url">URL</label>
						<?php echo form_error('url'); ?>
						<input type="url" class="form-control" name="url" id="url" value="<?php echo $data->url ?? set_value('url'); ?>" placeholder="URL">
					</div>

					<div class="form-group">
						<label for="gambar">Gambar</label>
						<?php echo form_error('gambar'); ?>
						<input type="file" class="form-control" name="gambar" id="gambar" placeholder="gambar">
						<br>
						<?php if(isset($data->gambar)){ ?>
						<img src="<?=base_url('assets/uploads/'.$data->gambar);?>" height="200">
						<?php } ?>
					</div>

					<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Simpan</button>
					<a class="btn btn-dark" href="<?=base_url('banner');?>" role="button" onclick="return confirm('Are you sure?')">Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
