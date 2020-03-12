<?
 class Languages extends _MainModel{

 public function getListLang()
 {
     $result= _MainModel::table("Languages")->get(array("id", "language"))->send();
     _MainModel::viewJSON($result);
 }

?>
