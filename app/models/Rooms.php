<?
class Rooms extends _MainModel{
public $id;
public $room_name;
public $floor_id;
public $tag;

public function getListRooms(){
  $result= _MainModel::table("rooms")->get(array("id", "room_name","floor_id","tag"))->send();
     if($result!=null)
     _MainModel::viewJSON($result);
     else _MainModel::viewJSON(["error" => "text error"]);
}


}
?>
