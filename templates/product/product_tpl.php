<div class="about">
    <section class="hero" style="background-image: url(<?=$seo->getSeo('photo')?>);">
        <div class="overplay">
            <div class="content">
                <h2 class="text-uppercase"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h2>
                <p><?= $static['ten' . $lang] ?></p>
            </div>
        </div>
    </section>
</div>
<?php if (isset($product_tk) && count($product_tk) > 0) { ?>
    <div class="project-list pd-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="heading-small text-uppercase text-center text-dark mb5">Dự án đang triển khai</h3>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div class="du-an">
<section class="project-highlight py-4">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="product-slider-nav py-4" id="product-slider-nav-1">
                    <?php if (isset($product_tk) && count($product_tk) > 0) { ?>
                        <?php foreach ($product_tk as $k => $v) { ?>
                            <div class="font-weight-bold text-uppercase"><?= $v['ten' . $lang] ?></div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="product-slider-for" id="product-slider-for-1">
        <!-- <div class="item">
                    <div class="row no-gutters position-relative">
                        <div class="col-md-6 my-md-7 ">
                            <div class="img-thumbcrop img-thumbcrop-md-3by2 img-thumbcrop-xl-2by1">
                                <img class="thumb bg-dark left img-fluid" src="https://daiphuc.com.vn/uploads/DUAN-PHUOC-LOC.jpg">
                            </div>
                        </div>
                        
                            <div class="col-md-6 info text-white py-5 py-lg-9 px-3">
                                <div class="px-md-7 px-xl-9 text-lg-right">
                                    <h4 class="mb-3">KHU DÂN CƯ PHƯỚC LỘC <small class="d-block text-uppercase"></small></h4>
                                    <div class="lead mb-3">
                                        <p>Nằm trong tổng thể khu đô thị Nam Sài Gòn, khu dân cư Phước Lộc được đánh giá là một thương phẩm độc đáo, nơi hội tụ sinh khí, khơi nguồn thịnh vượng, phù hợp cả về an cư lạc nghiệp lẫn đầu tư sinh lợi.</p>
                                        <p><i class="fa fa-map-marker"></i> H.Bình Chánh, TP.HCM.&nbsp; &nbsp; <i class="fa fa-diamond"></i> Quy mô: 68.4 ha.</p>
                                    </div>
                                    <a class="text-white" href="https://daiphuc.com.vn/du-an/dan-cu-phuoc-loc/" tabindex="0"><b>Xem thêm</b> &nbsp; <span class="icon-plus"></span></a>
                                </div>
                            </div>
                    </div>
                </div> -->
        <?php if (isset($product_tk) && count($product_tk) > 0) { ?>
            <?php foreach ($product_tk as $k => $v) { ?>
                <div class="item">
                    <div class="background-img">
                        <a href="<?= $v['tenkhongdau' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1519x506x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></a>
                    </div>
                    <div class="description container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10 text-center content">
                                <div class="text-center text-white px-3 px-md-5 py-4">
                                    <h4 class="text-white text-uppercase mb-3"><?= $v['ten' . $lang] ?> <small class="d-block text-uppercase"></small></h4>
                                    <div class="font-weight-light mb-4 px-lg-5 lead">
                                        <p><?= htmlspecialchars_decode($v['mota' . $lang]) ?></p>
                                        <p><i class="fa-solid fa-location-dot"></i> <?= $v['address'] ?> &nbsp; &nbsp;
                                            <i class="fa-solid fa-gem"></i> Quy mô: <?= $v['area'] ?>
                                        </p>
                                    </div>
                                    <a class="text-white" href="<?= $v['tenkhongdau' . $lang] ?>" tabindex="0">Xem chi tiết &nbsp; <span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</section>

</div>

<?php if (isset($product_stk) && count($product_stk) > 0) { ?>
    <div class="project-list pd-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="heading-small text-uppercase text-center text-dark mb5">Dự án sắp triển khai</h3>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div class="du-an">
<section class="project-highlight py-4">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="product-slider-nav py-4" id="product-slider-nav-2">
                    <?php if (isset($product_stk) && count($product_stk) > 0) { ?>
                        <?php foreach ($product_stk as $k => $v) { ?>
                            <div class="font-weight-bold text-uppercase"><?= $v['ten' . $lang] ?></div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="product-slider-for" id="product-slider-for-2">
        <?php if (isset($product_stk) && count($product_stk) > 0) { ?>
            <?php foreach ($product_stk as $k => $v) { ?>
                <div class="item" style="width: 97% !im;">
                    <div class="background-img">
                        <a href="<?= $v['tenkhongdau' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1519x506x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></a>
                    </div>
                    <div class="description container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10 text-center content">
                                <div class="text-center text-white px-3 px-md-5 py-4">
                                    <h4 class="text-white text-uppercase mb-3"><?= $v['ten' . $lang] ?> <small class="d-block text-uppercase"></small></h4>
                                    <div class="font-weight-light mb-4 px-lg-5 lead">
                                        <p><?= htmlspecialchars_decode($v['mota' . $lang]) ?></p>
                                        <p><i class="fa-solid fa-location-dot"></i> <?= $v['address'] ?> &nbsp; &nbsp;
                                            <i class="fa-solid fa-gem"></i> Quy mô: <?= $v['area'] ?>
                                        </p>
                                    </div>
                                    <a class="text-white" href="<?= $v['tenkhongdau' . $lang] ?>" tabindex="0">Xem chi tiết &nbsp; <span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>

    </div>
</section>
</div>
<?php if (isset($product_ht) && count($product_ht) > 0) { ?>
    <div class="project-list pd-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="heading-small text-uppercase text-center text-dark mb5">Dự án hoàn thành</h3>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div class="du-an">
<section class="project-highlight py-4">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="product-slider-nav py-4" id="product-slider-nav-3">
                    <?php if (isset($product_ht) && count($product_ht) > 0) { ?>
                        <?php foreach ($product_ht as $k => $v) { ?>
                            <div class="font-weight-bold text-uppercase"><?= $v['ten' . $lang] ?></div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="product-slider-for" id="product-slider-for-3">
        <?php if (isset($product_ht) && count($product_ht) > 0) { ?>
            <?php foreach ($product_ht as $k => $v) { ?>
                <div class="item">
                    <div class="background-img">
                        <a href="<?= $v['tenkhongdau' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1519x506x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></a>
                    </div>
                    <div class="description container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10 text-center content">
                                <div class="text-center text-white px-3 px-md-5 py-4">
                                    <h4 class="text-white text-uppercase mb-3"><?= $v['ten' . $lang] ?> <small class="d-block text-uppercase"></small></h4>
                                    <div class="font-weight-light mb-4 px-lg-5 lead">
                                        <p><?= htmlspecialchars_decode($v['mota' . $lang]) ?></p>
                                        <p><i class="fa-solid fa-location-dot"></i> <?= $v['address'] ?> &nbsp; &nbsp;
                                            <i class="fa-solid fa-gem"></i> Quy mô: <?= $v['area'] ?>
                                        </p>
                                    </div>
                                    <a class="text-white" href="<?= $v['tenkhongdau' . $lang] ?>" tabindex="0">Xem chi tiết &nbsp; <span class="icon-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>

    </div>
</section>
</div>

<!-- <div class="d-flex justify-content-between">
    <div class="left">
        <?php include TEMPLATE . LAYOUT . "left.php"; ?>
    </div>

<div class="right">
    <div class="title"><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></div>
    <div class="content-main w-clear">
        <?php if (isset($product) && count($product) > 0) { ?>
            <div class="loadkhung_product1 mainkhung_product">
                <?php foreach ($product as $k => $v) { ?>
                    <div class="boxproduct_item">
                        <a class="boxproduct_img" href="<?= $v['tenkhongdauvi'] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1519x506x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></a>
                        <div class="boxproduct_info">
                            <div class="boxproduct_name"><a href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['tenvi'] ?>"><?= $v['ten' . $lang] ?></a></div>
                            <div class="boxproduct_price">Giá: <span><?= $func->format_money($v['gia']) ?></span></div>

                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        <?php } ?>
        <div class="clear"></div>
        <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
    </div>
    <?php if ($noidung_page != '') { ?>
        <div class="noidung_page_product">
            <div class="meta-toc">
                <div class="box-readmore">
                    <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
                </div>
            </div>
            <div id="toc-content"><?= htmlspecialchars_decode($noidung_page) ?></div>
        </div>
    <?php } ?>
</div>
</div> -->