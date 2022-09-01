  <!-- Login component -->
<section  id="loginpage" class="hold-transition login-page">
  <div v-if="target === 'login'" class="login-box">
    <div class="login-logo">
      <a href="#"><b>Lib</b>test</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="../../index3.html" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">
          <a href="#" class="btn btn-block btn-primary">
            Signin
          </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-0">
          <a  @click="target = 'register'" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>

  <!-- Register -->
  <div v-if="target === 'register'" class="login-box">
    <div class="login-logo">
      <a href="#"><b>Lib</b>test</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Enter your credential to register</p>

        <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
            <input type="name" name="fullname" class="form-control" placeholder="Full name">
            <div class="input-group-append">
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password Confirmation">
            <div class="input-group-append">
            </div>
          </div>
        </form>

        <div class="social-auth-links text-center mb-3">
          <a href="#" class="btn btn-block btn-primary">
            Register
          </a>
        </div>

        <div v-if ="registeralert != ''" class="social-auth-links text-center mb-3">
          <a href="#" class="btn btn-block btn-secondary">
            {{ registeralert }}
          </a>
        </div>
        <!-- /.social-auth-links -->

        <p class="mb-0">
          <a @click="target = 'login'" class="text-center">Login as existing user</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</section>




  <script src="<?= base_url('assets/comps/loginpage.js') ?>" ></script>

  