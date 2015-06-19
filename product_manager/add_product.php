<?php include '../view/header.php' ?>

<div id='main'>
    <div id='form'>
        <form action='.' method='post'>
            <input type='hidden' name='action' value='add_product' />

            <label>Product Code</label>
            <input type='text' name='product_code' />
            <br />
            <label>Name</label>
            <input type='text' name='name' />
            <br />
            <label>Version</label>
            <input type='text' name='version' />
            <br />
            <label>Release Date</label>
            <input type='text' name='release_date' />
            <em>Use any valid date format.</em>
            <br />
            <input type='Submit' value='Add Product' />
        </form>
    </div>
    <div id='return_to_view'>
        <p><a href='.'>View Product List</a></p>
    </div>
</div>

<?php include '../view/footer.php' ?>