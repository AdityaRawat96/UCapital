
var current_chat_user = -1;
var sidebar_open = true;

function auto_grow(element) {
  element.style.height = "5px";
  element.style.height = (element.scrollHeight)+"px";
}

$(document).ready(function(){

  if ($(window).width() < 800) {
    sidebar_open = false;
  }

  $(".chatbox_send_message_button").on("click", function(){
    if($(".chatbox_chat_input").val() != ""){
      $(".loader_chat").fadeIn(0);
      $(".chatbox_send_message_button").fadeOut(0);
      $(".chatbox_chat_input").attr("disabled", true);
      uploadChat();
    }
  });

  $(".chat_list").on('click', '.chat_user_info', function(){
    window.scrollTo(0,document.body.scrollHeight);
    $(".chat_user_info").removeClass("active");
    $(this).addClass('active');
    $(this).find('.new_chat_message').remove();
    var user_image = $(this).find('.chat_user_image').attr("src");
    var chat_user_name = $(this).find('.chat_user_name').html();
    $(".chat_receiver_name").html(chat_user_name);
    current_recipient = $(this).data("user");
    $('.unread_user_details_container[data-user="'+current_recipient+'"]').remove();
    if($('.unread_chat_container .unread_user_details_container').length == 0){
      $(".unread_chats_notification .alert-show-message54").remove();
    }
    markAsRead(current_recipient);
    getChat(current_recipient, user_image);
    if ($(window).width() < 800) {
      if(sidebar_open){
        $(".chat_sidebar").animate({ 'margin-left': '-400px'}, 300);
        $(".chat_sidebar").removeClass('sidebar_maximized');
        sidebar_open = false;
      }
    }
  });

})

function getChat(user_id, user_image){
  $('.chat_content').fadeIn(0);
  $('.chat_blank').fadeOut(0);
  $.ajax({
    url:"../../assets/php/getChats.php",
    type: "POST",
    data: {
      user_id: user_id,
    },
    success:function(data) {
      $(".chat_body").html("");
      var chats = JSON.parse(data);
      var maxlen = chats.length;
      for(chat in chats){
        var chat_sender = chats[chat].sender;
        if(current_chat_user != chat_sender){
          $(".chat_body").append('<br>');
        }
        if(chat_sender == session_user){
          $(".chat_body").append('<div class="chat_segment"><div class="chat_message_container chat_message_sent"><small class="chat_user_time">'+chats[chat].chat_timestamp+'</small><span>'+chats[chat].message+'</span></div></div>');
        }else{
          $(".chat_body").append('<div class="chat_segment"><img class="chat_user_image_min" src="'+user_image+'" alt="User profile picture"><div class="chat_message_container chat_message_received"><small class="chat_user_time">'+chats[chat].chat_timestamp+'</small><span>'+chats[chat].message+'</span></div></div>');
        }
        current_chat_user = chat_sender;
      }
      $(".chat_body").animate({ scrollTop: $('.chat_body').prop("scrollHeight")}, 1000);
    }
  });
}


function uploadChat() {

  var chat_message = $(".chatbox_chat_input").val();
  var chat_time = moment(new Date()).format("YYYY-MM-DD HH:mm:ss");
  var chat_sender_image = $(".profile-picture-heading").attr("src");

  $.ajax({
    url:"../../assets/php/postChats.php",
    type: "POST",
    data: {
      current_recipient: current_recipient,
      message: chat_message,
      chat_time: chat_time,
      chat_sender_image: chat_sender_image,
      chat_sender_name: session_user_chat_name,
      sender_user_type: sender_user_type
    },
    success:function(data) {
      if(data == "SUCCESS"){
        $(".chatbox_chat_input").val("");
        $(".chatbox_chat_input").css("height", "30px");
        $(".chat_body").append('<div class="chat_segment"><div class="chat_message_container chat_message_sent"><small class="chat_user_time">'+chat_time+'</small><span>'+chat_message+'</span></div></div>');
      }else{
        $(".chat_body").append('<div class="chat_segment"><div class="chat_message_container chat_message_sent"><small class="chat_user_time">'+chat_time+'</small><span style="background-color: ##F93154, color: #FFFFFF">'+chat_message+'</span></div></div>');
      }
      $('#faq1').collapse('show');
      $(".chat_body").animate({ scrollTop: $('.chat_body').prop("scrollHeight")}, 1000);
      $(".loader_chat").fadeOut(0);
      $(".chatbox_send_message_button").fadeIn(0);
      $(".chatbox_chat_input").attr("disabled", false);
      $(".chatbox_chat_input").focus();

      $('.chat_user_info').each(function() {
        if($(this).data("user") == current_recipient){
          $(this).find('.chat_text').html(chat_message);
          $(this).find('.chat_user_times_details').html(chat_time);
          var elem_chat = $(this)[0].outerHTML;
          $('.recent_chats').prepend(elem_chat);
          $(this).remove();
          recent_chat_found = true;
          return false;
        }
      });
    }
  });
}

function markAsRead(sender_id){
  $.ajax({
    url:"../../assets/php/chatMarkRead.php",
    type: "POST",
    data: {
      sender_id: sender_id,
    }
  });
}

function toggleChatSidebar(){
  if(!sidebar_open){
    $(".chat_sidebar").addClass('sidebar_maximized');
    $(".chat_sidebar").animate({ 'margin-left': '0px'}, 300);
    sidebar_open = true;
  }else{
    $(".chat_sidebar").animate({ 'margin-left': '-400px'}, 300);
    $(".chat_sidebar").removeClass('sidebar_maximized');
    sidebar_open = false;
  }
}

function searchChats(){
  $(".chat_user_info").removeClass("hide_chat");
  var chat_search_query = $("#chat_search_query").val().toLocaleLowerCase();
  if(chat_search_query != ""){
    $('.chat_user_info').each(function() {
      if($(this).find(".chat_user_name").html().toLocaleLowerCase().indexOf(chat_search_query) == -1){
        $(this).addClass("hide_chat");
      }
    });
    $('#faq1').collapse('show');
    $('#faq2').collapse('show');
    $('#faq3').collapse('show');
  }else{
    $('#faq1').collapse('show');
    $('#faq2').collapse('hide');
    $('#faq3').collapse('hide');
  }
}
