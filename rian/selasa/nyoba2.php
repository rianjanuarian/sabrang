<!DOCTYPE html>
<html>
<head>
<script src="pop.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
<title>S.I.D Sabrang</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

  
	<div class="container">
		
        <div class="row">
            <div class="col-md-12">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
      <nav class="navbar navbar-light bg-light justify-content-between"> <p><a class="navbar-brand">S.I.D</a></p>
        <p>Jl. watu ulo no 1, Desa Sabrang, Kec. Ambulu, Kab. Jember , Kode Pos 68172</p>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
        <?php
   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["username"])){
        echo  $_SESSION ['username'];
   
    echo "<a href='nyoba.html'>Logout</a>";
    }else{
        echo header("location:nyoba2.php");
    }
                ?> 
              </ul>
      </nav>
      <div class=malasngoding-slider>
          <div class=isi-slider>
            <img src="sabrang.jpg" alt="Gambar 1" height="100" width="100">
            <img src="desa.jpg" alt="Gambar 2" height="100" width="100">
  </div>
      </div>
        </div>
     </div>
        
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">				
				<li class="active"><a href="nyoba.html">Home <span class="sr-only">(current)</span></a></li>
				<li><a href="profil.html">Profil</a></li>
				<li><a href="#">Tentang Kami</a></li> 
				<li><a href="#">Kontak</a></li> 
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Petunjuk
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">*</a></li>
						<li><a href="#">*</a></li>
						<li><a href="#">*</a></li> 
					</ul>
				</li>
			</ul>
		
		
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<div class="container mt-3">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-header">
                <h4 class="text-mono text-center">Arsip</h4>
              </div>
              <div class="card-body">
              
                <br />
                <blockquote class="card-blockquote">
                        <p><a href="summon.html">1. Daftar Wisata Desa</a></p>
                        <p><a href="summon.html">2. Daftar Warga</a></p>
                       <p> <a href="summon.html">3. DUAR</a></p>
                </blockquote>
              </div>
            </div>
            <div class="card mb-3">
                    <div class="card-header">
                      <h4 class="text-mono text-center">KOLOM COBA PAKE GAMBAR</h4>
                    </div>
                    <div class="card-body">
                      <img src="deluge.png" style="height: 110px;" class="mx-auto d-block">
                      <br />
                      <blockquote class="card-blockquote">
                        <p class="text-center">KALO MAU PAKE GAMBAR</p>
                      </blockquote>
                      
                    </div>
                    <div class="card mb-3">
                      <div class="card-header">
                        <h4 class="text-mono text-center">KOLOM COBA PAKE GAMBAR</h4>
                      </div>
                      <div class="card-body">
                        <img src="deluge.png" style="height: 110px;" class="mx-auto d-block">
                        <br />
                        <blockquote class="card-blockquote">
                          <p class="text-center">KALO MAU PAKE GAMBAR</p>
                        </blockquote>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- Isi Content -->
                <div class="col-md-8 mb-3">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="text-mono text-center">Artikel</h4>
                    </div>
                    <div class="card-body">
                      <img style="float:left;" src="deluge.png" class="img mr-3" height="42" width="42" />
                      <h5 class="card-title">artikel 1</h5>
                      <small><p>20 oktober 2019</p></small>
                      <p class="card-text">desa sabrang adalah <a href="summon.html">lanjut baca</a>
                      </p>
                    </div>
                    <div class="card-body">
                      <img style="float:left;" src="deluge.png" class="img mr-3" height="42" width="42"/>
                      <h5 class="card-title">artikel 2</h5>
                      <small><p>20 oktober 2019</p></small>
                      <p class="card-text">wisata desa sabrang ada banyak. <a href="summon.html">lanjut baca</a>
                      </p>
                  </div>
                  <div class="card-body">
                      <img style="float:left;" src="deluge.png" class="img mr-3" height="42" width="42"/>
                      <h5 class="card-title">artikel 3</h5>
                      <small><p>20 oktober 2019</p></small>
                      <p class="card-text">papuma merupakan bla bla <a href="summon.html">lanjut baca</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Footer -->
              <div class="footer-bottom">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-md-center">&copy; ini copyrught</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
</body>
</html>