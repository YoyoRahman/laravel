<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestBanner;
use App\Http\Requests\updateBannerRequest;
use App\Models\Banner;
use App\Http\Requests\updateBaannerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;





class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();

        return view('Admin.Banner.Banners', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Banner.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestBanner $request)
    {
        $inputs = $request->all();
        if ($request->file('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('banner_image', 'public');
            $inputs['image'] = $imagePath;
        }
        Banner::create($inputs);
        return redirect()->route('admin.banners');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('Admin.banner.edit', compact('banner'));
        return view('Admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * (Removed duplicate method to resolve duplicate symbol error)
     */
    // public function update(Request $request, string $id)
    // {
    //     return view('Admin.banner.edit', compact('banner'));
    // }
    /**
     * Update the specified resource in storage.
     */
    public function update(updateBannerRequest $request, Banner $banner)
    {
        $inputs = $request->all();
        if ($request->file('image')) {
            if ($banner->image) {
                Storage::disk('public')->delete($banner->image);
            }
            $image = $request->file('image');
            $imagePath = $image->store('banner_image', 'public');
            $inputs['image'] = $imagePath;
        }
        $banner->update($inputs);
        return redirect()->route('admin.banners');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();
        return redirect()->back();
    }
}
