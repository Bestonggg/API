<?php
 
class TestPresenter extends _MainPresenter{

public function infoG(){

$test=_MainModel::viewJSON(["error" => "Данные не найдены"]);

echo $test;
}

}
?>
