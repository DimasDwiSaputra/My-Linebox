@extends('layout.appTable')
@section('title', 'Table')

@section('content')

   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Linebox</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Dimas Saputra</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form">Form Karyawan</a></li>
                      <li><a href="formGaji">Form Gaji</a></li>
                      
                    </ul>
                  </li>
                 
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="table">Tables Karyawan</a></li>
                      <li><a href="tableGaji">Table Gaji</a></li>
                      <li><a href="daterange">Table Date Range Gaji</a></li>
                      <li><a href="reportPcs">Table Report Stock</a></li>
                    </ul>
                  </li>
                 
                  
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">Dimas Saputra
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span> Dimas Saputra</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="img/new_logo.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>Dimas Saputra</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="img/new_logo.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>Dimas Saputra</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="img/new_logo.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>Dimas Saputra</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Gaji Karyawan</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

             <div class="card mt-3">
  <div class="card-header">
    Data Gaji  |
    <a class="btn btn-primary" style="color: white;" href="{{route('addGaji')}}" role="button">Tambah Data Gaji</a>
    <a href="/gaji/cetak_pdf" class="btn btn-info" target="_blank">CETAK PDF</a>
  </div>
<div class="card-body">
<div class="table-responsive">
 <table class="table table-hover table-bordered">
  <thead class="table-dark">
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Sabtu</td>
      <td>Senin</td>
      <td>Selasa</td>
      <td>Rabu</td>
      <td>Kamis</td>
      <td>Jumat</td>
      <td>Jumlah Barang</td>
      <td>Cost</td>
      <td>Date</td>
      <td>Action</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($gaji as $key => $value) {?>
    <tr>
      <td><?php echo $key++;?></td>
      <td><?php echo $value->nama;?></td>
      <td><?php echo $value->sabtu;?></td>
      <td><?php echo $value->senin;?></td>
      <td><?php echo $value->selasa;?></td>
      <td><?php echo $value->rabu;?></td>
      <td><?php echo $value->kamis;?></td>
      <td><?php echo $value->jumat;?></td>
      <td><?php echo $value->jumlah_barang;?></td>
      <td>Rp. {{number_format($value->cost )}}</td>
      <td><?php echo $value->date;?></td>
      <td><a class="btn btn-warning" href="/projectku/editGaji/{{ $value->id_gaji}}" role="button">Edit</a>| <a class="btn btn-danger" href="/projectku/hapusGaji/{{ $value->id_gaji}}" role="button">Delete</a></td>
    </tr>
  <?php }?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="9" style="text-align: center;" class="font-weight-bold">Total</td>
      <td colspan="3">Rp.{{number_format($jumlah)}}</td>
    </tr>
  </tfoot>
 </table>
</div>
</div>
</div>
             

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    
  </body>
</html>
@endsection