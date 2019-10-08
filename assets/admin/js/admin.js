function openContent(target) {
  $.ajax({
    url:target+'.php',
    method: 'post',
    data:null
  }).done(function(data) {
    $('#content').html(data);
  });
}
