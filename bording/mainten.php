<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance | Boarding House Management System</title>
    <link rel="stylesheet" href="mainten.css">
</head>
<body>

<div class="container">

    <aside class="sidebar">
        <h2 class="logo">BoardingHouse</h2>
        <ul class="menu">
            <li><a href="dash.php">Dashboard</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="tenant.php">Tenants</a>/li>
            <li><a href="payment.php">Payments</a></li>
            <li class="active"><a href="mainten.php">Maintenance</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li class="logout">Logout</li>
        </ul>
    </aside>

    <main class="main">

        <header class="topbar">
            <h1>Maintenance</h1>
            <div class="profile">Admin</div>
        </header>

        <section class="cards">
            <div class="card pending-card">
                <h3>Pending Requests</h3>
                <p>5</p>
            </div>
            <div class="card progress-card">
                <h3>In Progress</h3>
                <p>3</p>
            </div>
            <div class="card completed-card">
                <h3>Completed</h3>
                <p>4</p>
            </div>
        </section>

        <section class="table-section">
            <h2>Maintenance Requests</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tenant</th>
                        <th>Room</th>
                        <th>Issue</th>
                        <th>Date Reported</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Dela Cruz</td>
                        <td>Room 101</td>
                        <td>Leaking Faucet</td>
                        <td>Dec 01, 2025</td>
                        <td class="pending">Pending</td>
                    </tr>
                    <tr>
                        <td>Ash Nic</td>
                        <td>Room 111</td>
                        <td>Door Lock Issue</td>
                        <td>Dec 02, 2025</td>
                        <td class="pending">Pending</td>
                    </tr>
                    <tr>
                        <td>Mila King</td>
                        <td>Room 106</td>
                        <td>Clogged Drain</td>
                        <td>Dec 03, 2025</td>
                        <td class="pending">Pending</td>
                    </tr>
                    <tr>
                        <td>Sam Bell</td>
                        <td>Room 107</td>
                        <td>Window Repair</td>
                        <td>Dec 04, 2025</td>
                        <td class="pending">Pending</td>
                    </tr>
                    <tr>
                        <td>Mika Lim</td>
                        <td>Room 108</td>
                        <td>Broken Cabinet</td>
                        <td>Dec 05, 2025</td>
                        <td class="pending">Pending</td>
                    </tr>
                    <tr>
                        <td>James Smith</td>
                        <td>Room 103</td>
                        <td>Aircon Not Working</td>
                        <td>Dec 06, 2025</td>
                        <td class="progress">In Progress</td>
                    </tr>
                    <tr>
                        <td>Jane Dell</td>
                        <td>Room 104</td>
                        <td>Electrical Outlet Issue</td>
                        <td>Dec 07, 2025</td>
                        <td class="progress">In Progress</td>
                    </tr>
                    <tr>
                        <td>Arianne Vio</td>
                        <td>Room 112</td>
                        <td>Water Heater Repair</td>
                        <td>Dec 08, 2025</td>
                        <td class="progress">In Progress</td>
                    </tr>
                    <tr>
                        <td>Maria Santos</td>
                        <td>Room 102</td>
                        <td>Broken Light</td>
                        <td>Dec 09, 2025</td>
                        <td class="paid">Completed</td>
                    </tr>
                    <tr>
                        <td>Asher Montarde</td>
                        <td>Room 105</td>
                        <td>Ceiling Fan Fixed</td>
                        <td>Dec 10, 2025</td>
                        <td class="paid">Completed</td>
                    </tr>
                    <tr>
                        <td>Max Chio</td>
                        <td>Room 110</td>
                        <td>Paint Touch-up</td>
                        <td>Dec 11, 2025</td>
                        <td class="paid">Completed</td>
                    </tr>
                    <tr>
                        <td>Khael Medina</td>
                        <td>Room 115</td>
                        <td>Bathroom Door Repair</td>
                        <td>Dec 12, 2025</td>
                        <td class="paid">Completed</td>
                    </tr>

                </tbody>
            </table>
        </section>

    </main>
</div>

</body>
</html>
