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

        tr:nth-of-type(even) {
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

        .checkbox-column,
        .subit-button {
            background-color: #F5F5DD;
        }

        .clear-button {
            background-color: #F5F5DD;
            float: right;
        }

        input[type=checkbox] {
            transform: scale(1.5);
            float: right;
        }

        input[type=number] {
            width: 40px;
            visibility: hidden;
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
            <h2 style="font-weight: bold;">Coffee at JavaJam</h2>
            <table>
                <tr>
                    <td></td>
                    <td class="tabulation">Item</td>
                    <td class="tabulation">Description/Price</td>
                    <td class="tabulation">New Price</td>
                </tr>
                <tr>
                    <td class="checkbox-column"><input type="checkbox" id="first-menu-change" name="first-menu-change" value="check1">
                    </td>
                    <td id="text-center"><b>Just Java </b></td>
                    <td>Regular house blend, decaffeinated coffee, or flavor of the day<br><b id="menu-1-price"></b>
                    </td>
                    <td class="tabulation-table" id="first-menu-priceChangeBox">
                        <input type="number" id="first-menu-priceChange" class="menu-qty">
                    </td>
                </tr>
                <tr>
                    <td class="checkbox-column"><input type="checkbox" id="second-menu-change" name="first-menu-change" value="check2">
                    </td>
                    <td id="text-center"><b>Cafe au Lait </b></td>
                    <td>House blended coffee infused into a smooth, steamed milk<br>
                        <input type="radio" , name="second-menu-choice" , value="single" , checked="checked">
                        <label for="single-capp"><strong id="menu-2-price-1"></strong></label>
                        <input type="radio" , name="second-menu-choice" , value="double">
                        <label for="double-capp"><strong id="menu-2-price-2"></strong></label>
                    </td>
                    <td class="tabulation-table" id="second-menu-priceChangeBox">
                        <input type="number" id="second-menu-priceChange" class="menu-qty">
                    </td>
                </tr>
                <tr>
                    <td class="checkbox-column"><input type="checkbox" id="third-menu-change" name="first-menu-change" value="check3">
                    </td>
                    <td id="text-center"><b>Iced Cappuccino</b></td>
                    <td>Sweetened Espresso Blended with icy-cold milk and served in a chilled glass<br><br>
                        <input type="radio" , name="third-menu-choice" , value="single" , checked="checked">
                        <label for="single-capp"><strong id="menu-3-price-1"></strong></label>
                        <input type="radio" , name="third-menu-choice" , value="double">
                        <label for="double-capp"><strong id="menu-3-price-2"></strong></label>
                    </td>
                    <td class="tabulation-table" id="third-menu-priceChangeBox">
                        <input type="number" id="third-menu-priceChange" class="menu-qty">
                    </td>
                </tr>
                <form action="menuChangeSubmit.php" method="post">
                    <tr>
                        <td></td>
                        <td></td>
                        <input type="hidden" name="item1" id="hidden-item-1">
                        <input type="hidden" name="item2" id="hidden-item-2">
                        <input type="hidden" name="item3" id="hidden-item-3">
                        <input type="hidden" name="item4" id="hidden-item-4">
                        <input type="hidden" name="item5" id="hidden-item-5">
                        <td class="clear-button" id="clear-button">
                            <input type="button" value="Clear" onclick="clearPrice()">
                        </td>
                        <td class="submit-button" id="submit-button">
                            <input type="submit" value="Submit">
                            <!-- TODO: Add PRICE Update Locally -->
                        </td>
                    </tr>
                </form>
            </table>
            <script type="text/javascript" src="adminMenu.js"></script>
        </div>
        <footer>
            <small><i>Copyright &copy; 2021 Justin Tan Koon Han</i></small>
            <br><small><i><a href="mailto:justin@tan.com">justin@tankoonhan.com</a></i></small>
        </footer>
    </div>
</body>

</html>