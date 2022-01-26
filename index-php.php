<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google Faq</title>
</head>
<body>
    <header>
        <img class="logo-img" src="img/spotify.png" alt="logo spotify">
    </header>
    <main>
        <section>
            <div class="container">
                <div class="card-wrapper">
                    <?php foreach($database as $song) { ?> 
                    <div class="cards">                    
                        <div class="cards-image">
                            <img src="<?php echo $song['poster']; ?>" alt="database.title">
                        </div>
                        <div class="cards-title">
                            <?php echo $song['title']; ?>
                        </div>
                        <div class="cards-author">
                            <?php echo $song['author']; ?>
                        </div>
                        <div class="cards-year">
                            <?php echo $song['year']; ?>
                        </div>
                    </div> 
                    <?php } ?>  
                </div>
            </div> 
        </section>
    </main>
</body>
</html>



