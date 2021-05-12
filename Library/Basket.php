<?php session_start();?>
<?php include("function_Basket.php") ?>
<?php include("verif.php");?>
<?php include("already_connected.php");?>
<?php include("menu.php");?>

<form method="post" action="Basket.php">
<table style="width: 400px">
    <tr>
        <td colspan="4">Your Shopping Basket</td>
    </tr>
    <tr>
        <td>Book name</td>
        <td>Quantity</td>
        <td>Price</td>

    </tr>

    <?php
    if (createBasket())
    {
        $nbProduct=count($_SESSION['Basket']['nameBook']);
        if ($nbProduct <= 0)
        echo "<tr><td>Your ShoppingBasket is empty </ td></tr>";
        else
        {
            for ($i=0 ;$i < $nbProduct ; $i++)
            {
                echo "<tr>";
                echo "<td>".htmlspecialchars($_SESSION['Basket']['nameBook'][$i])."</ td>";
                echo "<td>".htmlspecialchars($_SESSION['Basket']['quantity'][$i])."</td>";
                echo "<td>".htmlspecialchars($_SESSION['Basket']['price'][$i])."</td>";
                echo "</tr>";
            }

            echo "<tr><td colspan=\"2\"> </td>";
            echo "<td colspan=\"2\">";
            echo "Total : ".totalPrice();
            echo "</td></tr>";

            
        }
    }
    ?>
</table>
</form>
</body>
