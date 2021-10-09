<?php
    include 'db.php';
    $sql = "SELECT * FROM `users`";
    $result = $conn->query($sql);
    $counter = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <style type="text/css">
		table,td,tr,th{
			border: 2px solid black;
			border-collapse: collapse;
			padding: 20px;
		}
	</style>
</head>
<body>
    <table>
        <tr>
			<th>#</th>
            <th>id</th>
            <th>name</th>
            <th>surname</th>
            <th>birthday</th>
            <th>registered_at</th>
        </tr>
        <?php while ($row=$result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo ++$counter ?></td>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['surname'] ?></td>
                <td><?php echo $row['birthday'] ?></td>
                <td><?php echo $row['registered_at'] ?></td>
                <td>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="deleted_id" value ="<?php echo $row["id"]?>"></input>
                        <button>
                            delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>