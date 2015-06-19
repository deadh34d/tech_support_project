<?php include('../view/header.php'); ?>

<div id='main'>
    <form action='.' method='post'>
        <div id='registration'>
            <div id='left'>
                <label>Customer: </label>
                <br />
                <label>Product:</label>
            </div>
            <div id='right'>
                <?php echo $customer['firstName'] . ' ' . $customer['lastName']; ?>
                <br />
                <?php $_SESSION['customerID'] = $customer['customerID']; ?>
                <select name='productCode'>
                    <?php foreach($products as $product) : ?>
                    <option value='<?php echo $product['productCode']; ?>'>
                            <?php echo $product['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <input type='hidden' name='action' value='register_product' />
        <input type='submit' value='Register Product' />
        <br />
    </form>
    <em>You are logged in as <?php echo $_SESSION['email']; ?>.</em>
</div>

<?php include('../view/footer.php'); ?>
