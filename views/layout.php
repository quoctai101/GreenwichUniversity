<div class="app-body">
  <div class="sidebar">
    <nav class="sidebar-nav">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="./?controller=products">
            <i class="nav-icon icon-pencil"></i> Product</a>
        </li>
      </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
  </div>
  <main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">
        <a href="#">Admin</a>
      </li>
      <li class="breadcrumb-item active">Product</li>
      <!-- Breadcrumb Menu-->
      <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
          <a class="btn" href="#">
            <i class="icon-speech"></i>
          </a>
          <a class="btn" href="./">
            <i class="icon-graph"></i>  Dashboard</a>
          <a class="btn" href="#">
            <i class="icon-settings"></i>  Settings</a>
        </div>
      </li>
    </ol>
    <div class="container-fluid">
      <?= @$content ?>
    </div>
  </main>
</div>