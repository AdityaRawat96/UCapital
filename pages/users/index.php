<?php
session_start();
if(isset($_SESSION['user_type'])){
  if($_SESSION['user_type'] == 0){
    include '../elements/header.php';
    include '../elements/navbar.php';
    include '../elements/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="#" class="text-dark advisor-breadcum-setting invesctor12"><i class="fas fa-users"></i> Users </a></li>
              </ol>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- content-header -->

      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <table id="users_table" class="table table-hover table-bordered" style="width:100%">
                    <thead style="background-color: #151A61; color: #FFFFFF;">
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User Type</th>
                        <th hidden>User Type</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Job Role</th>
                        <th>Website</th>
                        <th>Company</th>
                        <th>Chat Allowed</th>
                        <th hidden>Chat Allowed</th>
                        <th hidden>Registration Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $result= mysqli_query($con, " SELECT *  FROM users")
                      or die('An error occurred! Unable to process this request. '. mysqli_error($con));

                      if(mysqli_num_rows($result) > 0 ){
                        while($row = mysqli_fetch_array($result)){
                          $user_id_1 = $row['id'];
                          $user_type = $row['user_type'];
                          $user_type_value = "";
                          if($user_type == 0){
                            $user_type = '<select class="select-custom" onchange="changeUserStatus($(this), '.$user_id_1.')">
                            <option value="0" selected>Super-Admin</option>
                            <option value="1">Support-Admin</option>
                            <option value="3">User</option>
                            </select>';
                            $user_type_value = "Super-Admin";
                          }else if($user_type == 1){
                            $user_type = '<select class="select-custom" onchange="changeUserStatus($(this), '.$user_id_1.')">
                            <option value="0">Super-Admin</option>
                            <option value="1" selected>Support-Admin</option>
                            <option value="3">User</option>
                            </select>';
                            $user_type_value = "Support-Admin";
                          }else if($user_type == 2){
                            $user_type = "Advisor";
                            $user_type_value = "Advisor";
                          }else{
                            $user_type = '<select class="select-custom" onchange="changeUserStatus($(this), '.$user_id_1.')">
                            <option value="0">Super-Admin</option>
                            <option value="1">Support-Admin</option>
                            <option value="3" selected>User</option>
                            </select>';
                            $user_type_value = "User";
                          }
                          ?>
                          <tr>
                            <td><?=$row['first_name']; ?></td>
                            <td><?=$row['last_name']; ?></td>
                            <td><?=$user_type; ?></td>
                            <td hidden><?=$user_type_value; ?></td>
                            <td><?=$row['email']; ?></td>
                            <td><?=$row['mobile']; ?></td>
                            <td><?=$row['role']; ?></td>
                            <td><?=$row['website']; ?></td>
                            <td><?=$row['company']; ?></td>
                            <td>
                              <select class="select-custom" onchange="changeChatStatus($(this), '<?=$user_id_1?>')">
                                <option value="0" <?php if($row['chat_allowed'] == 0){ echo "selected";} ?>>No</option>
                                <option value="1" <?php if($row['chat_allowed'] == 1){ echo "selected";} ?>>Yes</option>
                              </select>
                            </td>
                            <td hidden><?php if($row['chat_allowed'] == 0){ echo "No";}else{echo "Yes";}?></td>
                            <td hidden><?=$row['created_timestamp']; ?></td>
                          </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>

                </div>
              </div>

            </div>
          </div>

        </div><!-- container-fluid -->
      </section>
      <!-- content -->
    </div>
    <!-- content-wrapper -->

    <?php
    include '../elements/footer.php';
    ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.dataTables.min.css">
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      $(function () {
        table = $('#users_table').DataTable({
          dom: 'lBfrtip',
          buttons: [
            {
              extend:    'copyHtml5',
              text:      '<i class="fas fa-copy" style="color: #4285F4;"></i>&nbsp;&nbsp;Copy',
              titleAttr: 'Copy',
              exportOptions: {
                columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 10, 11 ]
              },
            },
            {
              extend:    'excelHtml5',
              text:      '<i class="fa fa-file-excel" style="color: #4285F4;"></i>&nbsp;&nbsp;Excel',
              titleAttr: 'Excel',
              exportOptions: {
                columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 10, 11 ]
              },
            },
            {
              extend:    'csvHtml5',
              text:      '<i class="fas fa-file-csv" style="color: #4285F4;"></i>&nbsp;&nbsp;CSV',
              titleAttr: 'CSV',
              exportOptions: {
                columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 10, 11 ]
              },
            },
            {
              extend:    'pdfHtml5',
              text:      '<i class="fa fa-file-pdf" style="color: #4285F4;"></i>&nbsp;&nbsp;PDF',
              titleAttr: 'PDF',
              exportOptions: {
                columns: [ 0, 1, 3, 4, 5, 6, 7, 8, 10, 11 ]
              },
            }
          ],
          "paging": true,
          "lengthChange": true,
          "lengthMenu": [
            [ 10, 25, 50, -1 ],
            [ '10', '25', '50', 'All' ]
          ],
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });

    } );

    function changeChatStatus(elem, id){
      $.ajax({
        url:"../../assets/php/updateUserStatus.php",
        type: "POST",
        data: {
          user_id: id,
          status_type: "chat",
          status_value: elem.val()
        }
      });
    }
    function changeUserStatus(elem, id){
      $.ajax({
        url:"../../assets/php/updateUserStatus.php",
        type: "POST",
        data: {
          user_id: id,
          status_type: "type",
          status_value: elem.val()
        }
      });
    }
    </script>
    <style media="screen">
    .select-custom{
      padding: 5px 10px;
      border-radius: 5px;
    }
    .select-custom > option{
      padding: 5px 10px;
    }
    .dropdown-menu {
      min-width: 18rem;
      padding: 0;
    }
    </style>
    <?php
  }
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
