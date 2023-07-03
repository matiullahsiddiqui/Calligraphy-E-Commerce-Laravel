<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admins::all();
        return view('back_end.list_admin')->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end/add_admin_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admins();

        $logo = $request->file('logo');
        $logo_extension = $logo->getClientOriginalExtension();
        if (in_array($logo_extension, ['jpg', "jpeg", "png"])) {
            $logo_name = "logo_" . rand(123456, 999999) . '.' . $logo_extension;
            $logo->move(public_path('/admin/'), $logo_name);
            $admin->logo = $logo_name;
        }

        $admin->admin_email = $request->admin_email;

        $carousel_1 = $request->file('carousel_1');
        $carousel_1_extension = $carousel_1->getClientOriginalExtension();
        if (in_array($carousel_1_extension, ['jpg', "jpeg"])) {
            $carousel_1_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_1_extension;
            $carousel_1->move(public_path('/admin/'), $carousel_1_name);
            $admin->carousel_1 = $carousel_1_name;
        }

        $carousel_2 = $request->file('carousel_2');
        $carousel_2_extension = $carousel_2->getClientOriginalExtension();
        if (in_array($carousel_2_extension, ['jpg', "jpeg"])) {
            $carousel_2_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_2_extension;
            $carousel_2->move(public_path('/admin/'), $carousel_2_name);
            $admin->carousel_2 = $carousel_2_name;
        }

        $carousel_3 = $request->file('carousel_3');
        $carousel_3_extension = $carousel_3->getClientOriginalExtension();
        if (in_array($carousel_3_extension, ['jpg', "jpeg"])) {
            $carousel_3_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_3_extension;
            $carousel_3->move(public_path('/admin/'), $carousel_3_name);
            $admin->carousel_3 = $carousel_3_name;
        }

        $carousel_4 = $request->file('carousel_4');
        $carousel_4_extension = $carousel_4->getClientOriginalExtension();
        if (in_array($carousel_4_extension, ['jpg', "jpeg"])) {
            $carousel_4_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_4_extension;
            $carousel_4->move(public_path('/admin/'), $carousel_4_name);
            $admin->carousel_4 = $carousel_4_name;
        }

        $carousel_5 = $request->file('carousel_5');
        $carousel_5_extension = $carousel_5->getClientOriginalExtension();
        if (in_array($carousel_5_extension, ['jpg', "jpeg"])) {
            $carousel_5_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_5_extension;
            $carousel_5->move(public_path('/admin/'), $carousel_5_name);
            $admin->carousel_5 = $carousel_5_name;
        }

        $admin->category_1_name = $request->category_1_name;

        $category_1_picture = $request->file('category_1_picture');
        $category_1_picture_extension = $category_1_picture->getClientOriginalExtension();
        if (in_array($category_1_picture_extension, ['jpg', "jpeg"])) {
            $category_1_picture_name = "category_" . rand(123456, 999999) . '.' . $category_1_picture_extension;
            $category_1_picture->move(public_path('/admin/'), $category_1_picture_name);
            $admin->category_1_picture = $category_1_picture_name;
        }

        $admin->category_2_name = $request->category_2_name;

        $category_2_picture = $request->file('category_2_picture');
        $category_2_picture_extension = $category_2_picture->getClientOriginalExtension();
        if (in_array($category_2_picture_extension, ['jpg', "jpeg"])) {
            $category_2_picture_name = "category_" . rand(123456, 999999) . '.' . $category_2_picture_extension;
            $category_2_picture->move(public_path('/admin/'), $category_2_picture_name);
            $admin->category_2_picture = $category_2_picture_name;
        }


        $admin->category_3_name = $request->category_3_name;

        $category_3_picture = $request->file('category_3_picture');
        $category_3_picture_extension = $category_3_picture->getClientOriginalExtension();
        if (in_array($category_3_picture_extension, ['jpg', "jpeg"])) {
            $category_3_picture_name = "category_" . rand(123456, 999999) . '.' . $category_3_picture_extension;
            $category_3_picture->move(public_path('/admin/'), $category_3_picture_name);
            $admin->category_3_picture = $category_3_picture_name;
        }

        $admin->admin_address = $request->admin_address;
        $admin->admin_phone = $request->admin_phone;
        $admin->admin_facebook = $request->admin_facebook;
        $admin->admin_twitter = $request->admin_twitter;
        $admin->admin_instagram = $request->admin_instagram;
        $admin->admin_linkedin = $request->admin_linkedin;

        $admin->save();
        return redirect('master');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admins::find($id);
        return view('back_end/edit_admin_data')->with('admin', $admins);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Admins::find($id);

        $logo = $request->file('logo');
        $logo_extension = $logo->getClientOriginalExtension();
        if (in_array($logo_extension, ['jpg', "jpeg", "png"])) {
            $logo_name = "logo_" . rand(123456, 999999) . '.' . $logo_extension;
            $logo->move(public_path('/admin/'), $logo_name);
            $admin->logo = $logo_name;
        }

        $admin->admin_email = $request->admin_email;

        $carousel_1 = $request->file('carousel_1');
        $carousel_1_extension = $carousel_1->getClientOriginalExtension();
        if (in_array($carousel_1_extension, ['jpg', "jpeg"])) {
            $carousel_1_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_1_extension;
            $carousel_1->move(public_path('/admin/'), $carousel_1_name);
            $admin->carousel_1 = $carousel_1_name;
        }

        $carousel_2 = $request->file('carousel_2');
        $carousel_2_extension = $carousel_2->getClientOriginalExtension();
        if (in_array($carousel_2_extension, ['jpg', "jpeg"])) {
            $carousel_2_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_2_extension;
            $carousel_2->move(public_path('/admin/'), $carousel_2_name);
            $admin->carousel_2 = $carousel_2_name;
        }

        $carousel_3 = $request->file('carousel_3');
        $carousel_3_extension = $carousel_3->getClientOriginalExtension();
        if (in_array($carousel_3_extension, ['jpg', "jpeg"])) {
            $carousel_3_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_3_extension;
            $carousel_3->move(public_path('/admin/'), $carousel_3_name);
            $admin->carousel_3 = $carousel_3_name;
        }

        $carousel_4 = $request->file('carousel_4');
        $carousel_4_extension = $carousel_4->getClientOriginalExtension();
        if (in_array($carousel_4_extension, ['jpg', "jpeg"])) {
            $carousel_4_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_4_extension;
            $carousel_4->move(public_path('/admin/'), $carousel_4_name);
            $admin->carousel_4 = $carousel_4_name;
        }

        $carousel_5 = $request->file('carousel_5');
        $carousel_5_extension = $carousel_5->getClientOriginalExtension();
        if (in_array($carousel_5_extension, ['jpg', "jpeg"])) {
            $carousel_5_name = "carousel_" . rand(123456, 999999) . '.' . $carousel_5_extension;
            $carousel_5->move(public_path('/admin/'), $carousel_5_name);
            $admin->carousel_5 = $carousel_5_name;
        }

        $admin->category_1_name = $request->category_1_name;

        $category_1_picture = $request->file('category_1_picture');
        $category_1_picture_extension = $category_1_picture->getClientOriginalExtension();
        if (in_array($category_1_picture_extension, ['jpg', "jpeg"])) {
            $category_1_picture_name = "category_" . rand(123456, 999999) . '.' . $category_1_picture_extension;
            $category_1_picture->move(public_path('/admin/'), $category_1_picture_name);
            $admin->category_1_picture = $category_1_picture_name;
        }

        $admin->category_2_name = $request->category_2_name;

        $category_2_picture = $request->file('category_2_picture');
        $category_2_picture_extension = $category_2_picture->getClientOriginalExtension();
        if (in_array($category_2_picture_extension, ['jpg', "jpeg"])) {
            $category_2_picture_name = "category_" . rand(123456, 999999) . '.' . $category_2_picture_extension;
            $category_2_picture->move(public_path('/admin/'), $category_2_picture_name);
            $admin->category_2_picture = $category_2_picture_name;
        }


        $admin->category_3_name = $request->category_3_name;

        $category_3_picture = $request->file('category_3_picture');
        $category_3_picture_extension = $category_3_picture->getClientOriginalExtension();
        if (in_array($category_3_picture_extension, ['jpg', "jpeg"])) {
            $category_3_picture_name = "category_" . rand(123456, 999999) . '.' . $category_3_picture_extension;
            $category_3_picture->move(public_path('/admin/'), $category_3_picture_name);
            $admin->category_3_picture = $category_3_picture_name;
        }

        $admin->admin_address = $request->admin_address;
        $admin->admin_phone = $request->admin_phone;
        $admin->admin_facebook = $request->admin_facebook;
        $admin->admin_twitter = $request->admin_twitter;
        $admin->admin_instagram = $request->admin_instagram;
        $admin->admin_linkedin = $request->admin_linkedin;

        $admin->save();
        return redirect('master');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admins::find($id);
        Admins::destroy($id);
        // $image = public_path('/uploads/').$product->image;
        // if (file_exists($image)){
        //     @unlink($image);
        // }


        return redirect('master');
    }
}
