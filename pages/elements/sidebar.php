<?
include('../../assets/php/connection.php');
$advisor_primium="";
$user_mail=$_SESSION['email'];
$result= mysqli_query($con, " SELECT email,rules FROM users WHERE email = '$user_mail'  ")
or die('An error occurred! Unable to process this request. '. mysqli_error($con));
$row = mysqli_fetch_array($result);
if($row['rules'] == 'Admin'){
$advisor_primium='';
}else{
  $advisor_primium="style='display:none;'";
}


?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.html" class="brand-link">
    <img src="../../dist/img/logo.png" alt="AdminLTE Logo" class="brand-image elevation-3 logo-custom">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item dashboard-nav">
          <a href="../dashboard/" class="nav-link">
            <div  class="nav-icon"> <img src="../../dist/img/new/dashboard.svg" alt="1"></div>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>

        <li class="nav-item ma-nav">
          <a href="#" class="nav-link">
            <div  class="nav-icon">
              <img src="../../dist/img/new/m-a.svg" alt="1" class="s-1">
              <img src="../../dist/img/new/m-a-hover.svg" alt="1" class="h-1">
            </div>
            <p>
              M&A
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview ma-treeview" style="display: none;">
            <li class="nav-item">
              <a href="../ma/sell.php" class="nav-link sell-sub-nav">
                <p> Sell </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../ma/buy.php" class="nav-link buy-sub-nav">
                <p> Buy </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../ma/post_ad.php" class="nav-link post-sub-nav">
                <p> Post AD LITE </p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item investors-nav">
          <a href="../investors/" class="nav-link">
            <div  class="nav-icon">
              <img src="../../dist/img/new/investor.svg" alt="1" class="s-1">
              <img src="../../dist/img/new/investor-hover.svg" alt="1" class="h-1">
            </div>
            <p>
              Investors
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        </li>


        <li class="nav-item advisors-nav">
          <a href="#" class="nav-link">
            <div  class="nav-icon">
              <img src="../../dist/img/new/advisor.svg" alt="1" class="s-1">
              <img src="../../dist/img/new/advisor-hover.svg" alt="1" class="h-1">
            </div>
            <p>
              Advisors
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview advisors-treeview" style="display: none;">
            <li class="nav-item">
              <a href="../advisors/" class="nav-link advisors-sub-nav">
                <p> Advisors </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../advisors/add-advisor.php" class="nav-link add-advisor-sub-nav">
                <p> Add Advisor </p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item news-nav">
          <a href="#" class="nav-link">
            <div class="nav-icon">
              <img src="../../dist/img/new/news.png" alt="1" class="s-1 icon-advisor-hover120">
              <img src="../../dist/img/new/news-hover.png" alt="1" class="h-1 icon-advisor-hover120">
            </div>
            <p>
              News
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="news.html" class="nav-link">
                <p> All </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <p> World </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <p> Market </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <p> Politics </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <p> Business </p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
