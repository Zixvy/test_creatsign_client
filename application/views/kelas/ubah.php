<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kelas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$kelas['id'];?>">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Masukkan nama kelas" value="<?=$kelas['nama_kelas']?>">
                            <label for="nama">Nama Kelas</label>
                            <small class="form-text text-danger"><?=form_error('nama_kelas');?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary ">Ubah Data</button>
                        </form>
                </div>
            </div>


        </div>
    </div>

</div>