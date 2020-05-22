<?php

function pageTitle($title){
	$base_title = config('app.name') .  ' - List of artisans';

	if($title)
		return $title . ' | ' . $base_title;
	return 	$base_title;
	
}

function set_active_router($route){
	return Route::is($route) ? 'active' : '';
}