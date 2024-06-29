<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
    overflow: hidden;
        }

        .navbar {
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1d5713;
            padding: -5px;
            color: white;
            position: sticky;
            top: 0;
        }

        .navbar h2 {
            margin-left: 40px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .navbar a:hover {
            color: #9e9e9e;
        }

        .content-container {
            display: flex;
            flex: 1;
    overflow-y: scroll;
           
        }

        .sidebar {
            width: 200px;
            background-color: #2d831d;
            padding-top: 20px;
            width: 200px;
    position: sticky;
    top: 0;
    height: 100vh;
    overflow-y: auto;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            transition: background-color 0.3s;
            
        }

        .sidebar a:hover {
            background-color: #50b83c;
        }

        .content {
            flex: 1;
            /* Membuat content mengambil sisa ruang yang tersedia */
            padding: 20px;
            height: 900px;
        }

        .footer {
            background-color: #1d5713;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer a{
             color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <title>Halo admin</title>
</head>

<body>

    <div class="container">

        <div class="navbar">
            <h2>Manage User</h2>
            <a href="#">Logout</a>
        </div>

        <div class="content-container">
            <div class="sidebar">
                <a href="#">Manage User</a>
                <a href="manage kategori.html">Manage Kategori</a>
                <a href="#">Manage Artikel</a>
                <a href="#">Manage Komentar</a>
                <a href="#">Manage Chat</a>
            </div>
            <div class="content">
                <div class="table">
                    <h1>Tabel User</h1>
                </div>
            <div class="table_section">
                <table border="1">
                        <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th colspan="3">Action</th>
                        </tr>
                        <?php
                        include "koneksi.php"; // Include your database connection file
                        $query = "SELECT * FROM tb_user"; // SQL query to fetch data from database
                        $hasil = mysqli_query($conn, $query); // Execute the query
                        $no = 1;
                        $jum = mysqli_num_rows($hasil); // Count the number of rows returned
                        
                        
                        
                        // Loop through each row of data
                        while ($data = mysqli_fetch_array($hasil)) {
                        ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['password']; ?></td>
                                    <td><a href="update.php?password=<?php echo $data['password']; ?>">Update</a></td>
                                    <td><a href="delete.php?password=<?php echo $data['password']; ?>" onclick="return confirm('apakah anda yakin?')">Delete</a></td>
                                </tr>
                        <?php
                        }
                        ?>
                        
                </table>
                
            </div>
        </div>
    </div>

</body>

</html>
