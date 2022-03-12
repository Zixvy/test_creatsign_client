<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mata Kuliah
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$matkul['id'];?>">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nama_matakuliah" id="nama_matakuliah" placeholder="Masukkan nama mata kuliah" value="<?=$matkul['nama_matakuliah']?>">
                            <label for="nama_matakuliah">Nama</label>
                            <small class="form-text text-danger"><?=form_error('nama_matakuliah');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="id_dosen" id="id_dosen" aria-label="Pilih Dosen">
                                <?php foreach ($dosen as $dsn): ?>
                                    <?php if ($dsn['id'] == $matkul['id_dosen']): ?>
                                        <option value="<?=$dsn['id'];?>" selected><?=$dsn['nama_dosen'];?></option>
                                    <?php else: ?>
                                        <option value="<?=$dsn['id'];?>"><?=$dsn['nama_dosen'];?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                            <label for="kelas">Pilih Dosen</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" placeholder="ex. MK-IPS-1" value="<?=$matkul['kode_matakuliah']?>">
                            <label for="kode_matakuliah">Kode Mata Kuliah</label>
                            <small class="form-text text-danger"><?=form_error('kode_matakuliah');?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary ">Ubah Data</button>
                        </form>
                </div>
            </div>


        </div>
    </div>

</div>