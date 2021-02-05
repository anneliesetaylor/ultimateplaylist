
<?php
	include 'database.php';
	$query = "SELECT * FROM 2010playlist";
	$ultimateplaylist = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>The Ultimate 2010s Playlist</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
  </head>


  <body>

		<div class="jumbotron">
			<h1 class="display-4 text-center">The Playlist</h1>
		</div>

    <div class="container">
      <div class="row">
        <div class="col-10 mx-auto">

            <p class="text-center">To see previous submissions, view the table.</p>
            <p class="text-center">To add a song to the list, use the button below.</p>

            <div class="col text-center pb-3">
              <a class="btn btn-outline-dark" href="enter_new_song.php" role="button">Add a song</a>
            </div>

            <table class="table table-dark table-striped table-bordered mx-auto table-responsive">
              <tr>
                <th scope="col">Song Title</th>
                <th scope="col">Artist</th>
                <th scope="col">Genre</th>
                <th scope="col">Submitted By</th>
                <th scope="col">Best to listen to when...</th>
              </tr>

              <!-- Begin PHP while-loop to display database query results
               with each row enclosed in TD tags.
               Each time it loops, it writes ONE ROW.
            	 This code depends on the first 5 lines at the start of this file.
            	 $socks comes from that code. NOTE all form controls must have a name= attribute.-->


               <?php while ($row = mysqli_fetch_assoc($ultimateplaylist)) :  ?>

                <tr>
                  <td><?php echo $row['songtitle']; ?></td>
                  <td><?php echo $row['artist']; ?></td>
                  <td><?php echo $row['genre']; ?></td>
                  <td><?php echo $row['submittedby']; ?></td>
                  <td><?php echo $row['explanation']; ?></td>
                </tr><!-- end of HTML table row -->

                <?php endwhile;  ?>
<!-- end the PHP while-loop...everything else on this page is normal HTML -->

              </table>

					<div class="col text-center pt-2 pb-4">
						<a class="btn btn-outline-dark" href="index.html" role="button">Read about the playlist here</a>
					</div>


        </div><!--end of col-->

      </div>

    </div>


  </body>



</html>
