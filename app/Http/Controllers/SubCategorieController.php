<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\sub_categorie;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use DataTables;

class SubCategorieController extends Controller
{
    protected $lang;

    protected $sl;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->lang = config ("app.locale");
        $this->sl = 0;
        if ($request->ajax()) {
            $data = sub_categorie::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('sl',function($row){
                        return $this->sl = $this->sl+1;
                    })
                    ->addColumn('categorie',function($v){
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
                    ->addColumn('sub_categorie_name',function($v){
                        if($this->lang == 'en')
                        {
                            return $v->sub_cat_name_en;
                        }
                        elseif($this->lang == 'bn')
                        {
                            return $v->sub_cat_name_bn;
                        }
                    })
                    ->addColumn('order_by',function($v){
                        return $v->order_by;
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
                                    <input class="form-check-input" type="checkbox" id="subcategorieStatus-'.$v->id.'" '.$checked.' onclick="return subcategorieStatusChange('.$v->id.')">
                            </label>
                        </div>';
                    })
                    ->addColumn('action', function($row){
                        return '<div class="btn-group">
                        <a href="'.route('sub_categorie.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                        <form action="'.route('sub_categorie.destroy',$row->id).'" method="POST">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                            <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                        </form></div>';
                    })
                    ->rawColumns(['sl','categorie','sub_categorie_name','order_by','status','action'])
                    ->make(true);
        }
        return view('backend.sub_categorie.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat_name = categorie::all();
        return view('backend.sub_categorie.create',compact('cat_name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(
            'cat_id'=>$request->cat_id,
            'sub_cat_name_en'=>$request->sub_cat_name_en,
            'sub_cat_name_bn'=>$request->sub_cat_name_bn,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        sub_categorie::create($data);
        Toastr::success(__('sub_categorie.create_message'), __('common.success'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorie_data = categorie::all();
        $data = sub_categorie::find($id);
        return view('backend.sub_categorie.edit',compact('categorie_data','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = array(
            'cat_id'=>$request->cat_id,
            'sub_cat_name_en'=>$request->sub_cat_name_en,
            'sub_cat_name_bn'=>$request->sub_cat_name_bn,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        sub_categorie::find($id)->update($data);
        Toastr::success(__('sub_categorie.update_message'), __('common.success'));
        return redirect()->back();
    }

    public function subcategorieStatusChange($id)
    {
       $check = sub_categorie::find($id);

       if($check->status == 1)
       {
            sub_categorie::find($id)->update(['status'=>0]);
       }
       else
       {
            sub_categorie::find($id)->update(['status'=>1]);
       }

       return 1;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        sub_categorie::find($id)->delete();
        Toastr::success(__('sub_categorie.delete_message'), __('common.success'));
        return redirect()->back();
    }

    public function subcategorie_restore($id)
    {
        sub_categorie::where('id',$id)->withTrashed()->restore();
        Toastr::success(__('sub_categorie.retrive_message'), __('common.success'));
        return redirect()->back();
    }

    public function subcategorie_delete($id)
    {
        sub_categorie::where('id',$id)->withTrashed()->forceDelete();
        Toastr::success(__('sub_categorie.permenant_delete'), __('common.success'));
        return redirect()->back();
    }
}
