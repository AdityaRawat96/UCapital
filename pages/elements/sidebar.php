<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?=BASE_URL; ?>" class="brand-link">
    <img src="../../dist/img/logo.png" alt="AdminLTE Logo" class="brand-image logo-custom">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <?php
        if(isset($_SESSION['user_type'])){
          if($_SESSION['user_type'] == 0){
            ?>
            <li class="nav-item users-nav">
              <a href="../users/" class="nav-link">
                <div  class="nav-icon">
                  <i class="fas fa-users"></i>
                </div>
                <p>
                  Users
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
            <?php
          }
        }
        ?>

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
              <a href="../news/index.php" class="nav-link">
                <p> All </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../news/index.php?index=Private Equity" class="nav-link">
                <p> Private Equity </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../news/index.php?index=Venture Capital" class="nav-link">
                <p> Venture Capital </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../news/index.php?index=IPO" class="nav-link">
                <p> IPO </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../news/index.php?index=M%26A" class="nav-link">
                <p> M&A </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../news/index.php?index=Real Estate" class="nav-link">
                <p> Real Estate </p>
              </a>
            </li>
          </ul>
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
            <?php
            if(isset($_SESSION['user_type'])){
              if($_SESSION['user_type'] == 0){
                ?>
                <li class="nav-item">
                  <a href="../advisors/add-advisor.php" class="nav-link add-advisor-sub-nav">
                    <p> Add Advisor </p>
                  </a>
                </li>
                <?php
              }
            }
            ?>
          </ul>
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
              <a href="../ma/deals.php" class="nav-link post-sub-nav">
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

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
