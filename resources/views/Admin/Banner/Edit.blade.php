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
                <li><a href="{{ route('admin.banners') }}" title=" دوره ها" class="is-active"> دوره ها</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="tab__box">
                <div class="tab__items">
                    <a class="tab__item " href="{{ route('admin.banners') }}">بنر ها</a>
                    <a class="tab__item is-active" href="#">ویرایش بنر ها</a>
                </div>
            </div>

            <div class="user-info bg-white padding-30 font-size-13">
                <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="">نام دسته بندی</label>
                    <input type="text" name="title" class="text" value="{{ old('title', $banner->title) }}">

                    @error('title')
                        <span class="red-color">{{ $message }}</span>
                    @enderror
                    <label for="">وضعیت</label>
                    <select name="status" id="">
                        <option value="0" @if (old('status', $banner->status == 0)) selected @endif>فعال</option>
                        <option value="1" @if (old('status', $banner->status == 1)) selected @endif>غیر فعال</option>
                    </select>

                    @error('status')
                        <span class="red-color">{{ $message }}</span>
                    @enderror

                    <label for="">تصویر</label>
                    <input type="file" name="image" class="text" value="">

                    @error('image')
                        <span class="red-color">{{ $message }}</span>
                    @enderror

                    <label for="">توضیحات</label>
                    <textarea class="text" name="description"> {{ old('description', $banner->description) }}</textarea>

                    @error('description')
                        <span class="red-color">{{ $message }}</span>
                    @enderror

                    <br>
                    <button type="submit" class="btn btn-netcopy_net">ذخیره تغییرات</button>
                </form>
            </div>


        </div>
    </div>
@endsection
