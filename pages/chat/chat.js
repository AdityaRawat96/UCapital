var current_recipient = "";
var current_chat_user = -1;

var pusher = new Pusher('994a4a55e0cd6dbaf6e1', {
  cluster: 'ap2'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
  alert(JSON.stringify(data));
});

function auto_grow(element) {
  element.style.height = "5px";
  element.style.height = (element.scrollHeight)+"px";
}

$(document).ready(function(){

  $(".chatbox_send_message_button").on("click", function(){
    if($(".chatbox_chat_input").val() != ""){
      $(".loader_chat").fadeIn(0);
      $(".chatbox_send_message_button").fadeOut(0);
      $(".chatbox_chat_input").attr("disabled", true);
      uploadChat();
    }
  });

  $(".chat_user_info").on('click', function(){
    $(".chat_user_info").removeClass("active");
    $(this).addClass('active');
    var user_image = $(this).find('.chat_user_image').attr("src");
    var chat_user_name = $(this).find('.chat_user_name').html();
    $(".chat_receiver_name").html(chat_user_name);
    current_recipient = $(this).data("user");
    getChat(current_recipient, user_image);
  });

})

function getChat(user_id, user_image){
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
    }
  });
}


function uploadChat() {

  $.ajax({
    url:"../../assets/php/postChats.php",
    type: "POST",
    data: {
      current_recipient: current_recipient,
      message: $(".chatbox_chat_input").val(),
    },
    success:function(data) {
      console.log(data)
      /*
      var response = JSON.parse(data);
      if(response.status == "SUCCESS"){
      $(".chatbox_chat_input").val("");
      $("#chatbox-attachment").val("");
      $(".chat_attachment_preview").fadeOut(0);
      $(".chatbox_chat_input").fadeIn(0);
      $("#chatbox-attachment").val("");
      $(".chat_attachment_temp_name").html("")
      $(".chatbox_chat_input").css("height", "30px");
      $(".chatbox_chat_input").focus();
      var chats = response.data;
      renderChat(chats, dataSize);
      dataSize = chats.length;
    }else{
    $(".chat_attachment_temp_name").html(response.resText);
    $("#chatbox-attachment").val("");
    $(".chat_attachment_preview").css("background-color", "#F93154");
    $(".chat_attachment_preview").fadeIn(0);
    $(".chatbox_chat_input").fadeOut(0);
  }
  $(".chatbox-body").animate({ scrollTop: $('.chatbox-body').prop("scrollHeight")}, 1000);
  chat_uploading = false;
  $(".loader_chat").fadeOut(0);
  $(".chat_attachment_icon").css("opacity", 1);
  $(".chatbox_send_message_button").fadeIn(0);
  $(".chatbox_chat_input").attr("disabled", false);*/


}
});
}
