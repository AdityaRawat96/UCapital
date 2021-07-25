

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="chat_container">
    <div class="chat_sidebar">

      <div class="chat_search">
        <input type="text" name="" value="" class="form-control">
      </div><hr>

      <div class="recent_chats">

        <?php

        $result= mysqli_query($con, "SELECT T2.maxDate, T2.user2_id, T2.profile_picture, T2.user_type, chats.receiver, chats.sender, chats.message, chats.status
          FROM (SELECT T1.user2_id, users.user_type, users.profile_picture, max(cdate) maxDate FROM
          (SELECT chats.receiver user2_id, max(chat_timestamp) cdate
          FROM chats WHERE chats.sender='$user_id'
          GROUP BY chats.receiver
          union distinct
          (SELECT chats.sender user2_id, max(chat_timestamp) cdate
          FROM chats WHERE chats.receiver='$user_id'
          GROUP BY chats.sender)) T1
          inner join users on (users.id = T1.user2_id)
          group by T1.user2_id
          order by maxDate desc) T2
          join chats on (T2.maxDate = chats.chat_timestamp) ORDER BY T2.maxDate DESC")
          or die('An error occurred! Unable to process this request. '. mysqli_error($con));

          if(mysqli_num_rows($result) > 0 ){
            while($row = mysqli_fetch_array($result)){

              if($row['user_type'] == 2){
                $chat_username = "Advisor";
              }else{
                $chat_username = "User";
              }
              if($row['profile_picture'] == "" || $row['profile_picture'] == null){
                $chat_recipient_image = '../../dist/img/avatar0.png';
              }else{
                $chat_recipient_image = '../../assets/profiles/'.$row['profile_picture'];
              }
              ?>

              <div class="chat_user_info" data-user="<?=$row['user2_id']?>">
                <div class="chat_user_image_container">
                  <img class="chat_user_image"
                  src="<?=$chat_recipient_image; ?>"
                  alt="User profile picture">
                  <span class="user_status user_status_online">
                    <i class="fas fa-circle"></i>
                  </span>
                </div>
                <div class="chat_user_details">
                  <span class="chat_user_name"><?=$chat_username; ?></span>
                  <div class="chat_text"><?=$row['message']?></div>
                </div>
                <div class="chat_user_time">
                  <span class="chat_user_times_details"><?=$row['maxDate']?></span>
                </div>
              </div>
              <?php
            }
          }
          ?>

        </div>
      </div>

      <div class="chat_content">
        <div class="chat_receiver_info">
          <div class="chat_receiver_name">
          </div>
          <div class="chat_receiver_status">
            <span class="user_status_online">
              <i class="fas fa-circle"></i>
            </span>
            <span class="chat_user_active">
              Active Now
            </span>
          </div>
        </div>

        <div class="chat_body">

        </div>
        <div class="chat_actions">
          <textarea type="text" class="chatbox_chat_input form-control" placeholder="Type a message.." oninput="auto_grow(this)" rows="1"></textarea>
          <svg class="chatbox_send_message_button" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4.01 6.03l7.51 3.22-7.52-1 .01-2.22m7.5 8.72L4 17.97v-2.22l7.51-1M2.01 3L2 10l15 2-15 2 .01 7L23 12 2.01 3z"/></svg>
          <svg class="loader_chat" version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve"> <path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50"> <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"> </path></svg>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper -->
