<!DOCTYPE html>
<html lang="en">

    <head></head>
    <body>
        <?php
        // require_once 'model/validateUpdate.php';
        include_once("../config.php");
        // $m = new MongoClient();
        // $db = $m->mydb;
        $id = $_GET['id'];

        $result = $db->ymmse_col->findOne(array('_id' => new MongoId($id)));

        $year = $result['year'];
        $make = $result['make'];
        $model = $result['model'];
        $price = $result['price'];
        $image = $result['image'];
        $desc = $result['description'];
        ?>
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update vehicle</h5>
            <button type="submit" class="close" data-dismiss="modal" aria-label="Close" name="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <a href="./../myaccount.php">Back</a>
        </div>
        <div class="modal-body">
            <form name="form" class="form-horizontal" method="post" action="../myaccount.php">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Year</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="year" required value="<?php echo $year; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Make</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="make" required value="<?php echo $make; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Model</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="model" required value="<?php echo $model; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" required value="<?php echo $price; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="image" required value="<?php echo $image; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="desc" class="form-control" required cols="50%"><?php echo $desc; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-1 control-label"></label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                        <div class="modal-footer"><input type="submit" class="btn btn-primary" name="update" value="Update"></div>
                    </div>
                </div>
            </form>

        </div>
    </body>

</html>
