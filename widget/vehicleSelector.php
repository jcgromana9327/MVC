<p class="lead">Select Vehicle</p>

<form action="results.php" method="" role="search" id="myForm">

    <select class="form-control" name="drop_1" id="drop_1" required>

        <option selected value="">Select year</option>

        <?php

        for($i=2017; $i>= 1980; $i--) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
        ?>

    </select>
    <select class="form-control" disabled name="test1" id="test1" required>
      <option value="" selected="selected" >Select make</option>
    </select>
    <span id="wait_1" style="display: none;">
        <!-- <img alt="Please Wait" src="ajax-loader.gif"/> -->
    </span>
    <span id="result_1" style="display: none;"></span>
    <select class="form-control" disabled name="test1" id="test2">
      <option value="" selected="selected" >Select model</option>
    </select>
    <span id="wait_2" style="display: none;">
        <!-- <img alt="Please Wait" src="ajax-loader.gif"/> -->
    </span>
    <span id="result_2" style="display: none;"></span>

    <!-- </select> -->
    <p class="newline"><p class="newline">
    <button class="btn btn-primary btn-block" type="submit" name="submit" id="button">Find Your Vehicle</button>


</form>
