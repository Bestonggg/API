<?
class Floors extends _MainModel{

public $id;
public $plan=123;
public $building_id=1;

//Вывод списка этажей
public function getListFloors(){
$result= _MainModel::table("floors")->get(array("id", "plan","building_id"))->pagination(0,6)->send();
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "text error"]);

}

public function addNewFloor(){
$result=_MainModel::table("floors")->add(array("plan" => (new User())->$plan, "building_id" => (new User())->$building_id))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "text error"]);
}

public function deleteFloor(){
_MainModel::table("floors")->delete(array("id" => $this->$id))->send();
}
}
?>
