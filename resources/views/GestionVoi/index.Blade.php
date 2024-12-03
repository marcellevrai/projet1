@extends('Base')
@section('title', 'Numero')

@section('content')
 <h1>Numero de la voiture </h1>
       @foreach ($voitures as $voiture )
        
            <div>
                <h4> {{$voiture->id}} </h4>                   
            </div>     
            <a href="" class="btn btn-secondary">lire plus</a>
           
       @endforeach 
       {{$voitures->links()}}       
@endsection
