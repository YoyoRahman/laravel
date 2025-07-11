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
                <li><a href="{{ route('admin.index') }}" title="پیشخوان">پیشخوان</a></li>
                <li><a href="{{ route('admin.banners') }}" title=" بنر ها" class="is-active"> بنر ها</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="tab__box">
                <div class="tab__items">
                    <a class="tab__item is-active" href="{{ route('admin.banners') }}">بنر ها</a>
                    <a class="tab__item" href="">ایجاد بنر جدید</a>
                </div>
            </div>

            <div class="table__box">
                <table class="table">
                    <thead role="rowgroup">
                        <tr role="row" class="title-row">
                            <th>شناسه</th>
                            <th>نام دسته بندی</th>
                            <th>وضعیت</th>
                            <th>تصویر</th>
                            <th>تاریخ ثبت</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr role="row">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $banner->title }}</td>
                                <td class="text-success">{{ $banner->status == 0 ? ' فعال' : 'غیر فعال' }}</td>
                                <td><a href=""><img class="img__slideshow"
                                            src="{{ asset('storage/' . $banner->image) }}" alt=""></a>
                                </td>
                                <td>{{ jdate($banner->created_at) }}</td>
                                <td>
                                    <div class="d-flex">
                                        <form action="{{ route('admin.banner.destroy', $banner->id) }}" method="POST">
                                            @csrf
                                            @method('delete')


                                            <button type="submit" class="item-delete mlg-15" title="حذف"></button>



                                        </form>


                                        <a href="{{ route('admin.banner.edit', $banner->id) }}" class="item-edit "
                                            title="ویرایش"></a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection
