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
    <div class="container">
        <div class="text-center">
            <?php
            $xml = simplexml_load_file('tours.xml');

            foreach ($xml->tour as $tour) {
                $name = $tour->name;
                $description = $tour->description;

                
                echo "<h2 class='tour-title header'>$name</h2>";
                echo "<p class='tour-details' style='display: none;'>$description</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
