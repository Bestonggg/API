<?
class Rooms extends _MainModel{
public $id;
public $room_name;
public $floor_id;
public $tag;

function __construct (){

if(isset($_GET['id'])){
 $this->id = $_GET['id'];
}

if(isset($_GET['room_name'])){
 
    $this->room_name = $_GET['room_name'];
}

if(isset($_GET['floor_id'])){
 
    $this->floor_id = $_GET['floor_id'];
}

if(isset($_GET['tag'])){
 
    $this->tag = $_GET['tag'];
}
}
//Вывод списка
public function getListRooms(){
  $result= _MainModel::table("rooms")->get(array("id", "room_name","floor_id","tag"))->send();
     if($result!=null)
     _MainModel::viewJSON($result);
     else _MainModel::viewJSON(["error" => "Данные не найдены"]);
}

//Добавление 
public function addNewRoom(){

if(isset($_GET['id'])&&isset($_GET['room_name'])&&isset($_GET['floor_id'])&&isset($_GET['tag'])){
$result=_MainModel::table("rooms")->add(array("id"=>$this->id,"room_name" => $this->room_name, "floor_id" => $this->floor_id,"tag"=>$this->tag))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "Данные не найдены"]);
}
else{
 _MainModel::viewJSON(["error" => "Неверные параметры"]);
 die();
}
}
//Удаление 
public function deleteRoom(){
if(isset($_GET['id']))
_MainModel::table("rooms")->delete(array("id" => $this->id))->send();
else{
 _MainModel::viewJSON(["error" => "Неверные параметры"]);
 die();
}
}
//Редактирование 
public function updateRoom(){

if(isset($_GET['id'])&&isset($_GET['room_name'])&&isset($_GET['floor_id'])&&isset($_GET['tag'])){
_MainModel::table("rooms")->edit(array("room_name" => $this->room_name, "floor_id" => $this->floor_id,"tag"=>$this->tag), array("id" => $this->id))->send(); 
}
else{
 _MainModel::viewJSON(["error" => "Неверные параметры"]);
 die();
}
}
}
?>
