<?php
/**
 * 生成uuid
 * @return string
 */
function makeUUID(){
	mt_srand((double)microtime()*10000);
	$charid = strtolower(md5(uniqid(rand(), true)));
	$uuid = substr($charid, 0, 8)
		    .substr($charid, 8, 4)
		    .substr($charid,12, 4)
		    .substr($charid,16, 4)
		    .substr($charid,20,12);

	return $uuid;
}

?>
