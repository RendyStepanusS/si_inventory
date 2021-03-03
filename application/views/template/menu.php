<div class="left-sidebar-pro">
  <nav id="sidebar">
    <div class="sidebar-header">
      <a href="#"><img src="<?= base_url(); ?>assets/img/logo/logostt.jpg" alt="" />
      </a>
      <h3 class="text-black">Sistem Informasi</h3>
      <p>Inventaris Barang</p>
    </div>
    <div class="left-custom-menu-adp-wrap">
      <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
          <a href="<?= base_url(); ?>"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dashboard</span></a>
        </li>
        <!-- <li class="nav-item">
          <a href="#"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Helpdesk</span></a>
        </li> -->
        <!-- Menu data master -->
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Data Master</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
          <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
            <a href="<?= base_url('kategori'); ?>" class="dropdown-item">Data Kategori</a>
            <a href="<?= base_url('ruangan'); ?>" class="dropdown-item">Data Ruangan</a>
            <a href="<?= base_url('gedung'); ?>" class="dropdown-item">Data Gedung</a>
          </div>
        </li>

        <!-- menu inventaris -->
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Inventaris</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
          <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
            <a href="#" class="dropdown-item">Barang</a>
            <a href="#" class="dropdown-item">Bangunan</a>
            <a href="#" class="dropdown-item">Tanah</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>