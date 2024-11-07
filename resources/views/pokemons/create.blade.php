<form action="{{ url('pokemons') }}" method="POST">
    @csrf
<div class="form-group">
<label for="name">Nome: </label>
<input type="text" name="name" placeholder="Digite seu Nome" required>
</div>
<div class="form-group">
<label for="name">Tipo: </label>
    <input type="text" name="type" placeholder="Digite o Tipo" required>
</div>
<div class="form-group">
<label for="name">Pontos de Poder: </label>
    <input type="numeric" name="pontos_de_poder" placeholder="Pontos de pontos_de_poder" required>
</div>  
    <button type="submit" class="btn btn-primary">Create Personagem</button>
   
    
</form>