<?php $this->view('includes/header', ['title' => $title, 'showNavDash' => true]); ?>

<section class="sm-profile-section mt-5">
    <div class="container p-4 shadow mx-auto">
        <h3 class="fs-3">Dashboard</h3>
        <?php
            echo "<pre>";
            print_r($rows);

        ?>
</section>
<?php $this->view('includes/footer'); ?>