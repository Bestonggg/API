<?
class Test extends _MainModel{

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

public function addNewBuilding1(){
 
 $status;
  if(_MainModel::is_var('town')){

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

}
?>
