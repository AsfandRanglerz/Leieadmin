<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Property::all();
        return view('admin.property.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=User::all();
        return view('admin.property.add',compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'street_name'=> 'required',
            'street_number'=> 'required',
            'zip_code'=> 'required',
            'city'=> 'required',
            'commune'=> 'required',
            'user_id'=>'required',
        ]);
        $data=$request->only(['street_name','street_number','zip_code','city','commune','usage_number','farm_number','fixed_number','property_name','property_description','user_id']);
        Property::create($data);
        return redirect()->route('admin-property.index')->with('message','Property Created Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::all();
        $data=Property::find($id);
        return view('admin.property.edit',compact('data','users'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'street_name'=> 'required',
            'street_number'=> 'required',
            'zip_code'=> 'required',
            'city'=> 'required',
            'commune'=> 'required',
            'section_number'=> 'required',
            'user_id'=>'required',
        ]);
        $data=$request->only(['street_name','street_number','zip_code','city','commune','usage_number','farm_number','section_number','fixed_number','property_name','property_description','user_id']);
        Property::where('id',$id)->update($data);
        return redirect()->route('admin-property.index')->with('message','Property Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy($id)
    {
        Property::find($id)->delete();
        return redirect()->route('admin-property.index')->with('message','Property Deleted Successfully');
    }
    public function block($id){
        Property::where('id',$id)->update(['status'=>'block']);
        return redirect()->route('admin-property.index')->with('message','Property Blocked');
    }
    public function unblock($id){
        Property::where('id',$id)->update(['status'=>'unblock']);
        return redirect()->route('admin-property.index')->with('message','Property Unblocked');
    }
}
