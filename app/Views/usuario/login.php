<?= view('common/head') ?>
<?php $session = session(); ?>
<div class="text-center row">
    <div class="col-5 mx-auto">
        <form class="form-signin" action="<?= base_url('usuario/login') ?>" method="post">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72"
                height="72">
            <h1 class="h3 mb-3 font-weight-normal">Bienvenido a EMSOL</h1>
            <label for="email" class="sr-only">Correo electronico</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required
                autofocus>
            <label for="contra" class="sr-only">contraseña</label>
            <input type="contra" id="contra" name="contra" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</div>
<?= view('common/footer') ?>