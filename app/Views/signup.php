<?= $this->extend('default') ?>

<?= $this->section('content') ?>
    <div class="login-page">
      <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
          <div class="card-body p-0">
            <div class="row gx-0 align-items-stretch">
              <!-- Logo & Information Panel-->
              <div class="col-lg-6">
                <div class="info d-flex justify-content-center flex-column p-4 h-100">
                  <div class="py-5">
                    <h1 class="display-6 fw-bold">Dashboard</h1>
                    <p class="fw-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="col-lg-6 bg-white">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100">
                  <form class="register-form py-5 w-100" method="get" action="login.html">
                    <div class="input-material-group mb-3">
                      <input class="input-material" type="text" name="registerUsername" required data-validate-field="registerUsername">
                      <label class="label-material" for="register-username">Username                </label>
                    </div>
                    <div class="input-material-group mb-3">
                      <input class="input-material" type="email" name="registerEmail" required data-validate-field="registerEmail">
                      <label class="label-material">Email Address</label>
                    </div>
                    <div class="input-material-group mb-4">
                      <input class="input-material" type="password" name="registerPassword" required data-validate-field="registerPassword">
                      <label class="label-material">Password</label>
                    </div>
                    <div class="form-check mb-4">
                      <input class="form-check-input" id="register-agree" name="registerAgree" type="checkbox" required value="1" data-validate-field="registerAgree">
                      <label class="form-check-label form-label" for="register-agree">I agree with the terms and policy                        </label>
                    </div>
                    <button class="btn btn-primary mb-3" id="login" type="submit">Register</button><br><small class="text-gray-500">Already have an account?  </small><a class="text-sm text-paleBlue" href="/login">Login</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?= $this->endSection() ?>