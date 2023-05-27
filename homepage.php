<!DOCTYPE html>
<html>
<head>
    <title>TravelDuque</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        $(".tour-title").click(function() {
          $(this).next(".tour-details").toggle();
        });
      });
    </script>
</head>
<body>
    <div class="navbar">
        <img src="images/name.png" class="logo">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="guide.html">Tour Guide</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
    <div class="duque">
       <h1>Welcome to Marinduque!</h1>
       <p>Find the best place for you!</p>
    </div>
    <?php
    
      $xml = simplexml_load_file('tours.xml');
    ?>
 
     <div class="container">

      
      <?php
      foreach ($xml->tour as $tour) {
        $place = (string)$tour->name;
        $description = (string)$tour->description;
        echo '
          <div class="tour ">
            <a href="#" class="tour-title ">' . $place . '</a>
            <div class="tour-details" style="display: none;">
              <p>' . $description . '</p>
            </div>
          </div>';
      }
      ?>

      
  
        </div>
      </body>
      </html>
    
</body>
</html>
