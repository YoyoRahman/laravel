@extends('Admin.Layouts.Master')

@section('content')
    <div class="content">
        <div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
            <div class="header__right d-flex flex-grow-1 item-center">
                <span class="bars"></span>
                <a class="header__logo" href="#"></a>
            </div>
            <div class="header__left d-flex flex-end item-center margin-top-2">

                <div class="notification margin-15">
                    <a class="notification__icon"></a>
                    <div class="dropdown__notification">
                        <div class="content__notification">
                            <span class="font-size-13">موردی برای نمایش وجود ندارد</span>
                        </div>
                    </div>
                </div>
                <a href="" class="logout" title="خروج"></a>
            </div>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html" title="پیشخوان">پیشخوان</a></li>
                <li><a href="categories.html" title=" دوره ها" class="is-active"> دوره ها</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="tab__box">
                <div class="tab__items">
                    <a class="tab__item " href="articles.html">لیست مقالات</a>
                    <a class="tab__item is-active" href="create-article.html">ایجاد مقاله جدید</a>
                </div>
            </div>

            <div class="user-info bg-white padding-30 font-size-13">
                <form action="">

                    <label for="">عنوان مقاله</label>
                    <input type="text" class="text" value="">

                    <label for="">دسته بندی</label>
                    <select name="cat_id" id="">
                        <option value="0">لاراول</option>
                        <option value="1">جاوا اسکریپت </option>
                        <option value="1">نود جی اس</option>
                    </select>

                    <label for="">وضعیت</label>
                    <select name="status" id="">
                        <option value="0">فعال</option>
                        <option value="1">غیر فعال</option>
                    </select>

                    <label for="">تصویر</label>
                    <input type="file" class="text" value="">

                    <label for="">متن مقاله</label>
                    <textarea class="text"></textarea>

                    <br>
                    <button class="btn btn-netcopy_net">ذخیره تغییرات</button>
                </form>
            </div>


        </div>
    </div>
@endsection
