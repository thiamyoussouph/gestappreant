<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>apprenants </title>
</head>
<body>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <td>tel</td>
    </tr>
  </thead>

  <tbody>
   
@foreach($apprenants as $apprenant)
    <tr>
      <th scope="row">{{$apprenant->id}}</th>
      <td>{{$apprenant->nom}}</td>
      <td>{{$apprenant->prenom}}</td>
      <td>{{$apprenant->adresse}}</td>
      <td>{{$apprenant->telephone}}</td>
      <td>
        <a href="{{route('apprenants.edit',$apprenant->id)}}" class="btn btn-primary">editer</a>
        <a href="{{route('apprenants.detail',$apprenant->id)}}" class="btn btn-info">detail</a>
        <a href="{{route('apprenants.suprimer',$apprenant->id)}}" class="btn btn-danger">suprimer</a>
       
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



</body>
</html>