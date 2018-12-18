<?php

$content = file_get_contents("data.csv");

echo "<pre>";

echo $content . "\n";

$contentArr = explode("\n", $content);
$contentArr = array_filter($contentArr);
//print_r($contentArr);

$finalContentArr = array();

$fields = explode("\t", $contentArr[0]);

unset($finalContentArr[0]);

foreach ($contentArr as $data) {
    //echo $data . "\n";
    $dataArr = explode("\t", $data);
    //print_r($dataArr);

    $temp = array();
    //print_r($dataArr);
    foreach ($dataArr as $key => $newData) {
        if (is_numeric($newData)) {
            $newData = (int) $newData;
        }
        $temp = $temp + array($fields[$key] => $newData);
    }


    array_push($finalContentArr, $temp);
}

// print_r($finalContentArr);

require_once 'config.php';
$col = $db->ymmse_col;

foreach ($finalContentArr as $data) {
    if ($data["action"] == "new") {
        $col->insert($data);
    }
    if ($data["action"] == "update") {
        $searchParam = array(
            "id" => $data["id"],
        );
        unset($data["_id"]);
        $col->update($searchParam, $data);
    }
    if ($data["action"] == "remove") {
        $searchParam = array(
            "id" => $data["id"],
        );
        $col->remove($searchParam);
    }
}
?>
