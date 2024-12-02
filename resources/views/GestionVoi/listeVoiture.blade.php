@extends('Base')
@section('title', 'Liste')

@section('content')
 <h1>Ma liste </h1>
         
                   
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">numero</th>
                        <th scope="col">Marque</th>
                        <th scope="col">Model</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($listes as $liste )      
                      <tr>                        
                        <th scope="row">{{$liste->id}}</th>
                        <td> {{$liste->marque}} </td>
                        <td>{{$liste->modele}} </td>
                      </tr>
                      @endforeach                    
                    </tbody>
                  </table>

            
                
                    
    
            
@endsection
