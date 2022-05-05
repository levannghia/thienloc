<!-- <div class="boxfooter_container background-footer">
    <div class="wrap-topft">
    <div class="fixwidth" style="padding: 30px 0 0 0;">
        <div class="title">Đăng ký nhận bản tin</div>
        <div class="baner-logo">
            <p>Chúng tôi hứa sẽ không gửi những mail với nội dung không quan trọng hoặc spam</p>
            <form method="post" name="frm" class="frm validation-newsletter clearfix" action="" enctype="multipart/form-data">
                <div class="item-position">
                    <input name="email-newsletter" type="email" id="email-newsletter" data-key="email-newsletter" class="input_check" placeholder="Email" />
                    <div class="error_mes" id="error-email-newsletter"></div>
                </div>
                <button type="submit" name="submit-newsletter" class="click_ajax" />ĐĂNG KÝ</button>
                <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
            </form>
            <div class="social2">
                <?php foreach($social1 as $v) { ?>
                    <a href="<?=$v['link']?>" class="ftmxh" target="_blank" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/35x35x2/assets/images/noimage.png';" src="<?=THUMBS?>/35x35x2/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/></a>
                <?php }?>
            </div>
        </div>
    </div>
    </div>
    <div class="fixwidth">
        <div class="d-flex justify-content-between">
            <div class="boxfooter_1">
                <?=htmlspecialchars_decode($footer['noidung'.$lang])?>
            </div>
          
            <div class="boxfooter_2">
                <p class="boxfooter_title">Về chúng tôi</p>
                <div class="boxbaiviet_list">
                    <p class="box_chinhsach_item" ><a href="" title="Trang chủ">Trang chủ</a></p>
                    <p class="box_chinhsach_item" ><a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></p>
                    <p class="box_chinhsach_item" ><a href="san-pham" title="Sản phẩm">Sản phẩm</a></p>
                    <p class="box_chinhsach_item" ><a href="tin-tuc" title="Tin tức">Tin tức</a></p>
                    <p class="box_chinhsach_item" ><a href="lien-he" title="Liên hệ">Liên hệ</a></p>
                    <p class="box_chinhsach_item" ><a href="cham-soc-suc-khoe" title="Chăm sóc sức khỏe">Chăm sóc sức khỏe</a></p>
                </div>
                 
            </div>      
            <div class="boxfooter_3">
                <p class="boxfooter_title">Hướng dẫn</p>
                <div class="boxbaiviet_list">
                    <?php foreach($huongdan as $v) { ?>
                        <p class="box_chinhsach_item" ><a href="<?=$v['tenkhongdau'.$lang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></p>
                    <?php } ?>
                </div>
                 
            </div>      
            <div class="boxfooter_4">
                <p class="boxfooter_title">Tư vấn khách hàng</p>
                <div class="icon-head d-flex align-self-center" style="margin-bottom:15px;">
                    <div class="icon-img align-self-center"><i class="fas fa-phone-volume"></i></div>
                    <div class="icon-info align-self-center">
                        <div>Hotline tư vấn</div>
                        <div><strong><?=$optsetting['hotline']?></strong></div>
                    </div>
                </div>
                <div class="icon-head d-flex align-self-center">
                    <div class="icon-img align-self-center"><i class="fas fa-phone-volume"></i></div>
                    <div class="icon-info align-self-center">
                        <div>Hotline tư vấn</div>
                        <div><strong><?=$optsetting['dienthoai']?></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="boxfooter_bottom">
        <div class="fixwidth d-flex justify-content-between flex-wrap">
            <div>&copy; <?=$optsetting['copyright']?></div>
            <div>Online: <?=$online?> | Hôm nay: <?=$counter['today']?> | Tổng: <?=$counter['total']?></div>
            
        </div>
    </div>
</div> -->
<footer>
        <div class="footer text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="<?=THUMBS?>/0x85x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="logo">
                        </div>
                        <p class="font-weight-bold text-uppercase my-2 yellow-highlight"><?=$optsetting['copyright']?></p>
                        <p class="mb-1 yellow-highlight">Theo dõi chúng tôi qua</p>
                        <div class="social">
                            <a href="tel:<?=$optsetting['fanpage'];?>"><i class="fa-brands fa-facebook-square"></i></a>
                            <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="tt yellow-highlight">
                            THÔNG TIN LIÊN HỆ
                        </div>
                        <p class="mb-1">Tổng đài CSKH: <a href=""><?=$optsetting['hotline']?></a></p>
                        <p class="mb-1">Điện thoại: <a href=""><?=$optsetting['dienthoai']?></a></p>
                        <!-- <p class="mb-1">Fax: <a href=""><?=$optsetting['dienthoai']?></a></p> -->
                        <p class="mb-4">Email: <?=$optsetting['email']?></p>
                        <p class="mb-1">Địa chỉ: <?=$optsetting['diachi']?></p>
                    </div>
                    <div class="col-md-3">
                        <div class="tt yellow-highlight">
                            GIỚI THIỆU
                        </div>
                        <p class="mb-1"><a href=""> <a href="">Tầm nhìn - Sứ mệnh - Giá trị</a> </a></p>
                        <p class="mb-4"><a href=""> <a href="">Thành tựu</a> </a></p>
                        <div class="tt yellow-highlight">
                            TIN TỨC
                        </div>
                        <?php foreach ($tintuc_list as $key => $value) {?>
                            <p class="mb-1"><a href="<?= $value['tenkhongdau'.$lang] ?>"><?= $value['ten'.$lang] ?></a></p>
                        <?php } ?>
                    </div>
                    <div class="col-md-3">
                        <div class="tt yellow-highlight">
                            DỰ ÁN
                        </div>
                        <?php foreach ($duan_foodter as $key => $value) { ?>
                        <p class="mb-1"><a href="<?=$value['tenkhongdau'.$lang]?>"><?=$value['ten'.$lang]?></a></p>
                        
                        <?php } ?>
                        <div class="tt yellow-highlight">
                            ĐĂNG KÝ NHẬN TIN
                        </div>
                        <form method="post" action="" enctype="multipart/form-data">
                            <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseContact">
                            <input type="email" name="email-newsletter" class="d-block mb-1 f-email" placeholder="Email">
                            <button type="submit" name="submit-newsletter" class="btn-sm">Đăng ký</button>
                        </form>
                    </div>
                    <div class="col py-4">
                        <p>Copyright@2022 <span class="yellow-highlight"><?=$optsetting['copyright']?></span> Sota Group. All right reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="doitac-slider py-2">
                <?php foreach ($doitac as $q => $ad) { ?>
                    <div class="item">
                    <a href="<?= $ad['link'] ?>"><img onerror="this.src='<?= THUMBS ?>/140x140x2/assets/images/noimage.png';" src="<?= THUMBS ?>/120x80x2/<?= UPLOAD_PHOTO_L . $ad['photo'] ?>" alt="<?= $ad['ten' . $lang] ?>" title="<?= $ad['ten' . $lang] ?>" /></a>
                    </div>
                <?php } ?>    
                </div>
            </div>

        </div>
    </footer>
<div class="social-fixed">
        <a href="<?=$optsetting['fanpage']?>"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>"><i class="fa-solid fa-phone"></i></a>
        <a href="mailto:<?=$optsetting['email'];?>"><i class="fa-solid fa-envelope"></i></a>
        <a href="<?=$optsetting['yotube'];?>"><i class="fa-brands fa-youtube"></i></a>
</div>
