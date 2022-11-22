<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
        <!-- Font online-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      
<!--        Animate.css-->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
                
                                
        <link rel="stylesheet" href="formlogintmp.css" >
        
        <!-- Google JQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="form.js"></script>

    </head>
    <body>
        <style>
           * {
    margin: 0;
    padding: 0;
}

html{
    width: 100%;
    height: 100vh;
}

body {
    background: #F5EFE6;
    width: 100%;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
    letter-spacing: 1px;
}

.panel{
    width: 450px;
    max-width: 90%;
    height: 700px;
    background-color: #F5EFE6;
    background-repeat:no-repeat;
    background-position: top center;
    background-size: cover;
    margin:5% auto 0px;
}




.shadow1{
	-webkit-box-shadow:  0 20px 15px -15px rgba(119, 119, 119, 0.85);
	   -moz-box-shadow:  0 20px 15px -15px rgba(119, 119, 119, 0.85);
	        box-shadow:  0 40px 30px -30px rgba(119, 119, 119, 0.85);
}


form{
    height: 700px;
    padding: 50px;
}

.panel-switch{
    text-align: center;
    margin-top: 30px;
}

.panel-switch button{
    display: inline-block;
    width: 100px;
    height: 40px;
    background: #AEBDCA;
    margin: 0px 10px 50px;
    border: none;
    color: #000000;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 2px;
        font-size: 0.8em;
}     
.panel-switch button:active{
    background: #AEBDCA;
    color: #AEBDCA;
}

.active-button{
    opacity: 0.5;
}

button , .button , a {
    cursor: pointer;
}

form h1{
    color: #000000;;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 4px;
    margin: 50px 0;
    font-size: 1.7em;
}

fieldset{
    border: none;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

fieldset input{
    background: rgba(255, 255, 255, 0.2);
    border: none;
    border-radius: 5em;
    height: 20px;
    width: 80%;
    margin: 10px 0;
    padding: 5px;
    text-indent: 10px;
    color: #000000;
    font-weight: 600;
}

fieldset input::placeholder {
    color: #000000;
}


fieldset input:focus {
    outline:;
    border: 1px solid #AEBDCA;
    border-radius: 5em;
    margin: 9px 0;
}

.login_form{
    position: relative;
    bottom:0;
    width: 70%;
    height: 4em;
    margin-top: 150px;
    border: none;
    border-radius: 10em;
    background: #AEBDCA;
    color: #000000;;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 2px;
    z-index: 1;
    
    transition: background-color 0.2s , color:0.2s;
}

#login-form-submit:active{
    background: #000000;
    color: #c9c9c9;
}

p , a{
    margin: 0;
    padding: 0;
}

a{
    color: #000000;
    font-size: 0.7em;
    text-decoration: none;
}

.hidden{
    display: none;
}

/*MEDIA QUERIES     */

@media (max-height:800px) {

    body{
        max-height: 100vh;
    }

  .panel{
        width: 450px;
        max-width: 90%;
        background-size: cover;
        margin: 1% auto;
    }
    
}

@media (max-width:500px) {

    html, body{
        background-color: #F5EFE6;
        background-repeat:no-repeat;
        background-position: top center;
        background-size: cover;
        height: 100vh;
        margin: 0px;
        padding: 0px;
        position: fixed;
    }
    
    .panel{
        background: none;
        box-shadow: none;
    }
    
    
    form{
        padding: 50px;
    }

    .panel-switch{
        margin-top: 30px;
    }

    .panel-switch button{
        display: inline-block;
        width: 80px;
        margin: 0px 10px 50px;
        font-weight: 600;
        font-size: 0.7em;
    }
    
    form h1{
        font-size: 1.5em;
    }
    
    .login_form{
        bottom:0;
        width: 70%;
        margin-top: 100px;
    }
    
} 
        </style>
        <div>
            <div class="panel shadow1">
                <form class="login-form">
                    <div class="panel-switch animated fadeIn">
                    </div>
                    <h1 class="animated fadeInUp animate1" id="title-login">login</h1>
                    <h1 class="animated fadeInUp animate1 hidden" id="title-signup">login</h1>
                    <fieldset id="login-fieldset">
                        <input class="login animated fadeInUp animate2" name="username" type="textbox"  required   placeholder="Username" value="" >
                        <input class="login animated fadeInUp animate3" name="password" type="password" required placeholder="Password" value="">
                    </fieldset>
                    <fieldset id="signup-fieldset" class="hidden">
                        <input class="login animated fadeInUp animate2" name="username" type="textbox"  required   placeholder="Username" value="" >
                        <input class="login animated fadeInUp animate3" name="password" type="password" placeholder="Choose password"  required  value="">
                    </fieldset>
                    <input type="submit" id="login-form-submit" class="login_form button animated fadeInUp animate4" value="Log in">
                    <input type="submit" id="signup-form-submit" class="login_form button animated fadeInUp animate4 hidden" value="Sign up">
                    <p><a id="lost-password-link" href="" class="animated fadeIn animate5">I forgot my  login or password (!)</a></p>
                </form>
            </div>
        </div>
        <script src="formlogintmp.js"></script>
    </body>
</html>