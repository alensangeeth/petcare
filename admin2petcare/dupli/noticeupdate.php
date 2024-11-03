<?php
include 'dbconnect.php';

$id = $_GET['id'];
$query = "SELECT * FROM addnotice WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$item = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tdate = $_POST['tdate'];
    $name = $_POST['name'];
    $pdate = $_POST['pdate'];
    $description = $_POST['description'];

    $query = "UPDATE addnotice SET tdate = ?, name = ?, pdate = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("isisi", $tdate ,$name, $pdate, $description, $id);
    $stmt->execute();

    header('Location: notice.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
</head>
<body>
    <h1>Update Item</h1>
    <form method="post">
<div class="container">
                <div class="top-bar">
                <h2>School Notices</h2>
                    <a href="addnotice.php" class="notice-button" style= "margin-left: 87%;"> Add Notices  </a>
                   
                </div>
               
                <div class="notice-board">
                    <div class="notice student-notice">
                        <div class="notice-header">
                        <label for="name">Today date:</label>
        <input type="text" id="name" name="tdate" value="<?php echo htmlspecialchars($item['tdate']); ?>" required>
        <br>
        <label for="text">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($item['name']); ?>" required>
        <br>               
             <label for="name">Program date:</label>
        <input type="text" id="name" name="pdate" value="<?php echo htmlspecialchars($item['tdate']); ?>" required>
        <br>
        <label for="description">description:</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($item['description']); ?></textarea>
        <br>
        <button type="submit">Update</button>
    </form>
   
                        
                    </div>
        
                </div>
            </div>
            </body>
</html>