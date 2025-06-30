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
                <li><a href="{{ asset('index/category') }}" title=" دوره ها" class="is-active"> دوره ها</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="tab__box">
                <div class="tab__items">
                    <a class="tab__item is-active" href="{{ asset('index/category') }}">دسته بندی‌ها</a>
                    <a class="tab__item" href="{{ asset('index/create') }}">ایجاد دسته بندی جدید</a>
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
                        @foreach ($categories as $category)

                        <tr role="row">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->title }}</td>
                            <td class="text-success">{{ $category->status  == 0 ? " فعال" : "غیر فعال"}}</td>
                            <td><a href=""><img class="img__slideshow" src="{{ asset('storage/' . $category->image) }}"
                                alt=""></a>
                            </td>
                            <td>{{ jdate( $category->created_at) }}</td>
                            <td>     <div class="d-flex">
                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('delete')


                                    <button type="submit" class="item-delete mlg-15" title="حذف"></button>



                                </form>


                                <a href="{{ route('admin.category.edit', $category->id) }}" class="item-edit " title="ویرایش"></a>

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
