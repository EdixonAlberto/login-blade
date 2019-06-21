@include('header')

<div class="login-box">
    <img class="logo" src="./public/img/avatar.png" alt="Avatar" />

    <h1>Iniciar Sesión</h1>

    <form action="">
        <label for="username">Nombre de Usuario</label>
        <input type="text" placeholder="Ingresa tu Nombre de Usuario" />

        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresa tu Contraseña"/>


        <input type="submit" value="Iniciar" />

        <a href="#">Olvidé mi Contraseña</a>
        <a href="#">¿No tienes una Cuenta?</a>
    </form>
</div>

@include('footer')
