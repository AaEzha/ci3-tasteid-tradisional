<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<a class="btn btn-primary mb-3" href="<?=base_url('kota/tambah/'. $prov->id);?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Kota/Kabupaten</a>
				<a class="btn btn-default mb-3" href="<?=base_url('daerah');?>" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
				<table class="table table-bordered table-striped" id="tabel1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kota/Kabupaten</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($data as $d): ?>
						<tr>
							<td scope="row"><?=$no++;?></td>
							<td><?=$d->kab_kota;?></td>
							<td>
								<a class="btn btn-primary btn-sm" href="<?=base_url('kota/edit/'. $d->id);?>" role="button"><i class="fas fa-edit"></i></a>
								<a class="btn btn-danger btn-sm" href="<?=base_url('kota/hapus/'. $d->id);?>" role="button" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
