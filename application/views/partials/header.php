<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-info navbar-dark" style="background-color: #071a52">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?=base_url('home/dashboard')?>" class="nav-link">Home</a>
    </li>
  </ul>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #071a52">
  <!-- Brand Logo -->
  <a href="<?php echo base_url(); ?>assets/adminlte/index3.html" class="brand-link">
    <img src="<?php echo base_url(); ?>images/download.png"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">A</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url(); ?>images/nama.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?=$_SESSION['nama']?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">MENU</li>
      <?php 
          if ($_SESSION['level']==="1") {
            ?>
            <li class="nav-item">
              <a href="<?=base_url('crud/index')?>" class="nav-link">
                <i class="fas fa-print nav-icon"></i>
                <p>User</p>
              </a>
            </li>
            <?php
          }
       ?>
      <!--
      <li class="nav-item has-treeview">
        <a href="" class="nav-link">
          <i class="fas fa-print nav-icon"></i>
          <p>Simulasi Pengisian</p>
          <i class="right fas fa-angle-left"></i>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?=base_url('kkk1/index')?>" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p>Singkronisasi Isu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('kkk2/index')?>" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p>Singkronisasi Arah</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('kkk3a/index')?>" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p>Sinkronisasi visi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('kkk3b/index')?>" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p>Sinkronisasi misi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('kkk3c/index')?>" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p>Sinkronisasi Tujuan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('kkk3d/index')?>" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p>Sinkronisasi Sasaran</p>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-item has-treeview">
        <a href="" class="nav-link">
          <i class="fas fa-print nav-icon"></i>
          <p>Informasi Umum
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('home/kkkompilasi')?>" class="nav-link">
              <i class="far fa-dot-circle nav-icon ml-5"></i>
              <p></p>
            </a>
          </li>
        </ul>
      </li>
    -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fas fa-print nav-icon"></i>
            <p>Keselarasan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=base_url('home/kkkompilasi')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Kompilasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk1/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk2/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkk3k')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Rekap Langkah 3</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk3a/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 3a</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk3b/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 3b</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk3c/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 3c</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk3d/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 3d</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk4/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 4</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk5/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 5</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk6/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 6</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk7/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 7</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk8/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 8</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('kkk9/index')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>Langkah 9</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-print"></i>
            <p>Reviu Linkage
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=base_url('home/kkrkompilasi')?>" class="nav-link">
                  <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KOMPILASI</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr1a')?>" class="nav-link">
                  <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR1A</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr1b')?>" class="nav-link">
                  <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR1B</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr2a')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR2A</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr2b')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR2B</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr3a')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR3A</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr3b')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR3B</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr4a')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR4A</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr4b')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR4B</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr4c')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR4C</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr4d')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR4D</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr5a')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR5A</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr5b')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR5B</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url('home/kkr6')?>" class="nav-link">
                <i class="far fa-dot-circle nav-icon ml-5"></i>
                <p>KKR6</p>
              </a>
            </li>
            <!--
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p> SUB MENU 3</p>
                  </a>
                </li>
              -->
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="<?=base_url('home/selaras')?>" class="nav-link" class="nav-link">
                <i class="fas fa-print nav-icon"></i>
                <p>MR Program
                    <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url('home/form1a')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 1.a</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form1b')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 1.b</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form1c')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 1.c</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form2a')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 2.a</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form2b')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 2.b</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form2c')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 2.c</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form3a')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 3.a</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form3b')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 3.b</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form3c')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 3.c</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form4')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 4</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/form5')?>" class="nav-link">
                    <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Form 5</p>
                  </a>
                </li>

                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="" class="nav-link" class="nav-link">
                <i class="fas fa-print nav-icon"></i>
                <p>Monitoring RTP
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=base_url('home/form6')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                      <p>Form 6</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url('home/form7')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                      <p>Form 7</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url('home/form8')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                      <p>Form 8</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url('home/form9')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                      <p>Form 9</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url('home/form10')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                      <p>Form 10</p>
                    </a>
                </ul>
            </li>
          </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-print nav-icon"></i>
                <p>Monitoring Program
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url('home/kkm1')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>KKM1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/kkm2')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>KKM2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/kkm3')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>KKM3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/kkm4')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>KKM4</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/kkm5')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>KKM5</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/kkm6')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>KKM6</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="" class="nav-link" class="nav-link">
                <i class="fas fa-print nav-icon"></i>
                <p>Evaluasi Program
                    <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?=base_url('home/eva1')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>IPM</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('home/eva2')?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon ml-5"></i>
                    <p>Efisiensi</p>
                  </a>
                </li>
              </ul>
          </ul>
        </li>
        <!--
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Monitoring Prog</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Evaluasi Program</p>
          </a>
        </li>
      -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
