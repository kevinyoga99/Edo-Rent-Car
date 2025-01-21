  <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Tentang Kami</h2>
                            <div class="widget-body">
                                <img src="<?php echo base_url() ?>assets/assets_shop/img/logo.png" alt="JSOFT">
                                <p>Cardoor adalah Pintu penghubung antara penyedia rental dengan customer. Sebuah marketplace untuk penyedia rental dan customer untuk saling terhubung.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->


                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Hubungi Kami</h2>
                            <div class="widget-body">
                                <p>Hubungi kami untuk mengetahui lebih banyak. Dapatkan layanan terbaik dan prioritas dari kami, Cardoor.</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Jl. Hr. Soebrantas, Pekanbaru</li>
                                    <li><i class="fa fa-mobile"></i> +62 811 1111 111</li>
                                    <li><i class="fa fa-envelope"></i> layanan@cardoor.com</li>
                                </ul>
                                <!-- <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <!-- <div class="scroll-top">
        <img src="<?php echo base_url() ?>assets/assets_shop/img/scroll-top.png" alt="JSOFT">
    </div> -->
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="<?= base_url('assets/assets_stisla') ?>/assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/assets_stisla') ?>/assets/js/alerts.js"></script>

<script>
    // Menggunakan jQuery untuk mendengarkan event click pada elemen dengan class 'wa-button'
    $('.wa-button').on('click', function() {
        // Ambil nomor telepon dari atribut 'value'
        var phoneNumber = $(this).attr('value');

        // Format nomor telepon agar sesuai dengan format WhatsApp (hilangkan spasi, tanda +, dsb.)
        phoneNumber = phoneNumber.replace(/\s+/g, '');

        // URL API WhatsApp dengan pesan default
        var message = "Halo, saya tertarik dengan layanan Anda!";
        var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);

        // Buka WhatsApp Web di tab baru
        window.open(whatsappURL, '_blank');
    });
</script>
</body>

</html>