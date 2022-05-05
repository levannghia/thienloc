<?php  
	if(!defined('SOURCES')) die("Error");
 
    $slider = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide'));
    //$qc = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide-qc1'));
    $qc2 = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide-qc2'));
    $doitac = $d->rawQuery("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('doi-tac'));
    $banner_qc = $d->rawQueryOne("select id, photo,link from #_photo where type = ? and act = ? limit 0,1",array('banner-qc','photo_static'));

    $pro_new = $d->rawQueryOne("select count(id) as numb from #_product where type = ? and moi > 0 and hienthi > 0 order by stt,id desc",array('san-pham'));

    $pronb_list = $d->rawQuery("select a.ten$lang, a.tenkhongdauvi,a.id,(select count(b.id) from #_product b where b.id_list=a.id and b.noibat>0 and b.hienthi>0 and type='san-pham' ) as count_pro from #_product_list a where a.type = ? and a.noibat > 0 and a.hienthi > 0 order by a.stt,a.id desc",array('san-pham'));
    $giatricotloi = $d->rawQuery("select ten$lang, tenkhongdau$lang, mota$lang, ngaytao, id, photo from #_news where type = ? and noibat > 0 and hienthi > 0 order by stt,id desc ",array('gia-tri-cot-loi'));
    // var_dump($giatricotloi); die();
    $duan_stk = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, address, area, tenkhongdauen, mota$lang, noidung$lang, id_list, id_cat, id_item, id_sub, id_tags, photo from #_product where noibat > 0 and status = 1 and hienthi > 0 and type = ?  limit 0,1",array('du-an'));
    $duan_tk = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, address, area, tenkhongdauen, mota$lang, noidung$lang, id_list, id_cat, id_item, id_sub, id_tags, photo from #_product where noibat > 0 and status = 2 and hienthi > 0 and type = ?  limit 0,1",array('du-an'));
    $duan_ht = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, address, area, tenkhongdauen, mota$lang, noidung$lang, id_list, id_cat, id_item, id_sub, id_tags, photo from #_product where noibat > 0 and status = 3 and hienthi > 0 and type = ?  limit 0,1",array('du-an'));
 
    $tieuchi = $d->rawQuery("select ten$lang, mota$lang, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc ",array('tieu-chi'));
    $feedback = $d->rawQuery("select ten$lang, mota$lang, id, photo,nghenghiep from #_news where type = ? and hienthi > 0 order by stt,id desc ",array('feedback'));
    $static = $d->rawQueryOne("select id, type, ten$lang, noidung$lang, photo, ngaytao, ngaysua, options from #_static where type = ? limit 0,1",array('gioi-thieu'));
    /* SEO */
    $seoDB = $seo->getSeoDB(0,'setting','capnhat','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->setSeo('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->setSeo('description',$seoDB['description'.$seolang]);
    $seo->setSeo('url',$func->getPageURL());
    $img_json_bar = (isset($logo['options']) && $logo['options'] != '') ? json_decode($logo['options'],true) : null;
    if($img_json_bar == null || ($img_json_bar['p'] != $logo['photo']))
    {
        $img_json_bar = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($img_json_bar),'photo',$logo['id']);
    }
    if(count($img_json_bar) > 0)
    {
        $seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->setSeo('photo:width',$img_json_bar['w']);
        $seo->setSeo('photo:height',$img_json_bar['h']);
        $seo->setSeo('photo:type',$img_json_bar['m']);
    }
?>