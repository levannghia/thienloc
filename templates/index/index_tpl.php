<!-- <?php if ($pro_new['numb'] > 0) { ?>
<div class="wrap_product_new">
	<div class="fixwidth">
		<div class="title">Sản phẩm nổi bật</div>
		<div class="paging-product-index1" data-id="0"></div>
	</div>
</div>
<?php } ?> -->

<section class="about py-4">
	<div class="background-img">
		<img src="/upload/images/background-img.jpg" alt="">
	</div>
	<div class="container">
		<h2 class="heading-nested my-3 text-dark">
			BẤT ĐỘNG SẢN <?= $static['ten' . $lang] ?>
			<small class="d-block"><?= $static['ten' . $lang] ?></small>
		</h2>
		<div class="row m-0 about-home">
			<div class="col-lg-10 mx-auto mb-2">
				<div class="lead" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">
					<?= htmlspecialchars_decode($static['noidung' . $lang]) ?>
				</div>
			</div>

			<!-- gia tri cot loi
			<div class="col-lg-12 p-5">
				<div class="about-slider">
					<?php foreach ($tieuchi as $q => $ad) { ?>
						<div class="item">
							<div class="img-hover-flash">
								<img onerror="this.src='<?= THUMBS ?>/0x36x2/assets/images/noimage.png';" src="<?= THUMBS ?>/367x612x1/<?= UPLOAD_NEWS_L . $ad['photo'] ?>" alt="<?= $ad['ten' . $lang] ?>" title="<?= $ad['ten' . $lang] ?>">
								<div class="content w-100 text-white py-2">
									<h2 class="font-weight-bold mb-0"><?= $ad['ten' . $lang] ?></h2>
									<p class="font-weight-bold mb-0"><?= $ad['mota' . $lang] ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div> -->

			<!-- tieu chi -->
			<div class="col-md-11 p-0">
				<div class="about-slider">
					<?php foreach ($tieuchi as $q => $ad) { ?>
						<div class="item">
							<div class="img-hover-flash">
								<img onerror="this.src='<?= THUMBS ?>/0x36x2/assets/images/noimage.png';" src="<?= THUMBS ?>/367x612x1/<?= UPLOAD_NEWS_L . $ad['photo'] ?>" alt="<?= $ad['ten' . $lang] ?>" title="<?= $ad['ten' . $lang] ?>">
								<div class="content w-100 text-white py-2">
									<h2 class="font-weight-bold mb-0"><?= $ad['ten' . $lang] ?></h2>
									<p class="font-weight-bold mb-0"><?= $ad['mota' . $lang] ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-1 p-0">
				<div class="see-more py-sm-2 py-2">
					<div>
						<a class="text-white" href="gioi-thieu">
							<i class="fa-solid fa-circle-plus"></i>
							Tìm hiểu thêm
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- <div class="gia-tri pt-3">
	<div class="container">
		<div class="slider__wrapper">

			<div class="slider-giatri">
				<?php $i = 1;
				foreach ($giatricotloi as $value) { ?>
					<a href="<?= $value['tenkhongdauvi'] ?>" title="<?= $value['ten' . $lang] ?>">
						<div class="slider__content">
							<div class="slider__text">
								<span><?= $i++ ?></span>
								<h3><?= $value['ten' . $lang] ?></h3>
								<p><?= $value['mota' . $lang] ?></p>
							</div>
							<figure class="slider__image">
								<img onerror="this.src='<?= THUMBS ?>/840x560x1/assets/images/noimage.png';" src="<?= THUMBS ?>/840x560x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['ten' . $lang] ?>">
							</figure>
						</div>
					</a>
				<?php } ?>
			</div>

		</div>
	</div>
</div> -->

<section class="project-highlight py-4">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
				<h2 class="heading-nested my-3 text-dark">
					DỰ ÁN NỔI BẬT
					<small class="d-block"><?= $static['ten' . $lang] ?></small>
				</h2>
				<div class="product-slider-nav py-4" id="product-slider-nav-0">
					<?php if (!empty($duan_tk)) { ?>
						<div class="font-weight-bold text-uppercase">Dự án triển khai</div>
					<?php } ?>
					<?php if (!empty($duan_stk)) { ?>
						<div class="font-weight-bold text-uppercase">Dự án sắp triển khai</div>
					<?php } ?>
					<?php if (!empty($duan_ht)) { ?>
						<div class="font-weight-bold text-uppercase">Dự án đã hoàn thành</div>
					<?php } ?>


				</div>
			</div>
		</div>
	</div>
	<div class="product-slider-for" id="product-slider-for-0">
		<?php if (!empty($duan_tk)) { ?>
			<div class="item">
				<div class="background-img">
					<a href="<?= $duan_tk['tenkhongdau' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1519x506x1/<?= UPLOAD_PRODUCT_L . $duan_tk['photo'] ?>" alt="<?= $duan_tk['ten' . $lang] ?>" /></a>
					<!-- <img src="./public/images/hlbackground1.jpg" alt=""> -->
				</div>
				<div class="description container">
					<div class="row d-flex justify-content-center">
						<div class="col-10 text-center content">
							<div class="text-center text-white px-3 px-md-5 py-4">
								<h4 class="text-white text-uppercase mb-3"><?= $duan_tk['ten' . $lang] ?><small class="d-block text-uppercase"></small></h4>
								<div class="font-weight-light mb-4 px-lg-5 lead">
									<p><?= htmlspecialchars_decode($duan_tk['mota' . $lang]) ?></p>
									<p><i class="fa-solid fa-location-dot"></i> <?= $duan_tk['address'] ?> &nbsp; &nbsp;
										<i class="fa-solid fa-gem"></i> Quy mô: <?= $duan_tk['area'] ?>
									</p>
								</div>
								<a class="text-white" href="<?= $duan_tk['tenkhongdau' . $lang] ?>" tabindex="0">Xem chi tiết &nbsp; <span class="icon-plus"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php if (!empty($duan_stk)) { ?>
			<div class="item">
				<div class="background-img">
					<a href="<?= $duan_stk['tenkhongdauvi'] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1519x506x1/<?= UPLOAD_PRODUCT_L . $duan_stk['photo'] ?>" alt="<?= $duan_stk['ten' . $lang] ?>" /></a>
					<!-- <img src="./public/images/hlbackground2.jpg" alt=""> -->
				</div>
				<div class="description container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-10 text-center content">
							<div class="text-center text-white px-3 px-md-5 py-4">
								<h4 class="text-white text-uppercase mb-3"><?= $duan_stk['ten' . $lang] ?><small class="d-block text-uppercase"></small></h4>
								<div class="font-weight-light mb-4 px-lg-5 lead">
									<p><?= htmlspecialchars_decode($duan_stk['mota' . $lang]) ?></p>
									<p><i class="fa-solid fa-location-dot"></i> <?= $duan_stk['address'] ?> &nbsp; &nbsp;
										<i class="fa-solid fa-gem"></i> Quy mô: <?= $duan_stk['area'] ?>
									</p>
								</div>
								<a class="text-white" href="<?= $duan_stk['tenkhongdauvi'] ?>" tabindex="0">Xem chi tiết &nbsp; <span class="icon-plus"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php if (!empty($duan_ht)) { ?>
			<div class="item">
				<div class="background-img">
					<a href="<?= $duan_ht['tenkhongdauvi'] ?>"><img onerror="this.src='<?= THUMBS ?>/300x300x2/assets/images/noimage.png';" src="<?= THUMBS ?>/1519x506x1/<?= UPLOAD_PRODUCT_L . $duan_ht['photo'] ?>" alt="<?= $duan_ht['ten' . $lang] ?>" /></a>
				</div>
				<div class="description container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-10 text-center content">
							<div class="text-center text-white px-3 px-md-5 py-4">
								<h4 class="text-white text-uppercase mb-3"><?= $duan_ht['ten' . $lang] ?> <small class="d-block text-uppercase"></small></h4>
								<div class="font-weight-light mb-4 px-lg-5 lead">
									<p><?= htmlspecialchars_decode($duan_ht['mota' . $lang]) ?></p>
									<p><i class="fa-solid fa-location-dot"></i> <?= $duan_ht['address'] ?> &nbsp; &nbsp;
										<i class="fa-solid fa-gem"></i> Quy mô: <?= $duan_ht['area'] ?>
									</p>
								</div>
								<a class="text-white" href="<?= $duan_ht['tenkhongdauvi'] ?>" tabindex="0">Xem chi tiết &nbsp; <span class="icon-plus"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</section>

<section class="news my-4">
	<div class="container">
		<h2 class="heading-nested my-3 text-dark">
			BẤT ĐỘNG SẢN <?= $static['ten' . $lang] ?>
			<small class="d-block"><?= $static['ten' . $lang] ?></small>
		</h2>
		<div class="news-slider">
			<?php foreach ($tintuc as $k => $v) { ?>
				<div class="item">
					<div class="background-img">
						<a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/360x205x1/assets/images/noimage.png';" src="<?= THUMBS ?>/330x245x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>">
							<div class="date">
								<?= date('d/m/Y', $v['ngaytao']) ?>
							</div>
					</div>
					<div class="content">
						<h5 class="title">
							<a href="<?= $v[$sluglang] ?>"><?= $v['ten' . $lang] ?></a>
						</h5>
						<a class="des" href="<?= $v[$sluglang] ?>">
							xem chi tiết
							<i class="fa-solid fa-circle-plus"></i>
						</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

</section>

<!-- <div class="wrap_product">
	<div class="wrap_product_index">
		<div class="fixwidth">
			<div class="title">Danh mục sản phẩm</div>
			<div class="title-category">
				<?php $c = 0;
				foreach ($pronb_list as $k => $v) {
					if ($v['count_pro'] > 0) { ?>
						<span <?= $c == 0 ? 'class="active"' : '' ?> data-id="<?= $v['id'] ?>"><?= $v['ten' . $lang] ?></span>
				<?php $c++;
					}
				} ?>
			</div>
			<div class="paging-product-index"></div>
		</div>
	</div>
</div> -->
<!-- <?php if (count($qc2) > 0) { ?>
	<div class="wrap_qc2">
		<div class="fixwidth d-flex justify-content-between">
			<div class="left_qc">
				<div class="owl-carousel owl-theme owl-slideshow">
					<?php foreach ($qc2 as $q => $ad) { ?>
						<div class="item_slider">
							<a href="<?= $ad['link'] ?>" target="_blank" title="<?= $ad['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/775x315x2/assets/images/noimage.png';" src="<?= THUMBS ?>/775x315x1/<?= UPLOAD_PHOTO_L . $ad['photo'] ?>" alt="<?= $ad['ten' . $lang] ?>" title="<?= $ad['ten' . $lang] ?>" /></a>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="right_qc">
				<a href="<?= $banner_qc['link'] ?>" target="_blank" title="<?= $banner_qc['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/368x315x2/assets/images/noimage.png';" src="<?= THUMBS ?>/368x315x1/<?= UPLOAD_PHOTO_L . $banner_qc['photo'] ?>" alt="<?= $banner_qc['ten' . $lang] ?>" title="<?= $banner_qc['ten' . $lang] ?>" /></a>
			</div>
		</div>
	</div>
<?php } ?> -->

<!-- <div class="wrap_doitac">
	<div class="fixwidth">
		<div class="title">
			Đối tác - Thương hiệu
		</div>
		<div class="owl-carousel owl-theme owl-doitac">
			<?php foreach ($doitac as $q => $ad) { ?>
				<div class="item_tieuchi">
					<a href="<?= $ad['link'] ?>"><img onerror="this.src='<?= THUMBS ?>/140x140x2/assets/images/noimage.png';" src="<?= THUMBS ?>/140x140x1/<?= UPLOAD_PHOTO_L . $ad['photo'] ?>" alt="<?= $ad['ten' . $lang] ?>" title="<?= $ad['ten' . $lang] ?>" /></a>

				</div>
			<?php } ?>
		</div>
	</div>
</div> -->

<!-- <div class="wrap-news">
	<div class="fixwidth">
		<div class="title">Tin tức mới nhất</div>
		<div class="owl-carousel owl-theme owl-news">
			<?php foreach ($tintuc as $k => $v) { ?>
				<div class="news_bt w-clear">
					<div class="pic-news scale-img">
						<a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/360x205x1/assets/images/noimage.png';" src="<?= THUMBS ?>/360x205x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>">
						</a>
					</div>
					<div class="info-news">
						<div class="post-meta is-small op-8"><i class="fal fa-calendar-alt"></i> <?= date('d/m/Y', $v['ngaytao']) ?></div>
						<h3 class="name-news"><a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?></a></h3>
						<div class="desc-news text-split"><?= $v['mota' . $lang] ?></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div> -->
<!-- <div class="wrap-feedback">
	<div class="fixwidth">
		<div class="content-feedback">
			<div class="owl-carousel owl-theme owl-feedback">
				<?php foreach ($feedback as $k => $v) { ?>
					<div class="feedback-item w-clear">

						<div class="info-news">
							<div class="desc-news text-split"><?= $v['mota' . $lang] ?></div>
							<h3 class="name-news"><?= $v['ten' . $lang] ?></h3>
							<div class="nghenghiep-news"><?= $v['nghenghiep'] ?></div>

						</div>
						<div class="pic-news scale-img">
							<img onerror="this.src='<?= THUMBS ?>/100x100x1/assets/images/noimage.png';" src="<?= THUMBS ?>/100x100x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>">
						</div>
					</div>
				<?php } ?>


			</div>
		</div>
	</div>
</div> -->