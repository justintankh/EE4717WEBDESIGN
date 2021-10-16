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
            $sql = "SELECT id, item, price FROM MyData WHERE id=1";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $price_1 = $row["price"];
                }
            } else {
                echo "0 results";
            }
            ?>

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

            <?php
            $sql = "SELECT id, item, price FROM MyData WHERE id=3";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $price_3 = $row["price"];
                }
            } else {
                echo "0 results";
            }
            ?>

            <?php
            $sql = "SELECT id, item, price FROM MyData WHERE id=4";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $price_4 = $row["price"];
                }
            } else {
                echo "0 results";
            }
            ?>

            <?php
            $sql = "SELECT id, item, price FROM MyData WHERE id=5";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $price_5 = $row["price"];
                }
            } else {
                echo "0 results";
            }
            ?>

            <h2 style="font-weight: bold;">Coffee at JavaJam</h2>
            <table>
                <tr>

                    <td id="text-center"><b>Just Java </b></td>
                    <td>Regular house blend, decaffeinated coffee, or flavor of the day<br><b>Endless Cup $<?php echo $price_1 ?></b></td>
                    <td class="tabulation-table">
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
                        <label for="single-capp"><strong>Single $<?php echo $price_2 ?> </strong></label>
                        <input type="radio" , name="second-menu-choice" , value="double">
                        <label for="double-capp"><strong>Double $<?php echo $price_3 ?></strong></label>
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
                        <label for="single-capp"><strong>Single $<?php echo $price_4 ?> </strong></label>
                        <input type="radio" , name="third-menu-choice" , value="double">
                        <label for="double-capp"><strong>Double $<?php echo $price_5 ?></strong></label>
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
            </table>
            <script type="text/javascript" src="menu.js"></script>

        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Justin Tan Koon Han</i></small>
            <br><small><i><a href="mailto:justin@tan.com">justin@tankoonhan.com</a></i></small>
        </footer>
    </div>
</body>

</html>s