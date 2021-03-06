  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Account Verify</h1>
              <p class="text-h3">Account Verify </p>
            </div>
          </div>
          <form method="post" action="<?= site_url("Login/verify_otp") ?>">
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="hidden" name="id" value="<?= $id ?>">
              <input type="text" class="form-control" name="code" placeholder="Enter Verification Code">
            </div>
          </div>
              <button name="submit" class="btn btn-primary mt-4">Verify</button>
            </div>
        </form>
          </div>
          <?php if ($this->session->flashdata('error_message')) { ?>
              <div class="alert alert-danger" id="error_message" style="font-weight: 900"> <?= $this->session->flashdata('error_message'); ?> </div>
          <?php } ?> 
        </div>
      </div>
    </div>
  </section>