<?php 
require_once __DIR__ . '/classes/movie.php';

$movies = [
    $forest_gump = new Movie('Forest Gump', 1994 , 'English','USA'),
    $The_Godfather = new Movie('The Godfather', 1972 , 'English','USA'),
    
];  
// forest gump data declaration
$forest_gump->setGenres(['Comedy','Drama']);
$forest_gump->setDuration(142);
$forest_gump->setBudget(55000000.00);

//The_Godfather data declaration
$The_Godfather->setGenres(['Noir','Drama','Gangster']);
$The_Godfather->setDuration(175);
$The_Godfather->setBudget(6000000.00);


// var_dump($forest_gump);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// var_dump($The_Godfather);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($movies as $movie){?>
        <h2><?php echo $movie->getNameYear(); ?></h2>
        <ul>
            <li>Duration: <?php echo "{$movie->getDuration()} Min"; ?></li>
            <li>Budget: <?php echo "{$movie->getBudget()}"; ?></li>
            <li>Original Language: <?php echo "{$movie->getLanguage()}"; ?></li>
            <li>Country: <?php echo "{$movie->getCountry()}"; ?></li>
        </ul>
    <?php } ?>
</body>
</html>