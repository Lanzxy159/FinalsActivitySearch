<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">Return Index</a></h1>
    <h1>Searched: <?php ?>></h1>

    <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Years of Experience</th>
                <th>Job Title</th>
                <th>Specialization</th>
                <th>City</th>
                <th>Age</th>
            </tr>

            <?php $SearchApplication = SearchApplication(); ?>
            <?php foreach ($SearchApplication as $row) { ?>
            <tr>
                <td><?php echo $row['MedID']; ?></td>
                <td><?php echo $row['Firstname']; ?></td>
                <td><?php echo $row['Lastname']; ?></td>
                <td><?php echo $row['Years_experience']; ?></td>
                <td><?php echo $row['Job_title']; ?></td>
                <td><?php echo $row['Specialization']; ?></td>
                <td><?php echo $row['City']; ?></td>
                <td><?php echo $row['Age']; ?></td>
                <td>

                </td>
            </tr>
            <?php } ?>
        </table>

</body>
</html>