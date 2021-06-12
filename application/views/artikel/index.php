<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<a class="btn btn-primary mb-3" href="<?=base_url('artikel/tambah');?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Artikel</a>
				<table class="table table-bordered table-striped" id="tabel1">
					<thead>
						<tr>
							<th>No</th>
							<th>Penulis</th>
							<th>Judul</th>
							<th>Tanggal</th>
							<th>Status</th>
							<th>Publisher</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($data as $d): ?>
						<tr>
							<td scope="row"><?=$no++;?></td>
							<td><?=$d->penerbit;?></td>
							<td><?=$d->judul;?></td>
							<td><?=$d->tanggal;?></td>
							<td><?=($d->status == 0) ? "Pending" : "Published";?> <a title="Ubah Status" href="<?=base_url('artikel/status/'.$d->id);?>"><i class="fa fa-recycle text-success" aria-hidden="true"></i></a></td>
							<td><?=($d->is_admin == 0) ? "Member" : "Admin";?></td>
							<td>
								<a class="btn btn-primary btn-sm" href="<?=base_url('artikel/edit/'. $d->id);?>" role="button"><i class="fas fa-edit"></i></a>
								<a class="btn btn-danger btn-sm" href="<?=base_url('artikel/hapus/'. $d->id);?>" role="button" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
