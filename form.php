<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Pronto: Contact</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact form for Pronto Furniture Assembly">
    <meta property="og:title" content="Pronto: Contact" />
    <meta property="og:description" content="Contact form for Pronto Furniture Assembly" />
    <meta property="og:url" content="http://www.pronto-assembly.com/form.php" />
    <meta property="og:site_name" content="Pronto Furniture Assembly" />
    <meta property="og:locale" content="en_US" />
    

    <link rel="icon" type="image/ico" href="images/favicon.ico">

    <!-- Bootstrap and CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/rollyourown.css" rel="stylesheet">


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
                <li><a href="form.php">Contact Us</a></li>
                <li><a href="http://www.yelp.com/biz/pronto-furniture-assembly-oakland"target="_blank">Yelp</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>  

     
<div class="container"><div class="formContainer">
  <h3>Use this form for any questions or inquiries</h3>
<form class="form-horizontal" role="form" method="post" action="formScript.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <!-- Will be used to display an alert to the user-->
        </div>
    </div>
</form>


</div>
<footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>©2015 Pronto Furniture Assembly</p>
      </footer>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>    
