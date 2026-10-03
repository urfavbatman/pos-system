<!DOCTYPE html>
<html>
<head>
    <title>Users - POS System</title>
</head>
<body>

    <nav>

    <a href="<?= site_url('/') ?>">Home</a>
<a href="<?= site_url('/about') ?>">About</a>
<a href="<?= site_url('/customers') ?>">Customers</a>
<a href="<?= site_url('/users') ?>">Users</a>

    </nav>

    <h1>User Accounts</h1>

    <?php foreach ($users as $user): ?>
        <div>
            <h3><?= esc($user['full_name']) ?></h3>
            <p>Username: <?= esc($user['username']) ?></p>
            <p>Role: <?= esc($user['role']) ?></p>
        </div>
        <hr>
    <?php endforeach; ?>

</body>
</html>