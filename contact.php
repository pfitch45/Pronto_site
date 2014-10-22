<!DOCTYPE html>
<html>
<head></head>
<body>
<div id="formContainer">
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
                                    <button name="submit" type="submit" id="contact-submit">Send Email</button>
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
</body>
</html>                    