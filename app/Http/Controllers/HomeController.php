<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Banner;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function send_mail(){

    }
    public function index(Request $request){
        $slide = Banner::orderBy('slide_id','DESC')->take(4)->get();
        //seo
        $meta_desc="Chuyên bán những phụ kiện, linh kiện máy tính, là một cửa hàng uy tín hàng đầu.";
        $meta_keywords="Sảm phẩm chính hãng, chính sách bảo hành tốt";
        $meta_title="PN-Shop Linh kiện, Phụ kiện máy tính";
        $url_canonical=$request->url();
        //end-seo
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
 		$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

 		$all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(8)->get();
    	return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slide',$slide);
    }
    public function about(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
 		$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    	return view('about')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function login(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
 		$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    	return view('login');
    }
    public function register(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
 		$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    	return view('register')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function contact(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
 		$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    	return view('contact')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function search(Request $request){
      //seo
        $meta_desc="Tìm kiếm sản phẩm";
        $meta_keywords="Tìm kiếm sản phẩm";
        $meta_title="Tìm kiếm sản phẩm";
        $url_canonical=$request->url();
        //end-seo
        $keywords = $request->keywords_submit;
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $search_product = DB::table('tbl_product')->where('product_name','like','%' .$keywords. '%')->get();
        return view('pages.product.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

    }

}
