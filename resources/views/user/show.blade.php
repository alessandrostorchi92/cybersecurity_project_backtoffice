@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <h2>Profile Details</h2>
    <div>
        <strong>Photo:</strong> {{ $user->photo }}
    </div>
    <div>
        <strong>Phone:</strong> {{ $user->phone }}
    </div>
    <div>
        <strong>Location:</strong> {{ $user->location }}
    </div>
    <div>
        <strong>Description:</strong> {{ $user->description }}
    </div>
    <div>
        <strong>Skills:</strong> {{ $user->skills }}
    </div>
    <div>
        <strong>Curriculum:</strong> {{ $user->curriculum }}
    </div>
    <div>
        <strong>Visible:</strong> {{ $user->visible ? 'Yes' : 'No' }}
    </div>

    <div class="mb-3 mt-3">
        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Modifica</a>
    </div>
    
    <form action="{{ route('user.destroy', $user->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo utente?')">Cancella</button>
    </form>

</div>
@endsection
