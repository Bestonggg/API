<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 * branch b1
 */

class TestPresenter extends _MainPresenter {

	public function getListUsers(){

		if($this->isSecurity()){
			//echo (new Users())->getListUsers();
			echo "12345667890";
			
		} 

	}

	/* labels */
	public function rusLableTable(){ $this->renderLabel('rus', 'labelLayoutTable'); }

	public function engLableTable(){ $this->renderLabel('eng', 'labelLayoutTable'); }

}

?>
