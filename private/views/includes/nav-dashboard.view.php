<nav class="navbar navbar-expand-lg bg-light" aria-label="Offcanvas navbar large">
    <div class="container">
      <a class="navbar-brand fs-4" href="<?=ROOT?>/dashboard">
      <img src="<?=ASSETS?>/shulem.png" alt="shulemoja-logo" style="width:150px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label">ShuleMoja</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item sm-nav-item">
              <a class="nav-link active" aria-current="page" href="<?=ROOT?>/dashboard">Dashboard</a>
            </li>
            <li class="nav-item sm-nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Users</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=ROOT?>/profile">All Users</a></li>
                <li><a class="dropdown-item" href="<?=ROOT?>/signup">Add User</a></li>
              </ul>
            </li>
            <li class="nav-item sm-nav-item">
              <a class="nav-link" href="<?=ROOT?>/tests">Tests</a>
            </li>
            <li class="nav-item sm-nav-item">
              <a class="nav-link" href="<?=ROOT?>/classes">Classes</a>
            </li>
          </ul>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item sm-nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?=ROOT?>/profile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user me-2"></i>
                Admin
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
                <li><a class="dropdown-item" href="<?=ROOT?>/dashboard">Dashboard</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
