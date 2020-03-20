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


//Вывод списка зданий
public function getListBuildings(){



$result= _MainModel::table("buildings")->get(array("id", "town","street","number"))->pagination(0,6)->send();
if($result!=null){

 _MainModel::viewJSON($result);
}
else  _MainModel::viewJSON(["error" => "Данные не найдены"]);

}

//Добавление записи
public function addNewBuilding(){
 $status;
  if(_MainModel::is_var('town')&&_MainModel::is_var('street')&&_MainModel::is_var('number')){

$result=_MainModel::table("buildings")->add(array("town" => $this->town, "street" => $this->street,"number"=>$this->number))->send(); 

if($result!=null)
 _MainModel::viewJSON($result);

else  _MainModel::viewJSON(["error" => "Ошибка заполнения"]);
}
else{
  _MainModel::viewJSON(["error" => "Неверные параметры"]);
 
 die();
}

}

//Редактирование записи
public function updateBuilding(){
if(isset($_GET['town'])&&isset($_GET['street'])&&isset($_GET['number'])&&isset($_GET['id'])){
_MainModel::table("buildings")->edit(array("town" => $this->town, "street" =>$this->street,"number"=>$this->number), array("id" => $this->id))->send();
}
else{
 return _MainModel::viewJSON(["error" => "Неверные параметры"]);
 die();
}

}
//Удаление здания
public function deleteBuilding(){
if(isset($_GET['id']))
_MainModel::table("buildings")->delete(array("id" => $this->id))->send();

else{
 _MainModel::viewJSON(["error" => "Неверные параметры"]);
 die();
 }
}


}
?>
