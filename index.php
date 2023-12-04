<?php
    include "includes/autoloader.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="Yudchits">
    <title>All users</title>
    <link rel="stylesheet" href="view/css/index.css" type="text/css">
</head>
<body>
<header>
    <div id="container">
        <h1>PHP CRUD</h1>
    </div>
    <hr>
</header>
<main>
    <section>
        <table id="users">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $userDao = new UserDao();
                $all_users = $userDao->getAll();

                if(!empty($all_users)) {
                    foreach ($all_users as $user) {
                        echo "<tr>" .
                                "<td>{$user->getId()}</td>" .
                                "<td>{$user->getEmail()}</td>" .
                                "<td>{$user->getPassword()}</td>" .
                                "<td>" .
                                    "<button class='btn'>Edit</button>" .
                                    "<button class='btn' onclick='{$userDao->deleteById($user->getId())}'>Delete</button>" .
                                "</td>" .
                            "</tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    </section>
</main>
</body>
</html>
