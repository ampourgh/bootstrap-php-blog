
<style media="screen">

.container {
  position: relative;
  text-align: center;
  color: white;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 10%;
  transform: translate(-5%, -50%);
}
</style>
<div class="modal fade bd-example-modal-lg" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FESTIVITY:</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding: 0; margin: 0;">
        <div class="container" style="padding: 0; margin: 0;">
          <img src="./assets/img/bokeh.jpg" style="width: 100%; height: auto;">
          <div class="centered">
            <h1 style="font-size: 3.5em;">BOKEH PICTURE</h1>
            <h4>This is bokeh picture letting you know of an event that should be coming up in the near future!</h4>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>

      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <!-- <button type="button" class="btn btn-primary">Send message</button> -->
    </div>
  </div>
</div>
