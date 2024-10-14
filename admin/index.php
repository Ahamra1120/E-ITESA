<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['status'] != 'user') {
    header("Location: ../login.php");
    exit;
}

// Ambil nama pengguna dari sesi (pastikan Anda sudah menyimpannya saat login)
$username = $_SESSION['username']; // Ganti 'username' dengan kunci yang sesuai
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/libs/css/style.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css" />
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css" />
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css" />
    <title>E-ITESA Dashboard</title>
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
          <img src="../assets/images/logo-admin.png" alt="Logo E-Itesa" style="width: 360px; height: 68px; margin-left: 30px" />
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
                  <a class="nav-link active" href="index.html"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="surat.html"><i class="fa fa-fw fa-envelope"></i>Permohonan Surat</a>
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
        <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                  <h2 class="pageheader-title">E-ITESA Dashboard</h2>
                  <p class="pageheader-TEXT">Hello <?php echo $username; ?>, welcome to E-ITESA Smart Administration Dashboard</p>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-ITESA</li>
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
                <!-- Total -->
                <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-inline-block">
                        <h4 class="text-muted">Total Permohonan</h4>
                        <h2 class="mb-0">78</h2>
                        <h3 class="mb-0">Surat</h3>
                      </div>
                      <div class="float-right icon-circle-medium icon-box-lg bg-info-light mt-1">
                        <i class="fas fa-envelope fa-fw fa-sm text-info"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Diterima -->
                <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-inline-block">
                        <h4 class="text-muted">Permohonan Diterima</h4>
                        <h2 class="mb-0">12</h2>
                        <h3 class="mb-0">Surat</h3>
                      </div>
                      <div class="float-right icon-circle-medium icon-box-lg bg-primary-light mt-1">
                        <i class="fas fa-envelope fa-fw fa-sm text-primary"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <!-- Diproses -->
                <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-inline-block">
                        <h4 class="text-muted">Permohonan Diproses</h4>
                        <h2 class="mb-0">3</h2>
                        <h3 class="mb-0">Surat</h3>
                      </div>
                      <div class="float-right icon-circle-medium icon-box-lg bg-brand-light mt-1">
                        <i class="fas fa-envelope fa-fw fa-sm text-brand"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Ditolak -->
                <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-inline-block">
                        <h4 class="text-muted">Permohonan Ditolak</h4>
                        <h2 class="mb-0">2</h2>
                        <h3 class="mb-0">Surat</h3>
                      </div>
                      <div class="float-right icon-circle-medium icon-box-lg bg-secondary-light mt-1">
                        <i class="fas fa-envelope fa-fw fa-sm text-secondary"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Status Permohonan -->
              <div class="row">
                <div class="col-xl-15 col-lg-12 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Status Permohonan</h5>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-light">
                            <tr class="border-0">
                              <th class="border-0">#</th>
                              <th class="border-0">No. Permohonan</th>
                              <th class="border-0">Jenis Permohonan</th>
                              <th class="border-0">Waktu Permohonan</th>
                              <th class="border-0">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>id000001</td>
                              <td>Surat Keterangan Siswa</td>
                              <td>27-08-2018 01:22:12</td>
                              <td><span class="badge-dot badge-brand mr-1"></span>Diproses</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>id000002</td>
                              <td>Surat Permohonan Penelitian</td>
                              <td>25-08-2018 21:12:56</td>
                              <td><span class="badge-dot badge-success mr-1"></span>Diterima</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>id000003</td>
                              <td>Surat Keterangan Siswa</td>
                              <td>24-08-2018 14:12:77</td>
                              <td><span class="badge-dot badge-primary mr-1"></span>Menunggu Approval</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>id000004</td>
                              <td>Surat Keterangan Siswa</td>
                              <td>23-08-2018 09:12:35</td>
                              <td><span class="badge-dot badge-danger mr-1"></span>Ditolak</td>
                            </tr>
                            <tr>
                              <td colspan="9"><a href="surat.html" class="btn btn-outline-light float-right">View Details</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Peminjaman Ruangan -->
                <div class="col-xl-15 col-lg-12 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Peminjaman Ruangan</h5>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-light">
                            <tr class="border-0">
                              <th class="border-0">#</th>
                              <th class="border-0">Ruangan</th>
                              <th class="border-0">Lokasi</th>
                              <th class="border-0">Ketersediaan</th>
                              <th class="border-0">Reservasi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Lab. Komputer</td>
                              <td>Gedung Laboratorium dan Perpustakaan MAN 2 Jakarta</td>
                              <td><span class="badge badge-pill badge-primary">Tersedia</span></td>
                              <td>
                                <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-building"></i> Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Lab. Fisika</td>
                              <td>Gedung Laboratorium dan Perpustakaan MAN 2 Jakarta</td>
                              <td><span class="badge badge-pill badge-warning">Sedang Terpakai</span></td>
                              <td>
                                <a href="#" class="btn btn-dark btn-sm disabled" role="button" aria-disabled="true"><i class="fas fa-building"></i> Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Lab. Biologi</td>
                              <td>Gedung Laboratorium dan Perpustakaan MAN 2 Jakarta</td>
                              <td><span class="badge badge-pill badge-warning">Sedang Terpakai</span></td>
                              <td>
                                <a href="#" class="btn btn-dark btn-sm disabled" role="button" aria-disabled="true"><i class="fas fa-building"></i> Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Aula</td>
                              <td>Gedung Laboratorium dan Perpustakaan MAN 2 Jakarta</td>
                              <td><span class="badge badge-pill badge-secondary">Tidak Tersedia</span></td>
                              <td>
                                <a href="#" class="btn btn-dark btn-sm disabled" role="button" aria-disabled="true"><i class="fas fa-building"></i> Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>R. Kelas</td>
                              <td>XI-H</td>
                              <td><span class="badge badge-pill badge-primary">Tersedia</span></td>
                              <td>
                                <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-building"></i> Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>R. Kelas</td>
                              <td>X-B</td>
                              <td><span class="badge badge-pill badge-secondary">Tidak Tersedia</span></td>
                              <td>
                                <a href="#" class="btn btn-dark btn-sm disabled" role="button" aria-disabled="true"><i class="fas fa-building"></i> Detail</a>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="5"><a href="ruangan.html" class="btn btn-outline-light float-right">View Details</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Peminjaman Barang -->
                <div class="col-xl-15 col-lg-12 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Peminjaman Barang</h5>
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="bg-light">
                            <tr class="border-0">
                              <th class="border-0">#</th>
                              <th class="border-0">Barang</th>
                              <th class="border-0">Jenis Barang</th>
                              <th class="border-0">Ketersediaan</th>
                              <th class="border-0">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Kabel Roll</td>
                              <td>Elektronik</td>
                              <td><span class="badge badge-pill badge-primary">10</span></td>
                              <!-- Button trigger modal -->
                              <td>
                                <a href="#" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-archive"></i> Pinjam</a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Peminjaman Kabel Roll</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </a>
                                      </div>
                                      <div class="modal-body">
                                        <form id="validationform" data-parsley-validate="" novalidate="">
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap</label>
                                            <div class="col-12 col-sm-9">
                                              <input type="text" required="" placeholder="" class="form-control" />
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Jenis Kelamin</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                              <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" checked="" class="custom-control-input" /><span class="custom-control-label">Laki-Laki</span>
                                              </label>
                                              <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input" /><span class="custom-control-label">Perempuan</span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Kelas</label>
                                            <div class="col-12 col-sm-9">
                                              <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Silahkan Pilih...</option>
                                                <option value="1">X</option>
                                                <option value="2">XI</option>
                                                <option value="3">XII</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Qty.</label>
                                            <div class="col-12 col-sm-9">
                                              <input type="number" required="" placeholder="" class="form-control" />
                                            </div>
                                          </div>
                                          <!-- ... (other form groups) ... -->
                                          <div class="modal-footer">
                                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                            <a href="#" class="btn btn-primary">Submit</a>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Proyektor</td>
                              <td>Elektronik</td>
                              <td><span class="badge badge-pill badge-warning">2</span></td>
                              <td>
                                <!-- Button trigger modal -->
                                <a href="#" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal1"><i class="fas fa-archive"></i> Pinjam</a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Peminjaman Proyektor</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </a>
                                      </div>
                                      <div class="modal-body">
                                        <form id="validationform" data-parsley-validate="" novalidate="">
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap</label>
                                            <div class="col-12 col-sm-9">
                                              <input type="text" required="" placeholder="" class="form-control" />
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Jenis Kelamin</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                              <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" checked="" class="custom-control-input" /><span class="custom-control-label">Laki-Laki</span>
                                              </label>
                                              <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input" /><span class="custom-control-label">Perempuan</span>
                                              </label>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Kelas</label>
                                            <div class="col-12 col-sm-9">
                                              <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Silahkan Pilih...</option>
                                                <option value="1">X</option>
                                                <option value="2">XI</option>
                                                <option value="3">XII</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Qty.</label>
                                            <div class="col-12 col-sm-9">
                                              <input type="number" required="" placeholder="1" class="form-control" disabled />
                                              <p class="text-danger">Hanya diperbolehkan untuk meminjam 1 Item</p>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                            <a href="#" class="btn btn-primary">Submit</a>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Speaker</td>
                              <td>Elektronik</td>
                              <td><span class="badge badge-pill badge-secondary">Tidak Tersedia</span></td>
                              <td>
                                <a href="#" class="btn btn-dark btn-sm disabled" role="button" aria-disabled="true"><i class="fas fa-archive"></i> Pinjam</a>
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Spidol Hitam</td>
                              <td>Alat Tulis Kantor</td>
                              <td><span class="badge badge-pill badge-secondary">Tidak Tersedia</span></td>
                              <td>
                                <a href="#" class="btn btn-dark btn-sm disabled" role="button" aria-disabled="true"><i class="fas fa-archive"></i> Pinjam</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
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
    <!-- Form Validity -->
    <script>
      $("#form").parsley();
    </script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        "use strict";
        window.addEventListener(
          "load",
          function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
              form.addEventListener(
                "submit",
                function (event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add("was-validated");
                },
                false
              );
            });
          },
          false
        );
      })();
    </script>
  </body>
</html>
