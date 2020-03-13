<?
class Buildings extends _MainModel{

public $town=" ";
public $street=" ";
public $number="";
public $id=1;
//Вывод списка зданий
public function getListBuildings(){


$result= _MainModel::table("buildings")->get(array("id", "town","street","number"))->filter(array("street" =>"Lenin"))->pagination(0,6)->send();
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "text error"]);
}

//Добавление записи
public function addNewBuilding(){
$result=_MainModel::table("buildings")->add(array("town" => 7, "street" => 7,"number"=>7))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "text error"]);
}

//Редактирование записи
public function updateBuilding(){
_MainModel::table("buildings")->edit(array("town" => "значение1", "street" =>"значение2","number"=>"value3"), array("id" => 1))->send();
}



}
?>
