@extends('layouts.main')

@section('title', 'Cadastre-se')

@section('body', 'cadastro')

@section('content')

<div id='cadastro' class="col-md-6 offset-md-3">

    <form action="">
        <fieldset>

            <legend> <b>Cadastre-se</b> </legend>

            <br>

            <div class='cadastro-input'>
                <input type="text" name='nome' id='nome' class='cadastro-input-user' required>
                <label for="nome" class='cadastro-input-label'>Nome do Usuário</label>
            </div>

            <br>

            <div class='cadastro-input'>
                <input type="email" name='email' id='email' class='cadastro-input-user' required>
                <label for="email" class='cadastro-input-label'>Email</label>
            </div>

            <br>

            <div class='cadastro-input'>
                <input type="number" name='telefone' id='telefone' class='cadastro-input-user' required>
                <label for="telefone" class='cadastro-input-label'>Telefone</label>
            </div>

            <br>

            <p>Sexo: </p>
            <input type="radio" name='genero' id='feminino' value='feminino' required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name='genero' id='masculino' value='masculino' required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name='genero' id='outros' value='outros' required>
            <label for="outros">Outros</label>

            <br>

            <div class='cadastro-input'>
                <label for="data-nascimento" class='cadastro-input-label'> <b>Data de Nascimento</b> </label>
                <input type="date" name='data-nascimento' id='data-nascimento' class='cadastro-input-user' required>
            </div>

            <br>

            <div class='cadastro-input'>
                <input type="text" name='cidade' id='cidade' class='cadastro-input-user' required>
                <label for="cidade" class='cadastro-input-label'>Cidade</label>
            </div>

            <br>
            
            <div class='cadastro-input'>
                <input type="estado" name='estado' id='estado' class='cadastro-input-user' required>
                <label for="estado" class='cadastro-input-label'>Estado</label>
            </div>

            <br>
            
            <div class='cadastro-input'>
                <input type="endereco" name='endereco' id='endereco' class='cadastro-input-user' required>
                <label for="endereco" class='cadastro-input-label'>Endereço</label>
            </div>

            <input type="submit" name='submit' id='cadastro-input-submit'>
        </fieldset>
    </form>

</div>

@endsection