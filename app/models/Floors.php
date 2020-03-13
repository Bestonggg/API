<?
class Floors extends _MainModel{

public $id=0;
public $plan=123;
public $building_id=1;

//Вывод списка этажей
public function getListFloors(){
$result= _MainModel::table("floors")->get(array("id", "plan","building_id"))->pagination(0,6)->send();
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "Данные не найдены"]);

}
//Добавление этажа
public function addNewFloor(){
$result=_MainModel::table("floors")->add(array("id"=>$this->id,"plan" => $this->plan, "building_id" => $this->building_id))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "Данные не найдены"]);
}
//Удаление этажа
public function deleteFloor(){
_MainModel::table("floors")->delete(array("id" => $this->id))->send();
}
//Редактирование этажа
public function updateFloor(){
_MainModel::table("floors")->edit(array("plan" => $this->plan, "building_id" =>$this->building_id), array("id" => $this->id))->send(); 
}

}
?>
