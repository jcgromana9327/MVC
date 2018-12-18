<?php

class Database {

    public $m;
    public $db;
    public $col;

    public function connectDb() {
        $this->m = new MongoClient();
        $this->db = $this->m->sdet_jromana;
        $this->col = $this->db->ymmse_col;
    }

    public function searchKeywordWildCardMultipleFieldsCaseIns($keyword) {

        if (isset($_GET['submit'])) {
            $queryArr = array(
                '$or' => array(
                    // array("year" =>  intval ($keyword)),
                    array("make" => new MongoRegex('/(?i)' . $keyword . '(?i)/')),
                    array("model" => new MongoRegex('/(?i)' . $keyword . '(?i)/')),
                    array("price" => intval($keyword)),
                )
            );
            $this->results = iterator_to_array($this->col->find($queryArr));
            $count = $this->col->count($queryArr);
            $find = $this->col->find($queryArr);
            //echo '<pre>';
            //print_r($this->results);

            if (!empty($this->results)) {

                foreach ($this->results as $data) {
                    $make = $data["make"];
                }
                echo 'Results Found: ' . $count . ' > ' . $make . '<br><br>';
                foreach ($this->results as $data) {
                    // echo $keyword ."\n<br>";
                    // echo $data["make"] . "\n<br>";
                    $year = $data["year"];
                    $make = $data["make"];
                    $model = $data["model"];
                    $price = $data["price"];
                    $image = $data["image"];
                    $description = $data["description"];



                    //  echo 'Results Found: ' . count($make) . ' > ' . $make . '<br><br>';
                    echo '<div class="col-sm-4 col-lg-4 col-md-4">' . '<div class="result">' . '<img src="image/' . $image . '" alt="">' . '<div class="caption">' . '<h4><a href="#">' . $year . ' ' . $make . ' ' . $model . ' $' . $price . '</a>' . '</h4>' . '</p>' .
                    $description . '</p>' . '</div>' . '<div class="ratings">' . '<p class="pull-right">15 reviews</p>' . '<p>' . '<span class="glyphicon glyphicon-star"></span>' . '<span class="glyphicon glyphicon-star"></span>' . '<span class="glyphicon glyphicon-star"></span>' . '<span class="glyphicon glyphicon-star"></span>' . '<span class="glyphicon glyphicon-star"></span>' . '</p>' . '</div>' . '</div>' . '</div>';
                }
            } //end of condition !empt
            else {
                echo '<div class="alert alert-danger" role="alert">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       No Results Found for \'' . $keyword . '\' </div>' . '';
                // return false;
            }
        }
    }

    public function searchKeywordWildCardMultipleFields($drop1, $drop2, $drop3) {

        if (isset($_GET['submit'])) {
            $queryArr = array(
                '$and' => array(
                    // array("year" =>  intval ($keyword)),
                    array("year" => intval($drop1)),
                    array("make" => new MongoRegex('/(?i)' . $drop2 . '(?i)/')),
                    array("model" => new MongoRegex('/(?i)' . $drop3 . '(?i)/')),
                )
            );
            $this->results = iterator_to_array($this->col->find($queryArr));
            $count = $this->col->count($queryArr);
            $find = $this->col->find($queryArr);
            //echo '<pre>';
            //print_r($this->results);

            if (!empty($this->results)) {

                foreach ($this->results as $data) {
                    $make = $data["make"];
                }
                echo 'Results Found: ' . $count . ' > ' . $make . '<br><br>';
                foreach ($this->results as $data) {
                    // echo $keyword ."\n<br>";
                    // echo $data["make"] . "\n<br>";
                    $year = $data["year"];
                    $make = $data["make"];
                    $model = $data["model"];
                    $price = $data["price"];
                    $image = $data["image"];
                    $description = $data["description"];



                    //  echo 'Results Found: ' . count($make) . ' > ' . $make . '<br><br>';
                    echo '<div class="col-sm-4 col-lg-4 col-md-4">' . '<div class="result">' . '<img src="image/' . $image . '" alt="">' . '<div class="caption">' . '<h4><a href="#">' . $year . ' ' . $make . ' ' . $model . ' $' . $price . '</a>' . '</h4>' . '</p>' .
                    $description . '</p>' . '</div>' . '<div class="ratings">' . '<p class="pull-right">15 reviews</p>' . '<p>' . '<span class="glyphicon glyphicon-star"></span>' . '<span class="glyphicon glyphicon-star"></span>' . '<span class="glyphicon glyphicon-star"></span>' . '<span class="glyphicon glyphicon-star"></span>' . '<span class="glyphicon glyphicon-star"></span>' . '</p>' . '</div>' . '</div>' . '</div>';
                }
            } //end of condition !empt
            else {
                echo '<div class="alert alert-danger" role="alert">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       No Results Found for \'' . $keyword . '\' </div>' . '';
                // return false;
            }
        }
    }

}

?>
