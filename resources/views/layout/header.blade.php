<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- jQuery (wajib untuk DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <header>
        <! -- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="mb-2 navbar-nav me-auto mb-md-0 ">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Recommendation Anime</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('top', ['top' => 'all', 'page' => 1]) }}">Top Anime</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('season',['season' => 'fall', 'year' => '2024']) }}">Season Anime</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
</body>
</html>
