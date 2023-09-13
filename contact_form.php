<?php ?>

    <!-- Google API For Captcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script> 
<!-- Contact Us start -->
    <div id="contactsection-wrap" class="shinewrap">
      <figure>
        <div id="contact-section">
          <div class="container-fluid">
            <h5 data-aos="fade-down" data-aos-duration="2500">Do you need any assistance with your next project?</h5>
            <h2 data-aos="fade-down" data-aos-duration="1000">Send your request</h2>
            <form action="send_mail.php" method="POST" >
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Full Name" name="name" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="email" placeholder="Email Address" name="email" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" placeholder="Subject" name="subject" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <textarea
                      rows="5"
                      cols="20"
                      placeholder="Message" name="message"
                    ></textarea>
                  </div>
                </div>
              </div>

              <div style="margin-top:20px;">
                  <div id="mail_success" display="none"
                      class="d-none alert alert-success alert-dismissible ">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Message has been submitted successfully
                  </div>
                  <div id="mail_error" display="none"
                      class="d-none alert alert-danger alert-dismissible ">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Some error occured. Please try again later.
                  </div>
                  <div id="captcha_error" display="none"
                      class="d-none alert alert-danger alert-dismissible ">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Please fill captcha first.
                  </div>
              </div>

              <div class="form-group">
                  <label for="password" class="col-sm-3 control-label"></label>
                  <div class="col-sm-6">
                      <div id="recaptcha" class="g-recaptcha" data-sitekey="6LeBCW4UAAAAAMkln51zQxLrTmXkvUd702Vm5J2g"></div>
                      <!-- <div class="g-recaptcha" data-sitekey="6Le3PXEUAAAAAPt4oiht2IzxzQPEAr3yngrVypJw"></div> -->
                  </div>
              </div>
              
              <button type="submit" class="btn btn-outline-secondary">
                Submit
              </button>
            </form>
          </div>
        </div>
      </figure>
    </div>
    <!-- Contact Us Ends -->
    