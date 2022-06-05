   <nav class="navbar navbar-expand-sm ">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <h1 class="pb-2 display-4"><a class="navbar-brand" href="./"><i  class="fa fa-user"> Admin</i></a></h1>
                <a class="navbar-brand hidden" href="./"><i class="fa fa-user"></i></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php  echo base_url('index.php/admin/c_admin/dashboard'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-envelope"></i>submission</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-envelope-o"></i><a href="<?php echo base_url('index.php/admin/dt_admin'); ?>">School submission</a></li>

                            <li><i class="fa fa-envelope-o"></i><a href="<?php echo base_url('index.php/admin/c_laporan'); ?>">Laporan</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo base_url('index.php/admin/c_admin/logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

