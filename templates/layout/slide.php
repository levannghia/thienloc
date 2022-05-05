<?php if(count($slider)) { ?>
    <section class="banner-slider">
    <?php foreach($slider as $v) { ?>
            <div class="item d-block">
                <div class="img-background">
                <img onerror="this.src='<?=THUMBS?>/1366x495x2/assets/images/noimage.png';" src="<?=THUMBS?>/1520x760x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>">
                </div>
            </div>
            <?php } ?>
    </section>
<?php } ?>
<?php /*if($banner!='') { ?>
<div class="banner-in">
    <img onerror="this.src='<?=THUMBS?>/1920x506x2/assets/images/noimage.png';" src="<?=THUMBS?>/1920x506x1/<?=UPLOAD_SEOPAGE_L.$banner?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/>
</div>  
<?php }*/ ?>
