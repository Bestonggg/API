<?
class Buildings extends _MainModel{

public $town;
public $street;
public $number;
public $id;

function __construct (){

if(isset($_GET['town'])){
 $this->town = $_GET['town'];
 
}


if(isset($_GET['street'])){
 
    $this->street = $_GET['street'];
}

if(isset($_GET['number'])){
 
    $this->number = $_GET['number'];
}

if(isset($_GET['id'])){

    $this->id = $_GET['id'];
}


}
//Метод проверки параметров GET
public function checkParams(){
   if(!isset($_GET['town']['street']['number']))
   _MainModel::viewJSON(["error" => "косяк"]);

}

//Вывод списка зданий
public function getListBuildings(){
checkParams();
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
//Удаление здания
public function deleteBuilding(){
_MainModel::table("buildings")->delete(array("id" => $this->id))->send();
}


}
?>
