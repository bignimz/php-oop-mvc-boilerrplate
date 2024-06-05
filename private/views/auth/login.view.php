<?php $this->view('includes/header', ['title' => $title, 'showNavbar' => false]); ?>
<div class="container sm-login-wrapper">
    <div class="text-center d-block">
        <!-- <h1 class="mb-2 text-center sm-title h1">ShuleMoja School Management System</h1> -->
        <img src="<?=ASSETS?>/shulem.png" alt="ShuleMoja Logo" class="img-fluid mb-5" style="max-width: 170px">
        <div class="d-flex align-items-center justify-content-center">
            <h2 class="fs-3 mb-4"><i class="fa fa-user me-2"></i> Acount Login</h2>
        </div>
    </div>
    <form class="mx-auto p-4 shadow rouded" style="max-width: 350px">
        <!-- <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
        </div> -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
            <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1" aria-describedby="basic-addon1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary sm-btn" style="width: 100%">Login <i class="fa fa-sign-in"></i> </button>
    </form>
    <div class="text-center">
        <p class="disabled mt-3 fs-6">Not a member? <span><a class="sm-theme" href="#">Start a 14 day free trial</a></span></p>
    </div>
</div>
<?php if (!empty($showFooter) && $showFooter): ?>
    <?php $this->view('includes/footer', ['showFooter' => false]); ?>
<?php endif; ?>