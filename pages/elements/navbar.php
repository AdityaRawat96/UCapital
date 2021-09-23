<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="search-padding-header" data-widget="pushmenu" href="#" role="button"> <img src="../../dist/img/Icon menu.svg"> </a>
    </li>
    <li class="nav-item">
      <div class="header-search-section">
        <form action="../search/searchResults.php" method="post">
          <input type="search" name="search" class="input-serach" placeholder="Search for Investors Sector Deal" required>
          <button type="submit" class="btn-search-head"> <img src="../../dist/img/Icon feather-search.svg" alt="search"> </button>
        </form>
      </div>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <!-- <li class="nav-item dropdown">
    <a class="select-language41 top-right-listing-media" data-toggle="dropdown" href="#">
    <img src="../../dist/img/flat789.jpg" alt="select-flat1231" class="select-flat654654">
  </a>
  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
  <ul class="flag-listing-menu-sectoin">
  <li> <a href="#"> <img src="../../dist/img/flag/USA.jpg"> English </a> </li>
  <li> <a href="#"> <img src="../../dist/img/flag/Australia.jpg"> Australia </a> </li>
  <li> <a href="#"> <img src="../../dist/img/flag/INDIA.jpg"> Hindi </a> </li>
  <li> <a href="#"> <img src="../../dist/img/flag/Sri-Lanka.jpg"> Sinhala </a> </li>
  <li> <a href="#"> <img src="../../dist/img/flag/Bangladesh.jpg"> Bengali </a> </li>
</ul>
</div>
</li>-->

<li class="nav-item dropdown">
  <a class="notificatoi-icon2 top-right-listing-media" href="../favorites">
    <img src="../../dist/img/batch.svg" alt="1" class="batch-listing4564">
  </a>
</li>

<li class="nav-item dropdown">
  <a class="notificatoi-icon2 top-right-listing-media unread_chats_notification" data-toggle="dropdown" href="#">
    <i class="far fa-comment-alt"></i>
  </a>
  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <span class="dropdown-item dropdown-header unread_chats_notification_count"></span>
    <div class="dropdown-divider"></div>
    <div class="unread_chat_container">

    </div>
    <a href="../chat/" class="dropdown-item dropdown-footer">See All Messages</a>
  </div>
</li>

<li class="nav-item dropdown">
  <a class="profile-setting654 top-right-listing-media" data-toggle="dropdown" href="#">
    <img class="profile-picture-heading"
    src="
    <?php if($_SESSION['profile_picture'] != "" && $_SESSION['profile_picture'] != null){
      if(filter_var($_SESSION['profile_picture'], FILTER_VALIDATE_URL)){
        echo trim($_SESSION['profile_picture']);
      }else{
        echo '../../assets/profiles/'.$_SESSION['profile_picture'].'?'.time();
      }
    }else{
      echo '../../dist/img/avatar0.png';
    } ?>
    "
    alt="User profile picture">
  </a>
  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <div class="card-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-info">
        <h3 class="widget-user-username"><?=$_SESSION['first_name']." ".$_SESSION['last_name'] ?></h3>
      </div>
      <div class="widget-user-image">
        <img class="img-circle elevation-2 profile-picture-heading"
        src="
        <?php if($_SESSION['profile_picture'] != "" && $_SESSION['profile_picture'] != null){
          if(filter_var($_SESSION['profile_picture'], FILTER_VALIDATE_URL)){
            echo trim($_SESSION['profile_picture']);
          }else{
            echo '../../assets/profiles/'.$_SESSION['profile_picture'].'?'.time();
          }
        }else{
          echo '../../dist/img/avatar0.png';
        } ?>
        "
        alt="User profile picture">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <a href="../profile/" class="text-dark"> Profile </a>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header"></h5>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <a href="#" class="text-danger" onclick="logout()"> Logout </a>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>
</li>

</ul>
</nav>
<!-- /.navbar -->
