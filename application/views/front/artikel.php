<div class="main-con">
	<div class="main-artikel">
		<?php foreach($data as $d): ?>
		<div class="list-artikel">
			<h3><?=$d->judul;?></h3>
			<span>13 APRIL 2021/by : <a href=""><?=$d->penerbit;?></a></span>
			<div class="con-artikel">
				<img src="https://asset.kompas.com/crops/1BWHOrYAdSQePvLkouQ3S-hXAXE=/50x34:483x322/750x500/data/photo/2020/06/24/5ef2e96f255bc.jpg" alt="">
				<div class="tit">
					<p>
					<?=word_limiter($d->isi, 20);?>
					</p>
					<!-- <p>Lorem ipsum dolor sit amet consectetur,
						adipisicing elit. Ipsa dolores vero, nihil adipisci sed cum eum
						ipsam eaque tempora architecto velit, omnis nam sequi totam
						nostrum! Nostrum vitae recusandae illo?
					</p> -->
					<a href="<?=base_url('articles/read/' . $d->id);?>">Lihat selengkapnya</a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>

	</div>

	<div class="side-artikel">
		<div class="popular-post">
			<h4>Popular Post</h4>
			<div class="post-list">
				<img src="https://asset.kompas.com/crops/1BWHOrYAdSQePvLkouQ3S-hXAXE=/50x34:483x322/750x500/data/photo/2020/06/24/5ef2e96f255bc.jpg" alt="">
				<a href="">Lorem Ipsumm loreeem</a>
			</div>
			<div class="post-list">
				<img src="https://asset.kompas.com/crops/1BWHOrYAdSQePvLkouQ3S-hXAXE=/50x34:483x322/750x500/data/photo/2020/06/24/5ef2e96f255bc.jpg" alt="">
				<a href="">Lorem Ipsumm loreeem</a>
			</div>
			<div class="post-list">
				<img src="https://asset.kompas.com/crops/1BWHOrYAdSQePvLkouQ3S-hXAXE=/50x34:483x322/750x500/data/photo/2020/06/24/5ef2e96f255bc.jpg" alt="">
				<a href="">Lorem Ipsumm loreeem</a>
			</div>
			<div class="post-list">
				<img src="https://asset.kompas.com/crops/1BWHOrYAdSQePvLkouQ3S-hXAXE=/50x34:483x322/750x500/data/photo/2020/06/24/5ef2e96f255bc.jpg" alt="">
				<a href="">Lorem Ipsumm loreeem</a>
			</div>
		</div>
		<div class="recent-post">
			<h4>Recent Post</h4>
			<?php foreach($data as $d): ?>
			<a href=""><?=$d->judul;?></a>
			<?php endforeach; ?>
		</div>
	</div>
</div>
