<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="<?= base_url(); ?>/assets/img/login.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-15">
                        <div class="mb-100">
                            <h3>Login <strong>Tracer Study</strong></h3>
                            <p class="mb-20">Silahkan masukkan Username dan Password anda.</p>
                        </div>
                        <form action="#" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

                            <!-- <span class="d-block text-left my-4 text-muted"> or sign in with</span>

                            <div class="social-login">
                                <a href="#" class="facebook">
                                    <span class="icon-facebook mr-3"></span>
                                </a>
                                <a href="#" class="twitter">
                                    <span class="icon-twitter mr-3"></span>
                                </a>
                                <a href="#" class="google">
                                    <span class="icon-google mr-3"></span>
                                </a> -->
                    </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</div>



<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url(); ?>/assets/js/main.js"></script>
<script src="<?= base_url(); ?>/assets/css/sty.css"></script>
<?= $this->endSection(); ?>
</body>

</html>