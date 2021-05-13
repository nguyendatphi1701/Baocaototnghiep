<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Session;
use Illuminate\Support\Facades\Redirect;
class BannerController extends Controller
{

	public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function all_slide(){
    	$all_slide = Banner::orderBy('slide_id','DESC')->get();
    	return view('admin.slider.list_slide')->with(compact('all_slide'));
    }

    public function add_slide(){
    	return view('admin.slider.add_slide');
    }

    public function insert_slide(Request $request){
    	$this->AuthLogin(); 
    	$data = $request->all();
    	$get_image = request('slide_image');
    	if($get_image){
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image = current(explode('.',$get_name_image));
    		$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/uploads/slider',$new_image);

    		$slide = new Banner();
    		$slide->slide_name = $data['slide_name'];
    		$slide->slide_image = $new_image;
    		$slide->slide_desc = $data['slide_desc'];
    		$slide->slide_status = $data['slide_status'];
    		$slide->save();
    		Session::put('message','Thêm slide thành công');
    		return Redirect::to('all-slide');
    	}else{
    		Session::put('message','Chưa có hình ảnh làm ơn thêm hình ảnh');
    		return Redirect::to('add-slide');
    	}
    }
}
