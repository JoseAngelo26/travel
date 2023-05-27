<?php
  // Check if the tour ID parameter is set in the URL
  if (isset($_GET['id'])) {
    // Retrieve the tour title from the URL parameter
    $tourTitle = urldecode($_GET['id']);
    
    // Read the XML file
    $xml = simplexml_load_file('tours.xml');

    // Find the tour with the matching title
    $selectedTour = null;
    foreach ($xml->tour as $tour) {
      if ($tour->title == $tourTitle) {
        $selectedTour = $tour;
        break;
      }
    }

    // Display the tour details
    if ($selectedTour) {
      echo '<h2>' . $selectedTour->title . '</h2>';
      echo '<p>' . $selectedTour->description . '</p>';
    } else {
      echo 'Tour not found.';
    }
  } else {
    echo 'Invalid tour ID.';
  }
?>

