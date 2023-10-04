<?php

namespace App\Http\Controllers;

use App\Models\price_range;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use DataTables;

class PriceRangeController extends Controller
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
                $data = price_range::all();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('sl',function($row){
                            // $i = 1;
                            return $this->sl = $this->sl+1;
                        })
                        ->addColumn('from',function($v){
                            return $v->from;
                        })
                        ->addColumn('to',function($v){
                            return $v->to;
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
                                    <input class="form-check-input" type="checkbox" id="priceRangeStatus-'.$v->id.'" '.$checked.' onclick="return priceRangeStatusChange('.$v->id.')">
                            </label>
                        </div>';
                        })
                        ->addColumn('action', function($row){
                            return '<div class="btn-group">
                            <a href="'.route('price_range.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                            <form action="'.route('price_range.destroy',$row->id).'" method="POST">
                            '.csrf_field().'
                            '.method_field('DELETE').'
                                <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                            </form></div>';
                        })
                        ->rawColumns(['sl','from','to','order_by','status','action'])
                        ->make(true);
            }

        return view('backend.price_range.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.price_range.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(
            'from'=>$request->from,
            'to'=>$request->to,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        price_range::create($data);
        Toastr::success(__('price_range.create_message'), __('common.success'));
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
        $data = price_range::find($id);
        return view('backend.price_range.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array(
            'from'=>$request->from,
            'to'=>$request->to,
            'order_by'=>$request->order_by,
            'status'=>$request->status,
        );
        price_range::find($id)->update($data);
        Toastr::success(__('price_range.update_message'), __('common.success'));
        return redirect()->back();
    }

    public function priceRangeStatusChange($id)
    {
       $check = price_range::find($id);

       if($check->status == 1)
       {
            price_range::find($id)->update(['status'=>0]);
       }
       else
       {
            price_range::find($id)->update(['status'=>1]);
       }

       return 1;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        price_range::find($id)->delete();
        Toastr::success(__('price_range.delete_message'), __('common.success'));
        return redirect()->back();
    }

    public function priceRange_restore($id)
    {
        price_range::where('id',$id)->withTrashed()->restore();
        Toastr::success(__('price_range.retrive_message'), __('common.success'));
        return redirect()->back();
    }

    public function priceRange_delete($id)
    {
        price_range::where('id',$id)->withTrashed()->forceDelete();
        Toastr::success(__('price_range.permenant_delete'), __('common.success'));
        return redirect()->back();
    }
}
