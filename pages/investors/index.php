<?php
session_start();
$offset = 0;
$currentPage = 1;
if(isset($_GET['offset'])){
  $offset=$_GET['offset'];
  $currentPage = ($offset/48) + 1;
}
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
  var obj = [];
  var itemType = "investors";
  var offset = parseInt('<?=$offset?>');
  var currentPage = parseInt('<?=$currentPage?>');

  autocomplete(document.getElementById("searchIndicators"), searchableElements);
  $(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: '../../assets/php/getInvestors.php',
      success: function(data) {
        obj = jQuery.parseJSON(data);
        showResults();
      }
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
