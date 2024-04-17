<?php
//assolutamente intuile, volevo testare se fossi in grado di prenderli
/* $jsonDischi = file_get_contents('./assets/json/dischi.json');
$arrayDischi = json_decode($jsonDischi, true);
var_dump($arrayDischi); */
?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Document</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-dark">
    <div id='app'>
        <div class="container">
            <div class="row ">
                <div class="col-4">
                    <div class="card g-2" v-for="(disco, index) in dischi" :key="index">
                        <img :src="disco.poster" alt="">
                        <div class="text-center">
                            <h5>{{ disco.title }}</h5>
                            <h5>{{ disco.author }}</h5>
                            <h5>{{ disco.year }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Development only cdn, disable in production -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- My JS -->
    <script src='./assets/js/app.js'></script>
</body>

</html>