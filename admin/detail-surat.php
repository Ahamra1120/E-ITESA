<?php
// Handle POST request to save letter number and rejection reason
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dsn = 'mysql:host=localhost;dbname=e-office';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Function to generate formatted surat number
        function generateNomorSurat($nomorSurat) {
            $bulan = date('m');
            $tahun = date('Y');
            return "B-$nomorSurat/Ma.09.02/PP.00.6/$bulan/$tahun";
        }

        if (isset($_POST['action'])) {
            if ($_POST['action'] == 'save_letter_number') {
                $no_surat = $_POST['no_surat'];
                $id = $_POST['id'];
                $status_permohonan = 'Dalam Proses';

                // Generate formatted surat number
                $no_surat_formatted = generateNomorSurat($no_surat);

                $sql = 'UPDATE surat SET no_surat = :no_surat, status_permohonan = :status_permohonan WHERE id = :id';
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['no_surat' => $no_surat_formatted, 'status_permohonan' => $status_permohonan, 'id' => $id]);

                echo 'Nomor surat berhasil disimpan.';
            } elseif ($_POST['action'] == 'reject_letter' && isset($_POST['tolak_pemohon'])) {
                $tolak_pemohon = $_POST['tolak_pemohon'];
                $id = $_POST['id'];
                $status_permohonan = 'Ditolak';

                $sql = 'UPDATE surat SET tolak_pemohon = :tolak_pemohon, status_permohonan = :status_permohonan WHERE id = :id';
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['tolak_pemohon' => $tolak_pemohon, 'status_permohonan' => $status_permohonan, 'id' => $id]);

                echo 'Alasan penolakan berhasil disimpan.';
            }
        }
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}
?>
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
    <title>E-Office - Permohonan Surat</title>
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
          <img alt="Logo E-Office" src="../assets/images/logo-admin.png" style="width: 300px; height: 57px; margin-left: 30px"/>
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
                  <a class="nav-link active" href="index.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="surat.php"><i class="fa fa-fw fa-envelope"></i>Permohonan Surat</a>
                </li>
                <li class="nav-divider">Tautan Eksternal</li>
                <li class="nav-item">
                  <a class="nav-link" href="https://man2jakarta.sch.id/video/"><i class="fa fa-fw fa-globe"></i>Pengelola Informasi dan Dokumentasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://man2jakarta.sch.id/ada/"><i class="fa fa-fw fa-globe"></i>LJK</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://man2jakarta.sch.id/zona-integritas-zi/"><i class="fa fa-fw fa-globe"></i>RENSTRA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://man2jakarta.sch.id/test/"><i class="fa fa-fw fa-globe"></i>PERKIN</a>
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
                  <p class="pageheader-TEXT">Hello Admin, welcome to E-Office Smart Administration Dashboard</p>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Surat</li>
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
                <div class="col-xl-15 col-lg-12 col-md-6 col-sm-12 col-12">
                <?php
                  $dsn = 'mysql:host=localhost;dbname=e-office';
                  $username = 'root';
                  $password = '';

                  try {
                      $pdo = new PDO($dsn, $username, $password);
                      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  } catch (PDOException $e) {
                      echo 'Connection failed: ' . $e->getMessage();
                  }

                  if (isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $sql = 'SELECT status_permohonan, no_surat, tolak_pemohon, surat_pemohon FROM surat WHERE id = :id';
                      $stmt = $pdo->prepare($sql);
                      $stmt->execute(['id' => $id]);
                      $result = $stmt->fetch(PDO::FETCH_ASSOC);

                      if ($result) {
                          $status = $result['status_permohonan'];
                          $no_surat = $result['no_surat'];
                          $tolak_pemohon = $result['tolak_pemohon'];
                          $surat_pemohon = $result['surat_pemohon'];

                          if ($status == 'Menunggu Konfirmasi') {
                              echo '<div class="alert alert-primary" role="alert">
                                      <h4 class="alert-heading">Status: Menunggu Konfirmasi</h4>
                                      <p>Permohonan surat anda sedang dalam proses verifikasi. Mohon menunggu maksimal <b>1x24 Jam</b> untuk informasi lebih lanjut</p>
                                      <hr>
                                      <p class="mb-0">Hubungi Pelayanan Terpadu Satu Pintu MAN 2 Jakarta untuk informasi lebih lanjut</p>
                                    </div>';
                          } else if ($status == 'Dalam Proses') {
                              echo '<div class="alert alert-warning" role="alert">
                                      <h4 class="alert-heading">Status: Dalam Proses</h4>
                                      <p>Permohonan surat dengan nomor <b>' . $no_surat . '</b> telah dikonfirmasi dan sedang dalam tahap pembuatan. Silahkan unggah surat yang sudah dibuat pada tombol <b>Unggah Dokumen</b> dibawah</p>
                                      <hr>
                                      <p class="mb-0">Hubungi Pelayanan Terpadu Satu Pintu MAN 2 Jakarta untuk informasi lebih lanjut</p>
                                    </div>';
                          } else if ($status == 'Ditolak') {
                              echo '<div class="alert alert-danger" role="alert">
                                      <h4 class="alert-heading">Status: Ditolak</h4>
                                      <p>Permohonan surat ini ditolak dengan alasan: <b>' . $tolak_pemohon . '</b></p>
                                      <hr>
                                      <p class="mb-0">Hubungi Pelayanan Terpadu Satu Pintu MAN 2 Jakarta untuk informasi lebih lanjut</p>
                                    </div>';
                          } else if ($status == 'Dibatalkan') {
                              echo '<div class="alert alert-danger" role="alert">
                                      <h4 class="alert-heading">Status: Dibatalkan</h4>
                                      <p>Permohonan surat ini telah Anda batalkan.</p>
                                      <hr>
                                      <p class="mb-0">Hubungi Pelayanan Terpadu Satu Pintu MAN 2 Jakarta untuk informasi lebih lanjut</p>
                                    </div>';
                          } else if ($status == 'Selesai') {
                              echo '<div class="alert alert-success" role="alert">
                                      <h4 class="alert-heading">Status: Selesai</h4>
                                      <p>Permohonan surat dengan nomor <b>' . $no_surat . '</b> telah berhasil diproses! Silakan unduh surat Anda dengan mengklik tombol berikut <a data-toggle="modal" data-target="#pdfModal1" class="btn btn-success btn-sm text-white" role="button"><i class="fas fa-file"></i> Unduh Surat</a> </p>
                                      <hr>
                                      <p class="mb-0">Hubungi Pelayanan Terpadu Satu Pintu MAN 2 Jakarta untuk informasi lebih lanjut</p>
                                    </div>
                                    <div class="modal fade" id="pdfModal1" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="pdfModalLabel">PDF Detail</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <embed src="../assets/lampiran/surat/' . $surat_pemohon . '" type="application/pdf" width="100%" height="500px" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                          }
                      }
                  }
                  ?>
                  </div>
                <!-- Awal Form -->
                    <!-- ============================================================== -->
                    <!-- valifation types -->
                    <!-- ============================================================== -->
                    <div class="col-xl-15 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                        <?php
                        include('../connect.php');

                        $id = $_GET['id']; //mengambil id barang yang ingin diubah

                        //menampilkan barang berdasarkan id
                        $data = mysqli_query($conn, "SELECT * FROM surat WHERE id = '$id'");
                        $row = mysqli_fetch_assoc($data);

                        // Format tanggal ke YYYY-MM-DD
                        $ttl_pemohon = date('Y-m-d', strtotime($row['ttl_pemohon']));
                        
                        // Check the status of the application
                        $status = $row['status_permohonan'];
                        $disabled = ($status != 'Menunggu Konfirmasi') ? 'disabled' : '';
                        ?>
                            <div class="card-body">
                            <h5 class="card-header d-flex justify-content-between align-items-center">Biodata Pemohon
                            <div class="d-flex">
                              <?php if ($status == 'Menunggu Konfirmasi'): ?>
                                <button id="acceptBtn" class="btn btn-space btn-success <?= $disabled; ?>" data-toggle="modal" ><i class="fas fa-check"></i> Terima</button>
                                <button id="rejectBtn" class="btn btn-space btn-danger <?= $disabled; ?>" data-toggle="modal" ><i class="fas fa-times"></i> Tolak</button>
                              <?php endif; ?>
                            <?php if ($status == 'Dalam Proses'): ?>
                                <button id="uploadBtn" class="btn btn-space btn-primary" data-toggle="modal" data-target="#pdfModal2"><i class="fas fa-file"></i> Unggah Dokumen</button>
                            <?php endif; ?></h5>
                            <form id="pengajuanForm"  method="POST">
                            <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nama_general" type="text" required="" placeholder="" class="form-control" readonly value="<?= $row['nama_general']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Telepon (WA)</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="telp_pemohon" type="text" required="" placeholder="" class="form-control" readonly value="<?= $row['telp_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat Email</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="email_pemohon" type="text" required="" placeholder="" class="form-control" readonly value="<?= $row['email_pemohon']; ?>">
                                        </div>
                                </div>
                                <h5 class="card-header">Formulir Permohonan Surat</h5>
                                  <div class="form-group row">
                                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Jenis Permohonan Surat</label>
                                      <div class="col-12 col-sm-8 col-lg-6">
                                          <input name="jenis_permohonan" type="text" required="" placeholder="" class="form-control" readonly value="<?= $row['jenis_permohonan']; ?>">
                                      </div>
                                  </div>
                                    <div class="form-group row hidden">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Permohonan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="no_permohonan" type="text" placeholder="HIDDEN" class="form-control" readonly value="<?= $row['no_permohonan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row hidden">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Surat</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="no_surat" type="text" placeholder="HIDDEN" class="form-control" readonly value="<?= $row['no_surat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nama_pemohon" type="text" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control" readonly value="<?= $row['nama_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tempat Lahir</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="tempatlahir_pemohon" type="text" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control" readonly value="<?= $row['tempatlahir_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Lahir</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <input name="ttl_pemohon" type="text" class="form-control" readonly value="<?= $ttl_pemohon; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">NISN</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nisn_pemohon" type="number" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control" readonly value="<?= $row['nisn_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">NIS</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nis_pemohon" type="number" placeholder="" class="form-control" readonly value="<?= $row['nis_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Kelas</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                          <input name="kelas_pemohon" type="text" required="" placeholder="" class="form-control" readonly value="<?= $row['kelas_pemohon']; ?>">
                                    </div></div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Keperluan (Deskripsi)</label>
                                        <div class="col-18 col-sm-8 col-lg-6">
                                            <textarea name="keperluan_pemohon" required="" placeholder="Masukkan keperluan untuk pembuatan surat" class="form-control" readonly ><?= $row['keperluan_pemohon']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Lampiran Berkas Pendukung</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <a data-toggle="modal" data-target="#pdfModal" class="btn btn-primary btn-sm text-white" role="button"><i class="fas fa-file"></i> Detail</a>
                                          </div>
                                        </div>
                                    <div id="kegiatanForm" style="display: none;">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Kegiatan</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="kegiatan_pemohon" type="text" placeholder="Masukkan nama kegiatan yang akan diikuti siswa" class="form-control" readonly value="<?= $row['kegiatan_pemohon']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Awal Kegiatan</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="durasi_awal_pemohon" type="text" placeholder="" class="form-control" readonly value="<?= $row['durasi_awal_pemohon']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Akhir Kegiatan</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="durasi_akhir_pemohon" type="text" placeholder="" class="form-control" readonly value="<?= $row['durasi_akhir_pemohon']; ?>">    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal & Waktu Permohonan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <input name="waktu_permohonan" type="datetime" placeholder="" class="form-control" readonly value="<?= $row['waktu_permohonan']; ?>">    
                                        </div>
                                        </div>
                                    </div>
                                </form>
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
          <!-- Modal Structure -->
            <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="pdfModalLabel">PDF Detail</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <embed src="../assets/lampiran/user/<?= $row['lampiran_pemohon']; ?>" type="application/pdf" width="100%" height="500px" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        <!-- alert -->
        <form method="POST" action="">
        <input type="hidden" name="action" value="save_letter_number">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label for="no_surat">Nomor Surat:</label>
        <input type="text" id="no_surat" name="no_surat" required>
        <label for="tolak_pemohon">Alasan Penolakan:</label>
        <input type="text" id="tolak_pemohon" name="tolak_pemohon" required>
        <button type="submit">Simpan</button>
    </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
       // Handle accept button click
       document.getElementById("acceptBtn").onclick = function() {
            Swal.fire({
                title: 'Terima Surat',
                html: `
                    <form id="acceptForm">
                        <input type="hidden" name="action" value="save_letter_number">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <label for="no_surat">Nomor Surat:</label>
                        <input type="text" id="no_surat" name="no_surat" required>
                        <button type="button" id="generateAuto">Generate Otomatis</button>
                    </form>
                `,
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                didOpen: () => {
                    document.getElementById("generateAuto").onclick = function() {
                        fetch('get_last_surat_number.php')
                            .then(response => response.json())
                            .then(data => {
                                var lastNumber = parseInt(data.last_number) || 0;
                                Swal.getPopup().querySelector('#no_surat').value = lastNumber + 1;
                            })
                            .catch(error => console.error('Error:', error));
                    }
                },
                preConfirm: () => {
                    const no_surat = Swal.getPopup().querySelector('#no_surat').value;
                    if (!no_surat) {
                        Swal.showValidationMessage(`Nomor surat tidak boleh kosong`);
                    }
                    return { no_surat: no_surat };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    var formData = new FormData(document.getElementById("acceptForm"));
                    formData.append('no_surat', result.value.no_surat);
                    fetch('', {
                        method: 'POST',
                        body: formData
                    }).then(response => response.text()).then(data => {
                        Swal.fire('Berhasil', data, 'success');
                    }).catch(error => console.error('Error:', error));
                }
            });
        }

        // Handle reject button click
        document.getElementById("rejectBtn").onclick = function() {
            Swal.fire({
                title: 'Tolak Surat',
                html: `
                    <form id="rejectForm">
                        <input type="hidden" name="action" value="reject_letter">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <label for="tolak_pemohon">Alasan Penolakan:</label>
                        <input type="text" id="tolak_pemohon" name="tolak_pemohon" required>
                    </form>
                `,
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                preConfirm: () => {
                    const tolak_pemohon = Swal.getPopup().querySelector('#tolak_pemohon').value;
                    if (!tolak_pemohon) {
                        Swal.showValidationMessage(`Alasan penolakan tidak boleh kosong`);
                    }
                    return { tolak_pemohon: tolak_pemohon };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    var formData = new FormData(document.getElementById("rejectForm"));
                    formData.append('tolak_pemohon', result.value.tolak_pemohon);
                    fetch('', {
                        method: 'POST',
                        body: formData
                    }).then(response => response.text()).then(data => {
                        Swal.fire('Berhasil', data, 'success');
                    }).catch(error => console.error('Error:', error));
                }
            });
        }
    </script>
    <script>
        document.getElementById('uploadBtn').addEventListener('click', function() {
            Swal.fire({
                title: 'Unggah Dokumen',
                html: '<input type="file" id="fileInput" class="swal2-input">',
                showCancelButton: true,
                confirmButtonText: 'Unggah',
                preConfirm: () => {
                    const fileInput = document.getElementById('fileInput');
                    if (!fileInput.files.length) {
                        Swal.showValidationMessage('Silakan pilih file untuk diunggah');
                        return false;
                    }
                    return fileInput.files[0];
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const file = result.value;
                    const formData = new FormData();
                    formData.append('surat_pemohon', file);

                    fetch('upload.php?id=<?= $id ?>', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire('Berhasil!', 'Dokumen berhasil diunggah.', 'success');
                        } else {
                            Swal.fire('Gagal!', 'Terjadi kesalahan saat mengunggah dokumen: ' + data.message, 'error');
                        }
                    })
                    .catch(error => {
                        Swal.fire('Gagal!', 'Terjadi kesalahan saat mengunggah dokumen.', 'error');
                    });
                }
            });
        });
    </script>
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
    document.getElementById('batalkanPermohonan').addEventListener('click', function(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Apakah anda yakin membatalkan permohonan surat ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, saya yakin',
            cancelButtonText: 'Tidak, saya mengecek kembali'
        }).then((result) => {
            if (result.isConfirmed) {
                // Send AJAX request to update the status
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        Swal.fire(
                            'Dibatalkan!',
                            'Permohonan surat telah dibatalkan.',
                            'success'
                        ).then(() => {
                            location.reload(); // Reload the page to reflect changes
                        });
                    }
                };
                xhr.send("id=<?= $id; ?>&status=Dibatalkan");
            }
        });
    });
    </script>
  </body>
</html>
