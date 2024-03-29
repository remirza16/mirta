<html>
    <head>
        <link href="/css/bootstrap.min (1).css" rel="stylesheet">
        <title>Data Siswa</title>
    </head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/siswa">Data Siswa</a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/guru">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Siswa</h1>
            <div class="row">
                <div class="col-sm-8 col-md-6 m-auto">
                    <ol class="list-group">
                        @forelse ($siswa as $val)
                            <li class="list-group-item">{{$val}}</li>
                        @empty
                            <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                        @endforelse
                    </ol>
                </div>
            </div>
        </div>

        <footer class="bg-dark py-4 text-white mt-4">
            <div class="container">
                Sistem Informasi Siswa | Copyright &#169; {{ date("R") }} Remirza
            </div>
        </footer>

    </body>
</html>