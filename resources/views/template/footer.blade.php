<div class="footer">
    <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
        <br>Design: <a href="https://templatemo.com" target="_parent"
            title="free css templates">TemplateMo</a>
    </p>
</div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('./vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('assets/js/lightbox.js') }}"></script>
<script src="{{ asset('assets/js/tabs.js') }}"></script>
<script src="{{ asset('assets/js/video.js') }}"></script>
<script src="{{ asset('assets/js/slick-slider.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>

$('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
    e.preventDefault();
    var Section($(this).attr('href'),true);
    showSection(section, true);
});

$(window).scroll(function() {
    checkSection();
});

</script>
</body>

</html>
