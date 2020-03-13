<?
class Buildings extends _MainModel{

public $town=$_GET['town'];
public $street=$_GET['street'];
public $number=$_GET['number'];
public $id=$_GET['id'];

/
//Вывод списка зданий
public function getListBuildings(){
$result= _MainModel::table("buildings")->get(array("id", "town","street","number"))->pagination(0,6)->send();
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "Данные не найдены"]);
}

//Добавление записи
public function addNewBuilding(){
$result=_MainModel::table("buildings")->add(array("town" => $this->town, "street" => $this->street,"number"=>$this->number))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "Данные не найдены"]);
}

//Редактирование записи
public function updateBuilding(){
_MainModel::table("buildings")->edit(array("town" => $this->town, "street" =>$this->street,"number"=>$this->number), array("id" => $this->id))->send();
}



}
?>
