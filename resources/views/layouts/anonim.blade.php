<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #222624;
        }

        .jumbotron {
            height: 41em;
            background: url(https://images5.alphacoders.com/886/thumb-1920-886517.jpg);
            background-attachment: fixed;
            background-size: cover;
        }

        .body-jumbotron {
            margin-left: 7.6em;
            margin-top: 7.4em;
        }

        .list-group .list-group-item:hover {
            margin-left: 2em;
            transition-delay: 0.1s;
        }
    </style>
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <nav class="bg-transparent fixed-top shadow-lg pl-5 pt-3 pb-3">
            <a href="/">
                <span class="navbar-brand mb-0 ml-5 px-3 text-white" style="font-size: 1.6em;">Scary Stories</span>
            </a>
            <a href="/login">
                <span class="navbar-brand mb-0 float-right text-white p-3" style="font-size: 1em">
                    Login Admin
                </span>
            </a>
        </nav>
        <div class="body-jumbotron">
            <h1 class="display-4 text-white">Seberapa Seram <br>cerita mu?</h1>
            <p class="lead text-white">Tuliskan cerita menyeramkan <br>yang kamu punya sekarang!</p>
            <a class="btn btn-secondary btn-outline-light btn-lg" href="{{ route('buat-cerita') }}" role="button">Buat Cerita</a>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>

    <footer class="text-light shadow text-center p-4" style="margin-top: 7em; background-color: #3b4442;">
        copyright @2021
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
       <script>
        $('#summernote').summernote({
            placeholder: 'Isi Cerita',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['view', ['codeview', 'help']]
            ]
        });
    </script>
</body>

</html>
