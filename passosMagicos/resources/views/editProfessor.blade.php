<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/editProfessor.css">
<title>Editar Professor </title>
</head>
<body>

<header class="header__content">
    <nav class="nav">

        <div class="nav__infos">
            <h1 class="nav__infos--title">Editar professor </h1>
        </div>

        <div class="nav__list">
            <ul class="nav__list--items">
                <li class="nav__list--item"><a class="nav__list--link" href="/home">Home</a></li>
                <li class="nav__list--item"><a class="nav__list--link" href="/adm/professor/lista">Voltar</a></li>
                <li class="nav__list--item"><a class="nav__list--link" href="/login">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<main class="primary__content">
     <section class="primary__content--changes">
         <form class="form" action="" method="post" >
             @csrf

                 <label class ="form__label" for="name">Nome Completo:</label>

         <input class="form__space" type="text" name="name" id="name" value="{{$editar->name}}">

                 <label class ="form__label" for="email">E-mail:</label>

                 <input class="form__space" type="email" name="email" id="email" value="{{$editar->email}}">

                 <label class ="form__label" for="email-verify">Confirmar e-mail:</label>

                 <input class="form__space" type="email" name="email-verify" id="email-verify" value="">

                 <label class ="form__label" for="cpf">CPF:</label>

                 <input class="form__space" type="number" name="cpf" id="cpf" value="{{$editar->cpf}}">

                 <label class ="form__label" for="rg">RG:</label>

                 <input class="form__space" type="number" name="rg" id="rg" value="{{$editar->rg}}">

                 <button class="form__button--submit" type="submit" name="editar">Editar</button>
             </form>
     </section>

</main>

</body>
</html>
