
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Add vehicle</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form name="form1" class="form-horizontal" method="post" action="widget/validateInsert.php">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Year</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="year" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Make</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="make" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Model</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="model" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="price" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="image" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea name="desc" class="form-control" required cols="50%"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-1 control-label"></label>
            <div class="col-sm-10">
              <!-- <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>> -->
                <div class="modal-footer"><input type="submit" class="btn btn-primary" name="insert" value="Add"></div>
            </div>
        </div>

    </form>

</div>
