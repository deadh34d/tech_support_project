<?php include("../view/header.php"); ?>

<div id='main'>
    <div id='form'>
        <form action='.' method='post'>
            <input type='hidden' name='action'
                   value='update_customer' />
            <input type='hidden' name='customerID' 
                   value='<?php echo $customerID; ?>' />
            <label>First Name</label>
            <input type='text' name='first_name'
                   value='<?php echo $first_name; ?>' />
            <br />
            <label>Last Name</label>
            <input type='text' name='last_name'
                   value='<?php echo $last_name; ?>' />
            <br />
            <label>Address</label>
            <input type='text' name='address'
                   value='<?php echo $address;?>' />
            <br />
            <label>City</label>
            <input type='text' name='city'
                   value='<?php echo $city;?>' />
            <br />
            <label>State</label>
            <input type='text' name='state'
                   value='<?php echo $state;?>' />
            <br />
            <label>Postal Code</label>
            <input type='text' name='postal_code'
                   value='<?php echo $postal_code; ?>' />
            <br />
            <label>Country</label>
            <select name="country_code">
                <?php foreach ($countries as $country): ?>
                <?php if($country_code == $country['countryCode']): ?>
                <option value="<?php echo $country['countryCode']; ?>" selected>
                    <?php echo $country['countryName']; ?>
                </option>
                <?php else: ?>
                <option value="<?php echo $country['countryCode']; ?>" >
                    <?php echo $country['countryName']; ?>
                </option>
                <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <br />
            <label>Phone</label>
            <input type='text' name='phone'
                   value='<?php echo $phone; ?>' />
            <br />
            <label>Email</label>
            <input type='text' name='email'
                   value='<?php echo $email; ?>' />
            <br />
            <label>Password</label>
            <input type='text' name='password'
                   value='<?php echo $password; ?>' />
            <br />
            <input type='submit' value='Update Customer' />
        </form>
    </div>
    <br />
    <br />
    <a href='.'>Search Customers</a>
</div>

<?php include("../view/footer.php"); ?>

