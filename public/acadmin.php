<?
session_start();
require '../core/connect.php';
require '../core/func.php';

if (!get_admin()) {
    header('location:aclogin.php');
}

if (isset($_GET['do']) && $_GET['do'] == 'exit') {
    
    unset($_SESSION['admin']);
    header('location:aclogin.php');
}

$sql = "select * from users order by created_at desc";
$res = $pdo->prepare($sql);
$res->execute();
$users = $res->fetchAll();




if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "delete from users where id = ?";
    $res = $pdo->prepare($sql);
    $res->execute([$id]);
    header('location: /acadmin.php',1,301);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin3</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <main class="container-fluid mt-5">
        <div class="box d-flex mb-5">
            <h4 class="me-5"><?=$_SESSION['admin']?></h4>
            <a class="btn btn-success" href="?do=exit">выход</a>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID клиента</th>
                    <th scope="col">дата</th>
                    <th scope="col">номер</th>
                    <th scope="col">имя</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                <? foreach ($users as $user) { ?>
                    <tr>
                        <th><?= $user['id'] ?></th>
                        <td><?= $user['created_at'] ?></td>
                        <td><a href="tel:<?= $user['phone'] ?>"><?= h($user['phone']) ?></a></td>
                        <td><?= h($user['name']) ?></td>
                        <td><a class="btn btn-danger" href="?id=<?= $user['id'] ?>"> &#x2715</a></td>
                    </tr>
                <? } ?>

            </tbody>
        </table>
    </main>

    <script src="js/default.js"></script>
</body>

</html>