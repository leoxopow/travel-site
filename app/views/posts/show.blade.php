@layout('template.layout')

@section('content')
    <main>
        <section class="post-caption with-img" data-speed="0.04" data-parallax="scroll" data-image-src="{{asset('app/images/post-img.jpg')}}">

            <div class="caption">
                <div class="container">
                    <div class="text-center">
                        <a href="#" class="label-category">
                            Nature
                        </a>
                    </div>
                    <h1 class="text-center">
                        Make Niagara Falls Your next visit
                    </h1>
                    <p class="text-center">
                        <span class="date"><img src="{{asset('app/images/clockIcon.png')}}"alt="">June 9, 2015 9:26 pm</span>
                        <a href="" class="like"><img src="{{asset('app/images/likeIcon.png')}}" alt="">1243</a>
                        <a href="" ><img src="{{asset('app/images/commentIcon.png')}}" alt="">13</a>
                        <button class="btn btn-shares">93 shares </button>
                    </p>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <aside class="col-md-3">
                    <section class="author_card">
                        <div class="info">
                            <div class="text-center">
                                <a href="#" class="avatar">
                                    <img src="{{asset('app/images/ava-post.png')}}" alt="">
                                </a>
                            </div>
                            <div class="text-center">
                                <a href="#" class="name">
                                    EKATERINA <br> BURCEVA
                                </a>
                            </div>
                            <div class="text-center">
                                <cite>Elite Author</cite>
                            </div>
                        </div>
                        <div class="clearfix author-social">
                            <div class="col-xs-4">
                                <a href="#"><img src="{{asset('app/images/author_fb.png')}}" alt=""></a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#"><img src="{{asset('app/images/twitter_author.png')}}" alt=""></a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#"><img src="{{asset('app/images/instagram_author.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="all-author-posts">
                            <a href="#">All posts</a>
                        </div>
                    </section>
                </aside>
                <article class="col-md-8 post">
                    <p class="entry">
                        The first person to go over the Falls in a barrel and survive was a 63 year old female schoolteacher. <br>
                        High wire tightrope acts used to be performed across the river.
                    </p>
                    <h2>About Niagara Falls</h2>
                    <p>
                        Twenty percent of the worlds freshwater lies in the Great Lakes, and most flows over Niagara Falls. Is there more mist at the Falls? Is it man made or natural coincidence?The flow of water was stopped completely over both falls on March 29th 1848 due to an ice jam in the upper river for several hours. This is the only known time to have occurred.
                    </p>
                    <h3>Interesting facts about Niagara Falls</h3>
                    <p>
                        The flow over the American Falls was stopped completely for several months in 1969. The idea was to determine the feasibility of removing the large amount of loose rock from the base of the falls to enhance it's appearance. In the end the final decision was that the expense would be too great.
                    </p>
                    <h2>
                        History
                    </h2>
                    <p>
                        The word "Niagara" is derived from the Iroquois Indian word "Onguiaahra" meaning "the strait". There is an international boundary between the United States and Canada.
                        Before the invention of film, tourists would sketch pictures of the Falls.
                        The flow was also halted over both falls on March 30th 1848 due to an ice jam in the upper river.
                        The movies Niagara and Superman were filmed in part at the Falls.
                        In the past ten years, two daredevils lost their lives trying to conquer Niagara.
                        In the evenings, intense spotlights bathe the falls with different shades of color.
                    </p>
                    <blockquote>
                        The movies Niagara and Superman were filmed in part at the Falls.
                    </blockquote>
                    <p>
                        The tremendous volume of water never stops flowing,  However, the falling water and mist create ice formations along the banks of the falls and river. This can result in mounds of ice as thick as fifty feet. If the winter is cold for long enough, the ice will completely stretch across the river and form what is known as the "ice bridge".  This ice bridge can extend for several miles down river until it reaches the area known as the lower rapids.
                    </p>
                    <div class="tags">
                        <a href="#">nature</a>
                        <a href="#">niagara</a>
                        <a href="#">fall</a>
                    </div>
                    <div class="share">
                        <button class="like">
                            Like
                            <span class="label">2</span>
                        </button>
                        <button class="facebook">Share</button>
                        <button class="twitter">Tweet</button>
                    </div>
                </article>
            </div>
        </section>
        <section class="related-posts">
            <div class="container">
                <h2 class="text-center">Related Articles</h2>
                <div class="row">
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="#">Watch: Rare Black Sea Devil Caught on Video</a>
                                </h4>
                                <p class="description">
                                    <a href="#">With its gaping mouth, needle-sharp teeth</a>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="#">Stunning Changes Along Colorado River</a>
                                </h4>
                                <p class="description">
                                    <a href="#">Lake Powell offering kayakers new channels</a>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="#">Watch: Rare Black Sea Devil Caught on Video</a>
                                </h4>
                                <p class="description">
                                    <a href="#">With its gaping mouth, needle-sharp teeth</a>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="#">Stunning Changes Along Colorado River</a>
                                </h4>
                                <p class="description">
                                    <a href="#">Lake Powell offering kayakers new channels</a>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="comments">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="heading">
                            <h2>Comments <span>2</span></h2>
                            <button class="edit">&nbsp;</button>
                        </div>
                        <div class="comments-block">
                            <section class="media comment">
                                <a href="#" class="pull-left ava-comment">
                                    <img src="{{asset('app/images/ava-comment.png')}}" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="public">
                                        <a href="#" class="name">EKATERINA BURCEVA</a>
                                        <span class="date"><img src="{{asset('app/images/date-icon-comment.png')}}" alt=""> June 9, 2015 8:26 pm</span>
                                    </p>
                                    <p>
                                        Peak visitor traffic occurs in the summertime, when Niagara Falls are both a daytime and evening attraction. From the Canadian side, floodlights illuminate both sides of the falls for several hours after dark
                                    </p>
                                    <p>
                                        <a href="#" class="reply">
                                            <img src="{{asset('app/images/reply-icon.png')}}" alt=""> Reply
                                        </a>
                                    </p>
                                </div>
                            </section>
                            <section class="comment media replied">
                                <a href="#" class="pull-left ava-comment">
                                    <img src="{{asset('app/images/ava-comment-2.png')}}" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="public">
                                        <a href="" class="name">JOHN DARKLIN</a>
                                        <span class="date"><img src="{{asset('app/images/date-icon-comment.png')}}" alt=""> June 10, 2016 9:21 pm</span>
                                    </p>
                                    <p>Thanks for this article</p>
                                    <p><a href="#" class="reply"><img src="{{asset('app/images/reply-icon.png')}}" alt=""> Reply</a></p>
                                </div>
                            </section>
                            <section class="media comment">
                                <a href="#" class="pull-left ava-comment">
                                    <img src="{{asset('app/images/ava-comment.png')}}" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="public">
                                        <a href="#" class="name">EKATERINA BURCEVA</a>
                                        <span class="date"><img src="{{asset('app/images/date-icon-comment.png')}}" alt=""> June 11, 2015 5:54 am</span>
                                    </p>
                                    <p>
                                        The oldest and best known tourist attraction at Niagara Falls is the Maid of the Mist boat cruise, named for an ancient Ongiara Indian mythical character
                                    </p>
                                    <p>
                                        <a href="#" class="reply">
                                            <img src="{{asset('app/images/reply-icon.png')}}" alt=""> Reply
                                        </a>
                                    </p>
                                </div>
                            </section>
                            <section class="add-comment">
                                <div class="head">
                                    Add comment
                                </div>
                                <div class="body">
                                    <div class="media">
                                        <a href="" class="pull-left ava-add-comment"><img src="{{asset('app/images/ava-comment-2.png')}}" alt=""></a>
                                        <div class="media-body">
                                            <form action="" method="post">
                                                <textarea name="" id="" class="form-control"></textarea>
                                                <div class="clearfix">
                                                    <button type="submit" class="submit pull-right">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@stop