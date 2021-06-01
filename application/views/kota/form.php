<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<?php echo form_open_multipart(); ?>

				<input type="hidden" name="id" value="<?php echo $data->id ?? null; ?>">
				<input type="hidden" name="provinsi" value="<?php echo $prov->provinsi ?? null; ?>">

				<div class="form-group">
					<label for="kab_kota">Nama Kota/Kabupaten</label>
					<?php echo form_error('kab_kota'); ?>
					<input type="text" class="form-control" name="kab_kota" id="kab_kota" value="<?php echo $data->kab_kota ?? set_value('kab_kota'); ?>" placeholder="Nama  Kota/Kabupaten">
				</div>

				<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Simpan</button>
				<a class="btn btn-dark" href="<?= base_url('daerah'); ?>" role="button" onclick="return confirm('Are you sure?')">Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
