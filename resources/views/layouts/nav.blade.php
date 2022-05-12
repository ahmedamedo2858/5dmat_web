<nav class="navbar navbar-expand-lg fixed-top bg-danger ">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{route('frontend.leading')}}" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" target="_blank">
                5dmat-web
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الاقسام
                    </button>
                    <div class="dropdown-menu">
                        @foreach($categories as $category)
                        <a class="dropdown-item" href="{{route('front.category',['id'=>$category->id])}}">{{ $category->name}}</a>
                        @endforeach

                        <div class="dropdown-divider"></div>

                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        مهارات
                    </button>
                    <div class="dropdown-menu">
                        @foreach($skills as $skill)
                            <a class="dropdown-item" href="{{route('front.skill',['id'=>$skill->id])}}">{{ $skill->name}}</a>
                        @endforeach
                        <div class="dropdown-divider"></div>

                    </div>
                </div>
                @guest
                <li class="nav-item">
                    <a href="{{url('/login')}}" class="nav-link">login</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/register')}}" class="nav-link">register</a>
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('front.profilee',['id'=>auth()->user()->id,'slug'=>slug(auth()->user()->name)])}}" >profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li>
                    <form class="form-inline ml-auto" style="margin-top: 15px;" method="get" action="{{route('home')}}">
                        @csrf
                        <div class="form-group has-white">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
