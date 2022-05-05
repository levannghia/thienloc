<div class="title"><?=$title_crumb?></div>
<div class="main_news"><span><?=$row_detail['ten'.$lang]?></span></div>
<?php /*<div class="time-main"><i class="fas fa-calendar-week"></i><span><?=ngaydang?>: <?=date("d/m/Y h:i A",$row_detail['ngaytao'])?></span></div>*/?>
<?php if(count($hinhanhtt)>0) { ?>
    <div class="box_gal">
        <div class="slider-for">
            <?php foreach($hinhanhtt as $k=>$v){?>
                <div>
                    <a href="<?=UPLOAD_NEWS_L.$v['photo']?>" data-fancybox="gallery" data-caption="<?=$row_detail['ten'.$lang]?>"> 
                        <img alt="<?=$row_detail['ten'.$lang]?>" src="<?=THUMBS?>/1200x600x1/<?=UPLOAD_NEWS_L.$v['photo']?>">
                    </a>
                </div>
            <?php }?>
        </div>
        <div class="slider-nav">
            <?php foreach($hinhanhtt as $k=>$v){?>
                <div>
                    <img alt="<?=$row_detail['ten'.$lang]?>" src="<?=THUMBS?>/300x150x1/<?=UPLOAD_NEWS_L.$v['photo']?>">
                </div>
            <?php }?>
        </div>
    </div>
<?php }?>
<?php if(isset($row_detail['noidung'.$lang]) && $row_detail['noidung'.$lang] != '') { ?>
    <div class="meta-toc">
        <div class="box-readmore">
            <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
        </div>
    </div>
    <div class="content-main w-clear" id="toc-content"><?=htmlspecialchars_decode($row_detail['noidung'.$lang])?></div>
    
<?php } ?>
<div class="share">
    <b><?=chiase?>:</b>
    <div class="social-plugin w-clear">
        <div class="addthis_inline_share_toolbox_qj48"></div>
        <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
    </div>
</div>
<?php if(count($news)>0) {?>
    <br><br>
    <div class="title">BÀI VIẾT KHÁC</div>
    <div class="loadkhung_gal">
        <?php foreach($news as $k=>$v){?>
            <div class="gallery_item">
                <a class="gallery_img" href="<?=$v['tenkhongdauvi']?>"><img onerror="this.src='<?=THUMBS?>/587x477x2/assets/images/noimage.png';" src="<?=THUMBS?>/587x477x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/></a>
                <div class="gallery_info">
                    <div class="gallery_name"><a href="<?=$v['tenkhongdauvi']?>" title="<?=$v['tenvi']?>"><?=$v['ten'.$lang]?></a></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
<?php } ?>

