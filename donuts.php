<!DOCTYPE html>
<html>
    <head>
        <title>Donuts na hora</title>
        <link rel="stylesheet" type="text/css" href="donuts.css" / >
        <script type="text/javascript">

            function updateOrder(){
                const TAXRATE;
                const DONUTPRICE;
                var numCakeDonuts = document.getElementById("cakedonuts").value;
                var numGlazedDonuts = document.getElementById("glazeddonuts").value;
                var subTotal = (numCakeDonuts + numGlazedDonuts) *  DONUTPRICE;

                var tax = subTotal * TAXRATE;
                var total = subTotal + tax;

                document.getElementById("subtotal").value = "$" + subTotal.toFixed(2);
                Document.getElementById("tax").value = "$" + tax.toFixed(2);
                document.getElementById("total").value = "$" + total.toFixed(2);
            }
            function placeOrder(){
                // submit order to server .....
                form.submit();
            }
        </script>
    </head>
    <body id="frame">
       ... 
       <form name="orderform" action="donuts.php">

       </form>
    </body>
</html>