<?php 
  session_start();
  if ( isset($_GET['cerrar_sesion']) ) {
    $cerrar_sesion = $_GET['cerrar_sesion'];
  }
  
  if (isset($cerrar_sesion)) {
    session_destroy();
  }
  include_once 'header.php'; 

?>

<div class="container d-flex justify-content-center">


<div class="login-box mt-5">
  <div class="login-logo">
    <a  href="../index.php"><b>GDL</b>WebCamp</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Logea para iniciar tu sesion.</p>

      <form action="modelo-admin.php" method="post" id="login-admin" name="login-admin-form">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuario" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <input type="hidden" name="login-admin" value="1"> 
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
          </div>

        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>
</div>















<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>

<script src="js/admin-ajax.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
</html>