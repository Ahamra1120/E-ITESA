<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/libs/css/style.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css" />
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css" />
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function submitForms() {
    document.getElementById('pengajuanForm').submit();
}
    </script>
    
  <style>
    .custom-marquee {
    font-size: 18px;
    color: white;
    padding-left: 264px;
    background-color: red;
}
  </style>
    <style>
    .required-asterisk {
        color: red;
    }
    </style>
    <title>E-ITESA - Permohonan Surat</title>
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
      <!-- ============================================================== -->
      <!-- navbar -->
      <!-- ============================================================== -->
      <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
          <br />
          <img alt="Logo E-Itesa" src="../assets/images/logo-user.png" style="width: 300px; height: 57px; margin-left: 30px"/>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
              <li class="nav-item">
                <div id="custom-search" class="top-search-bar">
                  <input class="form-control" type="text" placeholder="Search.." />
                </div>
              </li>
              <li class="nav-item dropdown notification">
                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                  <li>
                    <div class="notification-title">Notification</div>
                    <div class="notification-list">
                      <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                          <div class="notification-info">
                            <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle" /></div>
                            <div class="notification-list-user-block">
                              <span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                              <div class="notification-date">2 min ago</div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="notification-info">
                            <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle" /></div>
                            <div class="notification-list-user-block">
                              <span class="notification-list-user-name">John Abraham </span>is now following you
                              <div class="notification-date">2 days ago</div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="notification-info">
                            <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle" /></div>
                            <div class="notification-list-user-block">
                              <span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                              <div class="notification-date">2 min ago</div>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="notification-info">
                            <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle" /></div>
                            <div class="notification-list-user-block">
                              <span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                              <div class="notification-date">2 min ago</div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="list-footer"><a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown connection">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                  <li class="connection-list">
                    <div class="row">
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" /> <span>Github</span></a>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" /> <span>Dribbble</span></a>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" /> <span>Dropbox</span></a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt="" /> <span>Bitbucket</span></a>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" /><span>Mail chimp</span></a>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" /> <span>Slack</span></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="conntection-footer"><a href="#">More</a></div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown nav-user">
                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                  ><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"
                /></a>
                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                  <div class="nav-user-info">
                    <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                    <span class="status"></span><span class="ml-2">Available</span>
                  </div>
                  <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                  <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- ============================================================== -->
      <!-- end navbar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- left sidebar -->
      <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav flex-column">
                <li class="nav-divider">Menu</li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="surat.php"><i class="fa fa-fw fa-envelope"></i>Permohonan Surat</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- end left sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- wrapper  -->
      <!-- ============================================================== -->
      <div class="dashboard-wrapper">
      <marquee class="custom-marquee"><b><i class="fas fa-exclamation-triangle"></i> Pegawai MAN 2 Jakarta Timur tidak menerima GRATIFIKASI dalam melaksanakan tugas. <i class="fas fa-exclamation-triangle"></i><b></marquee>
      <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                  <h2 class="pageheader-title">Permohonan Surat</h2>
                  <p class="pageheader-TEXT">Hello Ahmad, welcome to E-ITESA Smart Administration Dashboard</p>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Permohonan Surat</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">
              <div class="row justify-content-center">
                <!-- Awal Form -->
                    <!-- ============================================================== -->
                    <!-- valifation types -->
                    <!-- ============================================================== -->
                    <div class="col-xl-15 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-header">Biodata Pemohon</h5>
                            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])): ?>
                              echo "<script>alert('data berhasil disimpan.');window.location='surat.php';</script>";
                              <?php endif; ?>
                            <form id="pengajuanForm" action="tambah-surat.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nama_general" type="text" required="" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Telepon (WA) <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="telp_pemohon" type="text" required="" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat Email <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="email_pemohon" type="text" required="" placeholder="" class="form-control">
                                        </div>
                                </div>
                                <h5 class="card-header">Formulir Permohonan Surat</h5>
                                  <div class="form-group row">
                                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Jenis Permohonan Surat <span class="required-asterisk">*</label>
                                      <div class="col-12 col-sm-8 col-lg-6">
                                          <select name="jenis_permohonan" class="custom-select" id="inputGroupSelect01">
                                              <option selected>Silahkan Pilih...</option>
                                              <option value="Surat Keterangan Aktif Siswa">Surat Keterangan Aktif Siswa</option>
                                              <option value="Surat Keterangan Kelakuan Baik">Surat Keterangan Kelakuan Baik</option>
                                              <option value="Surat Keterangan Rekomendasi Siswa">Surat Keterangan Rekomendasi Siswa</option>
                                              <option value="Surat Keterangan Dispensasi">Surat Keterangan Dispensasi</option>
                                              <option value="Surat Keterangan Peringkat">Surat Keterangan Peringkat</option>
                                              <option value="Surat Keterangan Prestasi">Surat Keterangan Prestasi</option>
                                              <option value="Surat Tugas Lomba Siswa">Surat Tugas Lomba Siswa</option>
                                          </select>
                                      </div>
                                  </div>
                                    <div class="form-group row hidden">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Permohonan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="no_permohonan" type="text" placeholder="HIDDEN" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row hidden">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Surat</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="no_surat" type="text" placeholder="HIDDEN" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nama_pemohon" type="text" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tempat Lahir <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="tempatlahir_pemohon" type="text" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Lahir <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="ttl_pemohon" type="text" placeholder="MM/DD/YYYY" class="form-control datepicker" id="datepicker4" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">NISN <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nisn_pemohon" type="number" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">NIS</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nis_pemohon" type="number" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control">
                                        </div>
                                    </div><div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Kelas <span class="required-asterisk">*</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select name="kelas_pemohon" class="custom-select" id="inputGroupSelect01">
                                            <option selected>Silahkan Pilih...</option>
                                            <option value="X-A">X-A</option>
                                            <option value="X-B">X-B</option>
                                            <option value="X-C">X-C</option>
                                            <option value="X-D">X-D</option>
                                            <option value="X-E">X-E</option>
                                            <option value="X-F">X-F</option>
                                            <option value="X-G">X-G</option>
                                            <option value="X-H">X-H</option>
                                            <option value="XI-A">XI-A</option>
                                            <option value="XI-B">XI-B</option>
                                            <option value="XI-C">XI-C</option>
                                            <option value="XI-D">XI-D</option>
                                            <option value="XI-E">XI-E</option>
                                            <option value="XI-F">XI-F</option>
                                            <option value="XI-G">XI-G</option>
                                            <option value="XI-H">XI-H</option>
                                            <option value="XII-A">XII-A</option>
                                            <option value="XII-B">XII-B</option>
                                            <option value="XII-C">XII-C</option>
                                            <option value="XII-D">XII-D</option>
                                            <option value="XII-E">XII-E</option>
                                            <option value="XII-F">XII-F</option>
                                            <option value="XII-G">XII-G</option>
                                            <option value="XII-H">XII-H</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Keperluan (Deskripsi) <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <textarea name="keperluan_pemohon" required="" placeholder="Masukkan keperluan untuk pembuatan surat" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Lampiran Berkas Pendukung <span class="required-asterisk">*</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="file" name="lampiran_pemohon" required="" accept="application/pdf" class="form-control">
                                        </div>
                                    </div>
                                    <div id="kegiatanForm" style="display: none;">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Kegiatan <span class="required-asterisk">*</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="kegiatan_pemohon" type="text" placeholder="Masukkan nama kegiatan yang akan diikuti siswa" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Awal Kegiatan <span class="required-asterisk">*</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="durasi_awal_pemohon" type="text" placeholder="MM/DD/YYYY" class="form-control datepicker" id="datepicker5" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Akhir Kegiatan <span class="required-asterisk">*</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="durasi_akhir_pemohon" type="text" placeholder="MM/DD/YYYY" class="form-control datepicker" id="datepicker6" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row hidden">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal & Waktu Permohonan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <div name="waktu_permohonan" class="input-group date" id="datetimepicker7" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#datetimepicker7" placeholder="MM/DD/YYYY HH:mm:ss"/>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button id="submitBtn" class="btn btn-space btn-primary" class="form-control">Submit</button>
                                            <button class="btn btn-space btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                  // Enable error reporting for debugging
                                  error_reporting(E_ALL);
                                  ini_set('display_errors', 1);

                                  // Database connection
                                  include("../connect.php");
                                  if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                  }

                                  // Function to get POST data safely
                                  function getPostData($key) {
                                      return isset($_POST[$key]) ? $_POST[$key] : '';
                                  }

                                  // Check if form is submitted
                                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                      // Retrieve form data
                                      $nama_general = getPostData('nama_general');
                                      $telp_pemohon = getPostData('telp_pemohon');
                                      $email_pemohon = getPostData('email_pemohon');
                                      $jenis_permohonan = getPostData('jenis_permohonan');
                                      $nama_pemohon = getPostData('nama_pemohon');
                                      $tempatlahir_pemohon = getPostData('tempatlahir_pemohon');
                                      $ttl_pemohon = getPostData('ttl_pemohon');
                                      $nisn_pemohon = getPostData('nisn_pemohon');
                                      $nis_pemohon = getPostData('nis_pemohon');
                                      $kelas_pemohon = getPostData('kelas_pemohon');
                                      $keperluan_pemohon = getPostData('keperluan_pemohon');
                                      $kegiatan_pemohon = getPostData('kegiatan_pemohon');
                                      $durasi_awal_pemohon = getPostData('durasi_awal_pemohon');
                                      $durasi_akhir_pemohon = getPostData('durasi_akhir_pemohon');

                                      // Ubah format tanggal dari MM/DD/YYYY ke YYYY/MM/DD
                                      $date = DateTime::createFromFormat('m/d/Y', $ttl_pemohon);
                                      if ($date) {
                                          $ttl_pemohon = $date->format('Y/m/d');
                                      } else {
                                          echo "Invalid date format!";
                                          exit();
                                      }

                                      // Generate no_permohonan
                                      $sql = "SELECT COUNT(*) AS total FROM surat";
                                      $result = $conn->query($sql);
                                      $row = $result->fetch_assoc();
                                      $total = $row['total'] + 1;
                                      $no_permohonan = "id00" . str_pad($total, 2, "0", STR_PAD_LEFT);

                                      // Handle file upload
                                      if (isset($_FILES['lampiran_pemohon']) && $_FILES['lampiran_pemohon']['error'] == UPLOAD_ERR_OK) {
                                          $fileTmpPath = $_FILES['lampiran_pemohon']['tmp_name'];
                                          $fileName = $_FILES['lampiran_pemohon']['name'];
                                          $fileSize = $_FILES['lampiran_pemohon']['size'];
                                          $fileType = $_FILES['lampiran_pemohon']['type'];
                                          $fileNameCmps = explode(".", $fileName);
                                          $fileExtension = strtolower(end($fileNameCmps));

                                          // Generate new file name
                                          $newFileName = 'lampiran-' . $no_permohonan . '.' . $fileExtension;

                                          // Directory where the file will be uploaded
                                          $uploadFileDir = '../assets/lampiran/user/';
                                          $dest_path = $uploadFileDir . $newFileName;

                                          // Move the file to the specified directory
                                          if (move_uploaded_file($fileTmpPath, $dest_path)) {
                                              $lampiran_pemohon = $newFileName; // Update the file name to be saved in the database
                                          } else {
                                              echo "There was an error moving the uploaded file.";
                                              exit();
                                          }
                                      } else {
                                          echo "No file uploaded or there was an upload error.";
                                          exit();
                                      }

                                      // Set default values
                                      $status_permohonan = "Menunggu Konfirmasi";
                                      $no_surat = "";
                                      $datetime = new DateTime("now", new DateTimeZone("Asia/Jakarta"));
                                      $waktu_permohonan = $datetime->format("Y-m-d H:i:s");

                                      // Insert data into the database
                                      $sql = "INSERT INTO surat (nama_general, telp_pemohon, email_pemohon, jenis_permohonan, no_permohonan, no_surat, nama_pemohon, tempatlahir_pemohon, ttl_pemohon, nisn_pemohon, nis_pemohon, kelas_pemohon, keperluan_pemohon, lampiran_pemohon, kegiatan_pemohon, durasi_awal_pemohon, durasi_akhir_pemohon, waktu_permohonan, status_permohonan) 
                                      VALUES ('$nama_general', '$telp_pemohon', '$email_pemohon', '$jenis_permohonan', '$no_permohonan', '$no_surat', '$nama_pemohon', '$tempatlahir_pemohon', '$ttl_pemohon', '$nisn_pemohon', '$nis_pemohon', '$kelas_pemohon', '$keperluan_pemohon', '$lampiran_pemohon', '$kegiatan_pemohon', '$durasi_awal_pemohon', '$durasi_akhir_pemohon', '$waktu_permohonan', '$status_permohonan')";

                                      if ($conn->query($sql) === TRUE) {
                                          // Redirect to a success page
                                          header("Location: surat.php");
                                          exit();
                                      } else {
                                          echo "Error: " . $sql . "<br>" . $conn->error;
                                      }
                                  }

                                  $conn->close();
                                  ?>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end valifation types -->
                    <!-- ============================================================== -->
                <!-- Akhir Form -->
          </div>
        </div>
          </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">Copyright © 2024 <a href="https://man2jakarta.sch.id/">MAN 2 Jakarta</a>. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.</div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                  <a href="javascript: void(0);">About</a>
                  <a href="javascript: void(0);">Support</a>
                  <a href="javascript: void(0);">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- end wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
    <!-- Calendar -->
    <script src="../assets/vendor/datepicker/moment.js"></script>
    <script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="../assets/vendor/datepicker/datepicker.js"></script>
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Form Validity -->
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
    <style>
    .hidden {
        display: none !important;
    }
    </style>
    <script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            autoclose: true,
            todayHighlight: true
        });
    });
    </script>
    <script>
    document.getElementById('inputGroupSelect01').addEventListener('change', function() {
        var kegiatanForm = document.getElementById('kegiatanForm');
        if (this.value === 'Surat Keterangan Dispensasi' || this.value === 'Surat Tugas Lomba Siswa') {
            kegiatanForm.style.display = 'block';
        } else {
            kegiatanForm.style.display = 'none';
        }
    });
