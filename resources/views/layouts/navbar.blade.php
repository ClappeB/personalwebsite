@section('globe')
    <div class="dropdown">
        <a class="language-globe language-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>
                <span class="inverse-toggle-navbar">{{__('general.language')}}</span>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.018 7.5h2.49c.037-1.07.189-2.087.437-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5zM3.05 3.049c.362.184.763.349 1.198.49.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm-.5 1.077c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.473.257 2.282.287V1.077zm0 4.014c-.91-.03-1.783-.145-2.591-.332a12.344 12.344 0 0 0-.4 2.741H7.5V5.091zm1 2.409V5.091c.91-.03 1.783-.145 2.591-.332.223.827.364 1.754.4 2.741H8.5zm-1 1H4.51c.035.987.176 1.914.399 2.741A13.596 13.596 0 0 1 7.5 10.91V8.5zm1 2.409V8.5h2.99a12.343 12.343 0 0 1-.399 2.741A13.596 13.596 0 0 0 8.5 10.91zm-1 1c-.81.03-1.577.13-2.282.287.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91zm-2.173 2.563a6.695 6.695 0 0 1-.597-.933 8.857 8.857 0 0 1-.481-1.078 8.356 8.356 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.52zM2.38 12.175c.47-.258.995-.482 1.565-.667A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.964 6.964 0 0 0 1.362 3.675zm8.293 2.297a7.01 7.01 0 0 0 2.275-1.521 8.353 8.353 0 0 0-1.197-.49 8.859 8.859 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zm.11-2.276A12.63 12.63 0 0 0 8.5 11.91v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872zm1.272-.688c.57.185 1.095.409 1.565.667A6.964 6.964 0 0 0 14.982 8.5h-2.49a13.355 13.355 0 0 1-.437 3.008zm.437-4.008h2.49a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zm-.74-3.96a8.854 8.854 0 0 0-.482-1.079 6.692 6.692 0 0 0-.597-.933c.857.355 1.63.875 2.275 1.521a8.368 8.368 0 0 1-1.197.49zm-.97.264c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z"/>
                </svg>
            </span>
        </a>
        <div class="row justify-content-center">
            <div class="dropdown-menu dropdown-menu-right mt-md-3 pt-0 pb-1 text-center col-2" aria-labelledby="dropdownMenuLink" aria-expanded="true">
                <div class="dropdown-header white-text mb-0 py-1">{{__('general.language')}}</div>
                <div class="dropdown-divider white-text p-0 mx-0 mt-0"></div>
                @foreach(config('app.supported_locales') as $language)
                    <div class="col-12">
                        <div class="row">
                            <form class="col-12 p-0" method="POST" action="{{route(@RouteNameWithLocale('language'), ['locale'=>$language, 'previousRoute'=>\Illuminate\Support\Facades\Route::currentRouteName()])}}">
                                @csrf
                                @method('PUT')
                                <button class="flag-button col-10" type="submit">
                                    <a class="dropdown-item px-0 py-1  @RightLocale($language){{__('active')}}@endRightLocale"><img src="{{asset('assets/icons/'.$language.'_flag.png')}}" class="flag mr-2">{{$language}}</a>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<header>
    <nav class="navbar navbar-expand-md navbar-dark shadow-sm dark-rock">
        <div class="col-10 col-sm-4 col-md-3 text-sm-left text-md-right m-0 px-0 px-sm-1 mr-md-3">
            <a class="navbar-brand" href="@RouteWithLocale('welcome')">
                <img class="navbar-icon" src="{{asset('assets/img/logo.png')}}" alt="{{__('general.logo_alt')}}"/>
                <span class="p-0 m-0 no-gutters">{{__('general.site_name')}}</span>
            </a>
        </div>

        <div class="col-2 text-right m-0 p-0 toggle-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="col-12 col-md-6 text-center m-0 p-0">
            <div class="collapse navbar-collapse m-0 p-0" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto text-center">

                    <li class="nav-item white-text mx-lg-1">
                        <div class="row justify-content-center m-0 p-0">
                            <a class="navbar-link" href="{{@RouteWithLocale('resume')}}">{{__('general.resume')}}</a>
                        </div>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <div class="row justify-content-center m-0 p-0">
                            <a class="navbar-link" href="{{@RouteWithLocale('work')}}">{{__('general.work')}}</a>
                        </div>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <div class="row justify-content-center m-0 p-0">
                            <a class="navbar-link" href="{{@RouteWithLocale('contact')}}">{{__('general.contact')}}</a>
                        </div>
                    </li>
                    <li>
                        <div class="toggle-navbar">
                            @yield('globe')
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-2 ml-md-4 ml-lg-0 justify-content-end inverse-toggle-navbar">
            <div class="row justify-content-end">
                @yield('globe')
            </div>
        </div>

    </nav>
</header>


