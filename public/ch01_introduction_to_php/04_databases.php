<?php echo '<a href="index.html">Index</a><br><br>'; ?>
<?php
$db = new mysqli("mysql-db", "root", "pass", "library");

// make sure the above credentials are correct for your environment
if ($db->connect_error) {
    die("Connect Error({$db->connect_errno}) {$db->connect_error}");
}

$sql = "SELECT * FROM books ORDER BY title";
$result = $db->query($sql);
?>
<html>

<head>
    <title>Databases</title>
    <style>
        table {
            border: 1px solid black;
            width: 60%;
            border-collapse: collapse;
        }

        table td {
            border: 1px solid black;
        }

        h3 {
            text-align: center;
        }

        tr:nth-child(2) {
            text-align: center;
        }

        td:nth-child(2),
        td:nth-child(3) {
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td colspan="3">
                <h3>These Books are currently available</h3>
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td>Year Published</td>
            <td>ISBN</td>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td>
                    <?php echo stripslashes($row['title']); ?>
                </td>
                <td>
                    <?php echo $row['pub_year']; ?>
                </td>
                <td>
                    <?php echo $row['ISBN'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>