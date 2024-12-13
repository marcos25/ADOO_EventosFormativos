@extends('layout.layout')

@section('content')
   <!-- Page Content -->
   <title> Crear Usuario </title>
  <div class="container ">
              <div class="card-body p-5">
            <h1>Crear Usuario</h1>
          <form method="POST" action='{{route('gestionusuarios.store')}}'>
              @csrf

              <div class="form-group" {{ $errors->has('nombre') ? 'has-error' : ''}}>
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control"  name='nombreUsuario' placeholder="nombre usuario" required="">
                {!! $errors->first('nombre','<span class="help-block" style="color:red;">:message</span>')!!}
              </div>

              <div class="form-group" {{ $errors->has('apellido') ? 'has-error' : ''}}>
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control"  name='apellidoUsuario' placeholder="apellido usuario" required="">
                {!! $errors->first('apellido','<span class="help-block" style="color:red;">:message</span>')!!}
              </div>

              <div class="form-group" {{ $errors->has('correo') ? 'has-error' : ''}}>
                <label for="correo">Correo</label>
                <input type="email" class="form-control"  name='correo' placeholder="correo usuario" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+[.]+[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]*$" required="">
                {!! $errors->first('correo','<span class="help-block" style="color:red;">:message</span>')!!}
              </div>

              <div class="form-group " {{ $errors->has('password') ? 'has-error' : ''}}>
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" rows="4" class='form-control' cols="50" name='password' required=""></input>
                {!! $errors->first('password','<span class="help-block" style="color:red;">:message</span>')!!}
              </div>

              <div class="form-group " {{ $errors->has('password-confirm') ? 'has-error' : ''}}>
                <label for="password-confirm">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" name="password" rows="4" class='form-control' cols="50" name='password' name="password_confirmation" required=""></input>
                {!! $errors->first('password-confirm','<span class="help-block" style="color:red;">:message</span>')!!}
              </div>

                    <!-- Default switch -->
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="administrador" name='esAdmin' value="1">
                        <label class="custom-control-label" for="administrador">Administrador</label>
                        {!! $errors->first('administrador','<span class="help-block" style="color:red;">:message</span>')!!}
                    </div>

                    <!-- Default switch -->
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="instancia" name='esInstancia' value="1">
                        <label class="custom-control-label" for="instancia">Instancia</label>
                        {!! $errors->first('instancia','<span class="help-block" style="color:red;">:message</span>')!!}
                    </div>

                    <!-- Default switch -->
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="instructor" name='esInstructor' value="1">
                        <label class="custom-control-label" for="instructor">Instructor</label>
                        {!! $errors->first('instructor','<span class="help-block" style="color:red;">:message</span>')!!}
                    </div>

              <div class="form-group row mb-4">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn pretty-btn" style="float:right; background-color:green; color:white">Crear Usuario</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var password, password2;

        password = document.getElementById('password');
        password2 = document.getElementById('password-confirm');

        password.onchange = password2.onkeyup = passwordMatch;

        function passwordMatch() {
            if(password.value !== password2.value)
                password2.setCustomValidity('Las contraseñas no coinciden.');
            else
                password2.setCustomValidity('');
        }
    </script>
@endsection