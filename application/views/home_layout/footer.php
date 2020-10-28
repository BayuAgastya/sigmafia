<footer class="footer-area" style="padding-top:40px; padding-bottom: 0px ; text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img class="navbar-brand logo_h" href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/main/'); ?>img/Logo Sigmafia 2020-01.png" alt="Sigmafia" style="width: 150px;"></img>
            </div>

            <div class="col-lg-3 mt-3">
                <div class="row">
                    <div class="col-lg-6">
                        <a style="color: white;" href="<?= base_url('contact'); ?>">Contact Us</a>
                        <hr style="border: 1px solid orange; max-width: 100px;">

                    </div>
                    <div class="col-lg-6">
                        <a style="color: white;" href="<?= base_url('about'); ?>">About Us</a>
                        <hr style="border: 1px solid orange; max-width: 100px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" style="background-color: black;">
        <p class="footer-text m-0 text-white">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
                document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
</footer>


<div class="modal fade" id="modal-request">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">FORM REQUEST AKSES</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <?php echo form_open_multipart(base_url('home/upload')) ?>
                    <div class="row">
                        <div class="col-lg-12 form_group" style="text-align: left">
                            <p>untuk dapat mengakses konten secara gratis selama 1 bulan, harap menghubungi tutor melalui line/wa untuk tata caranya.</p>
                            <!-- <p>Untuk Request akses, diperlukan pembayaran sebesar 20rb yang di transfer melalui bank bca dengan nomer rekening 9071029741</p>
                            <hr>
                            <p>Setelah melakukan pembayaran, dimohon untuk mengirim bukti transfer pada form di bawah berupa Screenshoot atau foto</p> -->
                            <div class="custom-file">
                                <input name="file" type="file" id="customFile" required>
                                <div class="image-preview"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block">Request</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/main/'); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/popper.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/owl-carousel-thumb.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/mail-script.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="<?= base_url('assets/main/'); ?>js/gmaps.min.js"></script>
<script src="<?= base_url('assets/main/'); ?>js/theme.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="<?= base_url('assets/'); ?>myscript.js"></script>
</body>

</html>