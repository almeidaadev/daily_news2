<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Import jquery -->
    <script src="scripts/jquery-3.7.1.min.js"></script>
    <!-- Import Js Script -->
    <script src="scripts/consume_api.js" type="module" defer></script>
    <!-- Import Css-->
    <link rel="stylesheet" href="styles/style.css?v<?= time(); ?>">

    <!-- Import Cdn Fonts Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title>DAILY | NEWS</title>
</head>

<body>
    <header>
        <h2>Today we'll talk about what? </h2>
        <div class="container__search">
            <input type="text" name="daily_news" class="form-control" placeholder="Type here...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </header>

    <main>
        <div id="results"></div>
    </main>
</body>

</html>