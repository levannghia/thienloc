<?php 
	include "ajax_config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);

 
	//$namelist = $_GET['namelist'];//(isset($_GET['namelist']) && $_GET['namelist'] !='') ? htmlspecialchars($_GET['namelist']) : 0;

	$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "ajax/ajax_news.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";

	 
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	/* Get data */
	$sql = "select ten$lang, tenkhongdauvi, id, photo  from #_news_list where type='thi-cong' $where and noibat > 0 and hienthi > 0 order by stt,id desc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $cache->getCache($sqlCache,'result',7200);

	/* Count all data */
	$countItems = count($cache->getCache($sql,'result',7200));

	/* Get page result */
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);

	
?>
<?php if($countItems) { ?>
	<div class="loadkhung_product1">
		<?php foreach($items as $k=>$v){?>
			<div class="boxproduct_item1">
				<a class="boxproduct_img" href="<?=$v['tenkhongdauvi']?>"><img onerror="this.src='<?=THUMBS?>/280x280x2/assets/images/noimage.png';" src="<?=THUMBS?>/280x280x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/></a>
				<div class="boxproduct_info">
					<div class="boxproduct_name"><a href="<?=$v['tenkhongdauvi']?>" title="<?=$v['tenvi']?>"><?=$v['ten'.$lang]?></a></div>
				</div>
			</div>
		<?php }?>
	</div>
	<div class="paging_ajax">
		<?=$pagingItems?>
	</div>
<?php } ?>