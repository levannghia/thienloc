<!-- Js Config -->
<script type="text/javascript">
    var NN_FRAMEWORK = NN_FRAMEWORK || {};
    var CONFIG_BASE = '<?= $config_base ?>';
    var WEBSITE_NAME = '<?= (isset($setting['ten' . $lang]) && $setting['ten' . $lang] != '') ? $setting['ten' . $lang] : '' ?>';
    var TIMENOW = '<?= date("d/m/Y", time()) ?>';
    var SHIP_CART = <?= (isset($config['order']['ship']) && $config['order']['ship'] == true) ? 'true' : 'false' ?>;
    var GOTOP = 'assets/images/top.png';
    var LANG = {
        'no_keywords': "<?= chuanhaptukhoatimkiem ?>",
        'delete_product_from_cart': "<?= banmuonxoasanphamnay ?>",
        'no_products_in_cart': "<?= khongtontaisanphamtronggiohang ?>",
        'wards': "<?= phuongxa ?>",
        'back_to_home': "<?= vetrangchu ?>",
    };
</script>

<!-- Js Files -->
<?php
$js->setCache("cached");
$js->setJs("./assets/js/jquery.min.js");
$js->setJs("./assets/bootstrap/bootstrap.js");
$js->setJs("./assets/js/wow.min.js");
$js->setJs("./assets/owlcarousel2/owl.carousel.js");
$js->setJs("./assets/magiczoomplus/magiczoomplus.js");
$js->setJs("./assets/simplyscroll/jquery.simplyscroll.js");

$js->setJs("./assets/toc/toc.js");
$js->setJs("./assets/js/lazyload.min.js");
$js->setJs("./assets/js/functions.js");
$js->setJs("./assets/js/apps.js");
echo $js->getJs();
?>
<script src="./assets/js/lazyload.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    var myLazyLoad = new LazyLoad({
        elements_selector: ".lazy"
    });
</script>


