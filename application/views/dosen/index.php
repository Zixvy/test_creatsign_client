<div class="container">
    <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash');?>"></div>
    <?php if ($this->session->flashdata('flash')): ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data dosen <strong>berhasil</strong> <?=$this->session->flashdata('flash');?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif;?>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Dosen</h3>
            <?php if (empty($dosen)): ?>
                <div class="alert alert-danger" role="alert">
                Data Dosen Kosong
                </div>
            <?php endif;?>

            <?php if (isset($dosen)): ?>
                <table class="table table-responsive table-striped table-hover mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($dosen as $dsn): ?>
                        <tr>
                            <th scope="row"><?=$i;?></th>
                            <td><?=$dsn['nama_dosen'];?></td>
                            <td><?=$dsn['nip'];?></td>
                            <td><?=$dsn['no_telp'];?></td>
                            <td>
                                <span class="badge rounded-pill bg-primary">
                                    <a style="text-decoration:none;" href="<?=base_url();?>dosen/detail/<?=$dsn['id'];?>" class="text-white">Detail</a>
                                </span>
                                <span class="badge rounded-pill bg-success">
                                    <a style="text-decoration:none;" href="<?=base_url();?>dosen/ubah/<?=$dsn['id'];?>" class="text-white">Edit</a>
                                </span>
                                <span class="badge rounded-pill bg-danger">
                                    <a style="text-decoration:none;" href="<?=base_url();?>dosen/hapus/<?=$dsn['id'];?>" class="text-white tombol-hapus">Hapus</a>
                                </span>
                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach;?>
                    </tbody>
                </table>

            <?php endif;?>

        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Tambah Data Dosen
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" placeholder="Masukkan nama dosen" value="<?=set_value('nama_dosen')?>">
                            <label for="nama">Nama Dosen</label>
                            <small class="form-text text-danger"><?=form_error('nama_dosen');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nip" id="nip" placeholder="085185831" value="<?=set_value('nip')?>">
                            <label for="nim">NIP</label>
                            <small class="form-text text-danger"><?=form_error('nip');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Jl. Ayat No.xx Rt xx/xx"><?=set_value('alamat');?></textarea>
                            <label for="nama">Alamat</label>
                            <small class="form-text text-danger"><?=form_error('alamat');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="085162746xxx" value="<?=set_value('no_telp')?>">
                            <label for="no_telp">No Telp</label>
                            <small class="form-text text-danger"><?=form_error('no_telp');?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>