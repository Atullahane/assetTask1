<?php
    include "function.php";
?>
    <a href='insert.php'>Add</a>
    <table id="mytable" class="table table-bordred table-striped">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Version</th>
        <th>Community</th>
        <th>Type</th>
        <th>Short Description</th>
        <th>Tags</th>
        <th>Branch</th>
        <th>Support</th>
        <th>Test</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
     <?php
        $fetchData=new DB_con();
        $sql=$fetchData->fetchData();
        $cnt=1;
        while($row=mysqli_fetch_array($sql))
        {
    ?>
    <tr>
        <td><?php echo htmlentities($cnt);?></td>
        <td><?php echo htmlentities($row['Name']);?></td>
        <td><?php echo htmlentities($row['Version']);?></td>
        <td><?php echo htmlentities($row['Community']);?></td>
        <td><?php echo htmlentities($row['Type']);?></td>
        <td><?php echo htmlentities($row['Short_Description']);?></td>
        <td><?php echo htmlentities($row['Tags']);?></td>
        <td><?php echo htmlentities($row['Branch']);?></td>
        <td><?php echo htmlentities($row['Support']);?></td>
        <td><?php echo htmlentities($row['Test']);?></td>
        <td><?php echo htmlentities($row['Description']);?></td>
        <td><a href="update.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil">Edit</span></button></a></td>
        <td><a href="delete.php?del=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash">Delete</span></button></a></td>
    </tr>
    <?php
        $cnt++;
        }
    ?>
    </tbody>
    </table>