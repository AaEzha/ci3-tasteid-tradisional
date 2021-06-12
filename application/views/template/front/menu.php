<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<a class="navbar-brand" href="#"><img src="<?= base_url('assets/logo.png'); ?>" width="90" height="90" alt="Malas Ngoding"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">

			<li class="nav-item">
				<a class="nav-link text-danger" href="<?=base_url();?>">BERANDA <span class="sr-only"></span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-danger" href="<?=base_url('recipes');?>">RESEP</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KATEGORI</a>
				<div class="dropdown-menu text-danger" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-danger" href="#">MAKANAN</a>
					<a class="dropdown-item text-danger" href="#">MINUMAN</a>
					<a class="dropdown-item text-danger" href="#">PROVINSI</a>
					<a class="dropdown-item text-danger" href="#">KOTA</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Divider</a>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link text-danger" href="<?=base_url('articles');?>">ARTIKEL</a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-danger" href="<?=base_url('rank');?>">PERINGKAT PENGGUNA</a>
			</li>
		</ul>
		<ul class="navbar-nav navbar-right">
			<li class="nav-item profile">
				<span style="color:#c42f2f;">username</span>
				<img class="img-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzU0TzPs9_dXeFrcFPXeWl4Ue6u5dkfd-39sploKT915Ms5tg-pmiZlrkOi9ZFAU6xvK8&usqp=CAU" alt="">
			</li>
		</ul>

		<!--<a href="#" class="btn btn-outline-danger mr-3">MASUK</a> 
                    <a href="#" class="btn btn-outline-danger">DAFTAR</a> -->
	</div>
</nav>
