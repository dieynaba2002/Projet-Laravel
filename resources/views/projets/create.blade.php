<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                
                <div class="pull-right">
                    <a class="btn btn-primary offset-2 mb-1" href="{{ route('projets.index') }}"> Liste projet</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <div class="container">
        <div class="row">
            <div class="col-md-5 mt-3 offset-3">
            <form action="{{ route('projets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card">
                    <div class="card-header text-center bg-info text-white">
                        <h2>Projet</h2>
                    </div>
                    <div class="card-body">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control">
                        <label for="">Date Debut</label>
                        <input type="date" name="dateDebut" class="form-control">
                        <label for="">Date fin</label>
                        <input type="date" name="dateFin" class="form-control">
                        <button type="submit" class="btn btn-success offset-5 mt-4">Ajouter</button>

                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
    </div>
   
</body>

</html>