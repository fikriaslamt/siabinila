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
        <input type="checkbox" id="check" />
       
        
        <ul class="navlinks">
        <li><a href="<?= base_url('Mahasiswa')?>" class="<?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?>">HOME</a></li>
          <li><a href="<?= base_url('Mahasiswa/form')?>" class="<?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?>">Formulir Akademik</a></li>
          <li><a href="/admin" class="<?= \Config\Services::request()->uri->getSegment(1) == 'Mahasiswa' ? 'active' : '' ?>"><?= !session()->get('user') ? 'Login ' : session()->get('user') ?></a></li>
        </ul>
      </nav>
</header>