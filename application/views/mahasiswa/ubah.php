<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$mahasiswa['id'];?>">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama mahasiswa" value="<?=$mahasiswa['nama']?>">
                            <label for="nama">Nama</label>
                            <small class="form-text text-danger"><?=form_error('nama');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="085185831" value="<?=$mahasiswa['nim']?>">
                            <label for="nim">NIM</label>
                            <small class="form-text text-danger"><?=form_error('nim');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Jl. Ayat No.xx Rt xx/xx"><?=$mahasiswa['alamat'];?></textarea>
                            <label for="nama">Alamat</label>
                            <small class="form-text text-danger"><?=form_error('alamat');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="085162746xxx" value="<?=$mahasiswa['no_telp']?>">
                            <label for="no_telp">No Telp</label>
                            <small class="form-text text-danger"><?=form_error('no_telp');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="id_kelas" id="id_kelas" aria-label="Pilih Kelas">
                                <?php foreach ($kelas as $kls): ?>
                                    <?php if ($kls['id'] == $mahasiswa['id_kelas']): ?>
                                        <option value="<?=$kls['id'];?>" selected><?=$kls['nama_kelas'];?></option>
                                    <?php else: ?>
                                        <option value="<?=$kls['id'];?>"><?=$kls['nama_kelas'];?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                            <label for="kelas">Pilih Kelas</label>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary ">Ubah Data</button>
                        </form>
                </div>
            </div>


        </div>
    </div>

</div>