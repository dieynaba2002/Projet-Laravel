<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Phase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                
                <div class="pull-right">
                    <a class="btn btn-primary offset-2 mb-1" href="{{ route('phases.index') }}"> Liste phase</a>
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
            <form action="{{ route('phases.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="card">
                    <div class="card-header text-center bg-info text-white">
                        <h2>Phase</h2>
                    </div>
                    <div class="card-body">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control">
                        <label for="">Duree</label>
                        <input type="number" name="duree" class="form-control">
                        <label for="">Priorite</label>
                        <input type="text" name="priorite" class="form-control">
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