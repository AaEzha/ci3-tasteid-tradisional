<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<a class="btn btn-primary mb-3" href="<?=base_url('pengguna/tambah');?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Pengguna</a>
				<table class="table table-bordered table-striped" id="tabel1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Daerah</th>
							<th>Poin</th>
							<th>Posisi</th>
							<th>Gambar</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($data as $d): ?>
						<tr>
							<td scope="row"><?=$no++;?></td>
							<td><?=$d->nama_user;?></td>
							<td><?=$d->email_user;?></td>
							<td><?=$d->provinsi;?></td>
							<td><?=$d->poin;?></td>
							<td></td>
							<td><img src="<?=base_url('assets/uploads/'.$d->img_user);?>" height="100" /></td>
							<td>
								<?php if($d->hak_akses != 'owner'){ ?>
								<a class="btn btn-primary btn-sm" href="<?=base_url('pengguna/edit/'. $d->id_user);?>" role="button"><i class="fas fa-edit"></i></a>
								<a class="btn btn-danger btn-sm" href="<?=base_url('pengguna/hapus/'. $d->id_user);?>" role="button" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
								<?php } ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
