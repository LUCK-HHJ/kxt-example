<?php
	$birthdate = date_create('1988-08-15');
	$todaydate = date_create('now');
	if($todaydate < $birthdate){
		$age = '�㻹û������';
	} else {
		$interval = date_diff($todaydate, $birthdate);
		$age = $interval->format('%y').'��';
	}
	echo $age;