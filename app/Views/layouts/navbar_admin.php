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
          <li><a href="" class="<?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?>">DATA</a></li>
          <li><a href="" class="<?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?>">AKUN</a></li>
          <li><a href="/admin" class="<?= \Config\Services::request()->uri->getSegment(1) == 'admin' ? 'active' : '' ?>"><?= !session()->get('admin_id') ? 'Login ' : 'Admin' ?></a></li>
        </ul>
      </nav>
</header>