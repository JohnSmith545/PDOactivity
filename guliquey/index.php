<?php require_once 'core/dbConfig.php'; ?>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <body>

    <?php 

    // 3
    // // Store query into variable
	// $query = "SELECT * FROM users";

    // // Prepare
	// $stmt = $pdo->prepare($query);

    // // Execute
	// if ($stmt->execute()) {
	// 	echo "<pre>";
	// 	print_r($stmt->fetchall());
	// 	echo "<pre>";
	// }


	// 4
    // // Store query into variable
	// $query = "SELECT * FROM users";

    // // Prepare
	// $stmt = $pdo->prepare($query);

    // // Execute
	// if ($stmt->execute()) {
	// 	echo "<pre>";
	// 	print_r($stmt->fetch());
	// 	echo "<pre>";
	// }


	// 5
    // // Store query into variable
	// $query = "INSERT INTO users (id, first_name, 
	// 	last_name, email, password_hash, role_id) 
	// 	VALUES (?,?,?,?,?,?)";

    // // Prepare
	// $stmt = $pdo->prepare($query);

    // // Execute with data parameter
	// $executeQuery = $stmt->execute(
	// 	[11,"Juch","Guliquey","juch.guliquey@student.edu", "hashed_password777", 1]
	// );

    // // Verification
	// if ($executeQuery) {
	// 	echo "Query successful!";
	// }
	// else {
	// 	echo "Query failed";
	// }




	// 6
    // // Store query into variable
	// $query = "DELETE FROM comments
	// 		  WHERE user_id = 1
	// 		  ";

    // // Prepare
	// $stmt = $pdo->prepare($query);

    // // Execute
	// $executeQuery = $stmt->execute();

    // // Verification
	// if ($executeQuery) {
	// 	echo "Deletion Successful!";
	// }
	// else {
	// 	echo "Deletion Failed";
	// }
    
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
