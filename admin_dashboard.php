<?php
include 'db_connect.php';

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ProFute</title>
    <link href="styles/styles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
    <h2>Admin Dashboard - Manage Members</h2>
    <h3>Add New Member</h3>
    <form action="add_member.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Add Member</button>
    </form>

    <h3>Registered Members</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <form action="delete_member.php" method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No members registered.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
