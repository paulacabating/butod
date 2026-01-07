<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - Boarding House Management System</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>

<div class="container">
    <aside class="sidebar">
        <h2 class="logo">BoardingHouse</h2>
        <ul class="menu">
            <li><a href="dash.php">Dashboard</a></li>
            <li class="active"><a href="room.php">Rooms</a></li>
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
            <h1>Rooms</h1>
            <div class="profile">Admin</div>
        </header>

        <div class="add-room-container">
            <button class="add-room-btn" onclick="openModal()">+ Add Room</button>
        </div>

        <section class="table-section">
            <h2>All Rooms</h2>
            <table>
                <thead>
                    <tr>
                        <th>Room Number</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>101</td><td>Single</td><td class="occupied">Occupied</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>102</td><td>Single</td><td class="occupied">Occupied</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>103</td><td>Double</td><td class="occupied">Occupied</td><td>₱5,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>104</td><td>Single</td><td class="occupied">Occupied</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>105</td><td>Double</td><td class="occupied">Occupied</td><td>₱5,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>106</td><td>Single</td><td class="occupied">Occupied</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>107</td><td>Double</td><td class="occupied">Occupied</td><td>₱5,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>108</td><td>Single</td><td class="occupied">Occupied</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>109</td><td>Double</td><td class="occupied">Occupied</td><td>₱5,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>110</td><td>Single</td><td class="occupied">Occupied</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>111</td><td>Double</td><td class="occupied">Occupied</td><td>₱5,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>112</td><td>Single</td><td class="occupied">Occupied</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>113</td><td>Double</td><td class="occupied">Occupied</td><td>₱5,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>114</td><td>Single</td><td class="occupied">Occupied</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>115</td><td>Double</td><td class="occupied">Occupied</td><td>₱5,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>116</td><td>Single</td><td class="available">Available</td><td>₱3,000</td><td><button class="edit-btn">Edit</button></td></tr>
                    <tr><td>117</td><td>Double</td><td class="available">Available</td><td>₱5,000</td><td><button class="edit-btn">Edit</button></td></tr>
                </tbody>
            </table>
        </section>
    </main>
</div>

<div id="roomModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Add New Room</h2>
        <form>
            <label>Room Number</label>
            <input type="text" placeholder="Enter room number" required>
            <label>Type</label>
            <select required>
                <option value="">Select type</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
            </select>
            <label>Status</label>
            <select required>
                <option value="">Select status</option>
                <option value="Available">Available</option>
                <option value="Occupied">Occupied</option>
            </select>
            <label>Price</label>
            <input type="number" placeholder="Enter price" required>
            <button type="submit">Add Room</button>
        </form>
    </div>
</div>

<script>
function openModal() {
    document.getElementById('roomModal').style.display = 'block';
}
function closeModal() {
    document.getElementById('roomModal').style.display = 'none';
}
window.onclick = function(event) {
    if (event.target == document.getElementById('roomModal')) {
        closeModal();
    }
}
</script>

</body>
</html>
