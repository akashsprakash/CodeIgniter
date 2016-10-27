<!DOCTYPE html>
<html>
    <head>
      <title>Item Listing</title>
    </head>
    <style>
        .listing_table
        {
            padding-left: 30px;
        }
        table
        {
            text-align: center;
        }
    </style>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-2 listing_table">
                    <table style="width:100%">
                        <!-- table heading -->
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Customer Name</th>
                        </tr>
                        <!-- result passed from controller -->
                        <?php 
                        foreach ($result as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value->item; ?></td>
                            <td><?php echo $value->price; ?></td>
                            <td><?php echo $value->quantity; ?></td>
                            <td><?php echo $value->customername; ?></td>
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