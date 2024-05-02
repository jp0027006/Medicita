<?php
   include "action/databaseconn.php";
?>
<?php
   include "header.php";
?>
<?php
   $sql = "SELECT * FROM user where user_type = 'patient'";
   $result = $conn->query($sql);
   $arr_users = [];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Manage Patient</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <?php 
                            if($result->num_rows > 0)
                                {
                                    $arr_users = $result->fetch_all(MYSQLI_ASSOC);
                                }
                            ?>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($arr_users)) { ?>
                                <?php foreach($arr_users as $r) { ?>
                                <tr>
                                    <td><img class="rounded-circle" width="35" src="images/avatar/1.png" alt=""></td>
                                    <td><?php echo $r['first_name'] ?></td>
                                    <td><?php echo $r['last_name'] ?></td>
                                    <td><?php echo $r['email'] ?></td>
                                    <td><?php echo $r['mobile_number'] ?></td>
                                    <td>
                                    <div class="d-flex">
                                        <a href=<?php echo "patient_detail.php?id=".$r['id'] ?>><button type="button" class="btn btn-info shadow btn-xs sharp mr-1 view-modal" data-toggle="modal" data-id="<?= $r['id'] ?>" data-target="#viewModal"><i class="fa fa-eye"></i></button></a>
                                    </div>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
   include "footer.php";
?>

<script>
    var table = $('#example3').DataTable();
</script>