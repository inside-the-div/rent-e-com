<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Category;
use Auth;
use Illuminate\Support\Facades\Cache;
class CategoryController extends Controller
{
    public function index(){

        $categories = Cache::rememberForever('all-categories',function() {
            return Category::with('products')->orderBy('id','DESC')->get();
        });
    	return view('admin.category.index',compact('categories'));
    }

    public function show($slug){

        $category = Category::with('products','user')->where('slug','=',$slug)->first();
        $products = $category->products()->orderBy('id','DESC')->get();
    	return view('admin.category.show',compact('category','products'));
    }

    public function store(Request $r){
        $r->validate([
            'name' => 'required|unique:categories',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        // $img = $r->image->store('public/images');

        $img = time().'.'.$r->image->getClientOriginalExtension();
        $r->image->move(public_path('/assets/img/category'), $img);

        $currentuserid  = Auth::user()->id;

        $slug = str_replace(" ","-",strtolower($r->name));
        $slug = strtolower($slug);


        $category               = new Category;
        $category->name         = $r->name;
        $category->image        = $img;
        $category->tag          = $r->tag;
        $category->description  = $r->description;
        $category->slug         = $slug;
        $category->user_id      = $currentuserid;
       

        $category->save();

  

    	return back()->with('success','category Stored');
    }

    public function update(Request $r){

        $r->validate([
            'name' => 'required|unique:categories,name,'.$r->id,
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $category = Category::find($r->id);
        $category->name = $r->name;

        $slug = str_replace(" ","-",$r->name);
        $slug = strtolower($slug);
        $category->slug = $slug;

        $category->description = $r->description;
        $category->tag = $r->tag;


        if ($r->hasFile('image')) {


            $delete_this_image = $category->image;


    
            $path = public_path('/assets/img/category');
            if (File::exists($path.'/'.$category->image)){
                  File::delete($path.'/'.$category->image);
            }



            $img = time().'.'.$r->image->getClientOriginalExtension();
            $r->image->move(public_path('/assets/img/category'), $img);

            $category->image = $img;


        }

        $category->save();
        

      
       
    	return back()->with('success','Category Updated');
    }

    public function delete(Request $r){

         $category = Category::find($r->id);

         $path = public_path('/assets/img/category');
         if (File::exists($path.'/'.$category->image)){
               File::delete($path.'/'.$category->image);
         }
                 
        // $category->delete();

         return response()->json([
            'message' => 'Success'
         ]);
    }



    public function download(){
        $categories = Category::with('products')->orderBy('id','DESC')->get();

        $categories_data =  array();

        foreach ($categories as  $category) {
            $products = $category->products->count() ;
            $this_category = [
               
                'name'  => $category->name,
                'total_product'  =>$products,
                'Date'  =>$category->created_at->format('d-m-Y'),
            ];
            $categories_data[] = $this_category;
        }




        $filename = 'Data_Categories_'.date("l_d_m_Y").'.csv';       
        header("Content-type: text/csv");       
        header("Content-Disposition: attachment; filename=$filename");       
        $output = fopen("php://output", "w");

        $header = ['Name','Total Products','Date'];
        fputcsv($output, $header);
        $header = ['','',''];
        fputcsv($output, $header);  

        foreach($categories_data as $category)       
        {  
            fputcsv($output, $category);  
        }       
        fclose($output); 
    }


    


}
