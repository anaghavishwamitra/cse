 <?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>View Requests</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Help Requests</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Category</th>
    <th>Description</th>
    <th>Date</th>
  </tr>

<?php
$sql = "SELECT * FROM requests ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['category']."</td>
            <td>".$row['description']."</td>
            <td>".$row['created_at']."</td>
          </tr>";
  }
} else {
  echo "<tr><td colspan='5'>No requests yet.</td></tr>";
}
$conn->close();
?>
</table>
</body>
</html>
