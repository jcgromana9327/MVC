<div class="col-md-10">
    <h1 class="page-header">Results Found</h1>
    <?php
    $dir = "image/*.jpg"; //$dir="/data/htdocs/workingPractice/jromana/image/*.jpg" ; //get the list of all files with .jpg extension in the directory and safe it in an array named $images $images=g lob( $dir ); //extract only the name of the file without the extension and save in an array named $find 
    //foreach( $images as $image ): 
    echo'
    <div class = \"col-lg-4 col-md-4 col-xs-6thumb\ ">
    <a class = \"thumbnail\ " href = \"\ ">
    <img src = \'" . $image . \"\'>
    </a>
    </div>';
//    endforeach; 
    ?>
</div>
