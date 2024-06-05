<?php $this->view('includes/header', ['title' => $title, 'showNavDash' => true]); ?>
<div class="container sm-login-wrapper">
    <div class="text-center d-block">
        <!-- <h1 class="mb-2 text-center sm-title">ShuleMoja School Management System</h1> -->
        <img src="<?=ASSETS?>/shulem.png" alt="ShuleMoja Logo" class="img-fluid mb-5" style="max-width: 170px">
        <h2 class="fs-3 mb-4"><i class="fa fa-plus"></i> Add User Account</h2>
    </div>

    <form method="POST" action="<?= ROOT ?>/signup" class="mx-auto p-4 shadow rounded" style="max-width: 450px">
    <div class="mb-3">
        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?= htmlspecialchars($data['first_name'] ?? '') ?>">
        <?php if (!empty($errors['first_name'])): ?>
            <div class="text-danger"><?= htmlspecialchars($errors['first_name']) ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?= htmlspecialchars($data['last_name'] ?? '') ?>">
        <?php if (!empty($errors['last_name'])): ?>
            <div class="text-danger"><?= htmlspecialchars($errors['last_name']) ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" value="<?= htmlspecialchars($data['email'] ?? '') ?>">
        <?php if (!empty($errors['email'])): ?>
            <div class="text-danger"><?= htmlspecialchars($errors['email']) ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <select name="gender" class="form-control">
            <option value="">-- Select Gender --</option>
            <option value="male" <?= isset($data['gender']) && $data['gender'] == 'male' ? 'selected' : '' ?>>Male</option>
            <option value="female" <?= isset($data['gender']) && $data['gender'] == 'female' ? 'selected' : '' ?>>Female</option>
        </select>
        <?php if (!empty($errors['gender'])): ?>
            <div class="text-danger"><?= htmlspecialchars($errors['gender']) ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <select name="role" class="form-control">
            <option value="">-- Choose Role --</option>
            <option value="student" <?= isset($data['role']) && $data['role'] == 'student' ? 'selected' : '' ?>>Student</option>
            <option value="teacher" <?= isset($data['role']) && $data['role'] == 'teacher' ? 'selected' : '' ?>>Teacher</option>
            <option value="bursar" <?= isset($data['role']) && $data['role'] == 'bursar' ? 'selected' : '' ?>>Bursar</option>
            <option value="admin" <?= isset($data['role']) && $data['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="superadmin" <?= isset($data['role']) && $data['role'] == 'superadmin' ? 'selected' : '' ?>>Super Admin</option>
        </select>
        <?php if (!empty($errors['role'])): ?>
            <div class="text-danger"><?= htmlspecialchars($errors['role']) ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <?php if (!empty($errors['password'])): ?>
            <div class="text-danger"><?= htmlspecialchars($errors['password']) ?></div>
        <?php endif; ?>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" placeholder="Repeat Password" name="password2">
    </div>

    <button type="submit" class="btn btn-primary sm-btn-2"><i class="fa fa-plus"></i> Add User</button>
    <button type="button" class="btn sm-btn-2 btn-danger text-white float-end" onclick="window.location.href='<?= ROOT ?>/home'"><i class="fa fa-ban"></i> Cancel</button>
</form>
</div>
<?php if (!empty($showFooter) && $showFooter): ?>
    <?php $this->view('includes/footer', ['showFooter' => false]); ?>
<?php endif; ?>