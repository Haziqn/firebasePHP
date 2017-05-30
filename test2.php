<?php
require 'vendor/autoload.php';

// this can be found from the firebase console database tab
        const DEFAULT_URL = 'https://eventful-c4557.firebaseio.com/';
// this is the secret, going to be deprecated
// Go to Project Settings --> Service Accounts --> Database Secrets
        const DEFAULT_TOKEN = 'WltlY0KBygvHgKfoS9kK8GBi8hUveXz1X5dROqWY';
// This is the path to the database
// in this case, a jsontree starting from firebase/example will be created
        const DEFAULT_PATH = '/EVENT';
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);


//$path = '/id/name';
//$value = $firebase->get($path); 
//print_r($value);
// deletes value from Firebase
//crud for 1 table
//read
$strUsers = $firebase->get('/EVENT');
$arrUsers = json_decode($strUsers, true);
//print_r($arrUsers);
//create
//$count = 0;
//$strUsers= $firebase->get('user');
//print_r(size($strUsers));
//$strLength = $strUsers.length;
//print_r($strLength);
foreach ($arrUsers as $key => $value) {
    echo "key: " . $key . "</br>";
    echo "value: " . $value["description"] . "</br>";
}

//$firebase->set($path, $value);   // stores data in Firebase
//$value = $firebase->get($path);  // reads a value from Firebase
//$firebase->delete($path);        // deletes value from Firebase
//$firebase->update($path, $data); // updates data in Firebase
//$firebase->push($path, $data);   
// --- storing an array ---
/*
  $test = array(
  "foo" => "bar",
  "i_love" => "lamp",
  "id" => 42
  );
  $dateTime = new DateTime();
  $firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c'), $test);

  // --- storing a string ---
  $firebase->set(DEFAULT_PATH . '/name/contact001', "John Doe");
 */
?>

<html>
    <head>
        <title>Display</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.1.min_1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <h3>Manage Data</h3>
            <button class="btn btn-primary" id="btnAdd">Add</button>
            <table id="defaultTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
                <tr><th>first name</th><th>last name</th></tr>
                <?php
                $row = "";
                foreach ($arrUsers as $key => $value) {
                    $row .= "<tr><td>" . $value["description"] . "</td><td>" . $value["address"] . "</td><tr>";
                }
                print_r($row);
                ?>

            </table> 
        </div>

    </body>
</html>