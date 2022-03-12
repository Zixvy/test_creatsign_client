<div class="container">
    <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash');?>"></div>
    <?php if ($this->session->flashdata('flash')): ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?=$this->session->flashdata('flash');?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif;?>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mata Kuliah</h3>
            <?php if (empty($matkul)): ?>
                <div class="alert alert-danger" role="alert">
                Data Mata Kuliah Kosong
                </div>
            <?php endif;?>

            <?php if (isset($matkul)): ?>
                <table class="table table-responsive table-striped table-hover mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col">ID Dosen</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($matkul as $mkl): ?>
                        <tr>
                            <th scope="row"><?=$i;?></th>
                            <td><?=$mkl['nama_matakuliah'];?></td>
                            <td><?=$mkl['id_dosen'];?></td>
                            <td>
                                <span class="badge rounded-pill bg-primary">
                                    <a style="text-decoration:none;" href="<?=base_url();?>mata_kuliah/detail/<?=$mkl['kode_matakuliah'];?>" class="text-white">Detail</a>
                                </span>
                                <span class="badge rounded-pill bg-success">
                                    <a style="text-decoration:none;" href="<?=base_url();?>mata_kuliah/ubah/<?=$mkl['kode_matakuliah'];?>" class="text-white">Edit</a>
                                </span>
                                <span class="badge rounded-pill bg-danger">
                                    <a style="text-decoration:none;" href="<?=base_url();?>mata_kuliah/hapus/<?=$mkl['id'];?>" class="text-white tombol-hapus">Hapus</a>
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
                    Tambah Data Mata Kuliah
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nama_matakuliah" id="nama_matakuliah" placeholder="Masukkan nama mata kuliah" value="<?=set_value('nama_matakuliah')?>">
                            <label for="nama_matakuliah">Nama Mata Kuliah</label>
                            <small class="form-text text-danger"><?=form_error('nama_matakuliah');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="id_dosen" id="id_dosen" aria-label="Pilih Dosen">
                                <?php foreach ($dosen as $dsn): ?>
                                    <option value="<?=$dsn['id'];?>"><?=$dsn['nama_dosen'];?></option>
                                <?php endforeach;?>
                            </select>
                            <label for="id_dosen">Pilih Dosen</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" placeholder="ex. MK-IPS-1" value="<?=set_value('kode_matakuliah')?>">
                            <label for="kode_matakuliah">Kode Mata Kuliah</label>
                            <small class="form-text text-danger"><?=form_error('kode_matakuliah');?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>