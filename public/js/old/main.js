$(document).ready(function () {

    if(!$.cookie('user_id')){
        var user_id = makeid(10);
        $.cookie('user_id', user_id)
    }

    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});


    $(document).scroll(function () {
        if($(document).scrollTop() > 100){
            $('.get-basket').fadeIn(500)
        }else{
            $('.get-basket').fadeOut(500)
        }
    })


    $( "#productModal" ).on('show.bs.modal', function(event){
        var target = event.relatedTarget;
        var id = $(target).attr('data-id')
        $(this).find('.modal-body').load('/product/'+id)
    });


    $(document).on('click', '.basket', function (e) {
        e.stopPropagation();
        if (!$(this).closest('.row').find('.forOneClick').hasClass('active')) {
            var id = $(this).attr('data-id');
            var cookie = [];
            if($.cookie('products')){
                cookie = JSON.parse($.cookie('products'))
            }
            var index = cookie.indexOf(id);
            if(index === -1){
                cookie.push(id);
            }else{
                cookie.splice(index,1)
            }
            $.cookie('products', JSON.stringify(cookie))

            $('.all-prod').text(cookie.length)
            if ($(this).hasClass('btn')) {
                window.location.replace('/basket');return;
            }
            var x = 0;
            var intervalID = setInterval(function () {
                $('.get-basket').toggleClass('myactive')
                setTimeout(function(){
                    $('.get-basket').toggleClass('myactive')
                }, 300);
            if (++x === 5) {
                window.clearInterval(intervalID);
            }
            }, 600);
            $(this).toggleClass('active')
        }
    })

    $(document).on('click', '.not', function (e) {
        e.stopPropagation();
        var $this = $(this);
        var job = $(this).attr('data-job');
        var id = $(this).attr('data-id')
        $.ajax({
            url: '/notify',
            type: 'post',
            data: {id:id, type:job},
            success:function () {
                $this.closest('.row').find('.not').removeClass('active')
                $this.addClass('active');
                var count = job ? +$this.find('.num').text() + 1 : +$this.find('.num').text() - 1
                $this.find('.num').text(count)
            }
        })
    })
})

$(document).on('click', '.arrows', function () {
    var arrow = $(this).attr('data-arrow');
    var id = $(this).attr('data-id');
    slideImages(arrow, id)
})

function slideImages(arrow, id) {
    var $current = $('#current-image').attr('data-current');
    var index = images.indexOf($current);

    switch(arrow) {
        case 'left':
            if (index == 0) {
                index = images.length - 1;
            } else {
                --index
            }
            break;
        case 'right':
            if (index == images.length - 1) {
                index = 0;
            } else {
                ++index
            }
            break;
    }
    $('#current-image').attr('data-current', images[index]);
    $('#current-image').attr('src', 'products/' + id + '/' + images[index]);
}


function makeid(len) {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < len; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
