<?php include(VIEWS.'inc/header.php');    ?>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <h1>Products</h1>
            <div class="card">
                <div class="card-header">
                    <h3>Products List</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i=1;
foreach ($products as $product) : ?>

                            <tr>
                                <td>
                                    <?php echo $i;
    $i++;?>
                                </td>
                                <td>
                                    <?php echo $product['name'] ?>
                                </td>
                                <td>
                                    <?php echo $product['price'] ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $product['description'] ?>
                                </td>
                                <td>
                                    <?php echo $product['qty'] ?>
                                </td>
                                <td>
                                    <a href="<?php url('product/edit/'.$product['id']) ?>">Edit</a>
                                    <a href="<?php url('product/delete/'.$product['id']) ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <?php include(VIEWS.'inc/footer.php');?>