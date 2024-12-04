<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
<body>
  <script>
    start_loader()
  </script>
  <style>
    /* body {
      background-image: url("<?php echo validate_image($_settings->info('cover')) ?>");
      background-size: cover;
      background-repeat: no-repeat;
      backdrop-filter: contrast(1);
    } */
    .left-panel {
      background: url("<?php echo validate_image($_settings->info('cover')) ?>") no-repeat center center;
      background-size: cover;
      height: 100vh;
    }
    .right-panel {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f8f9fa;
    }
    .logo {
      color: white;
      text-align: center;
    }
    .logo h1 {
      font-size: 2.5rem;
    }
    .logo p {
      margin-top: -10px;
      font-size: 1.2rem;
    }
    .login-container {
      max-width: 400px;
      width: 100%;
      text-align: center;
    }
    .form-control {
      margin-bottom: 15px;
    }
    #page-title {
      text-shadow: 6px 4px 7px black;
      font-size: 3.5em;
      color: #fff4f4 !important;
      background: #8080801c;
    }
  </style>

  <!-- Page Title
  <h1 class="text-center text-white px-4 py-5" id="page-title">BilangGo: Data Management System</h1> -->

  <div class="row g-0">
    <!-- Left Panel -->
    <div class="col-md-6 left-panel">
      <div class="logo p-5">
        <h1>BILANG<span style="color: #007bff;">GO</span></h1>
        <p>Bulacan Provincial Jail Data Management</p>
      </div>
    </div>
    <!-- Right Panel -->
    <div class="col-md-6 right-panel">
      <div class="login-container">
        <h2 class="mb-4">Log In</h2>
        <p class="login-box-msg">Please enter your credentials</p>
        <form id="login-frm" action="" method="post">
          <!-- Username Field -->
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <!-- Password Field -->
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- Submit Button -->
          <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="<?= base_url ?>plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url ?>dist/js/adminlte.min.js"></script>
  <script>
    $(document).ready(function() {
      end_loader();
    });
  </script>
</body>
</html>