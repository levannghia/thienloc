<div class="about">
    <section class="hero" style="background-image: url(<?= THUMBS ?>/600x600x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>);">
        <div class="overplay">
            <div class="content">
                <h2>DỰ ÁN</h2>
                <p><?= $static['ten' . $lang] ?></p>
            </div>
        </div>
    </section>
</div>
<div class="grid-pro-detail w-clear container mt-4">

    <div class="text-center mb-4">
        <a href="/"><i class="fa fa-home" style="color: #f22613;"></i></a> &nbsp;
        <i class="text-muted fa fa-caret-right"></i> &nbsp;
        <a href="du-an" style="color: #f22613;">Dự án</a> &nbsp;
        <i class="text-muted fa fa-caret-right"></i> &nbsp;
        <?= $row_detail['ten' . $lang] ?>
    </div>

    <h2 class="heading-small text-center text-dark mb-5">
        TỔNG QUAN <small class="d-block text-uppercase"></small>
    </h2>

    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <div class="the-content lead">
                <?= htmlspecialchars_decode($row_detail['noidung' . $lang]) ?>
            </div>
        </div>
    </div>
</div>
<div class="img-thumbcrop img-thumbcrop 1by-1 img-thumbcrop-md-3by1">
    <a href="<?= $v['tenkhongdau' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1519x506x1/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></a>
