<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div id="app">
        <main>
            <div v-for="disco in dischi" class="disco">
                <img :src="disco.copertina">
                <h2>{{disco.canzone}}</h2>
                <h3>{{disco.artista}}</h3>
            </div>
        </main>
    </div>

    <script src="js/app.js"></script>

</body>
</html>