<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form>
            @csrf
            @method('PUT')

            <div class="card col-md-5 mt-3 offset-3">
                <h5 class="card-header text-center bg-info text-white">Details du Projet</h5>
                <div class="card-body ">
                    
                    <p class="card-text offset-1">Nom: {{ $projet->nom }}</p>
                    <p class="card-text offset-1">Description: {{ $projet->description }}</p>
                    <p class="card-text offset-1">Date Debut: {{ $projet->dateDebut }}</p>
                    <p class="card-text offset-1">Date Fin: {{ $projet->dateFin }}</p>
                    
                    <a href="http://127.0.0.1:8000/phases/create" class="btn btn-success offset-4">Ajout phase</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>