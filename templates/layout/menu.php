<?php /*<div class="header-cachtop">
    <div class="fixwidth d-flex justify-content-between flex-wrap">
        <span><?=$optsetting['slogan']?></span>
        <span><?=$optsetting['email']?></span>
    </div>
</div>*/?>

<header class="header px-2">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img onerror="this.src='<?=THUMBS?>/0x85x2/assets/images/noimage.png';" src="<?=THUMBS?>/0x85x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="logo"/></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav text-uppercase w-100 font-weight-bold px-xs-5 d-flex justify-content-between">
                        <li class="nav-item <?=$source=='index' ? 'active':''?>">
                            <a class="nav-link" href="">Trang Chủ</a>
                        </li>
                        <li class="nav-item <?=$com=='gioi-thieu' ? 'active':''?>">
                            <a class="nav-link" href="gioi-thieu">Giới thiệu</a>
                        </li>
                        <li class="nav-item <?=$com=='du-an' ? 'active':''?>">
                            <a class="nav-link" href="du-an">Dự án</a>
                        </li>
                        <li class="nav-item <?=$com=='tin-tuc' ? 'active':''?>">
                            <a class="nav-link" href="tin-tuc">Tin Tức</a>
                        </li>
                        <li class="nav-item <?=$com=='tuyen-dung' ? 'active':''?>">
                            <a class="nav-link" href="tuyen-dung">Tuyển dụng</a>
                        </li>
                        <li class="nav-item <?=$com=='lien-he' ? 'active':''?>">
                            <a class="nav-link" href="lien-he">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        </div>


    </header>
<!-- <div class="header-height">
    <div class="wrap-fixed">
        <div class="header background-head">
            <div class="fixwidth d-flex justify-content-between flex-wrap">
                <div class="header_left align-self-center">
                    <a class="header_logo" href=""><img onerror="this.src='<?=THUMBS?>/0x85x2/assets/images/noimage.png';" src="<?=THUMBS?>/0x85x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>"/></a>
                </div>
                <div class="boxmenu_middle align-self-center ">
                    <?php /*<div class="menu_mobi align-self-center">
                        <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                        <?php /*<p class="menu_baophu"></p>*-/?>
                        <a href="" class="home_mobi">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="menu_mobi_add"></div>*/?>
                    <div class="frm_timkiem">
                        <input type="text" class="input" id="keyword" placeholder="Nhập từ khóa..." onkeypress="doEnter(event,'keyword');" >
                        <button type="submit" value="" class="nut_tim" onclick="onSearch('keyword');"><i class="fal fa-search"></i></button>
                    </div>
                    
                </div>
                <div class="boxmenu_right d-flex align-self-center justify-content-between">
                    
                    <div class="icon-head d-flex align-self-center">
                        <div class="icon-img align-self-center"><i class="fas fa-phone-volume"></i></div>
                        <div class="icon-info align-self-center">
                            <div>Đặt hàng nhanh</div>
                            <div><strong><?=$optsetting['hotline']?></strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu_top">
            <div class="fixwidth clearfix">
                <div class="menu">
                    <ul class="menu_cap_cha d-flex justify-content-center">
                        <li class="menulicha <?=$source=='index' ? 'active':''?>"><a href="" title="Trang chủ">Trang chủ</a></li>
                        <li class="menulicha <?=$com=='san-pham' ? 'active':''?>"><a href="san-pham" title="Sản phẩm">Sản phẩm <i class="fal fa-angle-down"></i></a>
                            <?php if($splistmenu) { ?>
                                <ul class="menu_cap_con">
                                    <?php foreach($splistmenu as $c=>$cat) { ?>
                                        <li><a title="<?=$cat['ten'.$lang]?>" href="<?=$cat[$sluglang]?>"><?=$cat['ten'.$lang]?></a>
                                            <?php
                                            $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc",array('san-pham',$cat['id']));
                                            if(count($spcatmenu)>0) { ?>
                                                <ul class="menu_cap_2">
                                                    <?php foreach($spcatmenu as $c1=>$cat1) {?>
                                                        <li><a title="<?=$cat1['ten'.$lang]?>" href="<?=$cat1[$sluglang]?>"><?=$cat1['ten'.$lang]?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                        <li class="menulicha <?=$com=='gioi-thieu' ? 'active':''?>"><a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="menulicha <?=$com=='tin-tuc' ? 'active':''?>"><a href="tin-tuc" title="Tin tức">Tin tức</a></li>
                        <li class="menulicha <?=$com=='cham-soc-suc-khoe' ? 'active':''?>"><a href="cham-soc-suc-khoe" title="Chăm sóc sức khỏe">Chăm sóc sức khỏe</a></li>
                        <li class="menulicha <?=$com=='lien-he' ? 'active':''?>"><a href="lien-he" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
