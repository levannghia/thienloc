<?php  
	if(!defined('SOURCES')) die("Error");
	
	/* Lấy bài viết tĩnh */
	$static = $d->rawQueryOne("select id, type, ten$lang, noidung$lang, photo, ngaytao, ngaysua, options from #_static where type = ? and hienthi > 0 limit 0,1",array($type));

	$tam_nhin = $d->rawQueryOne("select id, type, ten$lang, noidung$lang, photo, ngaytao, ngaysua, options from #_static where type = ? and hienthi > 0 limit 0,1",array('tam-nhin'));

	$su_menh = $d->rawQueryOne("select id, mota$lang, type, ten$lang, noidung$lang, photo, ngaytao, ngaysua, options from #_static where type = ? and hienthi > 0 limit 0,1",array('su-menh'));

	$seopage = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array($type));

	$lv_kd = $d->rawQueryOne("select id, type, ten$lang, noidung$lang, photo, ngaytao, ngaysua, options from #_static where type = ? and hienthi > 0 limit 0,1",array('linh-vuc-kd'));

	$linh_vuc_kd = $d->rawQuery("select ten$lang mota$lang, ngaytao, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc",array('linh-vuc-kinh-doanh'));
	// var_dump($linh_vuc_kd); die();

	$banner=$seopage['banner']; 
	/* SEO */
	if(!empty($static))
	{
		$seoDB = $seo->getSeoDB(0,'static','capnhat',$static['type']);
		$seo->setSeo('h1',$static['ten'.$lang]);
		if(!empty($seoDB['title'.$seolang])) $seo->setSeo('title',$seoDB['title'.$seolang]);
		else $seo->setSeo('title',$static['ten'.$lang]);
		if(!empty($seoDB['keywords'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
		if(!empty($seoDB['description'.$seolang])) $seo->setSeo('description',$seoDB['description'.$seolang]);
		$seo->setSeo('url',$func->getPageURL());
		$img_json_bar = (isset($static['options']) && $static['options'] != '') ? json_decode($static['options'],true) : null;
		if($img_json_bar == null || ($img_json_bar['p'] != $static['photo']))
		{
			$img_json_bar = $func->getImgSize($static['photo'],UPLOAD_NEWS_L.$static['photo']);
			$seo->updateSeoDB(json_encode($img_json_bar),'static',$static['id']);
		}
		if(count($img_json_bar) > 0)
		{
			$seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_NEWS_L.$static['photo']);
			$seo->setSeo('photo:width',$img_json_bar['w']);
			$seo->setSeo('photo:height',$img_json_bar['h']);
			$seo->setSeo('photo:type',$img_json_bar['m']);
		}
	}

	/* breadCrumbs */
	if(isset($title_crumb) && $title_crumb != '') $breadcr->setBreadCrumbs($com,$title_crumb);
	$breadcrumbs = $breadcr->getBreadCrumbs();
?>