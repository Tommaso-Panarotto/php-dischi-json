<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!--Style-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="app">
        <div class="row">
            <div class="col" v-for="(album,index) in albums">{{album.title}}</div>
        </div>
    </div>
    <!--Axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--VUE-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--JS-->
    <script src="js/main.js"></script>
</body>

</html>