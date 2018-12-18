<div class="col-md-10">
    <form action="search.php" method="" class="form-group" role="search" id="myForm" onsubmit="return validateSearch(this);">
        <div class="input-group">
            <input type="text" class="form-control input-lg" name="keyword" id="keyword" placeholder="Search your vehicle ...">
            <span class="input-group-btn">
                <button class="btn btn-default btn-lg" type="submit" name="submit" value="submit"><i class="glyphicon glyphicon-search"></i></button></span>
            <!-- <a href="">Add vehicle</a> -->
        </div>
    </form>
</div>
<div class="col-md-2"><a href="widget/addVehicle.php" data-target="#addModal" data-toggle="modal"  class="btn btn-md btn-primary btn-block">Add Vehicle </a></div>
<p class="clearfix">
<p class="clearfix">
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        </div>
    </div>
</div>
