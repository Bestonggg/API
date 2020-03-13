<?
 class Languages extends _MainModel{

 public function getListLang()
 {
  
     $result= _MainModel::table("languages")->get(array("id", "language"))->send();
     if($result!=null)
     _MainModel::viewJSON($result);
     else _MainModel::viewJSON(["error" => "Данные не найдены"]);
 }
}
?>
