<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Emerson - Contact</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <?php include('./include/head.php'); ?>
  <script>
  $( function() {
    var availableTags = [];

    <?php
    $json = json_decode(file_get_contents('./assets/data/city.json'), true);
    $jsonArr = $json['arr'];
    for ($i = 0; $i < count($jsonArr); $i++) {
      echo 'availableTags.push("' . $jsonArr[$i]["city"] . '");';
    }
    ?>

    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }

    $( "#tags" )
      // don't navigate away from the field on tab when selecting an item
      .on( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( $.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
      });
  } );
  </script>
</head>
<body>

  <?php include('./include/navbar.php');?>
  
  <header class="masthead" style="background-image:url('assets/img/contact-bg.jpg');">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-lg-8 mx-auto">
                  <div class="site-heading">
                      <h1>Contact</h1><span class="subheading">Have any inquiries? We'll respond to you ASAP.</span></div>
              </div>
          </div>
      </div>
  </header>
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto">
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
                  <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-3"><label>Message</label><textarea class="form-control" rows="5" required="" placeholder="Message" id="message" data-validation-required-message="Please enter a message."></textarea><small class="form-text text-danger help-block"></small></div>
                  </div>

                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-3">
                    <label for="tags">City: </label>
                    <input id="tags" placeholder="City" class="form-control">
                    <small class="form-text text-danger help-block"></small>
                    </div>
                  </div>

                  <div id="success"></div>
                  <div class="form-group"><button class="btn btn-primary" type="submit" id="sendMessageButton">Send</button></div>
              </form>
          </div>
      </div>
  </div>
  <hr>
<footer class="bg-dark">
  <?php include('./include/footer.php'); ?>
</footer>


</body>
</html>
