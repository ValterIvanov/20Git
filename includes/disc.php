<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="..css/video.css">
	<title></title>
</head>

<body class="body1">
<?php
if (isset($_POST['submit'])){
	if (!empty($_POST['fighters'])&&!empty($_POST['health'])&&!empty($_POST['attack'])&&!empty($_POST['resistance'])){
		$fighter=explode(',', $_POST['fighters']);
		$master=['health'=>$_POST['health'],'attack'=>$_POST['attack'],'resistance'=>$_POST['resistance']];
		
		$hits_by_fighters=0;
		$hits_by_master=0;
		$current_fighter=0;
		$is_master_dead=false;
		$total_damage_fighter=0;
		$total_damage_master=0;
		while (true) {
			//arr_master-dead
			$fighter_real=[];
			switch ($fighter[$current_fighter]) {
				case '"a"':
					$fighter_real['health']=5;
					$fighter_real['attack']=6;
					$fighter_real['resistance']=2;
					break;
				case '"b"':
					$fighter_real['health']=6;
					$fighter_real['attack']=8;
					$fighter_real['resistance']=2;
					break;
					case '"g"':
					$fighter_real['health']=8;
					$fighter_real['attack']=6;
					$fighter_real['resistance']=5;
					break;
			}
			while (true) {
				//fight
				$damage_fighter=$fighter_real['attack']-$master['resistance'];//f-atk
				$total_damage_fighter+=$damage_fighter;
				$hits_by_fighters++;
				$master['health']-=$damage_fighter;//master_hp-atk
				if ($master['health']<=0){  // master_dead?
					$is_master_dead=true;
					break;
				}
				$damage_master=$master['attack']-$fighter_real['resistance'];//at-cal
				$total_damage_master+=$damage_master;
				$hits_by_master++;
				$fighter_real['health']-=$damage_master; // f-hp-master_atk
				if ($fighter_real['health'] <= 0) {//dead?
					break;
				}
			}
			if ($is_master_dead==true) {
				break;
			}
			$current_fighter++;//next fighter
			if ($current_fighter == sizeof($fighter)){
				// last one
				break;
			}

	}
	$result=[];

	if($is_master_dead == false){
		$result[0] ="Master";
	} else{
		$result[0]= "Fighters";
	}
	$result[1]= $current_fighter ;
	$result[2]=sizeof($fighter)-$current_fighter;
	$result[3]=$master['health'];
	$result[4]=$hits_by_fighters;
	$result[5]=$hits_by_master;
	$result[6]=round($total_damage_fighter/$hits_by_fighters,2);
	$result[7]=round($total_damage_master/$hits_by_master,2);
	var_dump($result);
	
}else{
	echo "Please input data";
}
    }
    ?>
