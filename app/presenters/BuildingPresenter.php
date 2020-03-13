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

	    public function getListFloors(){
	     echo (new Floors())->getListFloors();
	    }
	    
	    public function addNewFloor(){
	     echo(new Floors())->addNewFloor();
	    }
	    
	    public function deleteFloor(){
	     echo (new Floors())->deleteFloor();
	    }
	    
	    public function updateFloor(){
	     echo (new Floors())->updateFloor();
        }
	    
	    public function getListRooms(){
	      echo (new Floors())->getListRooms();
        }
}
?>
  
