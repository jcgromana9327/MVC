<?php

date_default_timezone_set('UTC');

require_once 'config.php';
$col = $db->feedback_col;

$sortParam = array('_id' => -1,);

$records = $col->find();
$records = iterator_to_array($records->sort($sortParam)->limit(5));


echo '<div class="detailBox">';
echo '<div class="titleBox">';
echo '<label>Comments/Suggestions</label>';
echo '</div>';
//echo '<div class="commentBox">';
// echo '<p class="taskDescription">Feel free to submit what you feel..</p>';
// echo '</div>';
foreach ($records as $data) {

    echo '<div class="actionBox">';
    echo '<ul class="commentList">';
    echo '<li>';
    echo '<div class="commenterImage">';
    echo '</div>';
    echo '<div class="commentText">';
    echo '<p class="">' . $data['message'] . '</p>
                      <span class="date sub-text">' . $data['date'] . '</span>';
    echo "";
    echo '</div>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
}
echo '</div>';
?>
