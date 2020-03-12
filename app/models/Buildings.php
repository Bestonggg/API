<?
class Buildings extends _MainModel{

public function getListBuildings(){

$result= _MainModel::table("buildings")->get(array("id", "town","street","number"))->filter(array("street" =>"Lenin"))->sort("id", "desc")->send();
_MainModel::viewJSON($result);
}

}
?>