<script type="text/javascript">
    const elmNav = document.querySelector(".navbar");

    window.addEventListener("scroll", function() {
        if (
            document.body.scrollTop > 100 ||
            document.documentElement.scrollTop > 100
        ) {
            elmNav.classList.add("shrink");
        } else {
            elmNav.classList.remove("shrink");
        }
    });


    $(document).ready(function() {
        $(document).on('click', '[data-id-tienich]', function() {

            let id = $(this).attr('data-id-tienich');
            $('#staticBackdrop').modal('show');
            $.ajax({
                type: "POST",
                url: "ajax/ajax_tien_ich.php",
                data: {
                    id: id
                },
                success: function(data) {
                    $('.modal-body').html(data);
                    //console.log(data);
                }
            });
        });

        $('.slider-giatri').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            dots: true,
        });

        $(".banner-slider").slick({
            lazyLoad: "ondemand",
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1000,
            fade: false,
            cssEase: "linear",
            infinite: true,
            dots: false,
            arrows: false,
        });

        $(".about-slider").slick({
            slidesToShow: 3,
            dots: false,
            arrows: false,
            responsive: [{
                breakpoint: 720,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                },
            }, ],
        });

        $(".about-linh-vuc").slick({
            slidesToShow: 3,
            dots: false,
            slidesToScroll: 1,
            arrows: false,
            responsive: [{
                breakpoint: 720,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                },
            }, ],
        });

        $("#product-slider-for-1").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: "#product-slider-nav-1",
        });
        $("#product-slider-nav-1").slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            asNavFor: "#product-slider-for-1",
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 720,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    variableWidth: true,
                    infinite: true,
                    speed: 300,
                },
            }, ],
        });

        $("#product-slider-for-2").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: "#product-slider-nav-2",
        });
        $("#product-slider-nav-2").slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            asNavFor: "#product-slider-for-2",
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 720,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    variableWidth: true,
                    infinite: true,
                    speed: 300,
                },
            }, ],
        });

        $("#product-slider-for-3").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: "#product-slider-nav-3",
        });
        $("#product-slider-nav-3").slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            asNavFor: "#product-slider-for-3",
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 720,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    variableWidth: true,
                    infinite: true,
                    speed: 300,
                },
            }, ],
        });

        $("#product-slider-for-0").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: "#product-slider-nav-0",
        });
        $("#product-slider-nav-0").slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            asNavFor: "#product-slider-for-0",
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 720,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    variableWidth: true,
                    infinite: true,
                    arrows: false,
                    speed: 300,
                },
            }, ],
        });

        $("#product-slider-for-5").slick({

            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            asNavFor: "#product-slider-nav-5",


        });
        $("#product-slider-nav-5").slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            asNavFor: "#product-slider-for-5",
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    variableWidth: true,
                    infinite: true,
                    arrows: false,
                    speed: 300,
                },
            }, ],
        });

        $(".news-slider").slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 1000,
            cssEase: "linear",
            infinite: true,
            dots: false,
            arrows: false,
            responsive: [{
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: false,
                        variableWidth: true,
                        infinite: true,
                        speed: 300,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        infinite: true,
                        arrows: false,
                        speed: 300,
                    },
                },
            ],
        });

        $(".doitac-slider").slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 6,
            slidesToScroll: 1,
            speed: 500,
            dots: false,
            arrows: false,
            responsive: [{
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        dots: false,
                        infinite: true,
                        arrows: false,
                        speed: 300,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        dots: false,
                        infinite: true,
                        arrows: false,
                        speed: 300,
                    },
                },
            ],
        });
    });

    $(document).ready(function() {

        jQuery('.nav-li i').on("click", function() {
            if ($('.nav-ul-child').css('display') == 'none') {
                $('.nav-ul-child').css({
                    'display': 'block'
                });
                $(this).removeClass('fa-angle-down');
                $(this).addClass('fa-angle-up');
            } else {
                $('.nav-ul-child').css({
                    'display': 'none'
                });
                $(this).removeClass('fa-angle-up');
                $(this).addClass('fa-angle-down');
            }
        });
        jQuery(document).ready(function() {
            jQuery('.catagory-title').on("click", function() {
                if ($('.catagory-list__fix').css('display') == 'none') {
                    $('.catagory-list__fix').animate({
                        height: 'show'
                    }, 400);
                } else {
                    $('.catagory-list__fix').animate({
                        height: 'hide'
                    }, 200);
                }
            });
            jQuery('.catagory-list__fix li span').on("click", function() {
                let id = $(this).attr('data-id');
                if ($('#cat2__fix_' + id).css('display') == 'none') {
                    $('#cat2__fix_' + id).animate({
                        height: 'show'
                    }, 400);
                } else {
                    $('#cat2__fix_' + id).animate({
                        height: 'hide'
                    }, 200);
                }
            });
            jQuery('.catagory-list li span').on("click", function() {
                let id = $(this).attr('data-id');
                if ($('#cat2_' + id).css('display') == 'none') {
                    $('#cat2_' + id).animate({
                        height: 'show'
                    }, 400);
                } else {
                    $('#cat2_' + id).animate({
                        height: 'hide'
                    }, 200);
                }
            });
        });
    });
    $(document).ready(function() {

        $('.support-content').hide();

        $('a.btn-support').click(function(e) {
            e.stopPropagation();
            $('.support-content').slideToggle();
        });
        $('.support-content').click(function(e) {
            e.stopPropagation();
        });
        $(document).click(function() {
            $('.support-content').slideUp();
        });

        $('.tailvideo_item_owl').click(function() {
            let id = $(this).attr('data-src');
            let img = $(this).attr('data-image');
            let name = $(this).attr('data-name');
            $('.pic-video').attr('data-src', id);
            $('.pic-video img').attr('src', img);
            $('.name-video').html(name);
        });
    });

    $(document).on('click', '.menu_mobi .menulicha', function(event) {
        $('.close_menu').trigger('click');
        return false;
    });

    var menu_mobi = $('.menu_cap_cha').html();
    $('.menu_mobi_add').append('<span class="close_menu">X</span><ul>' + menu_mobi + '</ul>');

    $('.menu_mobi_add ul li ul').removeClass('menu_cap_con');
    $('.menu_mobi_add ul li ul').css({
        'display': 'none'
    });
    $('.menu_mobi_add ul li ul li ul').removeClass('menu_cap_2');
    $('.menu_mobi_add ul li ul li ul').css({
        'display': 'none'
    });
    $('.menu_mobi_add ul li ul li ul li ul').removeClass('menu_cap_3');
    $('.menu_mobi_add ul li ul li ul li ul').css({
        'display': 'none'
    });

    $(".menu_mobi_add ul li").each(function(index, element) {
        if ($(this).children('ul').children('li').length > 0) {
            $(this).children('a').append('<i class="fas fa-chevron-right"></i>');
        }
    });
    $(".menu_mobi_add ul li a i").click(function() {
        if ($(this).parent('a').hasClass('active2')) {
            $(this).parent('a').removeClass('active2');
            if ($(this).parent('a').parent('li').children('ul').children('li').length > 0) {
                $(this).parent('a').parent('li').children('ul').css({
                    display: 'none',
                });
                //$(this).parent('a').parent('li').children('ul').hide(300);
                return false;
            }
        } else {
            $(this).parent('a').addClass('active2');
            if ($(this).parents('li').children('ul').children('li').length > 0) {
                //$(".menu_m ul li ul").hide(0);
                //$(this).parents('li').children('ul').show(300);
                $(".menu_m ul li ul").css({
                    display: 'none',
                });
                $(this).parents('li').children('ul').css({
                    display: 'block',
                });
                return false;
            }
        }
    });

    $('.icon_menu_mobi,.close_menu,.menu_baophu').click(function() {
        if ($('.menu_mobi_add').hasClass('menu_mobi_active')) {
            $('.menu_mobi_add').removeClass('menu_mobi_active');
            $('.menu_baophu').fadeOut(300);
        } else {
            $('.menu_mobi_add').addClass('menu_mobi_active');
            $('.menu_baophu').fadeIn(300);
        }
        return false;
    });
