<footer class="page-footer font-small dark-rock">

    <div class="container-fluid">
        <div class="row text-center d-flex justify-content-center pt-2">
            <div class="col-md-12 mb-3 p-0 pt-2 m-0">
                @debug
                <a href="{{route('test', ['clean', 'redirect'])}}">
                @else
                <a href="{{@RouteWithLocale('welcome')}}">
                @enddebug
                    <img class="footer-logo" src="{{asset('assets/img/logo.png')}}" alt="{{__('general.logo_alt')}}">
                </a>
            </div>
        </div>
        <div class="row text-center d-flex justify-content-center mb-3">
            <div class="col-12 mb-3">
                <span class="text-uppercase">
                    <a class="footer-link" href="{{@RouteWithLocale('legals')}}">{{__('general.legals')}}</a>
                </span>
            </div>
        </div>
    </div>

</footer>
