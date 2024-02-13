<?php

$employees = [
    'ID 111' => [
        'firstName' => 'Jonas',
        'lastName' => 'Jonaitis',
        'hours' => [
            '2023-12-12' => 100,
            '2023-11-12' => 50,
            '2023-10-12' => 15,
        ],
    ],
    'ID 112' => [
        'firstName' => 'Petras',
        'lastName' => 'Petraitis',
        'hours' => [
            '2023-12-12' => 80,
            '2023-11-12' => 40,
            '2023-10-12' => 20,
        ],
    ],
    'ID 113' => [
        'firstName' => 'Antanas',
        'lastName' => 'Antanaitis',
        'hours' => [
            '2023-12-12' => 120,
            '2023-11-12' => 60,
            '2023-10-12' => 25,
        ],
    ],
    'ID 114' => [
        'firstName' => 'Elena',
        'lastName' => 'Elenaitė',
        'hours' => [
            '2023-12-12' => 90,
            '2023-11-12' => 45,
            '2023-10-12' => 18,
        ],
    ],
    'ID 115' => [
        'firstName' => 'Marius',
        'lastName' => 'Mariūnas',
        'hours' => [
            '2023-12-12' => 110,
            '2023-11-12' => 55,
            '2023-10-12' => 22,
        ],
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working Hours</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>2023-12-12</th>
                <th>2023-11-12</th>
                <th>2023-10-12</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $id => $employee) : ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $employee['firstName'] ?></td>
                    <td><?= $employee['lastName'] ?></td>
                    <td><?= $employee['hours']['2023-12-12'] ?></td>
                    <td><?= $employee['hours']['2023-11-12'] ?></td>
                    <td><?= $employee['hours']['2023-10-12'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>