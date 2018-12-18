<div class="col-md-10">
    <?php
    require_once 'config.php';

    $result = $db->ymmse_col->find()->sort(array('_id' => -1));
    ?>
    <form action="" method="get">

    </form>
    <table width='100%' border=0 class="table">

        <tr bgcolor='#CCCCCC'>
            <td>Year</td>
            <td>Make</td>
            <td>Model</td>
            <td>Price</td>
            <td>Image</td>
            <td>Action</td>
        </tr>
        <?php
        foreach ($result as $res) {
          $image = $res['image'];
            echo "<tr>";
            echo "<td>" . $res['year'] . "</td>";
            echo "<td>" . $res['make'] . "</td>";
            echo "<td>" . $res['model'] . "</td>";
            echo "<td>" . '$' . $res['price'] . "</td>";
            echo "<td>" . $res['image'] . "</td>";
            // echo "<td><div class=\"result\"><img src=\"./image/$image\" width=\"200\">$image</td>";
            echo "<td><a href=\"widget/updateVehicle.php?id=$res[_id]\" class=\"btn btn-primary\" name=\"update\">Update</a> | <a href='myaccount.php?id=$res[_id]' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>



</div>
