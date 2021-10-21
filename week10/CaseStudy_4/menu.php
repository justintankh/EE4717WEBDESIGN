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
        tr:nth-child(3) {
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
                    <li><a style="color: rgba(61, 30, 26, 1)" href="menu.php">Menu</a></li>
                    <li><a href="music.html">Music</a></li>
                    <li><a href="jobs.html">Jobs</a></li>
                    <br>
                    <li><a href="admin.php">C/Prices</a></li>
                    <li><a href="sales_qty.php">Report</a></li>
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
            $sql = "SELECT id, item, price FROM MyData";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row["id"] == 1) {
                        $price_1 = $row["price"];
                    }
                    if ($row["id"] == 2) {
                        $price_2 = $row["price"];
                    }
                    if ($row["id"] == 3) {
                        $price_3 = $row["price"];
                    }
                    if ($row["id"] == 4) {
                        $price_4 = $row["price"];
                    }
                    if ($row["id"] == 5) {
                        $price_5 = $row["price"];
                    }                  // $price_1 = $row["price"];
                }
            } else {
                echo "0 results id=", $row["id"];
            }
            ?>

            <h2 style="font-weight: bold;">Coffee at JavaJam</h2>
            <table>
                <tr>

                    <td id="text-center"><b>Just Java </b></td>
                    <td>Regular house blend, decaffeinated coffee, or flavor of the day<br><b id="menu-1-price">Endless Cup $<?php echo $price_1 ?></b></td>
                    <td class=" tabulation-table">
                        <label for="first-menu-qty">Qty:</label>
                        <input type="number" id="first-menu-qty" , class="menu-qty">
                    </td>
                    <td class="tabulation-table" , id="first-menu-tol">
                        <div>
                            $0.00
                        </div>
                    </td>
                </tr>

                <tr>
                    <?php
                    $sql = "SELECT id, item, price FROM MyData WHERE id=2";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $price_2 = $row["price"];
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                    <td id="text-center"><b>Cafe au Lait </b></td>
                    <td>House blended coffee infused into a smooth, steamed milk<br>
                        <input type="radio" , name="second-menu-choice" , value="single" , checked="checked">
                        <label for="single-capp"><strong id="menu-2-price-1">Single $<?php echo $price_2 ?> </strong></label>
                        <input type="radio" , name="second-menu-choice" , value="double">
                        <label for="double-capp"><strong id="menu-2-price-2">Double $<?php echo $price_3 ?></strong></label>
                    </td>
                    <td class="tabulation-table">
                        <div>
                            <label for="second-menu-qty">Qty:</label>
                            <input type="number" id="second-menu-qty" , class="menu-qty">
                        </div>
                    </td>
                    <td class="tabulation-table" id="second-menu-tol">
                        <div>
                            $0.00
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="text-center"><b>Iced Cappuccino</b></td>
                    <td>Sweetened Espresso Blended with icy-cold milk and served in a chilled glass<br><br>
                        <input type="radio" , name="third-menu-choice" , value="single" , checked="checked">
                        <label for="single-capp"><strong id="menu-3-price-1">Single $<?php echo $price_4 ?> </strong></label>
                        <input type="radio" , name="third-menu-choice" , value="double">
                        <label for="double-capp"><strong id="menu-3-price-2">Double $<?php echo $price_5 ?></strong></label>
                    </td>
                    <td class="tabulation-table">
                        <div>
                            <label for="third-menu-qty">Qty:</label>
                            <input type="number" id="third-menu-qty" , class="menu-qty">
                        </div>
                    </td>
                    <td class="tabulation-table" id='third-menu-tol'>
                        <div>
                            $0.00
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div class="total-price-text">
                            Total Price
                        </div>
                    </td>
                    <td colspan="2" class="tabulation-table" id="total-price">
                        <div class="">
                            $0.00
                        </div>
                    </td>
                </tr>
                <form action="menu.php" method="POST">
                    <tr>
                        <td></td>
                        <td></td>
                        <input type="hidden" name="item1" id="hidden-item-1" value='0'>
                        <input type="hidden" name="item2" id="hidden-item-2" value='0'>
                        <input type="hidden" name="item3" id="hidden-item-3" value='0'>
                        <input type="hidden" name="item4" id="hidden-item-4" value='0'>
                        <input type="hidden" name="item5" id="hidden-item-5" value='0'>
                        <td class="clear-button" id="clear-button">
                            <input type="button" value="Clear" onclick="clearPrice()">
                        </td>
                        <td class="submit-button" id="submit-button">
                            <input type="submit" name="submit" value="Submit" onClick="orderSubmitted()">
                        </td>
                    </tr>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $item1 = $_POST['item1'];
                    $item2 = $_POST['item2'];
                    $item3 = $_POST['item3'];
                    $item4 = $_POST['item4'];
                    $item5 = $_POST['item5'];

                    $sql2 = "INSERT INTO MyOrders SET 
                    item_1 = '$item1', 
                    item_2 = '$item2', 
                    item_3 = '$item3', 
                    item_4 = '$item4', 
                    item_5 = '$item5' ";

                    $res2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                }
                ?>
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