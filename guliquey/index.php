<?php require_once 'core/dbConfig.php'; ?>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <body>

    <?php 
    
    // // 7
    // // Store query into variable
    // $query = "UPDATE users SET Last_name = ? WHERE id = 2";

    // // Prepare
    // $stmt = $pdo->prepare($query);

    // // Execute with data parameter
    // $executeQuery = $stmt->execute(
    //     ["Doe"]
    // );

    // // Verification
    // if ($executeQuery) {
    //     echo "Update Successful";
    // }
    // else {
    //     echo "Update Failed";
    // }

    // 8
    // Store query into variable
    $query = "SELECT 
                first_name, 
                last_name 
              FROM users";

    // Prepare
    $stmt = $pdo->prepare($query);

    // Execute with data parameter
    $executeQuery = $stmt->execute();

    // Verification
    if ($executeQuery) {
        $students = $stmt->fetchAll();
    }
    else {
        echo "Query Failed";
    }

    ?>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php foreach ($students as $row) { ?> 
            <tr>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
            </tr>
        <?php } ?>

    </table>

    </body>

</html>