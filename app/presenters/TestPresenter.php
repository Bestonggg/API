<?php
 
class TestPresenter extends _MainPresenter{

public function infoJ(){

$test=_MainModel::viewJSON(["error" => "Данные не найдены"]);

echo $test;
}

public function info() {
$test=8;
echo "Эщекере".$test;
}

}
?>
