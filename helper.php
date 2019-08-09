<?php 

if ( ! function_exists('config_item')) {
	function config_item($item){
		$_config=array();

		return isset($_config[$item]) ? $_config[$item] : NULL;
	}
}
if ( ! function_exists('log_message')) {
	function log_message($level, $message){
		// for message write log
	}
}

  