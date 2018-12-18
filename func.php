<?php

//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne() {
    $result = $db->ymmse_col->find()->sort(array('_id' => -1));

    foreach ($result as $res) {
        echo '<option value="' . $res['make'] . '">' . $res['make'] . '</option>';
    }
}

//**************************************
//     First selection results     //
//**************************************
if (isset($_GET['func']) && $_GET['func'] == "drop_1") {
    drop_1($_GET['drop_var']);
}

function drop_1($drop_var) {
    require_once 'config.php';

    $col = $db->ymmse_col;

    $queryArr = array(
        '$or' => array(
            // array("year" =>  intval ($keyword)),
            array("year" => intval($drop_var)),
        )
    );

    $results = iterator_to_array($col->find($queryArr));

    echo '<select class="form-control" name="drop_2" id="drop_2" required>
  	      <option value="" selected>Select make</option>';

    foreach ($results as $drop_2) {
        $make = $drop_2["make"];
        // echo $model;
        echo '<option value="' . $drop_2['make'] . '">' . $drop_2['make'] . '</option>';
    }

    echo '</select>';
    echo "<script type=\"text/javascript\">
$('#wait_2').hide();
$('#test1').hide();
	$('#drop_2').change(function(){
	  $('#wait_2').show();
	  $('#result_2').hide();
      $.get(\"func.php\", {
		func: \"drop_2\",
		drop_var: $('#drop_1').val(),
		drop_var2: $('#drop_2').val()
      }, function(response){
        $('#result_2').fadeOut();
        setTimeout(\"finishAjax_tier_three('result_2', '\"+escape(response)+\"')\", 40);
      });
    	return false;
	});
</script>";
}

//**************************************
//     Second selection results     //
//**************************************
if (isset($_GET['func']) && $_GET['func'] == "drop_2") {
    drop_2($_GET['drop_var'], $_GET['drop_var2']);
}

function drop_2($drop_var, $drop_var2) {

    require_once 'config.php';

    $col = $db->ymmse_col;

    $queryArr = array(
        '$and' => array(
            // array("year" =>  intval ($keyword)),
            array("year" => intval($drop_var)),
            array("make" => new MongoRegex('/(?i)' . $drop_var2 . '(?i)/'))
        )
    );

    $results = iterator_to_array($col->find($queryArr));

    echo '<select class="form-control" name="drop_3" id="drop_3" required>
        <option value="" selected>Select model</option>';

    foreach ($results as $drop_3) {

        echo '<option value="' . $drop_3['model'] . '">' . $drop_3['model'] . '</option>';
    }



    echo "<script type=\"text/javascript\">
$('#wait_3').hide();
$('#test2').hide();
	$('#drop_3').change(function(){
	  $('#wait_3').show();
	  $('#result_3').hide();
      $.get(\"func.php\", {
		func: \"drop_3\",
		drop_var: $('#drop_1').val(),
		drop_var2: $('#drop_2').val(),
		drop_var3: $('#drop_3').val()
      }, function(response){
        $('#result_3').fadeOut();
        setTimeout(\"finishAjax_tier_four('result_3', '\"+escape(response)+\"')\", 40);
      });
    	return false;
	});
</script>";
}

//**************************************
//     Second selection results     //
//**************************************
if (isset($_GET['func']) && $_GET['func'] == "drop_3") {
    drop_3($_GET['drop_var'], $_GET['drop_var2'], $_GET['drop_var3']);
}

function drop_3($drop_var, $drop_var2, $drop_var3) {

    require_once 'config.php';

    $col = $db->ymmse_col;

    $queryArr = array(
        '$and' => array(
            // array("year" =>  intval ($keyword)),
            array("year" => intval($drop_var)),
            array("make" => new MongoRegex('/(?i)' . $drop_var2 . '(?i)/')),
            array("model" => new MongoRegex('/(?i)' . $drop_var3 . '(?i)/'))
        )
    );

    $results = iterator_to_array($col->find($queryArr));

    echo '<select class="form-control" name="drop_4" id="drop_4">
        <option value=" " disabled="disabled" selected="selected">Select price</option>';

    foreach ($results as $drop_4) {

        echo '<option value="' . $drop_4['price'] . '">' . $drop_4['price.'] . '</option>';
    }

    echo '</select>';
    echo '<p class="newline"><p class="newline">';
    echo'<button class="btn btn-primary btn-block" type="submit" name="submit" id="button">Find Your Vehicle</button>';
}

?>
