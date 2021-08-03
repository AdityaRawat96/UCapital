<?php
session_start();
$chat_recipient_name = '';
$chat_recipient_id = '';
$chat_recipient_image_target = '';

if(isset($_SESSION['id'])){
  //Check current user type

  if(isset($_POST['chat_recipient_id'])){
    //Chat target user
    $chat_recipient_image_target = $_POST['chat_recipient_image'];
    $chat_recipient_id = $_POST['chat_recipient_id'];
    if($_POST['chat_recipient_type'] == 2){
      $chat_recipient_name = "Advisor";
    }else{
      $chat_recipient_name = "User";
    }
  }

  $user_id = $_SESSION['id'];
  include '../elements/header.php';
  include '../elements/navbar.php';
  include '../elements/sidebar.php';
  include 'chat.php';
  include '../elements/footer.php';

  ?>
  <script type="text/javascript" src="chat.js"></script>
  <link rel="stylesheet" href="chat.css">
  <script type="text/javascript">


  $(document).ready(function(){
    if('<?=$chat_recipient_id; ?>' != ''){
      var chat_user_id = '<?=$chat_recipient_id; ?>';
      var chatfound = false;
      $('.recent_chats .chat_user_info').each(function() {
        if($(this).data("user") == chat_user_id){
          $(this).trigger('click');
          chatfound = true;
          $('#faq1').collapse('show');
        }
      });
      if(!chatfound){
        $('#faq1').collapse('hide');
        $('.chat_advisors .chat_user_info').each(function() {
          if($(this).data("user") == chat_user_id){
            $(this).trigger('click');
            chatfound = true;
            $('#faq2').collapse('show');
          }
        });
        if(!chatfound){
          $('#faq2').collapse('hide');
          $('.chat_support .chat_user_info').each(function() {
            if($(this).data("user") == chat_user_id){
              $(this).trigger('click');
              chatfound = true;
              $('#faq3').collapse('show');
            }
          });
          if(!chatfound){
            $('#faq3').collapse('hide');
            $('#faq1').collapse('show');
            $('.recent_chats').prepend('<div class="chat_user_info" data-user="<?=$chat_recipient_id;?>"><div class="chat_user_image_container"><img class="chat_user_image" src="<?=$chat_recipient_image_target?>" alt="User profile picture"><span class="user_status user_status_online"><i class="fas fa-circle"></i></span></div><div class="chat_user_details"><span class="chat_user_name"><?=$chat_recipient_name; ?></span><div class="chat_text"></div></div><div class="chat_user_time"><span class="chat_user_times_details"></span></div></div>');
            $('.recent_chats .chat_user_info').first().trigger("click");
          }
        }
      }
    }else{
      if($('.recent_chats .chat_user_info').length > 0){
        $('.chat_user_info').first().trigger("click");
      }else{
        $('.chat_content').fadeOut(0);
        $('.chat_blank').fadeIn(0);
      }
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
