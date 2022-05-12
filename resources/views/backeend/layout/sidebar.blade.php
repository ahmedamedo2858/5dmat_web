<div class="sidebar" data-color="rose" data-background-color="black" data-image="../../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">

        </a>
        <a href="{{route('home')}}" class="simple-text logo-normal">
            زيارة الموقع
        </a></div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('../../assets/img/faces/avatar.jpg')}}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
               {{auth()->user()->name}}
                <b class="caret"></b>
              </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('front.profilee',['id'=>auth()->user()->id,slug(auth()->user()->name)])}}">
                                <span class="sidebar-normal">بروفايلي</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="{{route('home.page')}}">
                    <i class="material-icons">dashboard</i>
                    <p>لوحة التحكم</p>
                </a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples" aria-expanded="true">
                    <i class="material-icons">image</i>
                    <p>     المستخدمين
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('users.create')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">اضافة المستخدم</span>
                            </a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="{{route('users')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">المستخدمين</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p>الاقسام
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('categories.create')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">اضافة قسم</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('categories')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">الاقسام</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">content_paste</i>
                    <p>تاجات
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('tags.create')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> اضافة تاج</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('tags')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">تاجات </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p>مهارات
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('tags.create')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> اضافة مهاره</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('skills')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">مهارات</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons dp48">pages</i>
                    <p>صفحات
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('pages.create')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">اضافة الصفحة </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('pages')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">صفحات</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li> <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#m1apsExamples">
                    <i class="material-icons dp48">videocam</i>
                    <p>فديوهات
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="m1apsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('videos.create')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">اضافة فديو </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('videos')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">فديوهات</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
             <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#m2apsExamples">
                    <i class="material-icons dp48">message</i>
                    <p>رسايل
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="m2apsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                           {{-- <a class="nav-link" href="{{route('contacts.edit')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">تعديل رسايل</span>
                            </a>
                        </li>--}}
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('contacts')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal">رسايل</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
