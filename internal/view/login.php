<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Ordering System</title>
        <link rel="stylesheet" type="text/css" href="../css/loginlayout.css" />
        <link rel="stylesheet" type="text/css" 
              href="../bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
    </head>
    <body>
        <div id="maindiv">
            <div id="headerdiv">                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8">
                            <div class="webbanner">
                                OnLine Ordering System
                            </div>
                        </div>
                        <div class="col-md-2">&nbsp;</div>
                    </div>
                </div>                          
            </div>
            <div id="sessiondiv">&nbsp;</div>
            <div id="navidiv">&nbsp;</div>
            <div id="contentdiv">

                <div class="login-card">                    
                    <h1>Login</h1>
                    <div class="alert-danger" style="text-align: center" 
                         id="error">
                             <?php
                             //If there is an error
                             if (isset($_REQUEST['msg'])) {
                                 echo base64_decode($_REQUEST['msg']);
                             }
                             ?>

                    </div>
                    <br/>
                    <form action="../controller/logincontroller.php"
                          method="post">
                        <input type="text" id="email" name="email" 
                               placeholder="Email Address" />
                        <input type="password" id="pass" name="pass" 
                               placeholder="Password" />
                        <input type="submit" name="login" value="Login"
                               class="login login-submit" />
                    </form>

                </div>             


                &nbsp;</div>
            <div id="footerdiv">
                <div class="ci">&copy; 2017 UCSC, ALL RIGHTS RESERVED</div></div>          
        </div>
    </body>
</html>

<script type="text/javascript" src="../js/jquery-1.8.3.min.js"> </script>
<script type="text/javascript">
    
    $(document).ready(function(){
        $('form').submit(function(){
            var email=$('#email').val();
            var pass=$('#pass').val();
            //To check both email and password
            if(email=="" && pass==""){
                $('#error').text("Both Email and password are Empty");
                return false;
            }
            //To check empty email
            if(email==""){
                $('#error').text("Empty Email");
                return false;
            }
            //To check empty password
            if(pass==""){
                $('#error').text("Empty password");
                return false;
            }           
            
        });        
    });         
            
            
    
    
</script>

