  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Register</h1>
              <p class="text-h3">Create Account </p>
            </div>
          </div>
          <form method="post" action="<?= site_url("Login/fetch_single") ?>">
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
         
          <div class="row justify-content-start mt-4">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                </label>
              </div>

              <button name="submit" class="btn btn-primary mt-4">Create Account</button>
            </div>
        </form>
        <div class="alert alert-danger">
          <?= $this->session->flashdata('error_msg') ?>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>