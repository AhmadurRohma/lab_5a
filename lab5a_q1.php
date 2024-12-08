<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<body>
 <?php
 $name = "Ahmadur Rohma Norol Riskoh Bin Mokdin";
 $matricNumber = "AI220028";
 $course = "Bachelor of Computer Science(Software Engineering)";
 $yearOfStudy = "3nd Year";
 $address = "Lot 81 Batu 13 Kampung Melayu, 47000, Sungai Buloh, Selangor";
 ?>
 <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNumber"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
 </table>

</body>
</html>