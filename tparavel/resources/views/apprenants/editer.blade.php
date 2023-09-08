<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="col-5">
    <div class="card m-2 ">
        <div class="card-header">
            <h3 class="text-center text-success">modifier {{$apprenant->nom}}</h3>
        </div>
        <div class="card-body">
<form class="m-2" action='{{route("apprenants.update")}}' method="POST">
@csrf
    
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">nom</label>
      <input type="text" id="disabledTextInput" class="form-control" name="nom" value="{{$apprenant->nom}}" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Prenom</label>
      <input type="text" id="disabledTextInput" class="form-control" name="prenom" value="{{$apprenant->prenom}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">adresse</label>
      <input type="text" id="disabledTextInput" class="form-control" name="adresse"value="{{$apprenant->adresse}}" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">telephone</label>
      <input type="text" id="disabledTextInput" class="form-control"name="telephone"value="{{$apprenant->telephone}}" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">e-mail</label>
      <input type="text" id="disabledTextInput" class="form-control"name="email" value="{{$apprenant->email}}">
    </div>
    <button type="submit" class="btn btn-success">modifier</button>
  
</form>
</div>
</div> 
</body>
</html>