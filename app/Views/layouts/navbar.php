<!-- 
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?>" aria-current="page" href="/">Home</a>
      </li>
    <li class="nav-item">
      <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?>" href="about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'post' ? 'active' : '' ?>" href="post">Post</a>
    </li>
  </ul>
</div> -->

<!-- header -->
<header>
      <nav class="main-nav">
        <div class="contain-nav">
          <input type="checkbox" id="check" />
          <label for="check" class="menu-btn">
          <i class="fas fa-bars"></i>
          </label>
          <a href="/" class="logo">Sistem Informasi Akademik</a>
          
          <ul class="navlinks">
          <li><a href="<?= base_url('Mahasiswa')?>" class="<?= \Config\Services::request()->uri->getSegment(1) == 'Mahasiswa' ? 'active' : '' ?>">HOME</a></li>
            <li><a href="<?= base_url('Mahasiswa/profil')?>" class="<?= \Config\Services::request()->uri->getSegment(1) == 'Mahasiswa/profil' ? 'active' : '' ?>"><i class="fa fa-user">&nbsp;</i><?= !session()->get('user') ? 'Login ' : session()->get('user') ?></a></li>
          </ul>
        </div>  
      </nav>
</header>