<?php

class Movie
{
    public $genre;
    public $name;
    public $mainCharacter;
    public $data;

    function __construct(array $_movieInfos)
    {
        $this->genre = $_movieInfos['genre'];
        $this->name = $_movieInfos['name'];
        $this->mainCharacter = $_movieInfos['mainCharacter'];
        $this->data = $_movieInfos['data'];
    }

    function movies()
    {
        return 'Titolo = ' . $this->name . '<br>' . 'Genere = ' . $this->genre . '<br>' . 'Protagonista = ' . $this->mainCharacter . '<br>' . 'Data di uscita = ' . $this->data;
    }
}

$movie1 = new Movie([
    'genre' => 'Adventure',
    'name' => 'Uncharted',
    'mainCharacter' => 'Tom Holland',
    'data' => '21/02/2022'
]);

$movie2 = new Movie([
    'genre' => 'Action',
    'name' => 'Fast And Furious',
    'mainCharacter' => 'Paul Walker',
    'data' => '21/09/2001'
]);

$movie3 = new Movie([
    'genre' => 'Fantasy',
    'name' => 'Interstellar',
    'mainCharacter' => 'Matthew McConaughey',
    'data' => '26/10/2014'
])

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="image">
                <img src="https://pad.mymovies.it/filmclub/2019/12/266/locandinapg2.jpg" alt="">
            </div>
            <?php echo $movie1->movies() ?>
        </div>
        <br>
        <div class="card">
        <div class="image">
                <img src="https://m.media-amazon.com/images/I/51iceScsERL._SY445_.jpg" alt="">
            </div>
            <?php echo $movie2->movies() ?>
        </div>

        <div class="card">
        <div class="image">
                <img src="https://doms2cents.com/wp-content/uploads/2021/09/interstellar-et00019066-19-02-2021-02-25-12.jpg" alt="">
            </div>
            <?php echo $movie3->movies() ?>
        </div>
    </div>
</body>

</html>