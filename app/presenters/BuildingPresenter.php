<?php



class BuildingPresenter extends _MainPresenter {

	
		
	    public function addNewBuilding1(){
	     echo(new Test())->addNewBuilding1();
	    }
		

		public function getListBuildings(){
		 echo (new Buildings())->getListBuildings();
		}
	
	    public function addNewBuilding(){
	     echo(new Buildings())->addNewBuilding();
	    }
	
	    public function updateBuilding(){
	     echo( new Buildings())->updateBuilding();
	    }

	    public function deleteBuilding(){
	    echo(new Buildings())->deleteBuilding();
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
	      echo (new Rooms())->getListRooms();
        }
        
        public function addNewRoom(){
         echo(new Rooms())->addNewRoom();
        }
        
        public function updateRoom(){
         echo (new Rooms())->updateRoom();
        }
        
        public function deleteRoom(){
         echo (new Rooms())->deleteRoom();
        } 
}
?>
  
