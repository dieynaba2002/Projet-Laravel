<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Liste Des Projets</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('phases.create') }}"> Creer un Projet</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>DATE DEBUT</th>
                    <th>DATE FIN</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projets as $projet)
                    <tr>
                        <td>{{ $projet->id }}</td>
                        <td>{{ $projet->nom }}</td>
                        <td>{{ $projet->dateDebut }}</td>
                        <td>{{ $projet->dateFin }}</td>
                        <td>
                            <form action="{{ route('projets.destroy',$projet->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('projets.show', $projet->id) }}">Information</a>
                                @csrf
                               
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $projets->links() !!}
    </div>
</body>
</html>