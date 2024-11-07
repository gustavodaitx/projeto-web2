<form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Nome" required>
    <input type="text" name="type" placeholder="Tipo" required>
    <input type="numeric" name="pontos_de_poder" placeholder="Pontos de pontos_de_poder" required>
    <button type="submit">Edit Personagem</button>
</form>