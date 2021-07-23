<?php



?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersdata as $user) : ?>
                <tr>
                    <td scope="row"><?= $user->id; ?></td>
                    <td><?= $user->username; ?></td>
                    <td><?= $user->nama; ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->created_at ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>