
<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi || Ajuan Prakerin</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/pengguna/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/pengguna/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/pengguna/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/pengguna/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/pengguna/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/pengguna/css/theme/yellow.css">

</head> 
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Aplikasi</span> Prakerin</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="active">
        <a href="<?php echo base_url('index.php/pengguna/c_pengguna/dashboard'); ?>">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      <li class="@@menu.messaging">
        <a href="<?php echo base_url('index.php/pengguna/dt_pengguna'); ?>">
          <div class="icon">
            <i class="fa fa-comments" aria-hidden="true"></i>
          </div>
          <div class="title">Ajukan Permohonan</div>
        </a>
      </li>
      <li class="dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">UI Kits</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> <?php echo $nama_sekolah; ?></li>
            <li><a href="<?php echo base_url('index.php/pengguna/dt_siswa'); ?>">Data Siswa</a></li>
            <li><a href="<?php  echo base_url('index.php/pengguna/dt_pengguna'); ?>">Data Sekolah</a></li>
            <li class="line"></li>
  
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Pages</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
            <!-- <li><a href="./pages/landing.html">Landing</a></li> -->
            <li><a href="<?php echo base_url('index.php/pengguna/c_pengguna/logout'); ?>">Logout</a></li>
            <li><a href="<?php echo base_url('index.php/register/registerUser'); ?>">Register</a></li>
            <!-- <li><a href="./pages/404.html">404</a></li> -->
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div>
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>
<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars">
              
            </i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">Aplikasi</span> Pengajuan</a>
        </li>
        <li>
         
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title"><?php  echo $nama_sekolah; ?></li>
        <li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Search..">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown notification">
          
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Ordering</li>
              <li class="dropdown-empty">No New Ordered</li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown notification warning">
         
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Message</li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">10</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Payment Confirmation.."</div>
                      <div class="description">Alan Anderson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">5</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Hello World"</div>
                      <div class="description">Marco  Harmon</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">2</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Order Confirmation.."</div>
                      <div class="description">Brenda Lawson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
           <h1> <i class="fa fa-university"></i></h1>
            <div class="title">Profile</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">Profile</h4>
            </div>
            <ul class="action">
              <li>
                <a href="#">
                Email :
                  <small><?php echo $email; ?></small>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  Sekolah :
                  <small><?php echo $nama_sekolah; ?></small>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('index.php/pengguna/c_pengguna/logout'); ?>">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="row">
  <div class="col-xs-12">
    <div class="card card-banner card-chart card-green no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Aplikasi Pengajuan Prakerin </div>
          <br><br>
          <div class="title"><small><marquee behavior ="alternate">Selamat Datang Sekolah <?php echo $nama_sekolah; ?></marquee></small></div>       
        </div>
        <ul class="card-action">
          <li>
            <a href="<?php echo base_url('index.php/pengguna/c_pengguna/dashboard'); ?>">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body">
       
      </div>
    </div>
  </div>
</div>
  <?php $this->load->view($isi); ?>
  <footer class="app-footer"> 
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
        Copyright © 2019
      </div>
    </div>
  </div>
</footer>
</div>

  </div>
  
<!--   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/pengguna/js/vendor.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/pengguna/js/app.js"></script>
</body>
</html>