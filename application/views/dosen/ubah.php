<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Dosen
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$dosen['id'];?>">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" placeholder="Masukkan nama dosen" value="<?=$dosen['nama_dosen']?>">
                            <label for="nama">Nama</label>
                            <small class="form-text text-danger"><?=form_error('nama_dosen');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nip" id="nip" placeholder="085185831" value="<?=$dosen['nip']?>">
                            <label for="nip">NIP</label>
                            <small class="form-text text-danger"><?=form_error('nip');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Jl. Ayat No.xx Rt xx/xx"><?=$dosen['alamat'];?></textarea>
                            <label for="nama">Alamat</label>
                            <small class="form-text text-danger"><?=form_error('alamat');?></small>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="085162746xxx" value="<?=$dosen['no_telp']?>">
                            <label for="no_telp">No Telp</label>
                            <small class="form-text text-danger"><?=form_error('no_telp');?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary ">Ubah Data</button>
                        </form>
                </div>
            </div>


        </div>
    </div>

</div>