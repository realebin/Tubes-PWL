
<h4>Update User Management</h4>


<fieldset>
    <legend>Update User</legend>
    <form method="POST" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Role</td>
                <td>:</td>
<!--                --><?php //var_dump($result->getRole())?>
                <td><input type="text" name="role" required value="<?php echo $result->getRole(); ?>"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required value="<?php echo $result->getNama(); ?>"/></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="uname" required value="<?php echo $result->getUsername(); ?>"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="pwd" required value="<?php echo $result->getPassword(); ?>"/></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Update" name="btnUpdateUser"/></td>
            </tr>
        </table>
    </form>

</fieldset>


<script type="text/javascript">
    $(document).ready(function() {
        $('#book').DataTable();
    });
</script>