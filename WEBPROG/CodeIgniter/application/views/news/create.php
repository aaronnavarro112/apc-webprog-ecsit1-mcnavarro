<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="title">Complete Name</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Nickname</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Email Address</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Home Address</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Gender</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Cellphone Number</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
            <td><label for="text">Comments</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add" /></td>
        </tr>
    </table>    
</form>