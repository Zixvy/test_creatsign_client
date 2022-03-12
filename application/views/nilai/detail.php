<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Nilai
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?=$nilai['nama_mahasiswa'];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$nilai['nama_matakuliah'];?></h6>
                    <p class="card-text"><?=$nilai['kelas'];?></p>
                    <p class="card-text"><?=$nilai['nilai'];?></p>
                    <p class="card-text"><?=$nilai['nama_dosen'];?></p>
                    <a href="<?=base_url();?>nilai" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
