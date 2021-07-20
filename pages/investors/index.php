<?php
session_start();
if(isset($_SESSION['email'])){
include '../elements/header.php';
include '../elements/navbar.php';
include '../elements/sidebar.php';

include 'investors.php';
include 'filter.php';

include '../elements/footer.php';
?>
<script type="text/javascript" src="../../assets/js/autocomplete.js"></script>
<script type="text/javascript" src="../../plugins/pagination/pagination.min.js"></script>
<script type="text/javascript">
autocomplete(document.getElementById("searchIndicators"), searchableElements);
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
