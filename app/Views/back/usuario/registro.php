<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-5">
        <div class="card p-4">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Registro</h3>

                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?= base_url('/enviar-form'); ?>" class="row g-3 needs-validation" novalidate>
                    <?= csrf_field(); ?>

                    <!-- Mensajes de éxito y error -->
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif; ?>

  <!-- campo Nombre -->

                    <div class="form-group">
                        <label for="validationDefault01" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control <?= ($validation->hasError('nombre')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('nombre') ?>" required>

                        <!-- Validación de errores -->
                        <div class="invalid-feedback"><?= $validation->getError('nombre'); ?></div>
                    </div>
  <!-- campo apellido-->
                    <div class="form-group">
                        <label for="validationDefault02" class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control <?= ($validation->hasError('apellido')) ? 'is-invalid' : ''; ?>" id="validationDefault02" value="<?= old('apellido') ?>" required>
                      
                      
                        <!-- Validación de errores -->
                        <div class="invalid-feedback"><?= $validation->getError('apellido'); ?></div>
                    </div>
  <!-- campo usuario -->
                    <div class="form-group">
                        <label for="validationDefaultUsuario" class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control <?= ($validation->hasError('usuario')) ? 'is-invalid' : ''; ?>" id="validationDefaultUsuario" value="<?= old('usuario') ?>" required>
                       
                        <!-- Validación de errores -->
                        <div class="invalid-feedback"><?= $validation->getError('usuario'); ?></div>
                    </div>
  <!-- campo email -->
                    <div class="form-group">
                        <label for="validationDefaultEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="validationDefaultEmail" value="<?= old('email') ?>" required>

                        <!-- Validación de errores -->
                     
                        <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                    </div>
  <!-- campo contrasena -->
  <div class="form-group">
    <label for="validationDefaultPassword" class="form-label">Contraseña</label>
    <input type="password" name="pass" class="form-control <?= (isset($validation) && $validation->hasError('pass')) ? 'is-invalid' : ''; ?>" id="validationDefaultPassword" required>
    <?php if (isset($validation) && $validation->hasError('pass')): ?>
        <div class="invalid-feedback">
            <?= $validation->getError('pass'); ?>
        </div>
    <?php endif; ?>
</div>


                        <!-- Validación de errores -->

                        <div class="invalid-feedback"><?= $validation->getError('pass'); ?></div>
                    </div>
  <!-- cconfirmar contrasena -->
                    <div class="form-group">
                        <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                        <input type="password" name="confirm_pass" class="form-control <?= ($validation->hasError('confirm_pass')) ? 'is-invalid' : ''; ?>" id="confirmPassword" required>
                       
                        <!-- Validación de errores -->

                        <div class="invalid-feedback"><?= $validation->getError('confirm_pass'); ?></div>
                    </div>

                    <!-- Checkbox de aceptar términos -->
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Acepto términos y condiciones
                            </label>
                        </div>
                    </div>

                    <!-- Botón Enviar Formulario -->
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" type="submit">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
