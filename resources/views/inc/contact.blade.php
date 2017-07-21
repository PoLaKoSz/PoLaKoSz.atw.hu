<footer id="footer">
    <div class="container">    
        <div class="row">
            <div class="row">
                <div class="section-header dark-section-header">
                    <div class="section-header-line"></div>
                    <div class="section-header-name bigger-text">
                        <h2>{{ trans('contact.title') }}</h2>
                    </div>
                    <div class="section-header-line"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <div class="row vh-middle">
                    <div class="col-xs-6 text-right">
                        <img src="{{asset('images/facebook-logo.png')}}" alt="{{ trans('contact.fb_image_alt') }}">
                    </div>
                    <div class="col-xs-6 text-left">
                        <p><a href="" class="big-text facebook-color">Facebook</a></p>
                    </div>
                </div>

                <div class="row vh-middle">
                    <div class="col-xs-6 text-right">
                        <img src="{{asset('images/youtube-logo.png')}}" alt="{{ trans('contact.yt_image_alt') }}">
                    </div>
                    <div class="col-xs-6 text-left">
                         <p><a href="" class="big-text youtube-color">YouTube</a></p>
                    </div>
                </div>

                <div class="row vh-middle">
                    <div class="col-xs-6 text-right">
                        <img src="{{asset('images/email-logo.png')}}" alt="{{ trans('contact.email_image_alt') }}">
                    </div>
                    <div class="col-xs-6 text-left">
                        <p><a href="" class="big-text freemail-color">polakosz@freemail.hu</a></p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4">
                <form>
                    <input type="text" name="contactName" placeholder="{{ trans('contact.name_field') }}"><br>
                    <input type="text" name="email" placeholder="{{ trans('contact.email_field') }}"><br>
                    <textarea name="message"></textarea><br>
                    <button class="btn btn-orange">{{ trans('contact.send_button') }}</button>
                </form>
            </div>
        </div>

        <div class="row text-center section-margin">
            <h4>{{ trans('contact.copyright_text', ['year' => '2017']) }}</h4>
        </div>

        <div class="row text-center">
            <div class="col-xs-6">
                <p><img src="{{ asset('/images/HU_flag.png') }}" alt="Magyar zászló"><a href="/hu/#">Magyar</a></p>
            </div>
            <div class="col-xs-6">
                <p><img src="{{ asset('/images/UK_flag.png') }}" alt="English flag"><a href="/en/#">English</a></p>
            </div>
        </div>
    </div>
</footer>