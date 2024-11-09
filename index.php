<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
</head>
<body>
    <h1> MEDICAL JOB APPLICATION</h1>
    <form action="core/handleForms.php" method="POST">
            <p>
                <label for="First Name">First Name</label>
                <input type="text" name="Firstname" required>
            </p>
            <p>
                <label for="Last Name">Last Name</label>
                <input type="text" name="Lastname" required>
            </p>
            <p>
                <label for="">Years of Experience</label>
                <input type="text" name="Years_experience" required>
            </p>
            <p>
                <label for="">Job Title</label>
                <input type="text" name="Job_title" required>
            </p>
            <p>
                <label for="">Specialization </label>
                <input type="text" name="Specialization" required>
            </p>
            <label for="">City</label>
                <input type="text" name="City" required>
            </p>
            <p>
                <label for="">Age</label>
                <input type="text" name="Age" required>
            </p>

            <input type="submit" name="SubmitNew" value="Submit">
        </form>

        <h1></h1>
        <form action="core/handleForms.php" method="POST">
            <p>
                <label for="Search">Search</label>
                <input type="text" name="Search" required>
            </p>
            <input type="submit" name="SearchApplication" value="Search">
        </form>

        <h1></h1>
        <h1></h1>
        <h1></h1>
        <h1></h1>
        <h1></h1>
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
            <?php $AllApplications = AllApplications($pdo); ?>
            <?php foreach ($AllApplications as $row) { ?>
            <tr>
                <td><?php echo $row['MedID']; ?></td>
                <td><?php echo $row['Firstname']; ?></td>
                <td><?php echo $row['Lastname']; ?></td>
                <td><?php echo $row['Years_experience']; ?></td>
                <td><?php echo $row['Job_title']; ?></td>
                <td><?php echo $row['Specialization']; ?></td>
                <td><?php echo $row['City']; ?></td>
                <td><?php echo $row['Age']; ?></td>

                </td>
            </tr>
            <?php } ?>
        </table>



</body>
</html>