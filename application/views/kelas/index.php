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
            <h3>Daftar Kelas</h3>
            <?php if (empty($kelas)): ?>
                <div class="alert alert-danger" role="alert">
                Data Kelas Kosong
                </div>
            <?php endif;?>

            <?php if (isset($kelas)): ?>
                <table class="table table-responsive table-striped table-hover mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($kelas as $kls): ?>
                        <tr>
                            <th scope="row"><?=$i;?></th>
                            <td><?=$kls['nama_kelas'];?></td>
                            <td>
                                <span class="badge rounded-pill bg-success">
                                    <a style="text-decoration:none;" href="<?=base_url();?>kelas/ubah/<?=$kls['id'];?>" class="text-white">Edit</a>
                                </span>
                                <span class="badge rounded-pill bg-danger">
                                    <a style="text-decoration:none;" href="<?=base_url();?>kelas/hapus/<?=$kls['id'];?>" class="text-white tombol-hapus">Hapus</a>
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
                    Tambah Data Kelas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Masukkan nama kelas" value="<?=set_value('nama_kelas')?>">
                            <label for="nama">Nama Kelas</label>
                            <small class="form-text text-danger"><?=form_error('nama_kelas');?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>