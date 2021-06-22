<section class="modai-top">
  <div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog Modal-block">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title text-capitalize">
            <img src="<?php echo base_url();?>siteassets/img/quick-enquiry-icon.png" alt="Enquiry">  Get free quote
            </h4>
            <button type="button" class="close onclose" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <h5 class="text-center border-bottom mail-title">
              Please fill in the form below or <br> mail us at <a href="mailto:sales@triazinesoft.com">sales@triazinesoft.com</a>
            </h5>
            <form action="sendMail/mail.php" method="post" id="popup_modal">
              <input type="text" name="machine"  id="machine" class="machine" style="display:none">    
              <input type="hidden" name="machine"  id="machine" class="machine" style="display:none !important">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control field-input" placeholder="Enter your full Name" id="popup_fullname" name="name" data-validation="length" data-validation-length="min1" data-validation-error-msg="Name is Required.">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control field-input" placeholder="Enter your email Address" id="popup_email" name="user_email" data-validation="email" data-validation-error-msg="Email-ID is Required.">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input class="form-control field-input" placeholder="Enter your Phone Number" id="popup_phone" name="phone" type="text" data-validation="number" data-validation-error-msg="Contact Number is Required." onkeyup="this.value=this.value.replace(/[^\d]/,'')">
              </div>
              <div class="form-group">
                <label for="mesage">Message</label>
                <textarea id="popup_requirement" class="requirement" name="message" rows="3" cols="47" placeholder="Enter your Requirement" data-validation="required" data-validation-error-msg="Enter Your Requirements."></textarea>
              </div>
              <div class="form-group form-check text-center">
                   <b>Human Test <b id="question"></b>&nbsp; <input type="number" class="field-input" id="check" data-validation="required">
                  <!--<p>Human Test <b id="question"></b><input id="ans" type="text" class="field-input" id="check" data-validation="required" data-validation-error-msg="*please verify you are human! *"></p>-->
                  <div id="success" class="text-success">Validation Success :)</div>
                  <div id="fail" class="text-danger">Validation failed :(</div>
              </div>
              <div class="form-group form-btn text-center">
                <button id="popup_modal_submit" type="submit" class="btn btn-default">Submit</button>
              </div>
            </form>
          </div>

          <!-- Modal footer -->
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger onclose" data-dismiss="modal">Close</button>
            <p>nitesh</p>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</section>