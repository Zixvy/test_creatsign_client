<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Nilai Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$nilai['id'];?>">
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="nama_mahasiswa" id="nama_mahasiswa" aria-label="Pilih Mahasiswa">
                                <?php foreach ($mahasiswa as $mhs): ?>
                                    <?php if ($mhs['id'] == $nilai['nama_mahasiswa']): ?>
                                        <option value="<?=$mhs['id'];?>" selected><?=$mhs['nama'];?></option>
                                    <?php else: ?>
                                        <option value="<?=$mhs['id'];?>"><?=$mhs['nama'];?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                            <label for="mahasiswa">Pilih Mahasiswa</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="kelas" id="kelas" aria-label="Pilih Kelas">
                                <?php foreach ($kelas as $kls): ?>
                                    <?php if ($kls['id'] == $nilai['kelas']): ?>
                                        <option value="<?=$kls['id'];?>" selected><?=$kls['nama_kelas'];?></option>
                                    <?php else: ?>
                                        <option value="<?=$kls['id'];?>"><?=$kls['nama_kelas'];?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                            <label for="mahasiswa">Pilih Kelas</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="nama_matakuliah" id="nama_matakuliah" aria-label="Pilih Mata Kuliah">
                                <?php foreach ($matkul as $mkl): ?>
                                    <?php if ($mkl['id'] == $nilai['nama_matakuliah']): ?>
                                        <option value="<?=$mkl['id'];?>" selected><?=$mkl['nama_matakuliah'] . ' (' . $mkl['kode_matakuliah'] . ')';?></option>
                                    <?php else: ?>
                                        <option value="<?=$mkl['id'];?>"><?=$mkl['nama_matakuliah'] . ' (' . $mkl['kode_matakuliah'] . ')';?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                            <label for="mahasiswa">Pilih Mata Kuliah</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Masukkan nilai" value="<?=$nilai['nilai']?>">
                            <label for="nilai">Nilai</label>
                            <small class="form-text text-danger"><?=form_error('nilai');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="nama_dosen" id="nama_dosen" aria-label="Pilih Dosen">
                                <?php foreach ($dosen as $dsn): ?>
                                    <?php if ($dsn['id'] == $nilai['nama_dosen']): ?>
                                        <option value="<?=$dsn['id'];?>" selected><?=$dsn['nama_dosen'];?></option>
                                    <?php else: ?>
                                        <option value="<?=$dsn['id'];?>"><?=$dsn['nama_dosen'];?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                            <label for="dosen">Pilih Dosen</label>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary ">Ubah Data</button>
                        </form>
                </div>
            </div>


        </div>
    </div>

</div>