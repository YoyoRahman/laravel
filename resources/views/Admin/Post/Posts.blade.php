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
                <li><a href="{{ route('admin.index') }}">پیشخوان</a></li>
                <li><a href="{{ route('admin.posts') }}" class="is-active"> مقالات</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="tab__box">
                <div class="tab__items">
                    <a class="tab__item is-active" href="{{ route('admin.posts') }}">لیست مقالات</a>
                    <a class="tab__item " href="{{ route('admin.posts.create') }}">ایجاد مقاله جدید</a>
                </div>
            </div>
            <div class="table__box">
                <table class="table">
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
                        @foreach ($posts as $post)

                        <tr role="row">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category_id }}</td>
                            <td class="text-success">{{ $post->status  == 0 ? " فعال" : "غیر فعال"}}</td>

                            <td class="text-success">{{ $post->post_type  == 0 ? " فعال" : "غیر فعال"}}</td>



                            <td><a href=""><img class="img__slideshow" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title  }}"></a>
                            </td>
                            <td>{{ jdate( $post->created_at) }}</td>

                            <td>
                                <a href="" class="item-delete mlg-15" title="حذف"></a>
                                <a href="edit-comment.html" class="item-edit " title="ویرایش"></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
