<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use DataTables;
use App\Models\categorie;
use App\Models\sub_categorie;
use App\Models\size_setting;
use App\Models\color_setting;
use App\Models\product_size_info;
use App\Models\product_color_info;
use App\Models\product_image_info;

class ProductController extends Controller
{
    protected $lang;

    protected $sl;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        {
            $this->lang = config ("app.locale");
            $this->sl = 0;
            if ($request->ajax()) {
                $data = product::all();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('sl',function($row){
                            // $i = 1;
                            return $this->sl = $this->sl+1;
                        })
                        ->addColumn('cat_id',function($v){
                            if($v->cat_id > 0)
                            {
                                $cat_name = categorie::where('id',$v->cat_id)->first();
                            }
                            else
                            {
                                $cat_name = '-';
                            }
    
                            if($v->cat_id > 0)
                            {
                                if($this->lang == 'en')
                                {
                                    return $cat_name->cat_name_en;
                                }
                                elseif($this->lang == 'bn')
                                {
                                    return $cat_name->cat_name_bn;
                                }
                            }
                            else
                            {
                                $cat_name = '-';
                            }
    
                        })
                        ->addColumn('sub_cat_id',function($v){
                            if($v->sub_cat_id > 0)
                            {
                                $sub_cat_name = sub_categorie::where('id',$v->sub_cat_id)->first();
                            }
                            else
                            {
                                $sub_cat_name = '-';
                            }
    
                            if($v->sub_cat_id > 0)
                            {
                                if($this->lang == 'en')
                                {
                                    return $sub_cat_name->sub_cat_name_en;
                                }
                                elseif($this->lang == 'bn')
                                {
                                    return $sub_cat_name->sub_cat_name_bn;
                                }
                            }
                            else
                            {
                                $sub_cat_name = '-';
                            }
    
                        })
                        ->addColumn('product_name',function($v){
                            if($this->lang == 'en')
                            {
                                return $v->product_name_en;
                            }
                            elseif($this->lang == 'bn')
                            {
                                return $v->product_name_bn;
                            }
                        })
                        ->addColumn('regular_price',function($v){
    
                                return $v->regular_price;  
                        })
                        ->addColumn('discount_amount',function($v){
                            
                            return $v->discount_amount;  
                        })
                        ->addColumn('status',function($v){
                        if($v->status == 1)
                        {
                            $checked = 'checked';
                        }
                        else
                        {
                            $checked = '';
                        }

                        return '<div class="form-check form-switch">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="productStatus-'.$v->id.'" '.$checked.' onclick="return productStatusChange('.$v->id.')">
                            </label>
                        </div>';
                        })
                        ->addColumn('action', function($row){
                            return '<div class="btn-group">
                            <a href="'.route('product.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                            <form action="'.route('product.destroy',$row->id).'" method="POST">
                            '.csrf_field().'
                            '.method_field('DELETE').'
                                <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                            </form></div>';
                        })
                        ->rawColumns(['sl','cat_id','sub_cat_id','product_name','regular_price','discount_amount','status','action'])
                        ->make(true);
            }

        return view('backend.product.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat_name = categorie::all();
        $size = size_setting::orderBy('order_by')->get();
        $color = color_setting::orderBy('order_by')->get();
        return view('backend.product.create',compact('cat_name','size','color'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(
            'cat_id'=>$request->cat_id,
            'sub_cat_id'=>$request->sub_cat_id,
            'product_name_en'=>$request->product_name_en,
            'product_name_bn'=>$request->product_name_bn,
            'regular_price'=>$request->regular_price,
            'discount_amount'=>$request->discount_amount,
            'min_quantity'=>$request->min_quantity,
            'short_details'=>$request->short_details,
            'description'=>$request->description,
            'information'=>$request->information,
            'status'=>$request->status,
        );

        
        $insert = product::create($data);

        $product_id = $insert->id;

        for ($i=0; $i < count($request->size); $i++) 
        { 
            product_size_info::create([
                'product_id'=>$product_id,
                'size_id'=>$request->size[$i]
            ]);
        }


        for ($i=0; $i < count($request->color); $i++) 
        { 
            product_color_info::create([
                'product_id'=>$product_id,
                'color_id'=>$request->color[$i],
            ]);
        }

        $file = $request->file('image');
        if($file)
        {

            for ($i=0; $i < count($file) ; $i++) 
            {
                $imageName[$i] = rand().'.'.$file[$i]->getClientOriginalExtension();

                $file[$i]->move(public_path().'/backend/img/productImage/',$imageName[$i]);

                product_image_info::create([
                    'product_id'=>$product_id,
                    'image'=>$imageName[$i],
                ]);
            }
        }

        Toastr::success(__('product.create_message'), __('common.success'));
        return redirect()->back();
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
    public function edit(string $id)
    {
        $cat_name = categorie::all();
        $size = size_setting::orderBy('order_by')->get();
        $color = color_setting::orderBy('order_by')->get();

        $data = product::find($id);
        $sub_categorie = sub_categorie::where('cat_id',$data->cat_id)->get();
        $product_id = $id;

        return view('backend.product.edit',compact('data','cat_name','size','color','sub_categorie','product_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function GetSubCategorie($cat_id)
    {
        $this->lang = config('app.locale');
        $data = sub_categorie::where('cat_id',$cat_id)->get();

        if($this->lang == 'en')
        {
            $sl_data = '<option value="">Select One</option>';
        }
        elseif($this->lang == 'bn')
        {
            $sl_data = '<option value="">নির্বাচন করুন</option>';
        }


        foreach($data as $v)
        {
            if($this->lang == 'en')
            {

                $sl_data .= '<option value="'.$v->id.'">'.$v->sub_cat_name_en.'</option>';
            }
            elseif($this->lang == 'bn')
            {
                $sl_data .= '<option value="'.$v->id.'">'.$v->sub_cat_name_bn.'</option>';
            }
        }
        return $sl_data;
    }
}
