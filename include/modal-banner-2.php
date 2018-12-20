
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<style media="screen">


.container {
  position: relative;
  text-align: center;
  color: white;
}

/* Centered text */
.note-tilted {
  position: absolute;
  top: 30%;
  left: 10%;
  margin-right: 37%;
  transform: translate(-50%, -50%);
  -webkit-transform: rotate(-10deg); /* Safari */
  -moz-transform: rotate(-10deg); /* Firefox */
  -ms-transform: rotate(-10deg); /* IE */
  -o-transform: rotate(-10deg); /* Opera */
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); /* Internet Explorer */
  color: #000;
}

.bottom-right {
  position: absolute;
  bottom: 5%;
  right: 5%;
  color: #000;
}

</style>
<div class="modal fade bd-example-modal-lg" id="bannerModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <img src="./assets/img/note.jpg" style="width: 100%; height: auto;">
          <div class="note-tilted">
            <h1 style="font: 3.5em Pacifico;"><u>Watercolors</u></h1>
            <h4>Font tilted 15 degrees, moved to the side of the screen.</h4>
          </div>
          <div class="bottom-right">
            <h4>By Emerson Pourghaed</h4>
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
