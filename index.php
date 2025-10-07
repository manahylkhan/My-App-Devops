<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>My To-Do List</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f9f9f9; }
        h2 { color: #444; }
        input, button { padding: 8px; }
        table { border-collapse: collapse; width: 40%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    </style>
</head>
<body>

<h2>📝 My To-Do List</h2>

<form action="add.php" method="POST">
    <input type="text" name="task" placeholder="Enter new task" required>
    <button type="submit">Add Task</button>
</form>

<table>
<tr><th>Task</th><th>Action</th></tr>

<?php
$sql = "SELECT * FROM tasks ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row['task']) . "</td>
              <td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>No tasks yet!</td></tr>";
}
?>
</table>

</body>
</html>
