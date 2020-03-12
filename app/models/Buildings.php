<?
class Buildings extends _MainModel{

public function getListBuildings(){

$result= _MainModel::table("buildings")->get(array("id", "town","street","number"))->sort("street", "desc")->pagination(0,6)->send();
_MainModel::viewJSON($result);
}

}
?>
