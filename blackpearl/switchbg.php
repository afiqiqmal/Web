<?php
	require "control/core/init.php";

	if(Input::get('bodybg') && Input::get('bodycss')){
		Session::put('bodybg',Input::get('bodybg'));
		Session::put('bodycss',Input::get('bodycss'));
	}
	else if(Input::get('contbg') && Input::get('contcss')){
		Session::put('contbg',Input::get('contbg'));
		Session::put('contcss',Input::get('contcss'));
	}

?>