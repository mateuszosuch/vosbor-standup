<?php
$persons = array(
    "Artur T.",
    "Łukasz K.",
    "Michał P.",
    "Wojtek P.",
    "Paweł S.",
    "Maciek S.",
    "Eduardo A.",
    "Mateusz O.",
    "Wojciech K.",
    "Maciej K.",
    "Mateusz B.",
    "Marcin R.",
    "Roman B.",
    "Ewa Ch.",
    "Tomek C."
);

// Get the current date
$currentDate = new DateTime();

// Calculate the index for the next day
$dayIndex = ($currentDate->format('z') + 1) % count($persons);

// Get the person for the next day
$nextPerson = $persons[$dayIndex];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StandUp nomination</title>
    <script>
        function selectRandomPerson() {
            var persons = <?php echo json_encode($persons); ?>;

            var randomIndex = Math.floor(Math.random() * persons.length);
            var randomPerson = persons[randomIndex];

            document.getElementById('randomPerson').innerText = "Alternatively, today's standup can be run with: " + randomPerson + " (selected randomly)";
        }
    </script>
</head>
<body>

    <p>Today stand up is run by: <?php echo $nextPerson; ?></p>

    <p id="randomPerson"></p>

    <button onclick="selectRandomPerson()">Select Random Person</button>

</body>
</html>