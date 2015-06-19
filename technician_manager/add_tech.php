<?php include('../view/header.php'); ?>

<div id='main'>
    <div id='form'>
        <form action='.' method='post'>
            <input type='hidden' name='action'
                   value='add_tech' />
            <label>First Name</label>
            <input type='text' name='firstName' />
            <br />
            <label>Last Name</label>
            <input type='text' name='lastName' />
            <br />
            <label>Email</label>
            <input type='text' name='email' />
            <br />
            <label>Phone Number</label>
            <input type='text' name='phone' />
            <br />
            <label>Password</label>
            <input type='text' name='password' />

            <input type='submit' value='Submit' />
        </form>
    </div>
    <div id='return_to_view'>
        <p><a href='.'>View Technician List</a></p>
    </div>
</div>

<?php include('../view/footer.php'); ?>

