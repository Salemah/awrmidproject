
@extends('Patient.Patientheader')
@section('content')

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
        <div class=" row  d-flex my-4

        ">
            @foreach($st as $s)
          <div class="col bg-primary text-white m-1 p-2 rounded ">
          <div class="ms-5 py-2">
            <p>{{$s->name}}</p>
            <p>Problem-Type:{{$s->problemtype}}</p>
            <p>Date:{{$s->date}}</p>
            <button type="button" class="btn btn-danger"> <a style="text-decoration: none" href="{{route('Appointment.Delete',['id'=>$s->id])}}">Delete</a></button>
          </div>


          </div>
          @endforeach
        </div>
      </div>
</body>
</html>
@endsection
