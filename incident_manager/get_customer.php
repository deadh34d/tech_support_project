<?php include("../view/header.php"); ?>

<div id='main'>
    <h3>Get Customer</h3>
    <form action='.' method='post'>
        <label>You must enter the customer's email address to select the customer.</label>
        <br />
        <label>Email:</label>
        <input type='text' name='email' />
        <input type='hidden' name='action'
               value='verify_email' />
        <input type='submit' value='Get Customer' />
    </form>
</div>

<?php include("../view/footer.php"); ?>