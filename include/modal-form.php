

<div class="modal fade bd-example-modal-lg" id="bootstrapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Fill out this form:</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
          <div class="control-group">
              <div class="form-group floating-label-form-group controls"><label>Name</label><input class="form-control" type="text" required="" placeholder="Name" id="name"><small class="form-text text-danger help-block"></small></div>
          </div>
          <div class="control-group">
              <div class="form-group floating-label-form-group controls"><label>Email Address</label><input class="form-control" type="email" required="" placeholder="Email Address" id="email"><small class="form-text text-danger help-block"></small></div>
          </div>
          <div class="control-group">
              <div class="form-group floating-label-form-group controls"><label>Phone Number</label><input class="form-control" type="tel" required="" placeholder="Phone Number" id="phone"><small class="form-text text-danger help-block"></small></div>
          </div>

          <div class="row">
            <div class="col-8 col-sm-4 control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="tags">City </label>
                <input id="tags" placeholder="City" class="form-control">
                <small class="form-text text-danger help-block"></small>
              </div>
            </div>
            <div class="col-4 col-sm-4 control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="tags">State </label>
                <input id="tags" placeholder="State" class="form-control">
                <small class="form-text text-danger help-block"></small>
              </div>
            </div>
            <div class="col-4 col-sm-4 control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="tags">Zip </label>
                <input id="tags" placeholder="Zip" class="form-control">
                <small class="form-text text-danger help-block"></small>
              </div>
            </div>
          </div>

          <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-3"><label>Message</label><textarea class="form-control" rows="5" required="" placeholder="Message" id="message" data-validation-required-message="Please enter a message."></textarea><small class="form-text text-danger help-block"></small></div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" type="submit" id="sendMessageButton">Send</button>
          </div>
        </form>
      </div>

      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <!-- <button type="button" class="btn btn-primary">Send message</button> -->
    </div>
  </div>
</div>
