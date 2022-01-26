<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google Faq</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
    <div id="root">
        <header>
            <img class="logo-img" src="img/spotify.png" alt="logo spotify">
        </header>
        <main>
            <section>
                <div class="container">
                    <div class="card-wrapper">
                        <div v-for="(song, index) in database" :key="index" class="cards">                    
                            <div class="cards-image">
                                <img :src="song.poster" :alt="song.title">
                            </div>
                            <div class="cards-title">
                                {{ song.title }}
                            </div>
                            <div class="cards-author">
                                {{ song.author }}
                            </div>
                            <div class="cards-year">
                                {{ song.year }}
                            </div>
                        </div>  
                    </div>
                </div> 
            </section>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>
</html>



