<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login PHP</title>

        <section id="conteudo-view" class="login">

          <h1>Brain Revolution</h1>
          <h3>Querbrando o tabu</h3>

          <h2>Acesse o sistema</h2>

          {!! Form::open(['route' => 'user.login','method '=> 'post']) !!}

          <label>
            {!! Form::text ('username',null,['class' => 'input', 'placeholder' => "Usuario"])!!}
          </label>

          <label >

            {!! Form::password('password', ['placeholder' => "Senha"])!!}
          </label>



          {!! Form::close()!!}
          <form class="" action="index.html" method="post">
          </form>

        </section>
    </body>
</html>
