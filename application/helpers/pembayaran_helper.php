<?php
	if(!function_exists('listlevel')){
		function listlevel($a){
			switch ($a){
				case '1':
					return "Administrator";
					break;
				case '2':
					return "Pegawai";
					break;
				default:
					return "None";
					break;
			}
		}
	}