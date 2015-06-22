<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Pronto: Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/rollyourown.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Pronto Furniture Assembly</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="http://www.yelp.com/biz/pronto-furniture-assembly-oakland">Yelp</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
    </div><!-- /.container -->

    <!--PHP form script component-->

    <div class="formContainer">
                        <form id="contact-form" name="contactform" method="post" action="send_form_email.php">
                                <!-- <form id="contact-form" action="/" method="post"> -->
                            <div>
                                    <label>
                                            <span>Name</span><br>
                                            <input type="text" name="name" tabindex="1" required autofocus>
                                    </label>
                            </div>
                            <div>
                                    <label>
                                            <span>Email</span><br>
                                            <input type="email" name="email" tabindex="2" required>
                                    </label>
                            </div>
                            <div>
                                    <label>
                                            <span>Phone Number</span><br>
                                            <input type="tel" name="telephone" tabindex="3" required>
                                    </label>
                            </div>
                            <div>
                                    <label>
                                            <span>Message</span><br>
                                            <textarea tabindex="4" name="message" required></textarea>
                                    </label>
                            </div>
                            <div>
                                    <button name="submit" type="submit" id="contact-submit">Send Message</button>
                            </div>
                        </form>

                            </div>
                            </div>  
                      <script>
                        (function() {
                         
                            // Create input element for testing
                            var input = document.createElement('input');
                             
                            // Create the supports object
                            var supports = {};
                             
                            supports.autofocus   = 'autofocus' in input;
                            supports.required    = 'required' in input;
                            supports.placeholder = 'placeholder' in input;
                         
                            // Fallback for autofocus attribute
                            if(!supports.autofocus) {
                                 
                            }
                             
                            // Fallback for required attribute
                            if(!supports.required) {
                                 
                            }
                         
                            // Fallback for placeholder attribute
                            if(!supports.placeholder) {
                                 
                            }
                             
                            // Change text inside send button on submit
                            var send = document.getElementById('contact-submit');
                            if(send) {
                                send.onclick = function () {
                                    this.innerHTML = '...Sending';
                                }
                            }
                         
                        })();
                      </script>    
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>