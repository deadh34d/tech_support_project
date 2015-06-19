<?php include('../view/header.php'); ?>

<div id='main'>
    <h3>Customer Login</h3>
    <p>You must login before you can register a product.</p>
    <form action='.' method='post'>
        <label>Email:</label>
        <input type='hidden' name='action'
               value='verify_email' />
        <input type='text' name='email' />
        <input type='submit' value='Login' />
    </form>
</div>

<?php include('../view/footer.php'); ?>