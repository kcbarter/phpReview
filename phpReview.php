<!DOCTYPE html>
<html>
<head>
    <title>PHP Review</title>
</head>
<body>
    <h1>PHP Review</h1>
    <?php
    //animals array
    $animals = array('panda', 'alpaca', 'boa');

    //sorting animals array
    function sortArray($animals)
    {
        sort($animals);
        $length = count($animals);
        for($i = 0; $i < $length; $i++)
        {
           echo $animals[$i].' ';
        }

    }

    sortArray($animals);

    //adding to the array
    $String = " ";
    function addToArray($animals)
    {
        sort($animals);
        $goat = "goat";
        $length2 = count($animals);
        array_push($animals, $goat);
        echo '<p>Adding '.$goat.'....</p>';
        for($j = 0; $j < $length2; $j++)
        {
            echo $animals[$j].' ';
        }
    }

    addToArray($animals);

    //associative array
    $cupcake = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
        "carrot"=>"Carrot Walnut", "carmel"=>"Salted Carmel Cupcake", "valvet"=>"Red Velvet",
        "lemon"=>"Lemon Drop", "tiramisu"=> "Tiramisu");
    ?>
</body>
</html>