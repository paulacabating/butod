<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Management</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>

<div class="container">
    <aside class="sidebar">
        <h2 class="logo">BoardingHouse</h2>
        <ul class="menu">
            <li><a href="dash.php">Dashboard</a></li>
            <li><a href="room.php">Rooms</a><li>
            <li class="active"><a href="tenant.php">Tenants</a></li>
            <li><a href="payment.php">Payments<//a><li>
            <li><a href="mainten.php">Maintenance</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li class="logout">Logout</li>
        </ul>
    </aside>
    <main class="main">
        <header class="topbar">
            <h1>Tenants</h1>
            <div class="profile">Admin</div>
        </header>

        <section class="table-section">
            <h2>Tenant List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tenant Name</th>
                        <th>Room</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Dela Cruz</td>
                        <td>101</td>
                        <td>09171234567</td>
                        <td>juan@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                    <tr>
                        <td>Maria Santos</td>
                        <td>102</td>
                        <td>09172345678</td>
                        <td>maria@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                    <tr>
                        <td>James Smith</td>
                        <td>103</td>
                        <td>09173456789</td>
                        <td>james@example.com</td>
                        <td class="inactive-tenant">Inactive</td>
                    </tr>
                    <tr>
                        <td>Jane Dell</td>
                        <td>104</td>
                        <td>09174567890</td>
                        <td>jane@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                    <tr>
                        <td>Asher Montarde</td>
                        <td>105</td>
                        <td>09175678901</td>
                        <td>asher@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                    <tr>
                        <td>Mila King</td>
                        <td>106</td>
                        <td>09176789012</td>
                        <td>mila@example.com</td>
                        <td class="inactive-tenant">Inactive</td>
                    </tr>
                    <tr>
                        <td>Sam Bell</td>
                        <td>107</td>
                        <td>09177890123</td>
                        <td>sam@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                    <tr>
                        <td>Mika Lim</td>
                        <td>108</td>
                        <td>09178901234</td>
                        <td>mika@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                    <tr>
                        <td>Khaiah Arceta</td>
                        <td>109</td>
                        <td>09179012345</td>
                        <td>khaiah@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                    <tr>
                        <td>Max Chio</td>
                        <td>110</td>
                        <td>09170123456</td>
                        <td>max@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                     <tr>
                        <td>Ash Nic</td>
                        <td>Room 111</td>
                        <td>09170123457</td>
                        <td>ash@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                     <tr>
                        <td>Arianne Vio</td>
                        <td>Room 112</td>
                        <td>09170123458</td>
                        <td>arianne@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr>
                     <tr>
                        <td>Mille Lyn</td>
                        <td>Room 113</td>
                        <td>09176789019</td>
                        <td>mille@example.com</td>
                        <td class="inactive-tenant">Inactive</td>
                    </tr>
                     <tr>
                        <td> Maria Queen</td>
                        <td>Room 114</td>
                        <td>09170123450</td>
                        <td>maria@example.com</td>
                        <td class="active-tenant">Active</td>
                    </tr> 
                    <tr>
                        <td>Khael Medina</td>
                        <td>Room 115</td>
                        <td>09176789023</td>
                        <td>khael@example.com</td>
                        <td class="inactive-tenant">Inactive</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</div>

</body>
</html>
