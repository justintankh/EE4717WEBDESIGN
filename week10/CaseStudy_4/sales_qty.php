<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
    <title>JavaJam Coffee House</title>
    <style>
        table {
            margin: auto;
            width: 600px;
            padding: 1rem 0;
        }

        td {
            padding: 10px;
        }

        tr:nth-of-type(odd) {
            background-color: #d2b48c;
        }

        .tabulation-table {
            background-color: #F5F5DD;
            border: 2px solid black;
        }

        .tabulation {
            /* display: inline; */
            /* position: relative; */
            border: 2px solid black;
            /* float: left; */
        }

        .total-price-text {
            text-align: right;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>JavaJam Coffee House</h1>
        </header>
        <div id="leftcolumn">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a style="color: rgba(61, 30, 26, 1)" href="menu.html">Menu</a></li>
                    <li><a href="music.html">Music</a></li>
                    <li><a href="jobs.html">Jobs</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </nav>
        </div>
        <div id="rightcolumn" class="content">

            <?php
            $servername = "localhost";
            $username = "f32ee";
            $password = "f32ee";
            $dbname = "f32ee";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            ?>

            <?php
            $sql = "SELECT SUM(item_1) FROM MyOrders";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $sum = $row['item_1'];
            echo $sum;
            ?>

            <h2 style="font-weight: bold;">Quantity Report</h2>
            <table>
                <tr>
                    <td>Endless Cup:</td>
                    <td>Quantity:<?php $sum ?></td>
                </tr>
                <tr>
                    <td>Cafe au Lait (Single):</td>
                    <td>Quantity:</td>
                </tr>
                <tr>
                    <td>Cafe au Lait (Double):</td>
                    <td>Quantity:</td>
                </tr>
                <tr>
                    <td>Iced Cappuccino (Single):</td>
                    <td>Quantity:</td>
                </tr>
                <tr>
                    <td>Iced Cappuccino (Double):</td>
                    <td>Quantity:</td>
                </tr>

            </table>
            <script type="text/javascript" src="menu.js"></script>

        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Justin Tan Koon Han</i></small>
            <br><small><i><a href="mailto:justin@tan.com">justin@tankoonhan.com</a></i></small>
        </footer>
    </div>
</body>

</html>