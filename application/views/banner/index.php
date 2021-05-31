<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<a class="btn btn-primary mb-3" href="<?=base_url('banner/tambah');?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Banner</a>
				<table class="table table-bordered table-striped" id="tabel1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Banner</th>
							<th>Gambar</th>
							<th>Detail</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($data as $d): ?>
						<tr>
							<td scope="row"><?=$no++;?></td>
							<td><?=$d->nama;?></td>
							<td><img src="<?=base_url('assets/uploads/'.$d->gambar);?>" height="100" /></td>
							<td><a href="<?=$d->url;?>" target="_blank"><?=$d->url;?></a></td>
							<td>
								<a class="btn btn-primary btn-sm" href="<?=base_url('banner/edit/'. $d->id);?>" role="button"><i class="fas fa-edit"></i></a>
								<a class="btn btn-danger btn-sm" href="<?=base_url('banner/hapus/'. $d->id);?>" role="button" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
