<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <img src="<?php echo base_url('assets/');?>logo.png">
							<div class="text-info"><?php echo $this->session->flashdata('msg'); ?></div>
                        </div>
                        <form class="user" method="POST" action="">
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama" name="nama_user" value="<?php echo set_value('nama_user'); ?>">
									<?php echo form_error('nama_user', '<div class="text-xs text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Email" name="email_user" value="<?php echo set_value('email_user'); ?>">
								<?php echo form_error('email_user', '<div class="text-xs text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_user">
									<?php echo form_error('password_user', '<div class="text-xs text-danger">', '</div>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="repeatpassword" nama ="repeatpassword" placeholder="Ulangi Password" name="password_konf">
									<?php echo form_error('password_konf', '<div class="text-xs text-danger">', '</div>'); ?>
                                </div>
                            </div>
							<div class="form-group">
								<select class="form-control" name="provinsi" id="provinsi" placeholder="Pilih Provinsi" style="border-radius: 25px">
									<option value="">Pilih Provinsi</option>
									<?php foreach($provs as $prov): ?>
									<option value="<?=$prov->provinsi;?>"><?=$prov->provinsi;?></option>
									<?php endforeach; ?>
								</select>
								<?php echo form_error('provinsi', '<div class="text-xs text-danger">', '</div>'); ?>
							</div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftarkan Akun
						</button>
                            
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?=base_url('auth');?>">Sudah Memiliki Akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
