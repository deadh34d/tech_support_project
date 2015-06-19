<?php include('../view/header.php'); ?>

<div id='main'>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Password</th>
            <th><!-- Space used for the Delete button--></th>
        </tr>
        <?php foreach($techs as $tech) : ?>
        <tr>
            <?php $techObj = new Technician($tech['firstName'], $tech['lastName']); ?>
            <td><?php echo $techObj->getFullName(); ?></td>
            <td><?php echo $tech['email']; ?></td>
            <td><?php echo $tech['phone']; ?></td>
            <td><?php echo $tech['password']; ?></td>
            <td>
                <form action='.' method='post'>
                    <input type='hidden' name='action' 
                           value='delete_tech' />
                    <input type='hidden' name='techID' 
                           value='<?php echo $tech['techID']; ?>' />
                    <input type='submit' value='Delete' />
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href='add_tech.php'>Add Technician</a>
</div>

<?php include('../view/footer.php'); ?>