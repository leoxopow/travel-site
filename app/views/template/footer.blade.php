<footer>
    <div class="container">
        <div class="row">
            <section class="col-md-3">
                <a href="/" class="logo">
                    <img src="{{asset('app/images/logo-footer.png')}}" alt="">
                </a>
                <p class="copyright">
                    © 2015 Experions <br> All rights reserved
                </p>
            </section>
            <section class="col-md-4 clearfix">
                <div class="col-md-6">
                    <ul class="nav categories">
                        <li><a href="">DO OR DON’T</a></li>
                        <li><a href="">STYLE</a></li>
                        <li><a href="">SOCIAL LIFE</a></li>
                        <li><a href="">NATURE</a></li>
                        <li><a href="">FOOD</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="nav">
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Terms Of Service</a></li>
                        <li><a href="">Terms Of Service</a></li>
                    </ul>
                </div>
            </section>
            <section class="col-md-2 clearfix">
                <div class="col-md-12">
                    <h4>FOLLOW US</h4>
                    <ul class="nav social">
                        <li><a href=""><span class="soc"><img src="{{asset('app/images/facebook.png')}}" alt=""></span> <span>Facebook</span></a></li>
                        <li><a href=""><span class="soc"><img src="{{asset('app/images/twitter.png')}}" alt=""></span> <span>Twitter</span></a></li>
                        <li><a href=""><span class="soc"><img src="{{asset('app/images/instagram.png')}}" alt=""></span> <span>Instagram</span></a></li>
                        <li><a href=""><span class="soc"><img src="{{asset('app/images/rss.png')}}" alt=""></span> <span>RSS</span></a></li>
                    </ul>
                </div>
            </section>
            <section class="col-md-3 clearfix">
                <div class="col-md-12">
                    <h4>
                        SUBSCRIBE TO OUR NEWS
                    </h4>
                    <p class="copyright">A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                    {{Form::open(['url'=>url('subscribe')])}}
                        <div class="input-group">
                            <input type="email" class="form-control inp-subscribe" placeholder="E-mail">
							      <span class="input-group-btn">
							        <button class="btn btn-default subscribe" type="button"><i class="glyphicon glyphicon-envelope"></i></button>
							      </span>
                        </div>
                    {{Form::close()}}
                </div>
            </section>
        </div>
    </div>
</footer>