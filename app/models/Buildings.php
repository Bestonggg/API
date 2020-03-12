<?
class Buildings extends _MainModel{

private $town="";
private $street="";
private $number="";

public function getListBuildings(){

$result= _MainModel::table("buildings")->get(array("id", "town","street","number"))->filter(array("street" =>"Lenin"))->send();
_MainModel::viewJSON($result);
}


public fuction addNewBuilding(){
_MainModel::table("buildings")->add(array("town" => $town, "street" => $street,"number"=>$number))->send(); 
}

}
?>
