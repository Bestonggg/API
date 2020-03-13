<?
class Rooms extends _MainModel{
public $id;
public $room_name;
public $floor_id;
public $tag;

//Вывод списка
public function getListRooms(){
  $result= _MainModel::table("rooms")->get(array("id", "room_name","floor_id","tag"))->send();
     if($result!=null)
     _MainModel::viewJSON($result);
     else _MainModel::viewJSON(["error" => "Данные не найдены"]);
}

//Добавление 
public function addNewRoom(){
$result=_MainModel::table("rooms")->add(array("id"=>$this->id,"room_name" => $this->room_name, "floor_id" => $this->floor_id,"tag"=>$this->tag))->send(); 
if($result!=null)
_MainModel::viewJSON($result);
else _MainModel::viewJSON(["error" => "Данные не найдены"]);
}
//Удаление 
public function deleteRoom(){
_MainModel::table("rooms")->delete(array("id" => $this->id))->send();
}
//Редактирование 
public function updateRoom(){
_MainModel::table("rooms")->edit(array("room_name" => $this->room_name, "floor_id" => $this->floor_id,"tag"=>$this->tag), array("id" => $this->id))->send(); 
}

}
?>