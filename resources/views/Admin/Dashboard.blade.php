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
                <li><a href="{{ asset('index') }}" title="پیشخوان">پیشخوان</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="row no-gutters font-size-13 margin-bottom-10">
                <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10 bg-red">
                    <h3> تعداد کل مقالات </h3>
                    <h4> 200</h4>
                </div>
                <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10 bg-orange">
                    <h3> تعداد دسته بندی‌ها</h3>
                    <h4> 7 </h4>
                </div>
                <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10 bg-green">
                    <h3> تعداد مقالات امروز</h3>
                    <h4> 21 </h4>
                </div>
                <div class="col-3 padding-20 border-radius-3 bg-white margin-bottom-10 bg-blue">
                    <h3> تعداد مقالات فعال</h3>
                    <h4> 100 </h4>
                </div>
            </div>

            <div class="row no-gutters font-size-13 margin-bottom-10">
                <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10">
                    <h3>تعداد کل کاربران</h3>
                    <h4>70</h4>
                </div>
                <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10">
                    <h3>ثبت نام های امروز</h3>
                    <h4>5 </h4>
                </div>
                <div class="col-3 padding-20 border-radius-3 bg-white margin-left-10 margin-bottom-10">
                    <h3>تعداد کل کاربران فعال</h3>
                    <h4>51</h4>
                </div>
                <div class="col-3 padding-20 border-radius-3 bg-white  margin-bottom-10">
                    <h3>کاربران غیر فعال</h3>
                    <h4>19</h4>
                </div>
            </div>

            <div class="row bg-white no-gutters font-size-13">
                <div class="title__row">
                    <p>آخرین مقالات</p>
                    <a href="#" class="all-reconcile-text margin-left-20 color-2b4a83">نمایش همه مقالات</a>
                </div>
                <div class="table__box">
                    <table width="100%" class="table">
                        <thead role="rowgroup">
                            <tr role="row" class="title-row">
                                <th>شناسه</th>
                                <th>عنوان مقاله</th>
                                <th>نام دسته بندی</th>
                                <th>وضعیت</th>
                                <th>تصویر</th>
                                <th>تاریخ ثبت</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row">
                                <td>1</td>
                                <td>middleware</td>
                                <td>لاراول</td>
                                <td class="text-success">فعال</td>
                                <td><a href=""><img class="img__slideshow" src="{{ asset('Admin/img/laravel.jpg') }}"
                                            alt=""></a>
                                </td>
                                <td>1403/05/01</td>
                                <td>
                                    <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                                </td>
                            </tr>
                            <tr role="row">
                                <td>1</td>
                                <td>middleware</td>
                                <td>لاراول</td>
                                <td class="text-success">فعال</td>
                                <td><a href=""><img class="img__slideshow" src="{{ asset('Admin/img/laravel.jpg') }}"
                                            alt=""></a>
                                </td>
                                <td>1403/05/01</td>
                                <td>
                                    <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                                </td>
                            </tr>
                            <tr role="row">
                                <td>1</td>
                                <td>middleware</td>
                                <td>لاراول</td>
                                <td class="text-success">فعال</td>
                                <td><a href=""><img class="img__slideshow" src="{{ asset('Admin/img/laravel.jpg') }}"
                                            alt=""></a>
                                </td>
                                <td>1403/05/01</td>
                                <td>
                                    <a href="" target="_blank" class="item-eye mlg-15" title="مشاهده"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
