<?php
session_start();
$chat_recipient_name = '';
$chat_recipient_id = '';
$chat_recipient_image = '';

if(isset($_SESSION['id'])){

  if(isset($_POST['chat_recipient_id'])){
    $chat_recipient_image = $_POST['chat_recipient_image'];
    $chat_recipient_id = $_POST['chat_recipient_id'];
    if($_POST['chat_recipient_type'] == 2){
      $chat_recipient_name = "Advisor";
    }else{
      $chat_recipient_name = "User";
    }
  }

  $user_id = $_SESSION['id'];
  include '../../assets/php/connection.php';
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';
  include 'chat.php';
  include '../elements/footer.php';

  ?>
  <script type="text/javascript">
  var session_user = <?=$user_id; ?>;
  </script>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script type="text/javascript" src="chat.js"></script>
  <link rel="stylesheet" href="chat.css">
  <script type="text/javascript">
  $(document).ready(function(){
    if('<?=$chat_recipient_id; ?>' != ''){
      var chat_user_id = '<?=$chat_recipient_id; ?>';
      var chatfound = false;
      $('.chat_user_info').each(function() {
        if($(this).data("user") == chat_user_id){
          $(this).trigger('click');
          chatfound = true;
        }
      });
      if(!chatfound){
        $('.recent_chats').prepend('<div class="chat_user_info active" data-user="<?=$chat_recipient_id;?>"><div class="chat_user_image_container"><img class="chat_user_image" src="<?=$chat_recipient_image?>" alt="User profile picture"><span class="user_status user_status_online"><i class="fas fa-circle"></i></span></div><div class="chat_user_details"><span class="chat_user_name"><?=$chat_recipient_name; ?></span><div class="chat_text"></div></div><div class="chat_user_time"><span class="chat_user_time"></span></div></div>');
        $('.chat_user_info').first().trigger("click");
      }
    }else{
      $('.chat_user_info').first().trigger("click");
    }
  });
  </script>
  <?php

}else{
  ?>
  <script>window.open('../../','_self')</script>
  <?php
}
?>
