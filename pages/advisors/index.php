<?php
session_start();
if(isset($_SESSION['email'])){
include '../elements/header.php';
include '../elements/navbar.php';
include '../elements/sidebar.php';
include 'advisors.php';
include '../elements/footer.php';
?>
<script type="text/javascript" src="../../plugins/pagination/pagination.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.paginationList').rpmPagination({
    domElement: '.pagination-item',
    limit: 48,
  });
})
</script>
<?php
}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
