<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="main.js" type="text/javascript" defer></script>
    <link href="styles.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Api de pokemon</a>
            <form onsubmit="searchPokemon(event)" class="d-flex">
                <input class="form-control me-2" name="pokemon" type="search" placeholder="Buscar Pokemon" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <br><br>

    <div data-poke-card class="poke-card">
        <div data-poke-name>Pokemon</div>
        <div data-poke-img-container class="img-container">
            <img data-poke-img class="poke-img" src="./pikachu.png" />
        </div>
        <div data-poke-id></div>
        <div data-poke-types class="poke-types"></div>
        <div data-poke-stats class="poke-stats"></div>
    </div>
</body>


<style>
    body {
        background-image: url(/PokemonPRUEBA/Pokemon190.jpg);
        background-size: cover;
    }



    input {
        width: 100%;
        padding: 10px;
    }

    .poke-card {
        position: relative;
        height: fit-content;
        font-family: 'Roboto Mono', monospace;
        max-width: 300px;
        border-radius: 4px;
        color: rgb(0, 0, 0);
        text-align: center;
        padding: 10px;
        margin: 0 auto;
        background-color: rgb(255, 255, 255);
        border: 1px solid black;
        border-radius: 8px;
    }

    .poke-card::before {
        content: '';
        background: radial-gradient(transparent, transparent 33%);
        background-size: 3px 3px;
        border-radius: 4px;
        height: 100%;
        width: 100%;
        position: absolute;
        left: 10px;
        top: 10px;
        z-index: -1;
    }

    .img-container {
        position: relative;
        width: 180px;
        margin: 10px auto;
    }

    .poke-stats div {
        display: flex;
        justify-content: space-between;
        align-content: space-between;
        padding: 5px;
        font-size: 18px;
    }

    .poke-types div {
        padding: 5px;
        margin: 5px;
        border-radius: 4px;
        border: 1px dashed black;
    }

    .poke-img {
        width: 180px;
        border-radius: 50%;
    }
</style>

</html>