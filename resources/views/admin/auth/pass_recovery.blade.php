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

            <h1 class="">修改密碼</h1>
            <form class="text-left" method="POST" action="{{ route('alter_pass_quest') }}">
              @csrf
              <input type="hidden" name="user_id" value="{{ $user_id }}">
              <div class="form">
                <div id="password-field" class="field-wrapper input mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  <input id="password" name="password" type="password" value="" placeholder="請輸入新密碼">
                  <p id="passwordError" style="color: red"></p>
                </div>
                <div id="password-field" class="field-wrapper input mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-lock">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  <input id="confirmPassword" name="confirmPassword" type="password" value="" placeholder="再次輸入新密碼">
                  <p id="confirmPasswordError" style="color: red"></p>
                </div>
                <div class="d-sm-flex justify-content-between">
                  <div class="field-wrapper toggle-pass">
                    <p class="d-inline-block">顯示密碼</p>
                    <label class="switch s-primary">
                      <input type="checkbox" id="toggle-password" class="d-none">
                      <span class="slider round"></span>
                    </label>
                  </div>
                  <div class="field-wrapper">
                    <button type="submit" class="btn btn-primary" value="" onclick="return validateForm()">修改</button>
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
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var passwordError = document.getElementById("passwordError");
    var confirmPasswordError = document.getElementById("confirmPasswordError");
    var isValid = true;

    // 清除之前的錯誤消息
    passwordError.innerText = "";
    confirmPasswordError.innerText = "";

    // 驗證新密碼
    if (password.trim() === "") {
      passwordError.innerText = "請輸入新密碼";
      isValid = false;
    }

    // 驗證確認密碼
    if (confirmPassword.trim() === "") {
      confirmPasswordError.innerText = "請再次輸入新密碼";
      isValid = false;
    } 
    else if (password !== confirmPassword) {
      confirmPasswordError.innerText = "兩次輸入的密碼不一致";
      isValid = false;
    }

    return isValid;
  }
</script>
  <!-- END FORM VERIFY -->
</body>

</html>