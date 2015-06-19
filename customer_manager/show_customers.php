<?php include('../view/header.php'); ?>

<div id="main">
    <form action='.' method="post">
        <h3>Customer Search</h3>
        <label>Last Name</label>
        <input type='text' name='last_name' />
        <input type='hidden' name='action'
               value='search_customers' />
        <input type='submit' value='Search' />
    </form>
    <br /> 
    <table>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>City</th>
            <th><!-- This space is used for the Select button --></th>
        </tr>
        <?php foreach($customers as $customer) : ?>
            <tr>
                <td><?php echo $customer['firstName'] . ' ' . $customer['lastName']; ?></td>
                <td><?php echo $customer['email']; ?></td>
                <td><?php echo $customer['city']; ?></td>
                <td>
                    <form action='.' method='post'>
                        <input type='hidden' name='action'
                               value='select_customer' />
                        <input type='hidden' name='customerID' 
                               value='<?php echo $customer['customerID']; ?>' />
                        <input type='hidden' name='first_name'
                               value='<?php echo $customer['firstName'];?>' />
                        <input type='hidden' name='last_name'
                               value='<?php echo $customer['lastName'];?>' />
                        <input type='hidden' name='address'
                               value='<?php echo $customer['address'];?>' />
                        <input type='hidden' name='city'
                               value='<?php echo $customer['city'];?>' />
                        <input type='hidden' name='state'
                               value='<?php echo $customer['state'];?>' />
                        <input type='hidden' name='postal_code'
                               value='<?php echo $customer['postalCode']; ?>' />
                        <input type='hidden' name='country_code'
                               value='<?php echo $customer['countryCode']; ?>' />
                        <input type='hidden' name='phone'
                               value='<?php echo $customer['phone']; ?>' />
                        <input type='hidden' name='email'
                               value='<?php echo $customer['email']; ?>' />
                        <input type='hidden' name='password'
                               value='<?php echo $customer['password']; ?>' />
                        <input type='submit' value='Select' />
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include('../view/footer.php'); ?>

