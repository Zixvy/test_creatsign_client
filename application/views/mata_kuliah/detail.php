<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mata Kuliah
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?=$matkul['nama_matakuliah'];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$matkul['kode_matakuliah'];?></h6>
                    <p class="card-text"><?=$matkul['id_dosen'];?></p>
                    <a href="<?=base_url();?>mata_kuliah" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
