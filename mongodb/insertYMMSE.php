<pre>
    <?php
    $m = new MongoClient();

    $db = $m->mydb;
    $colYmmse = $db->ymmse_col;



// $data = array(
//   "year" => 2013,
//   "make" => 'Hyundai',
//   "model" => 'Accent',
//   "price" => 3500,
//   "image" => 'vios.jpg'
// );
    // $colYmmse->insert($data);
    //$records = $colYmmse->find();
    // foreach ($records as $data) {
    //   echo $data["year"] . "\n";
    // }
    //$records = iterator_to_array($records);
    // echo count($records) . "\n\n";
    //print_r($records);

    /* $querArr = array (
      '$or' => array(
      array (
      "year" => "2008",
      "make" => "chevrolet",
      ),
      array(
      "model" => "Colorado",
      ),
      ),
      ); */

    //$querArr = array (
    //    "make" => new MongoRegex("/rolet/"),
    // );

    $matchArr = array(
        "make" => "Toyota"
    );

    $groupArr = array(
        '_id' => array(
            'make' => '$make'
        )
    );

    $query = array(
        array('$group' => $groupArr),
    );

    $results = $colYmmse->aggregate($query);

    //$records = $colYmmse->find($querArr);
    //$records = iterator_to_array($records);

    print_r($results);

    /* foreach ($records as $data){
      echo $data["year"] . "\n";
      echo $data["make"] . "\n";
      echo $data["model"] . "\n";
      echo $data["price"] . "\n";
      echo $data["image"] . "\n";

      }
     */
    ?>
