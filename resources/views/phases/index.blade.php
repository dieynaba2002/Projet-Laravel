<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Liste Des Phases</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('phases.create') }}"> Creer une Phase</a>
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
                    <th>DUREE</th>
                    <th>PRIORITE</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($phases as $phase)
                    <tr>
                        <td>{{ $phase->id }}</td>
                        <td>{{ $phase->nom }}</td>
                        <td>{{ $phase->duree }}</td>
                        <td>{{ $phase->priorite }}</td>
                        
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $phases->links() !!}
    </div>
</body>
</html>