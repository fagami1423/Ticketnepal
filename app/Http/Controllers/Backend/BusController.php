<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Operator;
use App\Bus;
use App\Http\Controllers\Traits\CrudTrait;

class BusController extends Controller
{
    use CrudTrait;

    protected $classmodel;
    protected $views=[];
    
    public function __construct(Bus $classmodel)
    {
        $this->middleware('auth:admin');
        $this->classmodel = $classmodel;
        $this->views = [
            'index' => 'backend.buses.index',
            'create' => 'backend.buses.create',
            'edit' => 'backend.buses.edit'
        ];
        $this->redirect='bus';
        $this->validation=[
            'operator_id'=>'required',
            'boarding_point'=>'required',
            'bus_no'=>'required',
            'type'=>'required',
            'no_of_seats'=>'required|number',
            'features'=>'required|max:191',
            'driver_name'=>'required',
            'driver_contact'=>'required|string|max:10',
            'availability'=>'required|string|max:50',
            'ticket_price'=>'required|number|' 
        ];
    }

    public function index(){
        $operators=Operator::all();
        $results=$this->classmodel->all();
        return view($this->views['index'])->with(['operators'=>$operators,'results'=>$results]);
    }

    public function edit($id){
        $operators=Operator::all();
        $classmodel = $this->classmodel->find($id);
        return view($this->views['edit'], compact('classmodel'))->with(['operators'=>$operators]);;
        
    }

}
