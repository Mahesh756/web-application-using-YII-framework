<?php
/* @var $this StaffController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Staff',
);
?>

<h1>Staff</h1>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </tr>
    <?php foreach($staff_members as $staff) : ?>
    <tr>
        <td><?php echo $staff->id; ?></td>
        <td><?php echo $staff->first_name; ?></td> 
        <td><?php echo $staff->last_name; ?></td>
        <td><?php echo $staff->email; ?></td>    
    </tr>
<?php endforeach; ?>
</table>



