<?php
 
class TestPresenter extends _MainPresenter{

public function infoG(){

echo _MainModel::viewJSON(["error" => "Данные не найдены"]);
}

}
?>