</div>
<?php if (!empty($viTri)) { ?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pt-5 py-md-9">
                <div class="px-2 px-md-0">
                    <h2 class="heading-small text-dark mb-5">
                        VỊ TRÍ
                        <small class="d-block text-uppercase"> </small>
                    </h2>
                    <div class="lead">
                        <?= htmlspecialchars_decode($viTri['noidungvi']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-top: 60px;">
                <img data-aos="zoom-in" data-aos-duration="1000" onerror="this.src='<?= THUMBS ?>/600x600x2/assets/images/noimage.png';" src="<?= THUMBS ?>/952x626x2/<?= UPLOAD_PRODUCT_L . $viTri['photo'] ?>" alt="<?= $viTri['ten' . $lang] ?>">
            </div>
        </div>
    <?php } ?>
    </div>
    <?php if (isset($tienIch) && count($tienIch) > 0) { ?>
        <section class="project-highlight py-4">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <h2 class="heading-small text-center text-dark mb-5">
                            Tiện ích <small class="d-block text-uppercase"></small>
                        </h2>
                        <div class="product-slider-nav py-4" style="font-size: 20px;" id="product-slider-nav-5">
                            <?php foreach ($tienIch as $key => $value) { ?>
                                <div class="font-weight-bold text-uppercase"><?= $value['tenvi'] ?></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-slider-for" id="product-slider-for-5">
                <?php foreach ($tienIch as $key => $value) { ?>
                    <div class="item" style="padding-left: 50px;">

                        <div class="background-img img-thumbcrop">
                            <img onerror="this.src='<?= THUMBS ?>/600x600x2/assets/images/noimage.png';" src="<?= THUMBS ?>/879x440x2/<?= UPLOAD_PRODUCT_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>">
                        </div>

                        <div class="description container project-mobile">
                            <div class="row d-flex justify-content-center mobile-description">
                                <div class="col-10 text-center content">
                                    <div class="text-center text-white px-3 px-md-5 py-4">
                                        <h4 class="text-white text-uppercase mb-3"><?= $value['tenvi'] ?><small class="d-block text-uppercase"></small></h4>
                                        <div class="font-weight-light mb-4 px-lg-5 lead" style="font-size: 15px;">
                                            <p><?= htmlspecialchars_decode($value['noidungvi']) ?></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- data-target="#staticBackdrop" -->
                            <div data-id-tienich="<?= $value['id'] ?>" class="see-more py-sm-2 py-2 mobile-read-more" data-toggle="modal">
                                <div>
                                    <p class="text-white" href="gioi-thieu">
                                        <i class="fa-solid fa-circle-plus"></i>
                                        Xem thêm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </section>
    <?php } ?>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" style="z-index: 99999;" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tiện ích</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <!-- <div class="left-pro-detail w-clear">
        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= THUMBS ?>/600x600x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/600x600x2/assets/images/noimage.png';" src="<?= THUMBS ?>/600x600x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
        <?php if ($hinhanhsp) {
            if (count($hinhanhsp) > 0) { ?>
                <div class="gallery-thumb-pro">
                    <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                    <div class="owl-carousel owl-theme owl-thumb-pro">
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= THUMBS ?>/600x600x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/600x600x2/assets/images/noimage.png';" src="<?= THUMBS ?>/600x600x2/<?= UPLOAD_PRODUCT_L . $row_detail['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>"></a>
                        <?php foreach ($hinhanhsp as $v) { ?>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= THUMBS ?>/600x600x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $row_detail['ten' . $lang] ?>">
                            <img onerror="this.src='<?= THUMBS ?>/600x600x2/assets/images/noimage.png';" src="<?= THUMBS ?>/600x600x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $row_detail['ten' . $lang] ?>">
                        </a>
                    <?php } ?>
                    </div>
                    <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
                </div>
        <?php }
        } ?>
    </div>

    <div class="right-pro-detail w-clear">
        <p class="title-pro-detail"><?= $row_detail['ten' . $lang] ?></p>
        <div class="social-plugin social-plugin-pro-detail w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= ($optsetting['oaidzalo'] != '') ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
        <ul class="attr-pro-detail">
            <li class="w-clear">
                <label class="attr-label-pro-detail">Mã sản phẩm :</label>
                <div class="attr-content-pro-detail"><?= (isset($row_detail['masp']) && $row_detail['masp'] != '') ? $row_detail['masp'] : 0 ?></div>
            </li>

            <li class="w-clear">
                <label class="attr-label-pro-detail">Giá bán:</label>
                <div class="attr-content-pro-detail">
                    <span class="price-new-pro-detail"><?= $func->format_money($row_detail['gia']) ?></span>
                </div>
            </li>

            <li class="w-clear">
                <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                <div class="attr-content-pro-detail"><?= $row_detail['luotxem'] ?></div>
            </li>

        </ul>
        <div class="desc-pro-detail">
            <?= (isset($row_detail['mota' . $lang]) && $row_detail['mota' . $lang] != '') ? htmlspecialchars_decode($row_detail['mota' . $lang]) : '' ?>
        </div>
    </div>
    <div class="clear"></div>


    </div>
    <div class="tabs-pro-detail">
        <ul class="ul-tabs-pro-detail w-clear">
            <li class="active transition" data-tabs="info-pro-detail">Thông tin chi tiết</li>
            <li class="transition" data-tabs="commentfb-pro-detail"><?= binhluan ?></li>
        </ul>
        <div class="content-tabs-pro-detail info-pro-detail active"><?= (isset($row_detail['noidung' . $lang]) && $row_detail['noidung' . $lang] != '') ? htmlspecialchars_decode($row_detail['noidung' . $lang]) : '' ?></div>
        <div class="content-tabs-pro-detail commentfb-pro-detail">
            <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
        </div>
    </div> -->
    <!-- <div class="title">Sản phẩm cùng loại</div>
    <div class="content-main w-clear">
        <?php if (isset($product) && count($product) > 0) { ?>
            <div class="loadkhung_product mainkhung_product">
                <?php foreach ($product as $k => $v) { ?>
                    <div class="boxproduct_item">
                        <a class="boxproduct_img" href="<?= $v['tenkhongdauvi'] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/300x300x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" /></a>
                        <div class="boxproduct_info">
                            <div class="boxproduct_name"><a href="<?= $v['tenkhongdauvi'] ?>" title="<?= $v['tenvi'] ?>"><?= $v['ten' . $lang] ?></a></div>
                            <div class="boxproduct_price">Giá: <span><?= $func->format_money($v['gia']) ?></span></div>

                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="clear"></div>
            <div class="pagination-home"><?= (isset($paging) && $paging != '') ? $paging : '' ?></div>
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        <?php } ?>

    </div> -->