<?
class Floors extends _MainModel{

public $id;
public $plan;
public $building_id;


function __construct (){

if(isset($_GET['id'])){
 $this->id = $_GET['id'];
}

if(isset($_GET['plan'])){
 
    $this->plan = $_GET['plan'];
}

if(isset($_GET['building_id'])){
 
    $this->building_id = $_GET['building_id'];
}




}


//Вывод списка этажей
public function getListFloors(){

$result= _MainModel::table("floors")->get(array("id", "plan","building_id"))->pagination(0,6)->send();
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "Данные не найдены"]);

}
//Добавление этажа
public function addNewFloor(){
if(isset($_GET['id'])&&isset($_GET['plan'])&&isset($_GET['building_id'])){
$result=_MainModel::table("floors")->add(array("id"=>$this->id,"plan" => $this->plan, "building_id" => $this->building_id))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "Данные не найдены"]);
}
else{
 _MainModel::viewJSON(["error" => "Неверные параметры"]);
 die();
 }
}
//Удаление этажа
public function deleteFloor(){
if(isset($_GET['id']))
_MainModel::table("floors")->delete(array("id" => $this->id))->send();

else{
 _MainModel::viewJSON(["error" => "Неверные параметры"]);
 die();
 }
}
//Редактирование этажа
public function updateFloor(){
if(isset($_GET['id'])&&isset($_GET['plan'])&&isset($_GET['building_id'])){
_MainModel::table("floors")->edit(array("plan" => $this->plan, "building_id" =>$this->building_id), array("id" => $this->id))->send(); 
}
else{
 _MainModel::viewJSON(["error" => "Неверные параметры"]);
 die();
}

}
}
?>
