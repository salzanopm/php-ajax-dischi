<?php
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
        <img src="img/spotify.png" alt="logo spotify">
    </header>
    <section>
        <div >
            <?php foreach($database as $single_song) { ?>
                <h2><?php echo $single_song['title']; ?></h2>
                <p><?php echo $single_song['author']; ?></p>
            <?php } ?>
        </div>
    </section>

    <footer>

    </footer>

</body>
</html>



