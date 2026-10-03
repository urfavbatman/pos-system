<!DOCTYPE html>
<html>
<head>
    <title>Customers - POS System</title>
</head>
<body>

    <nav>

    <a href="<?= site_url('/') ?>">Home</a>
<a href="<?= site_url('/about') ?>">About</a>
<a href="<?= site_url('/customers') ?>">Customers</a>
<a href="<?= site_url('/users') ?>">Users</a>


    </nav>

    <h1>Customer Accounts</h1>

    <?php foreach ($customers as $customer): ?>
        <div>
            <h3><?= esc($customer['full_name']) ?></h3>
            <p>Email: <?= esc($customer['email']) ?></p>
            <p>Phone: <?= esc($customer['phone']) ?></p>
        </div>
        <hr>
    <?php endforeach; ?>

</body>
</html>