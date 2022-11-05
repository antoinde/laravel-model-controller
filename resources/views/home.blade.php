<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Style -->
    <link rel="stylesheet" href="css/app.css">

    <title>Laravel Model Controller</title>
</head>
<body>
    <div class="container">
        <h1>FILMS </h1>
        <h4>(film importati da un db con controller e model)</h4>
        <div class="cards-container">
            @foreach($films as $film)
            <div class="card">
                <p><span>id</span><br>{{ $film['id'] }}</p>
                <p><span>title</span><br>{{ $film['title'] }}</p>
                <p><span>original title</span><br>{{ $film['original_title'] }}</p>
                <p><span>nationality</span><br>{{ $film['nationality'] }}</p>
                <p><span>date</span><br>{{ $film['date'] }}</p>
                <p><span>vote</span><br>{{ $film['vote'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>