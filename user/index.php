<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['status'] != 'user') {
    header("Location: ../login.php");
    exit;
}

// 1. Koneksi ke database (sama seperti sebelumnya, pastikan Anda sudah menggantinya dengan informasi yang sesuai)
include '../connect.php';

// 2. Ambil username dari sesi 
$username = $_SESSION['username'];

// 3. Query untuk mengambil data berdasarkan username (pastikan tabel Anda memiliki kolom 'username')
$sql = "SELECT name, class, telp FROM user WHERE username = '$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $name = $row["name"];
  $class = $row["class"];
  $telp = $row["telp"];
  $nisn = $row["nisn"];

  // Periksa apakah data kosong atau "0", jika ya, ganti dengan pesan
  if (empty($name) || $name == "0") {
      $name = "Data Nama Belum Terisi!";
  }
  if (empty($class) || $class == "0") {
      $class = "Data Kelas Belum Terisi!";
  }
  if (empty($telp) || $telp == "0") {
      $telp = "Data Telp Belum Terisi!";
  }
  if (empty($nisn) || $nisn == "0") {
      $nisn = "Data NISN Belum Terisi!";
  }
} else {
  // Handle kasus jika tidak ada data yang ditemukan (sama seperti sebelumnya)
  $name = "Data tidak ditemukan"; 
  $class = "Data tidak ditemukan";
  $telp = "Data tidak ditemukan";
  $nisn = "Data tidak ditemukan";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <!-- Required meta tags -->
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <!-- Bootstrap CSS -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet"/>
  <link href="../assets/libs/css/style.css" rel="stylesheet"/>
  <link href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css" rel="stylesheet"/>
  <link href="../assets/vendor/charts/chartist-bundle/chartist.css" rel="stylesheet"/>
  <link href="../assets/vendor/charts/morris-bundle/morris.css" rel="stylesheet"/>
  <link href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css" rel="stylesheet"/>
  <link href="../assets/vendor/charts/c3charts/c3.css" rel="stylesheet"/>
  <link href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css" rel="stylesheet"/>
  <style>
    .custom-marquee {
    font-size: 18px;
    color: white;
    padding-left: 264px;
    background-color: red;
}
  </style>
  <title>
   E-Office Dashboard
  </title>
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
     <br/>
     <img alt="Logo E-Office" src="../assets/images/logo-user.png" style="width: 300px; height: 57px; margin-left: 30px"/>
     <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
      <span class="navbar-toggler-icon">
      </span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto navbar-right-top">
       <li class="nav-item">
        <div class="top-search-bar" id="custom-search">
         <input class="form-control" placeholder="Search.." type="text"/>
        </div>
       </li>
       <li class="nav-item dropdown notification">
        <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-icons" data-toggle="dropdown" href="#" id="navbarDropdownMenuLink1">
         <i class="fas fa-fw fa-bell">
         </i>
         <span class="indicator">
         </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
         <li>
          <div class="notification-title">
           Notification
          </div>
          <div class="notification-list">
           <div class="list-group">
            <a class="list-group-item list-group-item-action active" href="#">
             <div class="notification-info">
              <div class="notification-list-user-img">
               <img alt="" class="user-avatar-md rounded-circle" src="../assets/images/avatar-2.jpg"/>
              </div>
              <div class="notification-list-user-block">
               <span class="notification-list-user-name">
                Jeremy Rakestraw
               </span>
               accepted your invitation to join the team.
               <div class="notification-date">
                2 min ago
               </div>
              </div>
             </div>
            </a>
            <a class="list-group-item list-group-item-action" href="#">
             <div class="notification-info">
              <div class="notification-list-user-img">
               <img alt="" class="user-avatar-md rounded-circle" src="../assets/images/avatar-3.jpg"/>
              </div>
              <div class="notification-list-user-block">
               <span class="notification-list-user-name">
                John Abraham
               </span>
               is now following you
               <div class="notification-date">
                2 days ago
               </div>
              </div>
             </div>
            </a>
            <a class="list-group-item list-group-item-action" href="#">
             <div class="notification-info">
              <div class="notification-list-user-img">
               <img alt="" class="user-avatar-md rounded-circle" src="../assets/images/avatar-4.jpg"/>
              </div>
              <div class="notification-list-user-block">
               <span class="notification-list-user-name">
                Monaan Pechi
               </span>
               is watching your main repository
               <div class="notification-date">
                2 min ago
               </div>
              </div>
             </div>
            </a>
            <a class="list-group-item list-group-item-action" href="#">
             <div class="notification-info">
              <div class="notification-list-user-img">
               <img alt="" class="user-avatar-md rounded-circle" src="../assets/images/avatar-5.jpg"/>
              </div>
              <div class="notification-list-user-block">
               <span class="notification-list-user-name">
                Jessica Caruso
               </span>
               accepted your invitation to join the team.
               <div class="notification-date">
                2 min ago
               </div>
              </div>
             </div>
            </a>
           </div>
          </div>
         </li>
         <li>
          <div class="list-footer">
           <a href="#">
            View all notifications
           </a>
          </div>
         </li>
        </ul>
       </li>
       <li class="nav-item dropdown connection">
        <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
         <i class="fas fa-fw fa-th">
         </i>
        </a>
        <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
         <li class="connection-list">
          <div class="row">
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <a class="connection-item" href="#">
             <img alt="" src="../assets/images/github.png"/>
             <span>
              Github
             </span>
            </a>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <a class="connection-item" href="#">
             <img alt="" src="../assets/images/dribbble.png"/>
             <span>
              Dribbble
             </span>
            </a>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <a class="connection-item" href="#">
             <img alt="" src="../assets/images/dropbox.png"/>
             <span>
              Dropbox
             </span>
            </a>
           </div>
          </div>
          <div class="row">
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <a class="connection-item" href="#">
             <img alt="" src="../assets/images/bitbucket.png"/>
             <span>
              Bitbucket
             </span>
            </a>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <a class="connection-item" href="#">
             <img alt="" src="../assets/images/mail_chimp.png"/>
             <span>
              Mail chimp
             </span>
            </a>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <a class="connection-item" href="#">
             <img alt="" src="../assets/images/slack.png"/>
             <span>
              Slack
             </span>
            </a>
           </div>
          </div>
         </li>
         <li>
          <div class="conntection-footer">
           <a href="#">
            More
           </a>
          </div>
         </li>
        </ul>
       </li>
       <li class="nav-item dropdown nav-user">
        <a aria-expanded="false" aria-haspopup="true" class="nav-link nav-user-img" data-toggle="dropdown" href="#" id="navbarDropdownMenuLink2">
         <img alt="" class="user-avatar-md rounded-circle" src="../assets/images/avatar-1.jpg"/>
        </a>
        <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu dropdown-menu-right nav-user-dropdown">
         <div class="nav-user-info">
          <h5 class="mb-0 text-white nav-user-name">
           John Abraham
          </h5>
          <span class="status">
          </span>
          <span class="ml-2">
           Available
          </span>
         </div>
         <a class="dropdown-item" href="#">
          <i class="fas fa-user mr-2">
          </i>
          Account
         </a>
         <a class="dropdown-item" href="#">
          <i class="fas fa-cog mr-2">
          </i>
          Setting
         </a>
         <a class="dropdown-item" href="#">
          <i class="fas fa-power-off mr-2">
          </i>
          Logout
         </a>
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
      <a class="d-xl-none d-lg-none" href="#">
       Dashboard
      </a>
      <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNav" data-toggle="collapse" type="button">
       <span class="navbar-toggler-icon">
       </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav flex-column">
        <li class="nav-divider">
         Menu
        </li>
        <li class="nav-item">
         <a class="nav-link active" href="index.html">
          <i class="fa fa-fw fa-user-circle">
          </i>
          Dashboard
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="surat.php">
          <i class="fa fa-fw fa-envelope">
          </i>
          Permohonan Surat
         </a>
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
         <h2 class="pageheader-title">
          E-Office Dashboard
         </h2>
         <p class="pageheader-TEXT">
          Hello
          <?php echo $username; ?>
          , welcome to E-Office Smart Administration Dashboard
         </p>
         <div class="page-breadcrumb">
          <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
            <li class="breadcrumb-item">
             <a class="breadcrumb-link" href="#">
              Dashboard
             </a>
            </li>
            <li aria-current="page" class="breadcrumb-item active">
             E-Office
            </li>
           </ol>
          </nav>
         </div>
        </div>
       </div>
      </div>
      <!-- ============================================================== -->
      <!-- end pageheader  -->
      <!-- ============================================================== -->
      <div class="">
       <div class="row justify-content-center">
        <div class="card">
         <div class="card-body">
          <div class="user-avatar text-center d-block">
           <img alt="User Avatar" class="rounded-circle user-avatar-xxl" src="../assets/images/avatar-1.jpg"/>
          </div>
          <div class="text-center">
           <h2 class="font-24 mb-0">
           </h2>
           <p>
            Siswa di MAN 2 Jakarta
           </p>
          </div>
         </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
         <div class="card">
          <h5 class="card-header">
           Profile
          </h5>
          <div class="card-body">
           <form data-parsley-validate="" id="form" novalidate="">
            <div class="form-group row">
             <label class="col-3 col-lg-2 col-form-label text-right" for="inputName">
              Name
             </label>
             <div class="col-9 col-lg-10">
              <input class="form-control" id="inputName" placeholder="Name" required="" type="text" value="<?php echo $name; ?>"/>
             </div>
            </div>
            <div class="form-group row">
             <label class="col-3 col-lg-2 col-form-label text-right" for="inputClass">
              Class
             </label>
             <div class="col-9 col-lg-10">
              <input class="form-control" id="inputClass" placeholder="Class" required="" type="text" value="<?php echo $class; ?>"/>
             </div>
            </div>
            <div class="form-group row">
             <label class="col-3 col-lg-2 col-form-label text-right" for="inputNISN">
              NISN
             </label>
             <div class="col-9 col-lg-10">
              <input class="form-control" id="inputNISN" placeholder="NISN" required="" type="text" value="<?php echo $nisn; ?>"/>
             </div>
            </div>
            <div class="form-group row">
             <label class="col-3 col-lg-2 col-form-label text-right" for="inputTelp">
              Telp
             </label>
             <div class="col-9 col-lg-10">
              <input class="form-control" id="inputTelp" placeholder="Telp" required="" type="tel" value="<?php echo $telp; ?>"/>
             </div>
            </div>
           </form>
          </div>
         </div>
        </div>
        <!-- Total -->
        <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 col-12">
         <div class="card">
          <div class="card-body">
           <div class="d-inline-block">
            <h4 class="text-muted">
             Total Permohonan
            </h4>
            <h2 class="mb-0">
             78
            </h2>
            <h3 class="mb-0">
             Surat
            </h3>
           </div>
           <div class="float-right icon-circle-medium icon-box-lg bg-info-light mt-1">
            <i class="fas fa-envelope fa-fw fa-sm text-info">
            </i>
           </div>
          </div>
         </div>
        </div>
        <!-- Diterima -->
        <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 col-12">
         <div class="card">
          <div class="card-body">
           <div class="d-inline-block">
            <h4 class="text-muted">
             Permohonan Diterima
            </h4>
            <h2 class="mb-0">
             12
            </h2>
            <h3 class="mb-0">
             Surat
            </h3>
           </div>
           <div class="float-right icon-circle-medium icon-box-lg bg-primary-light mt-1">
            <i class="fas fa-envelope fa-fw fa-sm text-primary">
            </i>
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
            <h4 class="text-muted">
             Permohonan Diproses
            </h4>
            <h2 class="mb-0">
             3
            </h2>
            <h3 class="mb-0">
             Surat
            </h3>
           </div>
           <div class="float-right icon-circle-medium icon-box-lg bg-brand-light mt-1">
            <i class="fas fa-envelope fa-fw fa-sm text-brand">
            </i>
           </div>
          </div>
         </div>
        </div>
        <!-- Ditolak -->
        <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 col-12">
         <div class="card">
          <div class="card-body">
           <div class="d-inline-block">
            <h4 class="text-muted">
             Permohonan Ditolak
            </h4>
            <h2 class="mb-0">
             2
            </h2>
            <h3 class="mb-0">
             Surat
            </h3>
           </div>
           <div class="float-right icon-circle-medium icon-box-lg bg-secondary-light mt-1">
            <i class="fas fa-envelope fa-fw fa-sm text-secondary">
            </i>
           </div>
          </div>
         </div>
        </div>
       </div>
       <!-- Status Permohonan -->
       <div class="row">
        <div class="col-xl-15 col-lg-12 col-md-6 col-sm-12 col-12">
         <div class="card">
          <h5 class="card-header">
           Status Permohonan
          </h5>
          <div class="card-body p-0">
           <div class="table-responsive">
            <table class="table">
             <thead class="bg-light">
              <tr class="border-0">
               <th class="border-0">
                #
               </th>
               <th class="border-0">
                No. Permohonan
               </th>
               <th class="border-0">
                Jenis Permohonan
               </th>
               <th class="border-0">
                Waktu Permohonan
               </th>
               <th class="border-0">
                Status
               </th>
              </tr>
             </thead>
             <tbody>
              <tr>
               <td>
                1
               </td>
               <td>
                id000001
               </td>
               <td>
                Surat Keterangan Siswa
               </td>
               <td>
                27-08-2018 01:22:12
               </td>
               <td>
                <span class="badge-dot badge-brand mr-1">
                </span>
                Diproses
               </td>
              </tr>
              <tr>
               <td>
                2
               </td>
               <td>
                id000002
               </td>
               <td>
                Surat Permohonan Penelitian
               </td>
               <td>
                25-08-2018 21:12:56
               </td>
               <td>
                <span class="badge-dot badge-success mr-1">
                </span>
                Diterima
               </td>
              </tr>
              <tr>
               <td>
                3
               </td>
               <td>
                id000003
               </td>
               <td>
                Surat Keterangan Siswa
               </td>
               <td>
                24-08-2018 14:12:77
               </td>
               <td>
                <span class="badge-dot badge-primary mr-1">
                </span>
                Menunggu Approval
               </td>
              </tr>
              <tr>
               <td>
                4
               </td>
               <td>
                id000004
               </td>
               <td>
                Surat Keterangan Siswa
               </td>
               <td>
                23-08-2018 09:12:35
               </td>
               <td>
                <span class="badge-dot badge-danger mr-1">
                </span>
                Ditolak
               </td>
              </tr>
              <tr>
               <td colspan="9">
                <a class="btn btn-outline-light float-right" href="surat.html">
                 View Details
                </a>
               </td>
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
          <h5 class="card-header">
           Peminjaman Ruangan
          </h5>
          <div class="card-body p-0">
           <div class="table-responsive">
            <table class="table">
             <thead class="bg-light">
              <tr class="border-0">
               <th class="border-0">
                #
               </th>
               <th class="border-0">
                Ruangan
               </th>
               <th class="border-0">
                Lokasi
               </th>
               <th class="border-0">
                Ketersediaan
               </th>
               <th class="border-0">
                Reservasi
               </th>
              </tr>
             </thead>
             <tbody>
              <tr>
               <td>
                1
               </td>
               <td>
                Lab. Komputer
               </td>
               <td>
                Gedung Laboratorium dan Perpustakaan MAN 2 Jakarta
               </td>
               <td>
                <span class="badge badge-pill badge-primary">
                 Tersedia
                </span>
               </td>
               <td>
                <a class="btn btn-dark btn-sm" href="#">
                 <i class="fas fa-building">
                 </i>
                 Detail
                </a>
               </td>
              </tr>
              <tr>
               <td>
                2
               </td>
               <td>
                Lab. Fisika
               </td>
               <td>
                Gedung Laboratorium dan Perpustakaan MAN 2 Jakarta
               </td>
               <td>
                <span class="badge badge-pill badge-warning">
                 Sedang Terpakai
                </span>
               </td>
               <td>
                <a aria-disabled="true" class="btn btn-dark btn-sm disabled" href="#" role="button">
                 <i class="fas fa-building">
                 </i>
                 Detail
                </a>
               </td>
              </tr>
              <tr>
               <td>
                3
               </td>
               <td>
                Lab. Biologi
               </td>
               <td>
                Gedung Laboratorium dan Perpustakaan MAN 2 Jakarta
               </td>
               <td>
                <span class="badge badge-pill badge-warning">
                 Sedang Terpakai
                </span>
               </td>
               <td>
                <a aria-disabled="true" class="btn btn-dark btn-sm disabled" href="#" role="button">
                 <i class="fas fa-building">
                 </i>
                 Detail
                </a>
               </td>
              </tr>
              <tr>
               <td>
                4
               </td>
               <td>
                Aula
               </td>
               <td>
                Gedung Laboratorium dan Perpustakaan MAN 2 Jakarta
               </td>
               <td>
                <span class="badge badge-pill badge-secondary">
                 Tidak Tersedia
                </span>
               </td>
               <td>
                <a aria-disabled="true" class="btn btn-dark btn-sm disabled" href="#" role="button">
                 <i class="fas fa-building">
                 </i>
                 Detail
                </a>
               </td>
              </tr>
              <tr>
               <td>
                5
               </td>
               <td>
                R. Kelas
               </td>
               <td>
                XI-H
               </td>
               <td>
                <span class="badge badge-pill badge-primary">
                 Tersedia
                </span>
               </td>
               <td>
                <a class="btn btn-dark btn-sm" href="#">
                 <i class="fas fa-building">
                 </i>
                 Detail
                </a>
               </td>
              </tr>
              <tr>
               <td>
                6
               </td>
               <td>
                R. Kelas
               </td>
               <td>
                X-B
               </td>
               <td>
                <span class="badge badge-pill badge-secondary">
                 Tidak Tersedia
                </span>
               </td>
               <td>
                <a aria-disabled="true" class="btn btn-dark btn-sm disabled" href="#" role="button">
                 <i class="fas fa-building">
                 </i>
                 Detail
                </a>
               </td>
              </tr>
              <tr>
               <td colspan="5">
                <a class="btn btn-outline-light float-right" href="ruangan.html">
                 View Details
                </a>
               </td>
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
          <h5 class="card-header">
           Peminjaman Barang
          </h5>
          <div class="card-body p-0">
           <div class="table-responsive">
            <table class="table">
             <thead class="bg-light">
              <tr class="border-0">
               <th class="border-0">
                #
               </th>
               <th class="border-0">
                Barang
               </th>
               <th class="border-0">
                Jenis Barang
               </th>
               <th class="border-0">
                Ketersediaan
               </th>
               <th class="border-0">
                Aksi
               </th>
              </tr>
             </thead>
             <tbody>
              <tr>
               <td>
                1
               </td>
               <td>
                Kabel Roll
               </td>
               <td>
                Elektronik
               </td>
               <td>
                <span class="badge badge-pill badge-primary">
                 10
                </span>
               </td>
               <!-- Button trigger modal -->
               <td>
                <a class="btn btn-dark btn-sm" data-target="#exampleModal" data-toggle="modal" href="#">
                 <i class="fas fa-archive">
                 </i>
                 Pinjam
                </a>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog" tabindex="-1">
                 <div class="modal-dialog" role="document">
                  <div class="modal-content">
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                     Peminjaman Kabel Roll
                    </h5>
                    <a aria-label="Close" class="close" data-dismiss="modal" href="#">
                     <span aria-hidden="true">
                      ×
                     </span>
                    </a>
                   </div>
                   <div class="modal-body">
                    <form data-parsley-validate="" id="validationform" novalidate="">
                     <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">
                       Nama Lengkap
                      </label>
                      <div class="col-12 col-sm-9">
                       <input class="form-control" placeholder="" required="" type="text">
                       </input>
                      </div>
                     </div>
                     <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">
                       Jenis Kelamin
                      </label>
                      <div class="col-12 col-sm-8 col-lg-6">
                       <label class="custom-control custom-radio custom-control-inline">
                        <input checked="" class="custom-control-input" name="radio-inline" type="radio">
                         <span class="custom-control-label">
                          Laki-Laki
                         </span>
                        </input>
                       </label>
                       <label class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" name="radio-inline" type="radio">
                         <span class="custom-control-label">
                          Perempuan
                         </span>
                        </input>
                       </label>
                      </div>
                     </div>
                     <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">
                       Kelas
                      </label>
                      <div class="col-12 col-sm-9">
                       <select class="custom-select" id="inputGroupSelect01">
                        <option selected="">
                         Silahkan Pilih...
                        </option>
                        <option value="1">
                         X
                        </option>
                        <option value="2">
                         XI
                        </option>
                        <option value="3">
                         XII
                        </option>
                       </select>
                      </div>
                     </div>
                     <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">
                       Qty.
                      </label>
                      <div class="col-12 col-sm-9">
                       <input class="form-control" placeholder="" required="" type="number"/>
                      </div>
                     </div>
                     <!-- ... (other form groups) ... -->
                     <div class="modal-footer">
                      <a class="btn btn-secondary" data-dismiss="modal" href="#">
                       Close
                      </a>
                      <a class="btn btn-primary" href="#">
                       Submit
                      </a>
                     </div>
                    </form>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td>
                2
               </td>
               <td>
                Proyektor
               </td>
               <td>
                Elektronik
               </td>
               <td>
                <span class="badge badge-pill badge-warning">
                 2
                </span>
               </td>
               <td>
                <!-- Button trigger modal -->
                <a class="btn btn-dark btn-sm" data-target="#exampleModal1" data-toggle="modal" href="#">
                 <i class="fas fa-archive">
                 </i>
                 Pinjam
                </a>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog" tabindex="-1">
                 <div class="modal-dialog" role="document">
                  <div class="modal-content">
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                     Peminjaman Proyektor
                    </h5>
                    <a aria-label="Close" class="close" data-dismiss="modal" href="#">
                     <span aria-hidden="true">
                      ×
                     </span>
                    </a>
                   </div>
                   <div class="modal-body">
                    <form data-parsley-validate="" id="validationform" novalidate="">
                     <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">
                       Nama Lengkap
                      </label>
                      <div class="col-12 col-sm-9">
                       <input class="form-control" placeholder="" required="" type="text"/>
                      </div>
                     </div>
                     <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">
                       Jenis Kelamin
                      </label>
                      <div class="col-12 col-sm-8 col-lg-6">
                       <label class="custom-control custom-radio custom-control-inline">
                        <input checked="" class="custom-control-input" name="radio-inline" type="radio"/>
                        <span class="custom-control-label">
                         Laki-Laki
                        </span>
                       </label>
                       <label class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" name="radio-inline" type="radio"/>
                        <span class="custom-control-label">
                         Perempuan
                        </span>
                       </label>
                      </div>
                     </div>
                     <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">
                       Kelas
                      </label>
                      <div class="col-12 col-sm-9">
                       <select class="custom-select" id="inputGroupSelect01">
                        <option selected="">
                         Silahkan Pilih...
                        </option>
                        <option value="1">
                         X
                        </option>
                        <option value="2">
                         XI
                        </option>
                        <option value="3">
                         XII
                        </option>
                       </select>
                      </div>
                     </div>
                     <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">
                       Qty.
                      </label>
                      <div class="col-12 col-sm-9">
                       <input class="form-control" disabled="" placeholder="1" required="" type="number"/>
                       <p class="text-danger">
                        Hanya diperbolehkan untuk meminjam 1 Item
                       </p>
                      </div>
                     </div>
                     <div class="modal-footer">
                      <a class="btn btn-secondary" data-dismiss="modal" href="#">
                       Close
                      </a>
                      <a class="btn btn-primary" href="#">
                       Submit
                      </a>
                     </div>
                    </form>
                   </div>
                  </div>
                 </div>
                </div>
               </td>
              </tr>
              <tr>
               <td>
                3
               </td>
               <td>
                Speaker
               </td>
               <td>
                Elektronik
               </td>
               <td>
                <span class="badge badge-pill badge-secondary">
                 Tidak Tersedia
                </span>
               </td>
               <td>
                <a aria-disabled="true" class="btn btn-dark btn-sm disabled" href="#" role="button">
                 <i class="fas fa-archive">
                 </i>
                 Pinjam
                </a>
               </td>
              </tr>
              <tr>
               <td>
                4
               </td>
               <td>
                Spidol Hitam
               </td>
               <td>
                Alat Tulis Kantor
               </td>
               <td>
                <span class="badge badge-pill badge-secondary">
                 Tidak Tersedia
                </span>
               </td>
               <td>
                <a aria-disabled="true" class="btn btn-dark btn-sm disabled" href="#" role="button">
                 <i class="fas fa-archive">
                 </i>
                 Pinjam
                </a>
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
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        Copyright © 2024
        <a href="https://man2jakarta.sch.id/">
         MAN 2 Jakarta
        </a>
        . All rights reserved. Dashboard by
        <a href="https://colorlib.com/wp/">
         Colorlib
        </a>
        .
       </div>
       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="text-md-right footer-links d-none d-sm-block">
         <a href="javascript: void(0);">
          About
         </a>
         <a href="javascript: void(0);">
          Support
         </a>
         <a href="javascript: void(0);">
          Contact Us
         </a>
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
  <script src="../assets/vendor/jquery/jquery-3.3.1.min.js">
  </script>
  <!-- bootstap bundle js -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js">
  </script>
  <!-- slimscroll js -->
  <script src="../assets/vendor/slimscroll/jquery.slimscroll.js">
  </script>
  <!-- main js -->
  <script src="../assets/libs/js/main-js.js">
  </script>
  <!-- chart chartist js -->
  <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js">
  </script>
  <!-- sparkline js -->
  <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js">
  </script>
  <!-- morris js -->
  <script src="../assets/vendor/charts/morris-bundle/raphael.min.js">
  </script>
  <script src="../assets/vendor/charts/morris-bundle/morris.js">
  </script>
  <!-- chart c3 js -->
  <script src="../assets/vendor/charts/c3charts/c3.min.js">
  </script>
  <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js">
  </script>
  <script src="../assets/vendor/charts/c3charts/C3chartjs.js">
  </script>
  <script src="../assets/libs/js/dashboard-ecommerce.js">
  </script>
  <!-- Calendar -->
  <script src="../assets/vendor/datepicker/moment.js">
  </script>
  <script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js">
  </script>
  <script src="../assets/vendor/datepicker/datepicker.js">
  </script>
  <script src="../assets/vendor/parsley/parsley.js">
  </script>
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
