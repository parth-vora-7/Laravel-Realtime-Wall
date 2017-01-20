$('.article-container').isotope({
  itemSelector: '.article',
  layoutMode: 'packery',
  percentPosition: true
});

$(document).ready(function () {
  $('button.btn-delete').on('click', function () {
    var type = $(this).data('type');
    var delete_url = APP_URL + '/articles/' + $(this).data('id');
    $('#myModal form').attr('action', delete_url);
    $('#myModal .modal-title').text(type + ' artical');
    $('#myModal .btn-danger').val(type);
  });

  $('.article-container').infinitescroll({
    navSelector: "ul.pagination",
    nextSelector: "ul.pagination li.active + li a",
    itemSelector: "div.article"
  },
  function (newElements) {
    $('.article-container').isotope('insert', newElements);
    $('.article-container').isotope({layoutMode: 'packery'});
  });
  $(".view-toggle").bootstrapSwitch();
  $('.view-toggle').on('switchChange.bootstrapSwitch', function(event, state) {
      $.ajax({
          url: APP_URL + '/atrical-view-mode',
          method: 'POST',
          dataType: 'json',
          data: {mode: state},
          success: function(res) {
              location.reload();
          }
      });
});
  
});