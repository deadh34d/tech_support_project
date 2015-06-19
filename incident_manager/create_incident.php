<?php include('../view/header.php'); ?>

<div id='main'>
    <h3>Create Incident</h3>
    <form action='.' method='post'>
        <div id='left'>
            <label>Customer:</label>
            <br />
            <label>Product:</label>
            <br />
            <label>Title:</label>
            <br />
            <label>Decsription:</label>
        </div>
        <div id='right'>
            <?php echo $customer['firstName']. ' ' . $customer['lastName']; ?>
            <br />
            <select name='$productCode'>
                <?php foreach($registered_products as $product) : ?>
                <option value='<?php echo $product['productCode']; ?>'>
                <?php echo $product['productCode']; ?></option>
                <?php endforeach; ?>
            </select>
            <br />
            <input type='text' name='title' />
            <br />
            <input type='text' name='description' />
            <br />
            <input type='hidden' name='customerID'
                   value='<?php echo $customer['customerID'];?>' />
            <input type='hidden' name='action' value='create_incident' />
            <input type='submit' value='Create Incident' />
        </div>
    </form>
</div>

<?php include('../view/footer.php'); ?>

