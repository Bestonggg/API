<?
class Buildings extends _MainModel{

public function getListBuildings(){

$result= _MainModel::table("buildings")->get(array("id", "town","street","number"))->filter(array("id" =>1 )->send();
_MainModel::viewJSON($result);
}

}
?>
