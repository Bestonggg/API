<?php
 
class TestPresenter extends _MainPresenter{

public function infoG(){
echo 123;
echo _MainModel::viewJSON(["error" => "Данные не найдены"]);
}

}
?>
