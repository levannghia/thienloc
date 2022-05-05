<div class="title"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></div>
<div class="content-main w-clear">
    <?php if(count($news)>0) {?>
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
    <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    
</div>
<?php if($noidung_page!=''){?>
<div class="noidung_page">
    <div class="meta-toc">
        <div class="box-readmore">
            <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
        </div>
    </div>
    <div id="toc-content"><?=htmlspecialchars_decode($noidung_page)?></div>
</div>
<?php }?>