$(document).ready(function () {
  // $( "#productModal" ).on('show.bs.modal', function(event){
  //   var target = event.relatedTarget;
  //   var id = $(target).attr('data-id')
  //   $(this).find('.modal-body').load('single.html')
  //   $(this).find('.modal-body').load('/product/'+id)
  // });

  $(document).on('click', '.oneClick', function () {
    var id = $(this).attr('data-id');
    var cookie = [];
    if($.cookie('products')){
        cookie = JSON.parse($.cookie('products'))
    }
    var index = cookie.indexOf(id);
    
    if(index === -1){
        cookie.push(id);
    }
    // else{
    //     cookie.splice(index,1)
    // }
    $.cookie('products', JSON.stringify(cookie))
    window.location.replace('/backet');return;
  })

  $(document).on('click', '.basket', function (e) {
    e.stopPropagation();
    if (!$(this).hasClass('myactive')) {
        var id = $(this).attr('data-id');
        var cookie = [];
        if($.cookie('products')){
            cookie = JSON.parse($.cookie('products'))
        }
        var index = cookie.indexOf(id);
        if(index === -1){
            cookie.push(id);
        }
        // else{
        //     cookie.splice(index,1)
        // }
        
        $.cookie('products', JSON.stringify(cookie))

        $('.shopping-cart-small').text(cookie.length)
        if ($(this).hasClass('btn')) {
            window.location.replace('/basket');return;
        }
        $(this).toggleClass('myactive')
    }
  })
})

