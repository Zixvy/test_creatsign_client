<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">

  <title><?php echo $judul; ?>
  </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?=base_url('')?>">REST API Client</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav nav-pills mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('home')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('mahasiswa')?>">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('dosen')?>">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('kelas')?>">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('mata_kuliah')?>">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('nilai')?>">Nilai</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
