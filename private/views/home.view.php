<?php $this->view('includes/header', ['title' => $title, 'showNavbar' => true]); ?>
<section id="home" class="landing-intro text-bg-dark pt-5 pt-lg-6 pb-5 pb-lg-7">
    <div class="landing-intro-content container">
        <div class="row align-items-center sm-hero-content">
            <div class="col-lg-8 mx-auto">
                <h1 class="my-4 text-white sm-heading">ShuleMoja School Management System <span class="sm-theme">for all your schools</span></h1>

                <p class="text-lg text-white-50">A professional package that comes with hundreds of UI components, forms, tables, charts, dashboards, pages and svg icons.</p>

                <!-- <div class="my-4">
                    <div class="d-inline-block me-3">
                        <h2 class="text-white">300+</h2>
                        <span class="text-white-50">Staff Enrolled</span>
                    </div>
                    <div class="d-inline-block me-3">
                        <h2 class="text-white">1500+</h2>
                        <span class="text-white-50">Students Enrolled</span>
                    </div>
                    <div class="d-inline-block">
                        <h2 class="text-white">75+</h2>
                        <span class="text-white-50">Schools Enrolled</span>
                    </div>
                </div> -->
                <div class="my-4">
                    <a href="<?=ROOT?>/login" target="_blank" class="btn sm-btn-2 btn-lg rounded-pill">Live Demo</a>
                    <a href="<?=ROOT?>/login" target="_blank" class="btn btn-lg sm-btn-light rounded-pill">Get Started</a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section id="features" class="py-6 bg-white sm-features">
    <div class="container">
        <div class="mb-5 text-center">
            <span class="text-uppercase text-primary text-sm fw-medium mb-1 d-block sm-theme">Features</span>
            <h2 class="h1">Features you'll love</h2>
            <p class="text-muted fs-lg">A responsive dashboard built for everyone who wants to create webapps on top of Bootstrap.</p>
        </div>
        <div class="row text-start">
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-start py-3">
                    <div class="landing-feature">
                        <i data-lucide="sliders"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h4 class="mt-0">Customizable</h4>
                        <p class="fs-lg">You don't need to be an expert to customize our themes. Our code is very readable and well documented.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-start py-3">
                    <div class="landing-feature">
                        <i data-lucide="smartphone"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h4 class="mt-0">Fully Responsive</h4>
                        <p class="fs-lg">With mobile, tablet & desktop support it doesn't matter what device you're using. AppStack is responsive in all browsers.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-start py-3">
                    <div class="landing-feature">
                        <i data-lucide="mail"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h4 class="mt-0">Dev-to-dev Support</h4>
                        <p class="fs-lg">Our themes are supported by specialists who provide quick and effective support. Usually an email reply takes &lt;24h.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-start py-3">
                    <div class="landing-feature">
                        <i data-lucide="chrome"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h4 class="mt-0">Cross Browser</h4>
                        <p class="fs-lg">Our themes are working perfectly with: Chrome, Firefox, Safari, Opera and IE 11+. We're working hard to support them.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-start py-3">
                    <div class="landing-feature">
                        <i data-lucide="code"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h4 class="mt-0">Clean Code</h4>
                        <p class="fs-lg">We strictly follow Bootstrap's guidelines to make your integration as easy as possible. All code is handwritten.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-start py-3">
                    <div class="landing-feature">
                        <i data-lucide="download-cloud"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h4 class="mt-0">Regular Updates</h4>
                        <p class="fs-lg">From time to time you'll receive an update containing new components, improvements and bugfixes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="demos" class="py-6 sm-wrapper-bg">
    <div class="container position-relative z-3">
        <div class="row">
            <div class="col-md-12 mx-auto text-center">
                <div class="row">
                    <div class="col-lg-10 col-xl-9 mx-auto">
                        <div class="mb-4">
                            <span class="text-uppercase text-primary text-sm fw-medium mb-1 d-block">Demos</span>
                            <h2 class="h1 mb-3">Multiple color schemes &amp; layouts</h2>
                            <p class="text-muted fs-lg">
                                4 Pre-built color schemes and multiple layout types are available to make this template your very own. All the color schemes can take variation in color and styling,
                                that can easily be modified using Sass variables.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 py-3">
                        <a class='d-block mb-3 mx-1' href='/dashboard-default?theme=default' target='_blank'>
            <img src="https://appstack.bootlab.io/img/screenshots/theme-default.jpg" class="img-fluid rounded-3 landing-img" alt="Bootstrap 5 Dashboard Theme" />
        </a>
                        <h4>Default</h4>
                    </div>
                    <div class="col-md-4 py-3">
                        <a class='d-block mb-3 mx-1' href='/dashboard-default?sidebarBehavior=compact' target='_blank'>
            <img src="https://appstack.bootlab.io/img/screenshots/sidebar-compact.jpg" class="img-fluid rounded-3 landing-img" alt="Compact Sidebar Bootstrap 5 Dashboard Theme" />
        </a>
                        <h4>Compact sidebar</h4>
                    </div>
                    <div class="col-md-4 py-3">
                        <a class='d-block mb-3 mx-1' href='/dashboard-default?theme=dark' target='_blank'>
            <img src="https://appstack.bootlab.io/img/screenshots/theme-dark.jpg" class="img-fluid rounded-3 landing-img" alt="Dark Bootstrap 5 Dashboard Theme" />
        </a>
                        <h4>Dark <sup><small class="badge badge-subtle-primary">New</small></sup></h4>
                    </div>
                    <div class="col-md-4 py-3">
                        <a class='d-block mb-3 mx-1' href='/dashboard-default?theme=colored' target='_blank'>
            <img src="https://appstack.bootlab.io/img/screenshots/theme-colored.jpg" class="img-fluid rounded-3 landing-img" alt="Colored Bootstrap 5 Dashboard Theme" />
        </a>
                        <h4>Colored</h4>
                    </div>
                    <div class="col-md-4 py-3">
                        <a class='d-block mb-3 mx-1' href='/dashboard-default?theme=light' target='_blank'>
            <img src="https://appstack.bootlab.io/img/screenshots/theme-light.jpg" class="img-fluid rounded-3 landing-img" alt="Light Bootstrap 5 Dashboard Theme" />
        </a>
                        <h4>Light</h4>
                    </div>
                    <div class="col-md-4 py-3">
                        <a class='d-block mb-3 mx-1' href='/dashboard-default?sidebarPosition=right' target='_blank'>
            <img src="https://appstack.bootlab.io/img/screenshots/sidebar-right.jpg" class="img-fluid rounded-3 landing-img" alt="Right Sidebar Bootstrap 5 Dashboard Theme" />
        </a>
                        <h4>Right sidebar</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->view('includes/footer'); ?>


