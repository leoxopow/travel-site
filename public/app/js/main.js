$(function () {
    $('.bxslider').bxSlider({
        auto: true,
        pagerCustom: '#bx-pager'
    });
    $('.bx-category').bxSlider({
        auto: false,
        pagerCustom: '#bxpager',
        controls: false
    });
    $('[rel="popover"]').popover({
        container: 'body',
        html: true,
        placement: "bottom",
        content: function () {
            var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
            return clone;
        }
    }).click(function (e) {
        e.preventDefault();
    });
    $('.close-popover').on('click', function (e) {
        $('[rel="popover"]').popover('hide');
    });
    $('.post img').each(function () {
        $(this).after('<small>' + $(this).attr('alt') + '</small>');
    });

    $('#moreHome').on('click', function (e) {

        var that = $(this);
        var html = '';
        console.log($(this).data('page'));
        $.ajax({
            url: '/pageHome',
            type: 'post',
            data: {
                "page": $('#moreHome').data('page')
            },
            success: function (data) {
                var posts = data.data;
                console.log(Number($('#moreHome').data('page'))+1);
                if(data.current_page < data.last_page){
                    console.log('yes');
                }
                if (data.current_page < data.last_page){
                    that.data('page', Number(that.data('page'))+1);
                    console.log(that.data('page'));
                }else if(data.current_page == data.last_page){
                    that.addClass('hidden');
                }
                for(var i = 0; i < posts.length; i++){
                    html += '<article class="col-md-3 article appended">';
                        html += '<div class="card">';
                        html += '<div class="thumb">';
                        html += '<a href="/posts/'+ posts[i].id +'">';
                        html += '<img src="/imgPostThumbnail/'+ posts[i].id +'" alt="">';
                        html += '</a>';
                        html += '</div>';
                        html += '<div class="caption">'
                        html += '<h4>';
                        html += '<a href="/posts/'+ posts[i].id +'">'+ posts[i].shorten_title +'</a>';
                        html += '</h4>';
                        html += '<p class="description">';
                        html += '<a href="posts/'+ posts[i].id +'">'+ posts[i].shorten_description +'</a>';
                        html += '</p>';
                        html += '</div>';
                        html += '<a href="#" class="category-label" style="background-color: '+posts[i].category.color+'; color: '+posts[i].category.color+'; border: 1px solid '+posts[i].category.color+'"><span>'+posts[i].category.title+'</span></a>';
                        html += '</div>';
                        html += '</article>';
                }

                $(html).insertBefore('#more');
            }
        });
    });
    $('#moreCategory').on('click', function (e) {

        var that = $(this);
        var html = '';
        console.log($(this).data('page'));
        $.ajax({
            url: '/pageCategory',
            type: 'post',
            data: {
                "page": that.data('page'),
                "category": that.data('category')
            },
            success: function (data) {
                var posts = data.data;
                console.log(Number(that.data('page'))+1);
                if(data.current_page < data.last_page){
                    console.log('yes');
                }
                if (data.current_page < data.last_page){
                    that.data('page', Number(that.data('page'))+1);
                    console.log(that.data('page'));
                }else if(data.current_page == data.last_page){
                    that.addClass('hidden');
                }
                for(var i = 0; i < posts.length; i++){
                    html += '<article class="col-md-3 article appended">';
                        html += '<div class="card">';
                        html += '<div class="thumb">';
                        html += '<a href="/posts/'+ posts[i].id +'">';
                        html += '<img src="/imgPostThumbnail/'+ posts[i].id +'" alt="">';
                        html += '</a>';
                        html += '</div>';
                        html += '<div class="caption">'
                        html += '<h4>';
                        html += '<a href="/posts/'+ posts[i].id +'">'+ posts[i].shorten_title +'</a>';
                        html += '</h4>';
                        html += '<p class="description">';
                        html += '<a href="posts/'+ posts[i].id +'">'+ posts[i].shorten_description +'</a>';
                        html += '</p>';
                        html += '</div>';
                        html += '</div>';
                        html += '</article>';
                }

                $(html).insertBefore('#more');
            }
        });
    });

});