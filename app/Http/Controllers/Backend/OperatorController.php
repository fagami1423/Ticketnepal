<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Operator;
use App\Http\Controllers\Traits\CrudTrait;

class OperatorController extends Controller
{
    use CrudTrait;

    protected $classmodel;

    protected $views=[];
    public function __construct(Operator $classmodel)
    {
        $this->middleware('auth:admin');
        $this->classmodel=$classmodel;
        $this->views = [
            'index'=>'backend.operators.index',
            'create'=>'backend.operators.create',
            'edit'=>'backend.operators.edit'
        ];
        $this->redirect='operator';
        $this->validation=[
            'name'=>'required|string|max:255',
            'contact'=>'required|number|max:15',
            'address'=>'required|string|max:255'
        ];
                  
    }

}
