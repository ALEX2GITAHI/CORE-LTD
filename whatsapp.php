<?php

$numbers = [
    "254792570000",
    "254792580000",
    "254757130130",
    "254720525132",
    "254742363507"
];

$counterFile = __DIR__ . "/whatsapp_counter.txt";

// Create the counter file if it doesn't exist
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Open and lock the file
$fp = fopen($counterFile, "c+");

if (!$fp) {
    http_response_code(500);
    exit("Unable to open counter file.");
}

flock($fp, LOCK_EX);

// Read current counter
rewind($fp);
$counter = (int)trim(stream_get_contents($fp));

// Get the next phone number
$phone = $numbers[$counter % count($numbers)];

// Increment counter
$counter++;

// Save updated counter
rewind($fp);
ftruncate($fp, 0);
fwrite($fp, $counter);

fflush($fp);
flock($fp, LOCK_UN);
fclose($fp);

// Return the selected phone number
echo $phone;
