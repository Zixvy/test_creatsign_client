
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
            <h3>Daftar Nilai Mahasiswa</h3>
            <?php if (empty($nilai)): ?>
                <div class="alert alert-danger" role="alert">
                Data Nilai Mahasiswa Kosong
                </div>
            <?php endif;?>

            <?php if (isset($nilai)): ?>
                <table class="table table-responsive table-striped table-hover mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($nilai as $nl): ?>
                        <tr>
                            <th scope="row"><?=$i;?></th>
                            <td><?=$nl['nama_mahasiswa'];?></td>
                            <td><?=$nl['kelas'];?></td>
                            <td><?=$nl['nilai'];?></td>
                            <td>
                                <span class="badge rounded-pill bg-primary">
                                    <a style="text-decoration:none;" href="<?=base_url();?>nilai/detail/<?=$nl['id'];?>" class="text-white">Detail</a>
                                </span>
                                <span class="badge rounded-pill bg-success">
                                    <a style="text-decoration:none;" href="<?=base_url();?>nilai/ubah/<?=$nl['id'];?>" class="text-white">Edit</a>
                                </span>
                                <span class="badge rounded-pill bg-danger">
                                    <a style="text-decoration:none;" href="<?=base_url();?>nilai/hapus/<?=$nl['id'];?>" class="text-white tombol-hapus">Hapus</a>
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
                    Tambah Data Nilai
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="nama_mahasiswa" id="nama_mahasiswa" aria-label="Pilih Mahasiswa">
                                <?php foreach ($mahasiswa as $mhs): ?>
                                    <option value="<?=$mhs['id'];?>"><?=$mhs['nama'];?></option>
                                <?php endforeach;?>
                            </select>
                            <label for="mahasiswa">Pilih Mahasiswa</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="kelas" id="kelas" aria-label="Pilih Kelas">
                                <?php foreach ($kelas as $kls): ?>
                                    <option value="<?=$kls['id'];?>"><?=$kls['nama_kelas'];?></option>
                                <?php endforeach;?>
                            </select>
                            <label for="mahasiswa">Pilih Kelas</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="nama_matakuliah" id="nama_matakuliah" aria-label="Pilih Mata Kuliah">
                                <?php foreach ($matkul as $mkl): ?>
                                    <option value="<?=$mkl['kode_matakuliah'];?>"><?=$mkl['nama_matakuliah'] . ' (' . $mkl['kode_matakuliah'] . ')';?></option>
                                <?php endforeach;?>
                            </select>
                            <label for="mahasiswa">Pilih Mata Kuliah</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Masukkan nilai" value="<?=set_value('nilai')?>">
                            <label for="nilai">Nilai</label>
                            <small class="form-text text-danger"><?=form_error('nilai');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="nama_dosen" id="nama_dosen" aria-label="Pilih Dosen">
                                <?php foreach ($dosen as $dsn): ?>
                                    <option value="<?=$dsn['id'];?>"><?=$dsn['nama_dosen'];?></option>
                                <?php endforeach;?>
                            </select>
                            <label for="dosen">Pilih Dosen</label>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>