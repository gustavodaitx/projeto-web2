@foreach($pokemons as $pokemon)
    <div>
        <h3>{{ $pokemon->name }}</h3>
        <p>{{ $pokemon->type }}</p>
        <p>{{ $pokemon->pontos_de_poder }}</p>
        <a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach