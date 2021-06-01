<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<?php echo form_open_multipart(); ?>

				<input type="hidden" name="id" value="<?php echo $data->id ?? null; ?>">
				<input type="hidden" name="provinsi_awal" value="<?php echo $data->provinsi ?? null; ?>">

				<div class="form-group">
					<label for="provinsi">Nama Provinsi</label>
					<?php echo form_error('provinsi'); ?>
					<input type="text" class="form-control" name="provinsi" id="provinsi" value="<?php echo $data->provinsi ?? set_value('provinsi'); ?>" placeholder="Nama Provinsi">
				</div>

				<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Simpan</button>
				<a class="btn btn-dark" href="<?= base_url('daerah'); ?>" role="button" onclick="return confirm('Are you sure?')">Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