</script>
<?php if (isset($config['googleAPI']['recaptcha']['active']) && $config['googleAPI']['recaptcha']['active'] == true) { ?>
    <!-- Js Google Recaptcha V3 -->

    <script src="https://www.google.com/recaptcha/api.js?render=<?= $config['googleAPI']['recaptcha']['sitekey'] ?>"></script>
    <script type="text/javascript">
        grecaptcha.ready(function() {
            <?php if ($source == 'contact') { ?>
                grecaptcha.execute('<?= $config['googleAPI']['recaptcha']['sitekey'] ?>', {
                    action: 'contact'
                }).then(function(token) {
                    var recaptchaResponseContact = document.getElementById('recaptchaResponseContact');
                    recaptchaResponseContact.value = token;
                });
            <?php } ?>
            grecaptcha.execute('<?= $config['googleAPI']['recaptcha']['sitekey'] ?>', {
                action: 'Newsletter'
            }).then(function(token) {
                var recaptchaResponseNewsletter = document.getElementById('recaptchaResponseNewsletter');
                recaptchaResponseNewsletter.value = token;
            });

        });
    </script>

<?php } ?>

<?php if (isset($config['oneSignal']['active']) && $config['oneSignal']['active'] == true) { ?>
    <!-- Js OneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?= $config['oneSignal']['id'] ?>"
            });
        });
    </script>
<?php } ?>

<!-- Js Structdata -->
<?php include TEMPLATE . LAYOUT . "strucdata.php"; ?>

<!-- Js Addons -->
<?= $addons->setAddons('script-main', 'script-main', 0.5); ?>
<?= $addons->getAddons(); ?>

<!-- Js Body -->
<?= htmlspecialchars_decode($setting['bodyjs']) ?>