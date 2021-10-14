<?php
    include 'models/header_user.php';
    include 'models/footer_dash.php';
    include 'conexion.php';

    $username = $_GET["user"];
    $temp = new Connection();
    $conn = $temp->getConnection();
    $data = $temp->user_data($username,$conn);
    $sesion = $temp->user_sesions($username,$conn);
    $info = $temp->user_game($sesion["id"],$conn);
?>

<div class="container-fluid mt-3 mb-3">
  <div class="row">
    <div class="col-md-6 col-lg-2">
      <div class="card bg-success text-center bg-opacity-25 mt-3 mb-3"">
        <img src="sources/1.jpg" class="card-img-top rounded-circle">
        <h5 class="card-title text-center mt-2">Información</h5>
        <div class="card-body">
          <p class="card-text text-center">Username: <?php echo $username?></p></p>
          <p class="card-text text-center">Nombre: <?php echo $data["name"]?></p></p>
          <p class="card-text text-center">Apellidos: <?php echo $data["lastname"]?></p></p>
          <p class="card-text text-center">Edad: <?php echo $data["age"]?></p></p>
          <p class="card-text text-center">Clínica: <?php echo $data["clinic"]?></p></p>
          <p class="card-text text-center">Diagnóstico: <?php echo $data["injury"]?></p></p>
        </div>
      </div>
    </div>

    <div class="col-lg-10">
      <div class="row">
        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Duración</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $sesion["duration"]?> min</p></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Ángulo max</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["angle_max"]?>°</p></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Velocidad max</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["vel_max"]?></p></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Aceleración max</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["acc_max"]?></p></p>
            </div>
          </div>  
        </div>

        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
            <h5 class="card-title text-center mt-3">Repeticiones</h5>
            <div class="card-body">
              <p class="card-text text-center"><?php echo $info["rep"]?></p></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-2">
          <div class="card bg-success bg-opacity-25 mt-3 mb-2">
          <h5 class="card-title text-center mt-3">Repeticiones</h5>
          <div class="card-body">
            <p class="card-text text-center"><?php echo $info["rep"]?></p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

