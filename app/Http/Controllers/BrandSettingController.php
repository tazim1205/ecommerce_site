<?php

namespace App\Http\Controllers;

use App\Models\brand_setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use DataTables;

class BrandSettingController extends Controller
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
                $data = brand_setting::all();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('sl',function($row){
                            // $i = 1;
                            return $this->sl = $this->sl+1;
                        })
                        ->addColumn('brand_name',function($v){
                            if($this->lang == 'en')
                            {
                                return $v->brand_name_en;
                            }
                            elseif($this->lang == 'bn')
                            {
                                return $v->brand_name_bn;
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
                                    <input class="form-check-input" type="checkbox" id="brandStatus-'.$v->id.'" '.$checked.' onclick="return brandStatusChange('.$v->id.')">
                            </label>
                        </div>';
                        })
                        ->addColumn('action', function($row){
                            return '<div class="btn-group">
                            <a href="'.route('brand_setting.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                            <form action="'.route('brand_setting.destroy',$row->id).'" method="POST">
                            '.csrf_field().'
                            '.method_field('DELETE').'
                                <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                            </form></div>';
                        })
                        ->rawColumns(['sl','brand_name','order_by','status','action'])
                        ->make(true);
            }
    
            return view('backend.brand_setting.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand_setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(
            'brand_name_en'=>$request->brand_name_en,
            'brand_name_bn'=>$request->brand_name_bn,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        brand_setting::create($data);
        Toastr::success(__('brand_setting.create_message'), __('common.success'));
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
        $data = brand_setting::find($id);
        return view('backend.brand_setting.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array(
            'brand_name_en'=>$request->brand_name_en,
            'brand_name_bn'=>$request->brand_name_bn,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        brand_setting::find($id)->update($data);
        Toastr::success(__('brand_setting.update_message'), __('common.success'));
        return redirect()->back();
    }

    public function brandStatusChange($id)
    {
       $check = brand_setting::find($id);

       if($check->status == 1)
       {
            brand_setting::find($id)->update(['status'=>0]);
       }
       else
       {
            brand_setting::find($id)->update(['status'=>1]);
       }

       return 1;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        brand_setting::find($id)->delete();
        Toastr::success(__('brand_setting.delete_message'), __('common.success'));
        return redirect()->back();
    }

    public function brand_restore($id)
    {
        brand_setting::where('id',$id)->withTrashed()->restore();
        Toastr::success(__('brand_setting.retrive_message'), __('common.success'));
        return redirect()->back();
    }

    public function brand_delete($id)
    {
        brand_setting::where('id',$id)->withTrashed()->forceDelete();
        Toastr::success(__('brand_setting.permenant_delete'), __('common.success'));
        return redirect()->back();
    }
}
