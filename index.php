<?php 
    class Movie {
        public $title;
        public $year;
        public $type;

        public function __construct($title, $year, $type) {
            $this->title = $title;
            $this->year = $year;
            $this->type = $type;
        }
        
        public function getMovie() {
            return "Title: " . $this->title . 
                " - Year: " . $this->year . 
                " - Type: " . $this->type;
        }
    };
    $movie1 = new Movie("La vita è bella", 1997, "Commedia drammatica");
    $movie2 = new Movie("Quo Vado?", 2016, "Commedia");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <main>
        <h1>Movie</h1>
        <p><?php echo $movie1->getMovie(); ?></p>
        <p><?php echo $movie2->getMovie(); ?></p>
    </main>
</body>
</html>