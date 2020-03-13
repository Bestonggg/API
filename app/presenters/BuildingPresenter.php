<?php



class BuildingPresenter extends _MainPresenter {

	
		
		

		public function getListBuildings(){
		 echo (new Buildings())->getListBuildings();
		}
	
	    public function addNewBuilding(){
	     echo(new Buildings())->addNewBuilding();
	    }
	
	    public function updateBuilding(){
	     echo( new Buildings())->updateBuilding();
	    }
}
	



?>
  
