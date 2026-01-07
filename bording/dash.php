<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boarding House Management System</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>

<div class="container">
    <aside class="sidebar">
        <h2 class="logo">BoardingHouse</h2>
        <ul class="menu">
            <li class="active"><a href="dash.php">Dashboard</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="tenant.php">Tenants</a></li>
            <li><a href="payment.php">Payments</a></li>
            <li><a href="mainten.php">Maintenance</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li class="logout">Logout</li>
        </ul>
    </aside>

    <main class="main">

        <header class="topbar">
            <h1>Dashboard</h1>
            <div class="profile">Admin</div>
        </header>

        <section class="cards">
            <div class="card">
                <h3>Total Rooms</h3>
                <p>20</p>
            </div>
            <div class="card">
                <h3>Occupied Rooms</h3>
                <p>15</p>
            </div>
            <div class="card">
                <h3>Monthly Income</h3>
                <p>₱45,000</p>
            </div>
            <div class="card">
                <h3>Pending Payments</h3>
                <p>3</p>
            </div>
        </section>

        <section class="table-section">
            <h2>Recent Payments</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tenant</th>
                        <th>Room</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Dela Cruz</td>
                        <td>Room 101</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr>
                    <tr>
                        <td>Maria Santos</td>
                        <td>Room 102</td>
                        <td>₱3,000</td>
                        <td class="pending">Pending</td>
                    </tr>
                     <tr>
                        <td>James Smith</td>
                        <td>Room 103</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr>
                     <tr>
                        <td>Jane Dell</td>
                        <td>Room 104</td>
                        <td>₱3,000</td>
                        <td class="pending">Pending</td>
                    </tr>
                     <tr>
                        <td>Asher Montarde</td>
                        <td>Room 105</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr>
                     <tr>
                        <td>Mila King</td>
                        <td>Room 106</td>
                        <td>₱3,000</td>
                        <td class="pending">Pending</td>
                    </tr>
                     <tr>
                        <td>Sam Bell</td>
                        <td>Room 107</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr>  
                    <tr>
                        <td>Mika lim</td>
                        <td>Room 108</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr>
                     <tr>
                        <td>Khaiah Arceta </td>
                        <td>Room 109</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr>
                     <tr>
                        <td>Max Chio</td>
                        <td>Room 110</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr>
                     <tr>
                        <td>Ash Nic</td>
                        <td>Room 111</td>
                        <td>₱3,000</td>
                        <td class="pending">Pending</td>
                    </tr>
                     <tr>
                        <td>Arianne Vio</td>
                        <td>Room 112</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr>
                     <tr>
                        <td>Mille Lyn</td>
                        <td>Room 113</td>
                        <td>₱3,000</td>
                        <td class="pending">Pending</td>
                    </tr>
                     <tr>
                        <td> Maria Queen</td>
                        <td>Room 114</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr> 
                    <tr>
                        <td>Khael Medina</td>
                        <td>Room 115</td>
                        <td>₱3,000</td>
                        <td class="paid">Paid</td>
                    </tr> 
                </tbody>
            </table>
        </section>
    </main>
</div>

</body>
</html>
