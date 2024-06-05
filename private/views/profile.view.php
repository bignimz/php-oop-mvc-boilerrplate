<?php $this->view('includes/header', ['title' => $title, 'showNavDash' => true]); ?>

<section class="sm-profile-section mt-5">
    <div class="container p-4 shadow mx-auto">
        <h3 class="fs-3">Profile</h3>

        <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Basic Info</a>
        <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">My Classes</a>
    </nav>
    <hr class="mt-0 mb-4">
    <nav class="navbar bg-body-tertiary mb-4">
        <form class="container-fluid">
            <div class="input-group">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
            </div>
        </form>
    </nav>
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Name</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="nedium font-italic text-muted mb-4">Valerie Luna</div>
                    <!-- Profile picture upload button-->
                    <!-- <button class="btn btn-primary sm-btn-2" type="button">Upload new image</button> -->
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie" disabled>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna" disabled>
                            </div>
                        </div>

                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="createdDate">Created Date</label>
                                <input class="form-control" id="createdDate" type="text" placeholder="" value="01/01/2024" disabled>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="gender">Gender</label>
                                <input class="form-control" id="gender" type="text" placeholder="" value="Female" disabled>
                            </div>
                        </div>
                        
                        <!-- Form Group (email address)-->
                        <!-- <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div> -->
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (email address)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputEmailAddress">Email Address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="" value="name@example.com" disabled>
                            </div>
                            <!-- Form Group (role)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="role">Role</label>
                                <input class="form-control" id="role" type="text" name="role" placeholder="" value="Student" disabled>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary sm-btn-2" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
<?php $this->view('includes/footer'); ?>