<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                @foreach ($chanson as $chansons)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $chansons->image }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $chansons->titre }}</h5>
                            <p class="card-text">{{ $chansons->annee }}</p>
                            <p class="card-text">{{ $chansons->auteur }}</p>
                            <a href="#" class="btn btn-primary">'Go somewhere'</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>