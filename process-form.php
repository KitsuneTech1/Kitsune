<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cpu = htmlspecialchars($_POST['cpu']);
    $gpu = htmlspecialchars($_POST['gpu']);
    $motherboard = htmlspecialchars($_POST['motherboard']);
    $ram = htmlspecialchars($_POST['ram']);
    $storage = htmlspecialchars($_POST['storage']);
    $psu = htmlspecialchars($_POST['psu']);
    $case = htmlspecialchars($_POST['case']);
    $cooling = htmlspecialchars($_POST['cooling']);
    
    // Process the data (e.g., save to a database, send an email, etc.)
    // For demonstration, let's just display the data
    echo "<h1>Your PC Build</h1>";
    echo "<p>CPU: $cpu</p>";
    echo "<p>GPU: $gpu</p>";
    echo "<p>Motherboard: $motherboard</p>";
    echo "<p>RAM: $ram</p>";
    echo "<p>Storage: $storage</p>";
    echo "<p>PSU: $psu</p>";
    echo "<p>Case: $case</p>";
    echo "<p>Cooling: $cooling</p>";

    // Handling the Form Submission with PHP 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the array of components
        $components = $_POST['components'];
    
        // Process each component
        foreach ($components as $component) {
            $component = htmlspecialchars($component);
            // Example: save to database, display, etc.
            echo "<p>Component: $component</p>";
        }
    }

?>
