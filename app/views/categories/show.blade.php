@layout('template.layout')

@section('content')
    <main>
        <section class="slider-category articles">
            <div class="container ">
                <div class="clearfix slider-wrapper">
                    <div class="col-md-9">
                        <div class="row">
                            <ul class="bx-category">
                                <li>
                                    <img src="{{asset("app/images/slide-category.jpg")}}" alt="">
                                    <div class="toRead">
                                        <h2>Must See Places of the New Year</h2>
                                        <p>Whether it’s India’s literary hub or Switzerland’s mountain majesty, these go-now destinations will send you packing.</p>
                                        <a href="#" class="btn btn-more">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{asset("app/images/slide-category.jpg")}}" alt="">
                                    <div class="toRead">
                                        <h2>Must See Places of the New Year</h2>
                                        <p>Whether it’s India’s literary hub or Switzerland’s mountain majesty, these go-now destinations will send you packing.</p>
                                        <a href="#" class="btn btn-more">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{asset("app/images/slide-category.jpg")}}" alt="">
                                    <div class="toRead">
                                        <h2>Must See Places of the New Year</h2>
                                        <p>Whether it’s India’s literary hub or Switzerland’s mountain majesty, these go-now destinations will send you packing.</p>
                                        <a href="#" class="btn btn-more">Read more</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row bxpager" id="bxpager">
                            <div class="col-md-12"><h4>Top stories</h4></div>
                            <div class="col-md-12 col-xs-4">
                                <a href="" data-slide-index="0">
                                    <span class="item-num" style="background-color:  #41a674;">1</span>
                                    Must See Places of the New Year
                                </a>
                            </div>
                            <div class="col-md-12 col-xs-4">
                                <a href="" data-slide-index="1">
                                    <span class="item-num" style="background-color:  #41a674;">2</span>
                                    Filaments of Star Stuff
                                </a>
                            </div>
                            <div class="col-md-12 col-xs-4">
                                <a href="" data-slide-index="2">
                                    <span class="item-num" style="background-color:  #41a674;">3</span>
                                    Should Feds Shoot Birds to Save Salmon?
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset("app/images/thumbnail.jpg")}}" alt="">
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
                    <article class="col-md-6 col-xs-12 article column2">
                        <div class="card">
                            <div class="thumb col-md-5 col-md-push-7">
                                <a href="#">
                                    <img src="{{asset("app/images/thumb2-col.png")}}" alt="">
                                </a>
                            </div>
                            <div class="caption col-md-7 col-md-pull-5">
                                <h3><a href="#">5 Things We Learned From X-Men: Days of Future Past</a></h3>
                                <p class="description"><a href="#">Peter Dinklage’s porn ‘tache, Jennifer Lawrence’s brilliance and more. Some (tiny) spoilers ahead</a></p>
                                <div class="text-center">
                                    <a href="#" class="btn read-more">Read more</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card-no-thumb" style="background-color: #0080b9;">
                            <br>
                            <h3><a href="#">14 Things Men Should Never Wear After 30</a></h3>
                            <p class="description">
                                <a href="#">Light a bonfire in the garden, and step bravely into your best-dressed decade</a>
                            </p>
                            <a href="#" class="btn read-more"><span>Read more</span></a>
                        </div>
                    </article>
                    <article class="col-md-3 article">
                        <div class="card">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{asset("app/images/thumbnail1.jpg")}}" alt="">
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
                                    <img src="{{asset("app/images/thumbnail2.jpg")}}" alt="">
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
                        <div class="card-no-thumb" style="background-color: #674ed6;">
                            <br>
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
                                    <img src="{{asset("app/images/thumbnail3.jpg")}}" alt="">
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
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
@stop