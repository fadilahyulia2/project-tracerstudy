<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About Us</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6">
                <p>
                    Menurut panduan program bantuan pengembangan layanan pusat
                    karier lanjutan/Tracer Study 2019 yang dikeluarkan oleh Direktorat Jenderal
                    Pembelajaran dan Kemahasiswaan Kementerian Riset, Teknologi dan
                    Pendidikan Tinggi (Dirjen Belmawa Kemenristekdikti), tracer study adalah
                    studi pelacakan jejak lulusan/alumni yang dilakukan dua tahun setelah lulus
                    dan bertujuan untuk :
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Outcome pendidikan dalam bentuk transisi dari dunia pendidikan
                        inggi ke dunia kerja (termasuk masa tunggu kerja dan proses
                        pencarian kerja pertama), situasi kerja terakhir, dan aplikasi
                        kompetensi di dunia kerja.</li>
                    <li><i class="ri-check-double-line"></i> Output pendidikan yaitu penilaian diri terhadap penguasaan dan
                        pemerolehan kompetensi.</li>
                    <li><i class="ri-check-double-line"></i> Proses pendidikan berupa evaluasi proses pembelajaran dan
                        kontribusi pendidikan tinggi terhadap pemerolehan kompetensi.</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                    Sebagai lembaga yang melakukan tracer study berharap hasil penelusuran alumni
                    dapat memberikan manfaat berupa perbaikan sistem pendidikan yang diterapkan oleh perguruan tinggi.
                </p>
                <a href="#" class="btn-learn-more">Learn More</a>
            </div>
        </div>

    </div>
</section> <!-- End About Us Section -->
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

<?= $this->endSection(); ?>
</body>

</html>