<?php
// Array of names (you can replace this with your data source)
$names = array(
    "Anna", "Brittany", "Cinderella", "Diana",
    "Eva", "Fiona", "Gunda", "Hege", "Inga", "Johanna",
    "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda"
);

// Get the parameter from the AJAX request
$q = $_GET["q"];

// Prepare response content type
header("Content-type: text/plain");

// PHP logic to filter and return suggestions
$response = "";
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($names as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($response === "") {
                $response = $name;
            } else {
                $response .= ", $name";
            }
        }
    }
}

// Output the response
echo $response === "" ? "no suggestion" : $response;
?>