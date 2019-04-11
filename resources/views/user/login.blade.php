<!doctype html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Login PHP</title>
        <link rel="stylesheet" href={{asset('/css/stylesheet.css')}}>
        <link  href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    </head>
    <body >
      <div class="background"></div>

         <section id="conteudo-view" class="login">
          <h1>Brain Revolution</h1>
          <h3>Quebrando o tabu</h3>
          {!! Form::open(['route' => 'user.login','method '=> 'post']) !!}
          <p>Acesse o sistema</p>

          <label>
            {!! Form::text ('username',null,['class' => 'input', 'placeholder' => "Usuario"])!!}
          </label>

          <label >
            {!! Form::password('password', ['placeholder' => "Senha"])!!}
          </label>

          {!! Form::submit('Entrar')!!}
          {!! Form::close()!!}

          <form class="" action="index.html" method="post">
          </form>

        </section>
    </body>
</html>
