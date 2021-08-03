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
                        <th>Name</th>
                        <th>User Type</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Chat Allowed</th>
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
                          if($user_type == 0){
                            $user_type = '<select class="select-custom" onchange="changeUserStatus($(this), '.$user_id_1.')">
                            <option value="0" selected>Super-Admin</option>
                            <option value="1">Support-Admin</option>
                            <option value="3">User</option>
                            </select>';
                          }else if($user_type == 1){
                            $user_type = '<select class="select-custom" onchange="changeUserStatus($(this), '.$user_id_1.')">
                            <option value="0">Super-Admin</option>
                            <option value="1" selected>Support-Admin</option>
                            <option value="3">User</option>
                            </select>';
                          }else if($user_type == 2){
                            $user_type = "Advisor";
                          }else{
                            $user_type = '<select class="select-custom" onchange="changeUserStatus($(this), '.$user_id_1.')">
                            <option value="0">Super-Admin</option>
                            <option value="1">Support-Admin</option>
                            <option value="3" selected>User</option>
                            </select>';
                          }
                          ?>
                          <tr>
                            <td><?=$row['first_name']." ".$row['last_name']; ?></td>
                            <td><?=$user_type; ?></td>
                            <td><?=$row['email']; ?></td>
                            <td><?=$row['mobile']; ?></td>
                            <td>
                              <select class="select-custom" onchange="changeChatStatus($(this), '<?=$user_id_1?>')">
                                <option value="0" <?php if($row['chat_allowed'] == 0){ echo "selected";} ?>>No</option>
                                <option value="1" <?php if($row['chat_allowed'] == 1){ echo "selected";} ?>>Yes</option>
                              </select>
                            </td>
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
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#users_table').DataTable({
        responsive: true
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
    </style>
    <?php
  }
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
