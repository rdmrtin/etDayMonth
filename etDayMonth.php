<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Tallinn');

function etDay() {
	$arr = array();
	$arr['monday'] 		= 'Esmaspäev';
	$arr['Tuesday'] 	= 'Teisipäev';
	$arr['Wednesday'] 	= 'Kolmapäev';
	$arr['Thursday'] 	= 'Neljapäev';
	$arr['Friday'] 		= 'Reede';
	$arr['Saturday'] 	= 'Laupäev';
	$arr['Sunday'] 		= 'Pühapäev';
	$date = date('l');
	$str = strtr($date, $arr);
	return $str;
}

function etMonth($var) {
	$arr['Jan'] = 'Jaanuar';
	$arr['Feb'] = 'Veebruar';
	$arr['Mar'] = 'Märts';
	$arr['Apr'] = 'Aprill';
	$arr['May'] = 'Mai';
	$arr['Jun'] = 'Juuni';
	$arr['Jul'] = 'Juuli';
	$arr['Aug'] = 'August';
	$arr['Sep'] = 'September';
	$arr['Oct'] = 'Oktoober';
	$arr['Nov'] = 'November';
	$arr['Dec'] = 'Detsember';
	$date = date('j.M.Y', strtotime($var));
	$str = strtr($date, $arr);
	return $str;
}
