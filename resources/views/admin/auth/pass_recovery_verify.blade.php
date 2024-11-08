<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>Password Recovery Cover | CORK - Multipurpose Bootstrap Dashboard Template </title>
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

            <h1 class="">取回密碼</h1>
            <p class="signup-link">輸入你的Email取回您的密碼!</p>
            <form class="text-left" method="POST" action="{{ route('pass_recovery_quest') }}">
              @csrf

              <div class="form">
                <div id="email-field" class="field-wrapper input">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-at-sign">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                  </svg>
                  <input id="email" name="email" type="text" value="" placeholder="Email">
                  <p id="emailError" style="color: red">
                    @if (session('error')) {{ session('error') }} @endif
                  </p>
                </div>
                <div class="d-sm-flex justify-content-between">
                  <div class="field-wrapper">
                    <button type="submit" name="pass_verify" class="btn btn-primary" value="pass_verify"
                      onclick="return validateForm()">送出</button>
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
  <script src="{{asset(ADMIN_JS . '/libs/jquery-3.1.1.min.js')}}">
  </script>
  <script src="{{asset(ADMIN_BOOTSTRAP . '/js/popper.min.js')}}"></script>
  <script src="{{asset(ADMIN_BOOTSTRAP . '/js/bootstrap.min.js')}}"></script>

  <!-- END GLOBAL MANDATORY SCRIPTS -->
  <script src="{{asset(ADMIN_JS . '/authentication/form-1.js')}}"></script>

  <!-- BEGIN FORM VERIFY -->
  <script>
    function validateForm() {
      var email = document.getElementById("email").value;
      var emailError = document.getElementById("emailError");
      var isValid = true;

      // 清除之前的錯誤消息
      emailError.innerText = "";

      // 驗證電子郵件地址
      if (email.trim() === "") {
        emailError.innerText = "請輸入電子郵件地址";
        isValid = false;
      } else if (!validateEmail(email)) {
        emailError.innerText = "請輸入有效的電子郵件地址";
        isValid = false;
      }

      return isValid;
    }

    // 檢查電子郵件地址是否有效的輔助函數
    function validateEmail(email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    }
  </script>
  <!-- END FORM VERIFY -->
</body>

</html>