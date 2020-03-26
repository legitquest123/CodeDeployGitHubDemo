
  $(function() {
    $('.cort-btn .btn ').on('click', function(e) {
      $('.query_builder').fadeOut();
      $(this).parent().prev().addClass('open-dropdown');
      $(this).parent().addClass('btn-expand');
      e.stopPropagation();

    });

    $('.sidebar-toggle ').on('click', function(e) {
      $('.search-result-section').toggleClass('open-sidebar');
    });

    $('.section .title').on('click', function() {

      $(this).parent().siblings(".section").not(".collapsed").addClass("collapsed");

    });

    $(".auxiliary").append("<div class='done_btn'>Done</div>");

    $(".done_btn").on('click', function() {
      $('.search-field').removeClass('open-dropdown');
      $('.cort-btn').removeClass('btn-expand');
    });

  });

  $(".search-field").click(function(e) {
    e.stopPropagation();
  });

  $(document).click(function() {
    $('.search-field').removeClass('open-dropdown');
    $('.cort-btn').removeClass('btn-expand');
  });



var tree3 = $("#test-select-3").treeMultiselect({
  enableSelectAll: true,
  allowBatchSelection: true,
  searchable: true,
  startCollapsed: true,
});


    $('.search-field  .search-input').focusin(function (e) {
      $('.search-helper').fadeIn();
      $('.query_builder').fadeOut();
      e.stopPropagation();
    });
    $('.search-field  .search-input').focusout(function (e) {
      $('.search-helper').fadeOut();
      e.stopPropagation();
    });



  $('.setting-btn a').on('click',function(e) {
      $('.query_builder').fadeToggle();
      e.preventDefault();
  });

  $('.query_builder .close_btn a').on('click', function(e) {
    $('.query_builder').fadeOut();
    e.preventDefault();
  });

  $('.query_builder').on('click', function(e) {
    e.stopPropagation();
  });

  $(document).click(function(e) {
    $('.query_builder').fadeOut();
  });
