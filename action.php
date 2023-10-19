<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["data"];

    // Check if the data is not empty
    if (!empty($data)) {
        // Define the CSV file
        $csvFile = "database.csv";

        // Open the CSV file in append mode
        $file = fopen($csvFile, "a");

        // Escape any double quotes in the data
        $data = str_replace("\"", "\"\"", $data);

        // Write the data to the CSV file
        fputcsv($file, [$data]);

        // Close the file
        fclose($file);

        echo "Data has been successfully stored in the database.";
    } else {
        echo "Please enter some data before submitting.";
    }
}
?>
