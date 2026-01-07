<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Boarding House Management System</title>
     <link rel="stylesheet" href="settings.css">
</head>
<body>

<div class="container">

    <aside class="sidebar">
        <h2 class="logo">BoardingHouse</h2>
        <ul class="menu">
            <li><a href="dash.php">Dashboard</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="tenant.php">Tenants</a></li>
            <li><a href="payment.php">Payments</a></li>
            <li><a href="mainten.php">Maintenance</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li class="active"><a href="settings.php">Settings</a></li>
            <li class="logout">Logout</li>
        </ul>
    </aside>

    <main class="main">

        <header class="topbar">
            <h1>Settings</h1>
            <div class="profile">Admin</div>
        </header>

        <section class="cards">

            <div class="card">
                <h3>Profile Settings</h3>
                <form>
                    <label>Admin Name</label>
                    <input type="text" class="input" value="Admin">

                    <label>Email</label>
                    <input type="email" class="input" value="admin@email.com">

                    <button class="btn">Save Profile</button>
                </form>
            </div>

            <div class="card">
                <h3>Change Password</h3>
                <form>
                    <label>Current Password</label>
                    <input type="password" class="input">

                    <label>New Password</label>
                    <input type="password" class="input">

                    <label>Confirm Password</label>
                    <input type="password" class="input">

                    <button class="btn">Update Password</button>
                </form>
            </div>

            <div class="card">
                <h3>System Settings</h3>
                <form>
                    <label>Monthly Rent (₱)</label>
                    <input type="number" class="input" value="3000">

                    <label>Payment Due Day</label>
                    <input type="number" class="input" value="5">

                    <button class="btn">Save System Settings</button>
                </form>
            </div>

        </section>

    </main>
</div>

</body>
</html>
