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
                        ?>
                            <div class="card-body">
                            <h5 class="card-header d-flex justify-content-between align-items-center">Biodata Pemohon
                            <div class="d-flex">
                                <a href="form-surat.html" class="btn btn-space btn-warning disabled ml-auto"><i class="fas fa-edit"></i> Edit</a>
                            </div></h5>
                            <form id="pengajuanForm"  method="POST">
                            <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nama_general" type="text" required="" placeholder="" class="form-control" value="<?= $row['nama_general']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Telepon (WA)</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="telp_pemohon" type="text" required="" placeholder="" class="form-control" value="<?= $row['telp_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat Email</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="email_pemohon" type="text" required="" placeholder="" class="form-control" value="<?= $row['email_pemohon']; ?>">
                                        </div>
                                </div>
                                <h5 class="card-header">Formulir Permohonan Surat</h5>
                                  <div class="form-group row">
                                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Jenis Permohonan Surat</label>
                                      <div class="col-12 col-sm-8 col-lg-6">
                                          <input name="jenis_permohonan" type="text" required="" placeholder="" class="form-control" value="<?= $row['jenis_permohonan']; ?>">
                                      </div>
                                  </div>
                                    <div class="form-group row hidden">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Permohonan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="no_permohonan" type="text" placeholder="HIDDEN" class="form-control" value="<?= $row['no_permohonan']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row hidden">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">No. Surat</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="no_surat" type="text" placeholder="HIDDEN" class="form-control" value="<?= $row['no_surat']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nama_pemohon" type="text" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control" value="<?= $row['nama_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tempat Lahir</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="tempatlahir_pemohon" type="text" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control" value="<?= $row['tempatlahir_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Lahir</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <input name="ttl_pemohon" type="text" class="form-control" value="<?= $ttl_pemohon; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">NISN</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nisn_pemohon" type="number" required="" placeholder="Masukkan sesuai dengan yang tertera di Kartu Pelajar" class="form-control" value="<?= $row['nisn_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">NIS</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nis_pemohon" type="number" placeholder="" class="form-control" value="<?= $row['nis_pemohon']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Kelas</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                          <input name="kelas_pemohon" type="text" required="" placeholder="" class="form-control" value="<?= $row['kelas_pemohon']; ?>">
                                    </div></div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Keperluan (Deskripsi)</label>
                                        <div class="col-18 col-sm-8 col-lg-6">
                                            <textarea name="keperluan_pemohon" required="" placeholder="Masukkan keperluan untuk pembuatan surat" class="form-control" ><?= $row['keperluan_pemohon']; ?></textarea>
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
                                                <input name="kegiatan_pemohon" type="text" placeholder="Masukkan nama kegiatan yang akan diikuti siswa" class="form-control" value="<?= $row['kegiatan_pemohon']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Awal Kegiatan</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="durasi_awal_pemohon" type="text" placeholder="" class="form-control" value="<?= $row['durasi_awal_pemohon']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Akhir Kegiatan</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="durasi_akhir_pemohon" type="text" placeholder="" class="form-control" value="<?= $row['durasi_akhir_pemohon']; ?>">    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal & Waktu Permohonan</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <input name="waktu_permohonan" type="datetime" placeholder="" class="form-control" value="<?= $row['waktu_permohonan']; ?>">    
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
  </body>
</html>
