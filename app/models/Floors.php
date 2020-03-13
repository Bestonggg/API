<?
class Floors extends _MainModel{

public $id;
public $plan;
public $building_id;

//Вывод списка этажей
public function getListFloors(){
$result= _MainModel::table("floors")->get(array("id", "plan","building_id"))->pagination(0,6)->send();
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "text error"]);

}

public function addNewFloor(){
$result=_MainModel::table("floors")->add(array("plan" => $plan, "building_id" => $building_id))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "text error"]);
}

public function deleteFloor(){
_MainModel::table("floors")->delete(array("id" => $id))->send();
}
}
?>