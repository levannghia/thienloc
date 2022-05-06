<?php
$seoGT = $d->rawQueryOne("select * from #_seopage where type = 'gioi-thieu' limit 0,1");
?>
<div class="about">
    <section class="hero" style="background-image: url(<?= THUMBS ?>/1920x600x2/upload/seopage/<?= $seoGT['photo'] ?>);">
        <div class="overplay">
            <div class="content">
                <h2 class="text-uppercase"><?= (@$title_cat != '') ? $title_cat : @$title_crumb ?></h2>
                <p><?= $static['ten' . $lang] ?></p>
            </div>
        </div>
    </section>
</div>

<?php if (!empty($static)) { ?>
    <div class="container pt-5 pb-5">
        <h2 class="heading-nested-about my-3 text-dark">
            <?= (isset($static['ten' . $lang]) && $static['ten' . $lang] != '') ? $static['ten' . $lang] : '' ?>
            <!-- <small class="d-block"><?= $static['ten' . $lang] ?></small> -->
        </h2>
        <div class="content-main w-clear"><?= (isset($static['noidung' . $lang]) && $static['noidung' . $lang] != '') ? htmlspecialchars_decode($static['noidung' . $lang]) : '' ?></div>
    </div>
    <div class="photo-static">
        <img src="<?= THUMBS ?>/1530x506x1/<?= UPLOAD_NEWS_L . $static['photo'] ?>" alt="<?= $static['ten' . $lang] ?>" />
    </div>
<?php } ?>

<?php if (!empty($tam_nhin)) { ?>
    <div class="container project-highlight justify-content-md-center">
        <h2 class="heading-nested-about my-3 text-dark">
            <?= (isset($tam_nhin['ten' . $lang]) && $tam_nhin['ten' . $lang] != '') ? $tam_nhin['ten' . $lang] : '' ?>
            <!-- <small class="d-block"><?= $static['ten' . $lang] ?></small> -->
        </h2>
        <div class="content-main w-clear pt-4 pb-4"><?= (isset($tam_nhin['noidung' . $lang]) && $tam_nhin['noidung' . $lang] != '') ? htmlspecialchars_decode($tam_nhin['noidung' . $lang]) : '' ?></div>
    </div>
    <div class="photo-static">
        <img src="<?= THUMBS ?>/1530x506x1/<?= UPLOAD_NEWS_L . $tam_nhin['photo'] ?>" alt="<?= $tam_nhin['ten' . $lang] ?>" />
    </div>
<?php } ?>

<?php if (!empty($su_menh)) { ?>
    <div class="rena" style="position: relative;">
        <div class="container justify-content-md-center">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="heading-nested-about my-3 text-dark">
                        <?= (isset($su_menh['ten' . $lang]) && $su_menh['ten' . $lang] != '') ? $su_menh['ten' . $lang] : '' ?>
                        <!-- <small class="d-block"><?= $static['ten' . $lang] ?></small> -->
                    </h2>
                    <div class="content-main w-clear pb-4"><?= (isset($su_menh['mota' . $lang]) && $su_menh['mota' . $lang] != '') ? $su_menh['mota' . $lang] : '' ?></div>
                </div>

                <div class="content-main w-clear pt-4 pb-4"><?= (isset($su_menh['noidung' . $lang]) && $su_menh['noidung' . $lang] != '') ? htmlspecialchars_decode($su_menh['noidung' . $lang]) : '' ?></div>
            </div>


        </div>
        <div class="photo-static-sm">
            <img src="<?= THUMBS ?>/1530x506x1/<?= UPLOAD_NEWS_L . $su_menh['photo'] ?>" alt="<?= $su_menh['ten' . $lang] ?>" />
        </div>
    </div>

<?php } ?>



<?php if (!empty($linh_vuc_kd)) { ?>
    <div class="container project-highlight justify-content-md-center">
        <h2 class="heading-nested-about my-3 text-dark">
            <?= (isset($lv_kd['ten' . $lang]) && $lv_kd['ten' . $lang] != '') ? $lv_kd['ten' . $lang] : '' ?>
            <!-- <small class="d-block"><?= $static['ten' . $lang] ?></small> -->
        </h2>
        <div class="content-main w-clear pt-4 pb-4"><?= (isset($lv_kd['noidung' . $lang]) && $lv_kd['noidung' . $lang] != '') ? htmlspecialchars_decode($lv_kd['noidung' . $lang]) : '' ?></div>
    </div>
    <div class="about-linh-vuc">
        <?php foreach ($linh_vuc_kd as $q => $ad) { ?>
            <div class="item-thumb" style="width: 100%; position: relative; padding-left: 5px; padding-right: 5px;">
                <div class="img-thumb">
                    <img src="<?= THUMBS ?>/504x672x1/<?= UPLOAD_NEWS_L . $ad['photo'] ?>" alt="<?= $ad['ten' . $lang] ?>" />
                </div>
                <div class="absolute-bottom pd-5 w-100">
                    <h5 style="color: white; text-transform: uppercase; text-align: center;"><?= $ad['ten' . $lang] ?></h5>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>

<?php if (!empty($thanh_tuu)) { ?>
    <div class="box_thanhtuu">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-thumb">
                        <img src="<?= THUMBS ?>/504x672x1/<?= UPLOAD_NEWS_L . $thanh_tuu['photo'] ?>" alt="<?= $thanh_tuu['ten' . $lang] ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="heading-nested-about my-3 text-dark">
                        <?= (isset($thanh_tuu['ten' . $lang]) && $thanh_tuu['ten' . $lang] != '') ? $thanh_tuu['ten' . $lang] : '' ?>
                    </h2>
                    <div class="content-main w-clear pt-4 pb-4"><?= (isset($thanh_tuu['noidung' . $lang]) && $thanh_tuu['noidung' . $lang] != '') ? htmlspecialchars_decode($thanh_tuu['noidung' . $lang]) : '' ?></div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php } ?>


<div class="bg-red">
    <div class="container">
        <div class="row" style="justify-content: center !important;">
            <div class="col-md-10">
                <h3 class="heading-small mt-5">CÔNG TY THÀNH VIÊN</h3>
            </div>
        </div>

        <div class="about_member">
            <div class="member-slider">
                <?php foreach ($cty_thanh_vien as $key => $value) { ?>
                <div class="item-thanhvien">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 style="margin-bottom: 20px;"><?= $value["ten".$lang] ?></h5>
                            <div class="lead">
                             <?= htmlspecialchars_decode($value['mota' . $lang]) ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="img-thumbcrop img-thumbcrop-3by2">
                                <img src="<?= THUMBS ?>/583x390x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </div>
</div>

<!-- <svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <pattern id="img" patternUnits="userSpaceOnUse" width="100" height="100">
      <image xlink:href="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" x="-25" width="150" height="100" />
    </pattern>
  </defs>
  <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img)"/>
</svg> -->

<div class="container">
    <div class="share">
        <b><?= chiase ?>:</b>
        <div class="social-plugin w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?= $func->getCurrentPageURL() ?>" data-oaid="<?= ($optsetting['oaidzalo'] != '') ? $optsetting['oaidzalo'] : '579745863508352884' ?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
    </div>
</div>