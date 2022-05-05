 

<div class="box-right menu-right-sp pt-5">

	<div class="right-title"><span>DANH MỤC SẢN PHẨM</span></div>

	<div class="box-right-content">

		<ul id="nav-ul" class="accordion">

			<li class="nav-li <?=$source=='index' ? 'active':''?>"><a class="nav-a" href="" title="Trang chủ">Trang chủ</a></li>

			<li class="nav-li <?=$com=='gioi-thieu' ? 'active':''?>"><a class="nav-a" href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>

			<li class="nav-li <?=$com=='du-an' ? 'active':''?>"><a class="nav-a" href="du-an" title="Dự án">Dự án</a>

				<?php if($splistmenu) { ?>

					<i class="fal fa-angle-down"></i>

					<ul class="nav-ul-child">

						<?php foreach($splistmenu as $c=>$cat) { ?>

							<li class="nav-li-child"><a class="nav-a2" title="<?=$cat['ten'.$lang]?>" href="<?=$cat[$sluglang]?>"><?=$cat['ten'.$lang]?></a></li>

						<?php } ?>

					</ul>

				<?php } ?>

			</li>

			<li class="nav-li <?=$com=='tin-tuc' ? 'active':''?>"><a class="nav-a" href="tin-tuc" title="Tin tức">Tin tức</a></li>

			<li class="nav-li <?=$com=='lien-he' ? 'active':''?>"><a class="nav-a" href="lien-he" title="Liên hệ">Liên hệ</a></li>

			<li class="nav-li <?=$com=='tuyen-dung' ? 'active':''?>"><a class="nav-a" href="tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>





        </ul>

	</div>

</div>

 

<div class="box-right">

	<div class="right-title"><span>TIN TỨC NỔI BẬT</span></div>

	<div class="box-right-content">

		<div class="roll_news">

			<UL>

				<?php foreach($tintuc as $k=>$v){ ?>

					<li>

					<div class="news_bt-left w-clear">

						<div class="pic-news scale-img">

							<a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/360x280x1/assets/images/noimage.png';" src="<?=THUMBS?>/360x280x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">

							</a>

						</div>

						<div class="info-news">

							<h3 class="name-news"><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></h3>

							<div class="desc-news text-split"><?=$v['mota'.$lang]?></div>

						</div>

					</div>

					</li>

				<?php }?>

			</ul>

		</div>

	</div>

</div>

 