<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>Register Cover | CORK - Multipurpose Bootstrap Dashboard Template </title>
  <link rel="icon" type="image/x-icon" href="{{asset(ADMIN_IMG . '/favicon.ico')}}" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="{{asset(ADMIN_BOOTSTRAP . '/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset(ADMIN_CSS . '/plugins.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset(ADMIN_CSS . '/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->
  <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_CSS . '/forms/theme-checkbox-radio.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset(ADMIN_CSS . '/forms/switches.css')}}">
</head>

<body class="form">

  <div class="form-container">
    <div class="form-form">
      <div class="form-form-wrap">
        <div class="form-container">
          <div class="form-content">

            <h1 class="">歡迎，<br />註冊成為一名會員</h1>
            <p class="signup-link">已有帳號? <a href="login">登入</a></p>
            <form class="text-left" method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form">
                <div id="username-field" class="field-wrapper input">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <input id="account" name="admin_account" type="text" class="form-control" placeholder="請輸入帳號">
                  <p id="accountError" style="color: red"></p>
                  @error('admin_account')
          <p style="color: red">{{ $message }}</p>
        @enderror
                </div>
                <div id="email-field" class="field-wrapper input">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-at-sign">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                  </svg>
                  <input id="email" name="admin_email" type="text" value="" placeholder="請輸入Email">
                  <p id="emailError" style="color: red">
                    @error('admin_email')
            <p style="color: red">{{ $message }}</p>
          @enderror
                  </p>
                </div>
                <div id="password-field" class="field-wrapper input mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  <input id="password" name="admin_password" type="password" value="" placeholder="請輸入密碼">
                  <p id="passwordError" style="color: red"></p>
                </div>
                <!-- <div class="field-wrapper terms_condition">
                  <div class="n-chk new-checkbox checkbox-outline-primary">
                    <label class="new-control new-checkbox checkbox-outline-primary">
                      <input type="checkbox" class="new-control-input">
                      <span class="new-control-indicator"></span><span>我同意<a
                          href="javascript:void(0);">用戶條款和隱私政策</a></span>
                    </label>
                  </div>
                </div> -->
                <div class="d-sm-flex justify-content-between">
                  <div class="field-wrapper toggle-pass">
                    <p class="d-inline-block">顯示密碼</p>
                    <label class="switch s-primary">
                      <input type="checkbox" id="toggle-password" class="d-none">
                      <span class="slider round"></span>
                    </label>
                  </div>
                  <div class="field-wrapper">
                    <button type="submit" class="btn btn-primary" value="" onclick="return validateForm()">註冊</button>
                  </div>
                </div>

              </div>
            </form>
            <!-- <p class="terms-conditions">© 2019 All Rights <a href="http://www.bootstrapmb.com/">Reserved</a>. <a
                href="index.html">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie
                Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.
            </p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="form-image">
      <div class="l-image">
      </div>
    </div>
  </div>


  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="{{asset(ADMIN_JS . '/libs/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset(ADMIN_BOOTSTRAP . '/js/popper.min.js')}}"></script>
  <script src="{{asset(ADMIN_BOOTSTRAP . '/js/bootstrap.min.js')}}"></script>

  <!-- END GLOBAL MANDATORY SCRIPTS -->
  <script src="{{asset(ADMIN_JS . '/authentication/form-1.js')}}"></script>

  <!-- BEGIN FORM VERIFY -->
  <script>
    function validateForm() {
      var account = document.getElementById("account").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var accountError = document.getElementById("accountError");
      var emailError = document.getElementById("emailError");
      var passwordError = document.getElementById("passwordError");
      var isValid = true;

      // 清除之前的錯誤消息
      accountError.innerText = "";
      emailError.innerText = "";
      passwordError.innerText = "";

      // 驗證帳號
      if (account.trim() === "") {
        accountError.innerText = "請輸入帳號";
        isValid = false;
      }

      // 驗證email
      if (email.trim() === "") {
        emailError.innerText = "請輸入email";
        isValid = false;
      }

      // 驗證密碼
      if (password.trim() === "") {
        passwordError.innerText = "請輸入密碼";
        isValid = false;
      }

      return isValid;
    }
  </script>
  <!-- END FORM VERIFY -->
</body>

</html>