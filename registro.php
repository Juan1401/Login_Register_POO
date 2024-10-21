<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Registro</title>
    <link rel="stylesheet" href="public/css/registro.css">
  </head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5>
            <form>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
                <label for="floatingInputUsername">Usuario</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Email</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Constraseña</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
              </div>

              <a class="d-block text-center mt-2 small" href="#">Si tienes una cuenata, Entra</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

  </body>
</html>
