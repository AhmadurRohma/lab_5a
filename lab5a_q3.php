<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    // Function to generate a multiplication table
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Call the function with a specific multiplier (e.g., 2)
    $multiplier = 2;
    $tableData = multiplication($multiplier);
    ?>

    <!-- HTML Table -->
    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
        foreach ($tableData as $row) {
            echo "<tr>";
            echo "<td>{$row['no']}</td>";
            echo "<td>{$row['multiplier']}</td>";
            echo "<td>{$row['answer']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
