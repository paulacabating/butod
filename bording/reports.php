<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports | Boarding House Management System</title>
    <link rel="stylesheet" href="reports.css">
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
            <li class="active"><a href="reports.php">Reports</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li class="logout">Logout</li>
        </ul>
    </aside>

    <main class="main">

        <header class="topbar">
            <h1>Reports</h1>
            <div class="profile">Admin</div>
        </header>

        <section class="cards">
            <div class="card">
                <h3>Total Income</h3>
                <p>₱45,000</p>
            </div>
            <div class="card">
                <h3>Paid Payments</h3>
                <p>12</p>
            </div>
            <div class="card">
                <h3>Pending Payments</h3>
                <p>3</p>
            </div>
            <div class="card">
                <h3>Maintenance Requests</h3>
                <p>12</p>
            </div>
        </section>

        <section class="table-section">
            <h2>Monthly Income Report</h2>
            <table>
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Total Payments</th>
                        <th>Total Income</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>January</td>
                        <td>15</td>
                        <td>₱45,000</td>
                        <td class="paid">Completed</td>
                    </tr>
                    <tr>
                        <td>February</td>
                        <td>14</td>
                        <td>₱42,000</td>
                        <td class="paid">Completed</td>
                    </tr>
                    <tr>
                        <td>March</td>
                        <td>12</td>
                        <td>₱36,000</td>
                        <td class="pending">Pending</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="table-section" style="margin-top: 30px;">
            <h2>Maintenance Summary</h2>
            <table>
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Total Requests</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pending">Pending</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td class="progress">In Progress</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td class="paid">Completed</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>
</div>

</body>
</html>
