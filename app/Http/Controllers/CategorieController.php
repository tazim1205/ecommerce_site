<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use DataTables;

class CategorieController extends Controller
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
            $data = categorie::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('sl',function($row){
                        return $this->sl = $this->sl+1;
                    })
                    ->addColumn('categorie_name',function($v){
                        if($this->lang == 'en')
                        {
                            return $v->cat_name_en;
                        }
                        elseif($this->lang == 'bn')
                        {
                            return $v->cat_name_bn;
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
                                    <input class="form-check-input" type="checkbox" id="categorieStatus-'.$v->id.'" '.$checked.' onclick="return categorieStatusChange('.$v->id.')">
                            </label>
                        </div>';
                    })
                    ->addColumn('action', function($row){
                        return '<div class="btn-group">
                        <a href="'.route('categorie.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                        <form action="'.route('categorie.destroy',$row->id).'" method="POST">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                            <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                        </form></div>';
                    })
                    ->rawColumns(['sl','categorie_name','order_by','status','action'])
                    ->make(true);
        }
        return view('backend.categorie.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(
            'cat_name_en'=>$request->cat_name_en,
            'cat_name_bn'=>$request->cat_name_bn,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        categorie::create($data);
        Toastr::success(__('categorie.create_message'), __('common.success'));
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
        $data = categorie::find($id);
        return view('backend.categorie.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'cat_name_en'=>$request->cat_name_en,
            'cat_name_bn'=>$request->cat_name_bn,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        categorie::find($id)->update($data);
        Toastr::success(__('categorie.update_message'), __('common.success'));
        return redirect()->back();
    }

    public function categorieStatusChange($id)
    {
       $check = categorie::find($id);

       if($check->status == 1)
       {
            categorie::find($id)->update(['status'=>0]);
       }
       else
       {
            categorie::find($id)->update(['status'=>1]);
       }

       return 1;
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        categorie::find($id)->delete();
        Toastr::success(__('categorie.delete_message'), __('common.success'));
        return redirect()->back();
    }

    public function categorie_restore($id)
    {
        categorie::where('id',$id)->withTrashed()->restore();
        Toastr::success(__('categorie.retrive_message'), __('common.success'));
        return redirect()->back();
    }

    public function categorie_delete($id)
    {
        categorie::where('id',$id)->withTrashed()->forceDelete();
        Toastr::success(__('categorie.permenant_delete'), __('common.success'));
        return redirect()->back();
    }
}
