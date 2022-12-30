
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>e-ST</title>
  <!-- Favicon -->
  <link rel="icon" href="././assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="././assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="././assets/vendor/font-awesome/css/font-awesome.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="././assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="././assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  " href="st.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Surat Tugas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="spd.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Surat Perintah Dinas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="agenda.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Buku Agenda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="laporan.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="././assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Selamat Datang!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Pengaturan</span>
                </a>

                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><i class="fa fa-pencil"></i> Surat Perintah Dinas</h6>

            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class=" col ">
          <div class="card">
            <div class="card-header bg-transparent">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah</button>
              <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 60%;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-pencil"></i> Tambah Surat Tugas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                            <div class="form-group">
                              <label for="inputEmail4">No. ST :</label>
                              <input type="text" class="form-control" id="no_st" placeholder="--- Masukan NO. ST ---">
                            </div>
                            <div class="form-group">
                              <label for="inputPassword4">Dasar ST :</label>
                              <input type="text" class="form-control" id="dasar_st" placeholder="--- Masukan Dasar ST ---">
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">1. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">2. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">3. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">4. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">5. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">6. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">7. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">8. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">9. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputState">10. Nama/Nip :</label>
                                <select id="inputState" class="form-control">
                                  <option selected>--- Pilih Nama/Nip ---</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Pangkat/Jabatan :</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                 
                
                            </div>
                     
                          <div class="form-group">
                            <label for="inputAddress">Untuk :</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="--- Masukan Untuk: ---">
                          </div>
                          <div class="form-group">
                            <label for="inputAddress2">Di :</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="--- Masukan Di ---">
                          </div>
                           <div class="form-group">
                            <label for="inputAddress2">Tanggal ST :</label>
                            <input type="date" class="form-control" id="inputAddress2" placeholder="--- Masukan Tanggal ST ---">
                          </div>
                        
                         
                          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
              <!-- akhir modal -->
            </div>
            <div class="card-body">
              <div class="row icon-examples">
                <!-- konten -->
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No. ST</th>
                      <th scope="col">Dasar ST</th>
                      <th scope="col">Untuk</th>
                      <th scope="col">Di</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>
                <!-- konten -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
            <b class="font-weight-bold ml-1" >Hak Cipta : Muammar,SST - Kausar - Mukhtasar,SST</b> &copy; 2020 
            </div>
          </div>

        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="././assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="././assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="././assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="././assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="././assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->

  <!-- Argon JS -->
  <script src="././assets/js/argon.js?v=1.2.0"></script>
</body>

</html>