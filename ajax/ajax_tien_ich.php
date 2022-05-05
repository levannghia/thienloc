<?php
	include "ajax_config.php";
	$id = $_POST['id'];
	$data = $d->rawQueryOne("select noidungvi, tenvi from #_gallery where id = ? and type = 'du-an' and kind='man' and val='tien-ich' and hienthi > 0 limit 0,1",array($id));

	echo htmlspecialchars_decode($data['noidungvi']);
?>