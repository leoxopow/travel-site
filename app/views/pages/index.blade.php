@layout('template.layout')

@section('content')
    <main>
        <section class="container-fluid">
            <div class="row">
                <ul class="bxslider">
                    <li>
                        <img src="{{asset('app/images/slide2.jpg')}}" alt="">

                        <div class="caption">
                            <h1>Tentacles Abound in Our Best Jellyfish Pictures</h1>

                            <p class="description">James Gurney picks the most interesting
                                pieces from the luxury watch fair</p>
                            <a href="#" class="btn read-more">Read more</a>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('app/images/slide1.jpg')}}" alt="">

                        <div class="caption">
                            <h1>Tentacles Abound in Our Best Jellyfish Pictures</h1>

                            <p class="description">James Gurney picks the most interesting
                                pieces from the luxury watch fair</p>
                            <a href="#" class="btn read-more">Read more</a>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('app/images/slide2.jpg')}}" alt="">

                        <div class="caption">
                            <h1>Tentacles Abound in Our Best Jellyfish Pictures</h1>

                            <p class="description">James Gurney picks the most interesting
                                pieces from the luxury watch fair</p>
                            <a href="#" class="btn read-more">Read more</a>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('app/images/slide3.jpg')}}" alt="">

                        <div class="caption">
                            <h1>Tentacles Abound in Our Best Jellyfish Pictures</h1>

                            <p class="description">James Gurney picks the most interesting
                                pieces from the luxury watch fair</p>
                            <a href="#" class="btn read-more">Read more</a>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('app/images/slide4.jpg')}}" alt="">

                        <div class="caption">
                            <h1>Tentacles Abound in Our Best Jellyfish Pictures</h1>

                            <p class="description">James Gurney picks the most interesting
                                pieces from the luxury watch fair</p>
                            <a href="#" class="btn read-more">Read more</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="bx-pager" class="pager">
            <div class="container">
                <div class="row-pager">
                    <a href="" data-slide-index="0">
                        <h5>Do or don’t</h5>
                        <h4>
                            FEEL-GOOD KNITS: CASHMERE AND MERINO
                        </h4>
                    </a>
                    <a href="" data-slide-index="1">
                        <h5>Style</h5>
                        <h4>TENTACLES ABOUND IN OUR BEST JELLYFISH PICTURES</h4>
                    </a>
                    <a href="" data-slide-index="2">
                        <h5>Social life</h5>
                        <h4>RARE PHOTO OF RAINBOW CLOUD GOES VIRAL</h4>
                    </a>
                    <a href="" data-slide-index="3">
                        <h5>Nature</h5>
                        <h4>THE TRENDS: #2 POUCHES</h4>
                    </a>
                    <a href="" data-slide-index="4">
                        <h5>Food</h5>
                        <h4>FEEL-GOOD KNITS: CASHMERE AND MERINO</h4>
                    </a>
                </div>
            </div>
        </section>
        <section class="articles">
            <div class="container">
                <div class="row">
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail.jpg')}}" alt="">
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
                            <a href="#" class="category-label"
                               style="background-color: #6741dc; color: #6741dc; border: 1px solid #6741dc"><span>Style</span></a>
                        </div>
                    </article>
                    <article class="col-md-6 col-xs-12 article column2">
                        <div class="card">
                            <div class="thumb col-md-5 col-md-push-7">
                                <a href="#">
                                    <img src="{{asset('app/images/thumb2-col.png')}}" alt="">
                                </a>
                            </div>
                            <div class="caption col-md-7 col-md-pull-5">
                                <h3><a href="#">5 Things We Learned From X-Men: Days of Future Past</a></h3>

                                <p class="description"><a href="#">Peter Dinklage’s porn ‘tache, Jennifer Lawrence’s
                                        brilliance and more. Some (tiny) spoilers ahead</a></p>

                                <div class="text-center">
                                    <a href="#" class="btn read-more">Read more</a>
                                </div>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color: #d8a252; color: #d8a252; border: 1px solid #d8a252"><span>Social life</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card-no-thumb" style="background-color: #0080b9;">
                            <a href="#" class="category-label" style="color: #0080b9"><span>DO OR DON’T</span></a>

                            <h3><a href="#">14 Things Men Should Never Wear After 30</a></h3>

                            <p class="description">
                                <a href="#">Light a bonfire in the garden, and step bravely into your best-dressed
                                    decade</a>
                            </p>
                            <a href="#" class="btn read-more"><span>Read more</span></a>
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
                            <a href="#" class="category-label"
                               style="background-color:  #41a674; color: #41a674; border: 1px solid #41a674"><span>Nature</span></a>
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
                            <a href="#" class="category-label"
                               style="background-color:  #d8a252; color: #d8a252; border: 1px solid #d8a252"><span>SOCIAL LIFE</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card-no-thumb" style="background-color: #674ed6;">
                            <a href="#" class="category-label" style="color: #674ed6"><span>STYLE</span></a>

                            <h3><a href="#">How Not To Greet The Dalai Lama</a></h3>

                            <p class="description">
                                <a href="#">Will Hersey recalls a disastrous encounter with the holiest man alive</a>
                            </p>
                            <a href="#" class="btn read-more"><span>Read more</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="#">Offbeat Portraits Give Stars a New Turn</a>
                                </h4>

                                <p class="description">
                                    <a href="#">I whipped the Scotch tape from my pocket and said</a>
                                </p>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color:  #41a674; color: #41a674; border: 1px solid #41a674"><span>SOCIAL LIFE</span></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <article class="promo-post" data-speed="0.04" data-parallax="scroll"
                         data-image-src="{{asset('app/images/big_post.jpg')}}">
                    <div class="info">
                        <h2><a href="#">Spring in Crete Means a Feast of Wild Greens</a></h2>

                        <p class="description">
                            <a href="#">
                                A Nat Geo photographer shares the Mediterranean cuisine of Greece’s largest island.
                            </a>
                        </p>
                        <a href="#" class="btn read-more">Read more</a>
                    </div>
                </article>
            </div>
        </section>
        <section class="articles">
            <div class="container">
                <div class="row">
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail.jpg')}}" alt="">
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
                            <a href="#" class="category-label"
                               style="background-color: #6741dc; color: #6741dc; border: 1px solid #6741dc"><span>Style</span></a>
                        </div>
                    </article>
                    <article class="col-md-6 col-xs-12 article column2">
                        <div class="card">
                            <div class="thumb col-md-5 col-md-push-7">
                                <a href="#">
                                    <img src="{{asset('app/images/thumb2-col.png')}}" alt="">
                                </a>
                            </div>
                            <div class="caption col-md-7 col-md-pull-5">
                                <h3><a href="#">5 Things We Learned From X-Men: Days of Future Past</a></h3>

                                <p class="description"><a href="#">Peter Dinklage’s porn ‘tache, Jennifer Lawrence’s
                                        brilliance and more. Some (tiny) spoilers ahead</a></p>

                                <div class="text-center">
                                    <a href="#" class="btn read-more">Read more</a>
                                </div>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color: #d8a252; color: #d8a252; border: 1px solid #d8a252"><span>Social life</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card-no-thumb" style="background-color: #0080b9;">
                            <a href="#" class="category-label" style="color: #0080b9; border: 1px solid #0080b9;"><span>DO OR DON’T</span></a>

                            <h3><a href="#">14 Things Men Should Never Wear After 30</a></h3>

                            <p class="description">
                                <a href="#">Light a bonfire in the garden, and step bravely into your best-dressed
                                    decade</a>
                            </p>
                            <a href="#" class="btn read-more"><span>Read more</span></a>
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
                            <a href="#" class="category-label"
                               style="background-color:  #41a674; color: #41a674; border: 1px solid #41a674"><span>Nature</span></a>
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
                                    <a href="#">Lake Powell offering kayakers new channels to explore</a>
                                </p>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color:  #d8a252; color: #d8a252; border: 1px solid #d8a252"><span>SOCIAL LIFE</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card-no-thumb" style="background-color: #674ed6;">
                            <a href="#" class="category-label" style="color: #674ed6; border: 1px solid #674ed6;"><span>STYLE</span></a>

                            <h3><a href="#">How Not To Greet The Dalai Lama</a></h3>

                            <p class="description">
                                <a href="#">Will Hersey recalls a disastrous encounter with the holiest man alive</a>
                            </p>
                            <a href="#" class="btn read-more"><span>Read more</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="#">Offbeat Portraits Give Stars a New Turn</a>
                                </h4>

                                <p class="description">
                                    <a href="#">I whipped the Scotch tape from my pocket and said</a>
                                </p>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color:  #41a674; color: #41a674; border: 1px solid #41a674"><span>SOCIAL LIFE</span></a>
                        </div>
                    </article>
                    <!-- Button more load -->
                    <div class="col-xs-12">
                        <button class="btn btn-block btn-lg btn-load">Load More</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="most-popular articles">
            <div class="container">
                <h2 class="text-center">Most Popular</h2>

                <div class="row">

                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="#">Offbeat Portraits Give Stars a New Turn</a>
                                </h4>

                                <p class="description">
                                    <a href="#">I whipped the Scotch tape from my pocket and said</a>
                                </p>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color:  #41a674; color: #41a674; border: 1px solid #41a674"><span>SOCIAL LIFE</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail.jpg')}}" alt="">
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
                            <a href="#" class="category-label"
                               style="background-color: #6741dc; color: #6741dc; border: 1px solid #6741dc"><span>Style</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail3.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="#">Offbeat Portraits Give Stars a New Turn</a>
                                </h4>

                                <p class="description">
                                    <a href="#">I whipped the Scotch tape from my pocket and said</a>
                                </p>
                            </div>
                            <a href="#" class="category-label"
                               style="background-color:  #41a674; color: #41a674; border: 1px solid #41a674"><span>SOCIAL LIFE</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset('app/images/thumbnail.jpg')}}" alt="">
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
                            <a href="#" class="category-label"
                               style="background-color: #6741dc; color: #6741dc; border: 1px solid #6741dc"><span>Style</span></a>
                        </div>
                    </article>

                </div>
            </div>
        </section>
    </main>
@stop