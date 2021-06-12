<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<?php echo form_open_multipart();?>

					<input type="hidden" name="id" value="<?php echo $data->id ?? null; ?>">
					
					<div class="form-group">
						<label for="judul">Judul Artikel</label>
						<?php echo form_error('judul'); ?>
						<input type="text" class="form-control" name="judul" id="judul" value="<?php echo $data->judul ?? set_value('judul'); ?>" placeholder="Judul Artikel">
					</div>

					<div class="form-group">
						<label for="isi">Konten Artikel</label>
						<?php echo form_error('isi'); ?>
						<textarea id="summernote" name="isi" placeholder="Konten Artikel"><?php echo $data->isi ?? set_value('isi'); ?></textarea>
						<!-- <input type="isi" class="form-control" name="isi" id="isi" value="<?php echo $data->isi ?? set_value('isi'); ?>" placeholder="Konten Artikel"> -->
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
					<a class="btn btn-dark" href="<?=base_url('artikel');?>" role="button" onclick="return confirm('Are you sure?')">Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
