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
                <p>{{ $film['id'] }}</p>
                <p>{{ $film['title'] }}</p>
                <p>{{ $film['original_title'] }}</p>
                <p>{{ $film['nationality'] }}</p>
                <p>{{ $film['date'] }}</p>
                <p>{{ $film['vote'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>