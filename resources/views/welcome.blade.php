<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Portfolio, Isabela, Monteiro, web, development, developer, resume, projects, contact">
        <meta name="description" content="Isabela Monteiro's online portfolio that shares all projects, resume and ways to contact her">
        <link rel="icon" href="images/mouse-16.ico" type="image/gif">
        <meta name="author" content="Isabela">

        <title>Isabela Monteiro</title>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <Root />
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js">
        </script>
        <script src="https://kit.fontawesome.com/23224187c2.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-scrollto"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>var ml = { timelines: {}};</script>
        <script src="/js/app.js"></script>

    </body>
</html>
