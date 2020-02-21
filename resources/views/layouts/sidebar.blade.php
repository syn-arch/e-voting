<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('img/admin/' . Session::get('gambar') )}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Session::get('nm_admin') }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

<!--        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul> -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?= $judul == 'Dashboard' ? 'class="active"' : '' ?>><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="/" target="_blank"><i class="fa fa-external-link"></i> <span>Lihat Website</span></a></li>
        <li <?= $judul == 'Live Preview' ? 'class="active"' : '' ?>><a href="/live"><i class="fa fa-desktop"></i> <span>Live Preview</span></a></li>
        <li <?= $judul == 'Generate Barcode' ? 'class="active"' : '' ?>><a href="/generate_barcode"><i class="fa fa-barcode"></i> <span>Generate Barcode</a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Data Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $judul == 'Data Jurusan' ? 'class="active"' : '' ?>><a href="/jurusan"><i class="fa fa-university"></i> <span>Data Jurusan</span></a></li>
            <li <?= $judul == 'Data Kelas' ? 'class="active"' : '' ?>><a href="/kelas"><i class="fa fa-server"></i> <span>D</span>ata Kelas</a></li>
            <li <?= $judul == 'Data Kandidat' ? 'class="active"' : '' ?>><a href="/kandidat"><i class="fa fa-user"></i> <span>Data Kandidat</a></li>
          </ul>
        </li>
        <li class="header">USER</li>
        <li <?= $judul == 'Profile Saya' ? 'class="active"' : '' ?>><a href="/user/my-profile"><i class="fa fa-user"></i> <span>Profil Saya</span></a></li>
        <li <?= $judul == 'Edit Profile' ? 'class="active"' : '' ?>><a href="/user/edit-my-profile"><i class="fa fa-edit"></i> <span>Edit Profil</span></a></li>
        <li <?= $judul == 'Ubah Password' ? 'class="active"' : '' ?>><a href="/user/ubah-password"><i class="fa fa-key"></i> <span>Ubah Password</span></a></li>
        <li class="header">SYSTEM</li>
        <li><a href="/auth/logout"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>