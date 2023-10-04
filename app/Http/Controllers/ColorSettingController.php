<?php

namespace App\Http\Controllers;

use App\Models\color_setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use DataTables;

class ColorSettingController extends Controller
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
                $data = color_setting::all();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('sl',function($row){
                            // $i = 1;
                            return $this->sl = $this->sl+1;
                        })
                        ->addColumn('color_name',function($v){
                            if($this->lang == 'en')
                            {
                                return $v->color_name_en;
                            }
                            elseif($this->lang == 'bn')
                            {
                                return $v->color_name_bn;
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
                                    <input class="form-check-input" type="checkbox" id="colorStatus-'.$v->id.'" '.$checked.' onclick="return colorStatusChange('.$v->id.')">
                            </label>
                        </div>';
                        })
                        ->addColumn('action', function($row){
                            return '<div class="btn-group">
                            <a href="'.route('color_setting.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                            <form action="'.route('color_setting.destroy',$row->id).'" method="POST">
                            '.csrf_field().'
                            '.method_field('DELETE').'
                                <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                            </form></div>';
                        })
                        ->rawColumns(['sl','color_name','order_by','status','action'])
                        ->make(true);
            }

            return view('backend.color_setting.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.color_setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(
            'color_name_en'=>$request->color_name_en,
            'color_name_bn'=>$request->color_name_bn,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        color_setting::create($data);
        Toastr::success(__('color_setting.create_message'), __('common.success'));
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
        $data = color_setting::find($id);
        return view('backend.color_setting.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array(
            'color_name_en'=>$request->color_name_en,
            'color_name_bn'=>$request->color_name_bn,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        color_setting::find($id)->update($data);
        Toastr::success(__('color_setting.update_message'), __('common.success'));
        return redirect()->back();
    }

    public function colorStatusChange($id)
    {
        $check = color_setting::find($id);
        
        if ($check->status == 1) 
        {
            color_setting::find($id)->update(['status'=>0]);
        }
        else 
        {
            color_setting::find($id)->update(['status'=>1]);
        }

        return 1;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        color_setting::find($id)->delete();
        Toastr::success(__('color_setting.delete_message'), __('common.success'));
        return redirect()->back();
    }

    public function color_restore($id)
    {
        color_setting::where('id',$id)->withTrashed()->restore();
        Toastr::success(__('color_setting.retrive_message'), __('common.success'));
        return redirect()->back();
    }

    public function color_delete($id)
    {
        color_setting::where('id',$id)->withTrashed()->forceDelete();
        Toastr::success(__('color_setting.permenant_delete'), __('common.success'));
        return redirect()->back();
    }
}
