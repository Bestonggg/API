<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 * branch b1
 */

class Test2Presenter extends _MainPresenter {

	public function printJSON(){

	
	$phones = array("apple"=>"iPhone5", 
                "samsumg"=>"Samsung Galaxy III", 
                "nokia" => "Nokia N9", 
                "sony" => "Sony XPeria Z3");
                
                _MainModel::viewJSON($phones);
		} 

	}

	



?>
 
