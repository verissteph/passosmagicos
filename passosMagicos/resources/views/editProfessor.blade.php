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
{{--
<header class="header__content">
    <nav class="nav">


        <div class="nav__infos">
            <h1 class="nav__infos--title">Editar professor {{ $editar['name'] }} </h1>
        </div>

        <div class="nav__list">
            <ul class="nav__list--items">
                <li class="nav__list--item"><a class="nav__list--link" href="/home">Home</a></li>
                <li class="nav__list--item"><a class="nav__list--link" href="/adm/professor/lista">Voltar</a></li>
                <li class="nav__list--item"><a class="nav__list--link" href="/login">Sair</a></li>
            </ul>
        </div>
    </nav>
</header> --}}

 <header class="topo">
        <nav>
            <h1 class="titulo">Area do administrador</h1>
            <div id="sideNav">
                <ul>
                    <li>
                        <a href="/home">Home</a>
                    </li>
                    <li>
                        <a href="/adm/home">Voltar</a>
                    </li>
                     <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('POST')
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('logout') }}
                                    </a>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <img src="/images/menu.png" id="menuBtn">

</header>

<main class="primary__content">
     <section class="primary__content--changes">
         <form class="form" action="" method="post"  id="editFormProf">
             @csrf

             <div id="mensagem">

             </div>
                 <label class ="form__label" for="name">Nome Completo:</label>

         <input class="form__space" type="text" name="name" id="name" value="{{$editar->name}}">


                 <label class ="form__label" for="email">E-mail:</label>

                 <input class="form__space" type="email" name="email" id="email" value="{{$editar->email}}">


                 <label class ="form__label" for="email-verify">Confirmar e-mail:</label>

                 <input class="form__space" type="email" name="email-verify" id="email-verify" value="">

                 <label class ="form__label " for="cpf">CPF:</label>

                 <input class="form__space cpf" type="text" name="cpf" id="cpf" value="{{$editar->cpf}}">


                 <label class ="form__label rg" for="rg">RG:</label>

                 <input class="form__space rg" type="text" name="rg" id="rg" value="{{$editar->rg}}">


                 <button class="form__button--submit" type="submit" name="editar" id="editar">Editar</button>
             </form>
     </section>

</main>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="/js/jquery.mask.js"></script>
<script src="/js/mascara.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="/js/editProf.js"></script> --}}
<script>
        var menubtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");

        sideNav.style.right = "-250px";
        menuBtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
            } else {
                sideNav.style.right = "-250px";
            }
        }
</script>
</body>
</html>
