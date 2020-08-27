<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Product;
use App\Coupon;
use Auth;
class CouponController extends Controller
{

	public function index(){

        $coupons = Cache::rememberForever('all-coupons',function() {
            return Coupon::orderBy('active','ASC')->get();
        });

		return view('admin.coupon.index',compact('coupons'));
	}



    public function add(){
    	
        $products = Cache::rememberForever('all-products', function () {
            return Product::orderBy('id','DESC')->get();
        });

    	return view('admin.coupon.add',compact('products'));
    }

    public function store(Request $r){
    		
    		$coupon = new Coupon;

            $currentuserid  = Auth::user()->id;

    		$coupon->code           = $r->code;
    		$coupon->start_time     = $r->start_time;
    		$coupon->end_time       = $r->end_time;
    		$coupon->type           = $r->coupon_type;
    		$coupon->discount       = $r->discount;
    		$coupon->discount_type  = $r->discount_type;
            $coupon->user_id        = $currentuserid;

    		if($r->coupon_type == "Selected Products"){
    			$coupon->product_id_list = implode(',', $r->selected_products);
    		}else if($r->coupon_type == "Order"){
    			$coupon->min_cost = $r->min_cost;
    		}
    		
    		$coupon->description = $r->description;

    		$coupon->save();

            // delete cache data
            $this->delete_coupos_cache();

    		return back()->with('success','coupon added');



    }

    public function edit($id){

    	$coupon = Coupon::find($id);
    	// dd($coupon);
    	$products_id_arra = explode(",",$coupon->product_id_list);
    	$products = Product::whereIn('id',$products_id_arra)->get();
  
        $all_products = Cache::rememberForever('all-products', function () {
            return Product::orderBy('id','DESC')->get();
        });


    	return view('admin.coupon.edit',compact('coupon','products','all_products','products_id_arra'));
    }


    public function update(Request $r){


    	$coupon = Coupon::find($r->id);
    	$coupon->code = $r->code;
    	$coupon->start_time = $r->start_time;
    	$coupon->end_time = $r->end_time;
    	$coupon->type = $r->coupon_type;
    	$coupon->discount = $r->discount;
    	$coupon->discount_type = $r->discount_type;

    	if($r->coupon_type == "Selected Products"){
    		$coupon->product_id_list = implode(',', $r->selected_products);
    	}else if($r->coupon_type == "Order"){
    		$coupon->min_cost = $r->min_cost;
    	}
    	
    	$coupon->description = $r->description;

    	$coupon->save();

        // delete cache data
        $this->delete_coupos_cache();

    	return back()->with('success','coupon updated');
    }



    public function show($id){
    	$coupon = Coupon::find($id);
    	$products = 0;

  		if($coupon->type == "Selected Products"){
  			$products_id_arra = explode(",",$coupon->product_id_list);
  			$products = Product::whereIn('id',$products_id_arra)->get();
  		}


    	return view('admin.coupon.show',compact('coupon','products'));
    }


    public function delete(Request $r){
        $coupon = Coupon::find($r->id);
        $coupon->delete();

        $this->delete_coupos_cache();
    }


    public function delete_coupos_cache(){
        Cache::forget('all-coupons');
    }




}
