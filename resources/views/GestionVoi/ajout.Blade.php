@extends('Base')
@section('title', 'ajouter')

@section('content')
<div class="container mt-5">
    <!-- Message de succès -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('ajouter-voiture.store') }}">
        @csrf
        <div class="mb-3">
            <label for="marque" class="form-label">Marque-marque</label>
            <input 
                type="text" 
                class="form-control @error('marque') is-invalid @enderror" 
                id="marque" 
                name="marque" 
                value="{{ old('marque') }}"
            >
            @error('marque')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="modele" class="form-label">Modèle</label>
            <input 
                type="text" 
                class="form-control @error('modele') is-invalid @enderror" 
                id="modele" 
                name="modele" 
                value="{{ old('modele') }}"
            >
            @error('modele')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
