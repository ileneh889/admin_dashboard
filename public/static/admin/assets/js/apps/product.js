// table
c2 = $('#style-2').DataTable({
  headerCallback: function (e, a, t, n, s) {
    e.getElementsByTagName("th")[0].innerHTML = '<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
  },
  columnDefs: [{
    targets: 0,
    width: "30px",
    className: "",
    orderable: !1,
    render: function (e, a, t, n) {
      return '<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
    }
  }],
  "oLanguage": {
    "oPaginate": {
      "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
      "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
    },
    "sInfo": "Showing page _PAGE_ of _PAGES_",
    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
    "sSearchPlaceholder": "Search...",
    "sLengthMenu": "Results :  _MENU_",
  },
  "lengthMenu": [10, 20, 50],
  "pageLength": 10
});

multiCheck(c2);


// 從Contact撈來改的
$(document).ready(function () {

  $('#input-search').on('keyup', function () {
    var rex = new RegExp($(this).val(), 'i');
    $('.searchable-items .items:not(.items-header-section)').hide();
    $('.searchable-items .items:not(.items-header-section)').filter(function () {
      return rex.test($(this).text());
    }).show();
  });

  $('#btn-add-product').on('click', function (event) {
    $('#addProductModal #btn-add').show();
    $('#addProductModal #btn-edit').hide();
    $('#addProductModal').modal('show');
  })

  // function deleteProduct() {
  //   $(".delete").on('click', function (event) {
  //     event.preventDefault();
  //     /* Act on the event */
  //     $(this).parents('.items').remove();
  //   });
  // }

  $(".delete-multiple").on("click", function () {
    var inboxCheckboxParents = $(".product-chkbox:checked").parents('.items');
    inboxCheckboxParents.remove();
  });

  deleteProduct();
  addProduct();
  editProduct();

})


// dropify
jQuery(document).ready(function ($) {

  $('.dropify').dropify({
    messages: { 'default': 'Click to Upload or Drag n Drop', 'remove': '<i class="flaticon-close-fill"></i>', 'replace': 'Upload or Drag n Drop' }
  });
});

$(document).on('click', '.delete', function(event) {
  event.preventDefault();
  var url = $(this).attr('href');
  // Optionally add a confirmation dialog
  if (confirm('Are you sure you want to delete this product?')) {
    window.location.href = url;
  }
});