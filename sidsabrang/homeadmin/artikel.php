<?php include 'fungsi\config.php'; ?>
<?php
session_start();
if($_SESSION['status']==""){
    header('location:../index.php?belum_login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Sistem Informasi Desa Sabrang</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i>Hello <?php echo $_SESSION['nama']; ?></i>
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <li> <a class="dropdown-item" href="profil.php">Profil</a></li>

          <li> <a class="dropdown-item" href="../indexlogin.php">Kembali Ke Website</a></li>
          
          <div class="dropdown-divider"></div>
          <li> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
        </ul>
      </div>
      </li>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-table"></i>
          <span>Data Anggota</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Data:</h6>
        <?php
        if($_SESSION['levelad'] == "Super Admin"){
          echo "<a class='dropdown-item' href='pdpenduduk.php'>Data Penduduk</a>
          <a class='dropdown-item' href='pdkeluarga.php'>Data Keluarga</a>
          <a class='dropdown-item' href='pdadmin.php'> Data Admin</a>
          <a class='dropdown-item' href='pdpdesa.php'>Data Perangkat Desa</a>";
        }else if($_SESSION['levelad'] == "Admin"){
          echo "<a class='dropdown-item' href='pdpenduduk.php'>Data Penduduk</a>
          <a class='dropdown-item' href='pdkeluarga.php'>Data Keluarga</a>
          <a class='dropdown-item' href='pdpdesa.php'>Data Perangkat Desa</a>";
        }else if($_SESSION['levelad'] == "Perangkat Desa"){
          echo "<a class='dropdown-item' href='pdpenduduk.php'>Data Penduduk</a>
          <a class='dropdown-item' href='pdkeluarga.php'>Data Keluarga</a>";
        }
        ?>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Surat Online</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Surat:</h6>
          <a class="dropdown-item" href="dtdomisili.php">SK Domisili</a>
          <a class="dropdown-item" href="dtbnikah.php">SK Belum Nikah</a>
          <a class="dropdown-item" href="dtskck.php">SK SKCK</a>
          <a class="dropdown-item" href="dtusaha.php">SK Tempat Usaha</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Artikel</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Artikel:</h6>
          <a class="dropdown-item" href="artikel.php">Artikel</a>
          <a class="dropdown-item" href="artikelin.php">Tambah Artikel</a>
          <a class="dropdown-item" href="komentar.php">Komentar</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-file"></i>
          <span>Laporan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Data:</h6>
          <a class="dropdown-item" href="lapenduduk.php">Data Penduduk</a>
          <a class="dropdown-item" href="lapkeluarga.php">Data Keluarga</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pkModal">Penduduk & Keluarga</a>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Beranda</a>
          </li>
          <li class="breadcrumb-item active">Artikel</li>
          <li class="breadcrumb-item active">Artikel</li>
        </ol>
        

          <!-- DataTables Example --> 
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Artikel</div>

          <div class="card-body">
          <hr>
          <td></td><a href="artikelin.php"><button tyep="button" class="btn btn-primary">Tambah Artikel</button></a>
          <td></td><button tyep="button" class="btn btn-primary" data-toggle="modal" data-target="#kategori">Tambah Kategori</button>
           <hr>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>ID</th>
                  <th>Gambar</th>
                    <th>ID Admin</th>
                    <th>ID Kategori</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Komentar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Gambar</th>
                    <th>ID Admin</th>
                    <th>ID Kategori</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Komentar</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                   $data = tampilArtikel(); foreach($data as $row):?> 
                    <tr>
                   <td><?php echo $row['ID_ARTIKEL']?></td>
                   <td><img src="images/<?php echo $row['FOTO_ARTIKEL']?>" width="50" height="50"></td>
                    <td><?php echo $row['ID_ADMIN'];?></td>
                    <td><?php echo $row['ID_KATEGORI'];?></td>
                    <td><?php echo $row['JUDUL_ARTIKEL'];?></td>
                    <td><?php echo $row['STATUS_ARTIKEL'];?></td>
                    <td><?php echo jumlahKomentar($row['ID_ARTIKEL']);?></td>
                    <td><a onclick="return confirm('Apakah Anda Ingin Melihat Artikel?')" class="fas fa-few fa-eye" href="detail.php?id=<?= $row['ID_ARTIKEL'] ?>"> </a>
                          <a onclick="return confirm('Apakah Anda Ingin Mengubah Artikel?')" class="fas fa-few fa-edit" href="editArtikel.php?id=<?= $row['ID_ARTIKEL'] ?>"></a> 
                          <a onclick="return confirm('Apakah Anda Ingin Menghapus artikel ini?')" class="fas fa-few fa-trash" href="hapusArtikel.php?id=<?= $row['ID_ARTIKEL'] ?>"></a></td>
                    </tr>

                    <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- DataTables Example --> 
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Kategori</div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                   include 'koneksi.php';
                   $query = "select * from kategori";
                   $sql = mysqli_query($koneksi, $query);
                   while ($row=mysqli_fetch_array($sql)){?> 
                    <tr>
                   <td><?php echo $row['ID_KATEGORI']?></td>
                    <td><?php echo $row['KATEGORI'];?></td>
                    <td><?php echo $row['STATUS_KAT'];?></td>
                    <td><a onclick="return confirm('Apakah Anda Ingin Mengubah Status Artikel?')" class="fas fa-few fa-ban" href="detail.php?id=<?= $row['ID_ARTIKEL'] ?>"> </a>
                          <a onclick="return confirm('Apakah Anda Ingin Menghapus artikel ini?')" class="fas fa-few fa-trash" href="hapusArtikel.php?id=<?= $row['ID_ARTIKEL'] ?>"></a></td>
                    </tr>

                   <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright ?? Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hentikan Aktivitas?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" jika Anda ingin mengakhiri aktivitas sebelumnya.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
 <!-- Laporan Modal-->
 <div class="modal fade" id="pkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Masukkan NO KK</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <form class="modal-body" method="post" action="lapenkel.php">
          <div class="form-group">
            <label>NO KK</label>
            <input type="text" name="nomorkk" id="nomorkk" class="form-control" onkeyup="isi_otomatis()" required>
          </div>
          <hr>
          <input type="submit" name="cetak" value="Cetak" class="btn btn-primary">
        </form>
        <script type="text/javascript">
            function isi_otomatis(){
                var NO_KK = $("#NO_KK").val();
                $.ajax({
                    url: 'prosesajax.php',
                    data:"NO_KK="+NO_KK ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#KEPALA').val(obj.KEPALA);
                });
            }
        </script>
      </div>
    </div>
  </div>
   <!-- Kategori Modal-->
   <?php
   include 'koneksi.php';
              $kueri1="SELECT max(ID_KATEGORI) as maxKode FROM kategori";
              $hasil1= mysqli_query($koneksi, $kueri1);
              $tabel1 = mysqli_fetch_array($hasil1);
              $ID5= $tabel1['maxKode'];

              $noUrut1 = (int) substr($ID5, 2, 3);
              $noUrut1++;

              $char1="AD";
              $ID5= $char1 . sprintf("%03s", $noUrut1);
            ?>
   <div class="modal fade" id="kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <form class="modal-body"  method="post" action="simpankat.php">
          <div class="form-group">
            <label>ID Kategori</label>
            <input type="text" name="id" class="form-control" value="<?php echo $ID5; ?>" readonly>
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control">
          </div>
          <hr>
          <input type="submit" name="simpankat" value="Simpan" class="btn btn-primary">
        </form>
        <?php
        if(isset($_GET["simpan_eror"])){
          echo "<script>alert('Tidak Dapat Menyimpan Data!!');history.go(-1);</script>";
        }else if(isset($_GET["kosong"])){
          echo "<script>alert('Silahkan Isi Data dengan Lengkap');history.go(-1);</script>";
        }

  ?>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
