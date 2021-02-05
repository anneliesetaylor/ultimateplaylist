<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Ultimate Playlist- Submit a Song</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>

  <div class="jumbotron">
    <h1 class="text-center display-4">Submit a Song</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">


        <div class="col text-center pb-3">
          <a class="btn btn-outline-dark" href="playlist_table.php" role="button">See the playlist here</a>
        </div>

        <div id="songsubform" class="col-md-6 mx-auto">
          <!-- this form is handled by the JavaScript file linked at bottom -->
          <form id="songform" method="post" action="" autocomplete="off">


            <div class="form-group">
              <label class="form-control-label" for="songtitle">Song title: </label>
            	<input class="form-control" type="text" name="title" id="title" maxlength="60" required>
            </div>


            <div class="form-group">
              <label class="form-control-label" for="songartist">Artist:</label>
              <input class="form-control" type="text" name="songartist" id="songartist" maxlength="60" required>
            </div>


            <div class="form-group">
              <label class="form-control-label" for="genre">Genre:</label>
              <select class="form-control" name="genre" id="genre" required>
                  <option value="no choice" disabled selected>Select one</option>
                  <option value="pop">Pop</option>
                  <option value="rock">Rock</option>
                  <option value="hiphop">Hip Hop</option>
                  <option value="rap">Rap</option>
                  <option value="r_and_b">R&B/Soul</option>
                  <option value="jazz">Jazz</option>
                  <option value="country">Country</option>
                  <option value="electronic">Electronic/alternative</option>
                  <option value="other">Other</option>
              </select>
            </div>


            <div class="form-group">
              <label class="form-control-label" for="users_name">Your name:</label>
            	<input class="form-control" type="text" name="users_name" id="users_name" maxlength="50" required>
            </div>

            <div class="form-group">
              <label class="form-control-label" for="explanation">Best to listen to when...</label>
              <textarea class="form-control" name="explanation" id="explanation" rows="3"></textarea>
            </div>


            <div class="pb-4">
          	   <input class="btn btn-outline-dark" type="submit" value="Submit">
            </div>

          </form><!-- close the #songform form -->

        </div> <!-- close #songsubform -->

        <!-- empty div -->
        <div class="text-center" id="response"></div>

      </div><!--end of col-->

    </div><!--end of row-->

  </div><!--end of container-->


<script src="scripts/enter.js"></script>



</body>
</html>