</script>
<script>
                document.getElementById('submitBtn').addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent form submission

                    // Validate form data
                    const form = document.getElementById('pengajuanForm');
                    const formData = new FormData(form);
                    let isValid = true;
                    let specialCondition = false;

                    // Check for special condition
                    if (formData.get('jenis_surat') === 'Surat Keterangan Dispensasi' || formData.get('jenis_surat') === 'Surat Tugas Lomba Siswa') {
                        specialCondition = true;
                    }

                    formData.forEach((value, key) => {
                        if (!value && key !== 'no_permohonan' && key !== 'no_surat' && key !== 'waktu_permohonan') {
                            if (specialCondition && (key === 'kegiatan_pemohon' || key === 'durasi_awal_pemohon' || key === 'durasi_akhir_pemohon')) {
                                // Skip validation for these fields under special condition
                                return;
                            }
                            isValid = false;
                        }
                    });

                    if (!isValid) {
                        Swal.fire({
                            title: 'Error',
                            text: 'Semua field harus diisi!',
                            icon: 'error'
                        });
                        return;
                    }

                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    });

                    swalWithBootstrapButtons.fire({
                        title: 'Apakah anda yakin untuk menyimpan data?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, saya yakin!',
                        cancelButton: 'Tidak, saya ingin mengecek kembali'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit the form data via AJAX
                            $.ajax({
                                url: 'tambah-surat.php', // PHP script to handle form submission
                                type: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    let timerInterval;
                                    Swal.fire({
                                        title: 'Data anda berhasil tersimpan!',
                                        html: 'Anda akan diarahkan ke halaman utama dalam <b></b> milisekon.',
                                        timer: 2000,
                                        timerProgressBar: true,
                                        icon: 'success',
                                        didOpen: () => {
                                            Swal.showLoading();
                                            const timer = Swal.getPopup().querySelector('b');
                                            timerInterval = setInterval(() => {
                                                timer.textContent = `${Swal.getTimerLeft()}`;
                                            }, 100);
                                        },
                                        willClose: () => {
                                            clearInterval(timerInterval);
                                        }
                                    }).then((result) => {
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer');
                                            // Redirect to the main page
                                            window.location.href = 'index.php';
                                        }
                                    });
                                },
                                error: function(xhr, status, error) {
                                    Swal.fire({
                                        title: 'Error',
                                        text: 'Terjadi kesalahan saat menyimpan data.',
                                        icon: 'error'
                                    });
                                }
                            });
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            swalWithBootstrapButtons.fire({
                                title: 'Cancelled',
                                text: 'Your imaginary file is safe :)',
                                icon: 'error'
                            });
                        }
                    });
                });
            </script>
  </body>
</html>
