<?
class Buildings extends _MainModel{



public function getListBuildings(){

$result= _MainModel::table("buildings")->get(array("id", "town","street","number"))->filter(array("street" =>"Lenin"))->send();
_MainModel::viewJSON($result);
}


public function addNewBuilding(){
$test=_MainModel::table("buildings")->add(array("town" => 7, "street" => 7,"number"=>7))->send(); 
_MainModel::viewJSON($test);
}


public function updateBuilding(){
_MainModel::table("buildings")->edit(array("town" => "значение1", "street" =>"значение2","number"=>"value3"), array("id" => 1))->send();
}



}
?>
