$(function () {
  $.get('php/get-feed.php', {}, function(result) {
    $('#blog').html(result);
  });
});