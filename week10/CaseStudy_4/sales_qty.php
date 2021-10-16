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

        tr:nth-child(1),
        tr:nth-child(3),
        tr:nth-child(5) {
            background-color: #d2b48c;
        }

        .tabulation-table {
            background-color: #F5F5DD;
            border: 2px solid black;
            text-align: center;
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

        #table1,
        #table2 {
            visibility: hidden;
            display: none;
        }

        #buttonHide1,
        #buttonHide2 {
            visibility: hidden;
            display: none;
        }

        #rightcolumn {
            min-height: 50vh;
            text-align: center;
        }

        h2 {
            text-align: left;
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
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="music.html">Music</a></li>
                    <li><a href="jobs.html">Jobs</a></li>
                    <br>
                    <li><a href="admin.php">C/Prices</a></li>
                    <li><a style="color: rgba(61, 30, 26, 1)" href="sales_qty.php">Report</a></li>
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

            $result = mysqli_query($conn, 'SELECT SUM(item_1) AS item_1_sum, SUM(item_2) AS item_2_sum, SUM(item_3) AS item_3_sum, SUM(item_4) AS item_4_sum, SUM(item_5) AS item_5_sum FROM MyOrders');
            $row = mysqli_fetch_assoc($result);
            $sum_qty_1 = $row['item_1_sum'];
            $sum_qty_2 = $row['item_2_sum'];
            $sum_qty_3 = $row['item_3_sum'];
            $sum_qty_4 = $row['item_4_sum'];
            $sum_qty_5 = $row['item_5_sum'];
            ?>

            <h2 style="font-weight: bold;">
                <input type="button" value="Show" id="buttonShow1">
                <input type="submit" value="Hide" id="buttonHide1">
                Total dollar sales by Products
            </h2>
            <table id="table1">
                <tr>
                    <td class="tabulation">Item</td>
                    <td class="tabulation">$</td>
                </tr>
                <tr>
                    <td>Endless Cup:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cafe au Lait (Single):</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cafe au Lait (Double):</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Iced Cappuccino (Single):</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Iced Cappuccino (Double):</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="total-price-text"><b>Total:</b></td>
                    <td class="tabulation">$0.00</td>
                </tr>
                <tr>
                    <td class="total-price-text"><b>Best Seller ($):</b></td>
                    <td class="tabulation">#0</td>
                </tr>
            </table>

            <h2 style="font-weight: bold;">
                <input type="button" value="Show" id="buttonShow2">
                <input type="submit" value="Hide" id="buttonHide2">
                Sales quantities by Product Categories
            </h2>
            <table id="table2">
                <tr>
                    <td class="tabulation">Item</td>
                    <td class="tabulation">QTY</td>
                </tr>
                <tr>
                    <td>Endless Cup:</td>
                    <td><?php echo $sum_qty_1; ?></td>
                </tr>
                <tr>
                    <td>Cafe au Lait (Single):</td>
                    <td><?php echo $sum_qty_2; ?></td>
                </tr>
                <tr>
                    <td>Cafe au Lait (Double):</td>
                    <td><?php echo $sum_qty_3; ?></td>
                </tr>
                <tr>
                    <td>Iced Cappuccino (Single):</td>
                    <td><?php echo $sum_qty_4; ?></td>
                </tr>
                <tr>
                    <td>Iced Cappuccino (Double):</td>
                    <td><?php echo $sum_qty_5; ?></td>
                </tr>
                <tr>
                    <td class="total-price-text"><b>Total:</b></td>
                    <td class="tabulation"><?php echo $sum_qty_1 + $sum_qty_2 + $sum_qty_3 + $sum_qty_4 + $sum_qty_5; ?></td>
                </tr>
                <tr>
                    <td class="total-price-text"><b>Best Seller (QTY):</b></td>
                    <td class="tabulation"></td>
                </tr>
            </table>
            <script type="text/javascript" src="sales_qty.js"></script>

        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Justin Tan Koon Han</i></small>
            <br><small><i><a href="mailto:justin@tan.com">justin@tankoonhan.com</a></i></small>
        </footer>
    </div>
</body>

</html>