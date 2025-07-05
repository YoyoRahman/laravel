   <div class="sidebar__nav border-top border-left  ">
       <span class="bars d-none padding-0-18"></span>
       <a class="header__logo  d-none" href="#"></a>
       <div class="profile__info border cursor-pointer text-center">
           <div class="avatar__img"><img src="{{ asset('Admin/img/pro.jpg') }}" class="avatar___img">

           </div>
           <span class="profile__name">کاربر : یحیی</span>
       </div>

       <ul>
           <li class="item-li i-dashboard is-active"><a href="{{ route('admin.index') }}">پیشخوان</a></li>
           <li class="item-li i-courses"><a href="{{ route('admin.categories') }}">دسته بندی‌ها</a></li>
           <li class="item-li i-users"><a href="{{ asset('index/category') }}"> کاربران</a></li>
           <li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>
           <li class="item-li i-articles"><a href="{{ route('admin.posts') }}">مقالات</a></li>
           <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>
       </ul>

   </div>
