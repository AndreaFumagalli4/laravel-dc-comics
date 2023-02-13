<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <h1>
            DC Comics
        </h1>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                {{-- <th scope="col">id</th> --}}
                                <th scope="col">title</th>
                                <th scope="col">price</th>
                                <th scope="col">series</th>
                                <th scope="col">type</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
            
                            @foreach ($comics as $comic)
                                <tr>
                                    {{-- <th scope="row">{{ $comic['id'] }}</th> --}}
                                    <td>{{ $comic['title'] }}</td>
                                    <td>{{ $comic['price'] }}</td>
                                    <td>{{ $comic['series'] }}</td>
                                    <td>{{ $comic['type'] }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">
                                            Show
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
