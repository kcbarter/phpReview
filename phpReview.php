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
    ?>
</body>
</html>