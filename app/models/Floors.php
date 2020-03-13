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
//Добавление этажа
public function addNewFloor(){
$result=_MainModel::table("floors")->add(array("plan" => $this->plan, "building_id" => $this->building_id))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "text error"]);
}
//Удаление этажа
public function deleteFloor(){
_MainModel::table("floors")->delete(array("id" => $this->id))->send();
}
}
?>
