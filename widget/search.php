<div class="col-md-10">
    <p class="newline">
    <form action="search.php" method="" class="form-group" role="search" id="myForm" onsubmit="return validateSearch(this);">
        <div class="input-group">
            <input type="text" class="form-control input-lg" name="keyword" id="keyword" placeholder="Search your vehicle ...">
            <span class="input-group-btn">
                <button class="btn btn-default btn-lg" type="submit" name="submit" value="submit"><i class="glyphicon glyphicon-search"></i></button></span>
        </div>
    </form>

    <script type="text/javascript">
        keyword.addEventListener("focus", function () {
            clearFields();
        });
        keyword.addEventListener("blur", function () {
            returnPlaceholder();
        });
    </script>
