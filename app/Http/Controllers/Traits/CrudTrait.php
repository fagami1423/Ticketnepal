<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Auth;
trait CrudTrait
{
    public function index()
    {
        $results = $this->classmodel->all();
        return view($this->views['index'])->with(['results'=>$results]);
    }

    public function create()
    {
        return view($this->views['create']);
    }

    public function store(Request $request)
    {
        $redirect = isset($this->redirect) ? $this->redirect : $this->view;
        $this->validate('$request',$this->validation);
        $data = $request->except('_token');
        if($request->hasFile('bus_image')){
            $fileWithExt = $request->file('bus_image')->getClientOriginalName();
            $namefile = pathinfo($fileWithExt, PATHINFO_namefile);
            $extension = $request->file('bus_image')->getClientOriginalExtension();
            $fileToStore= $namefile.'_'.time().'.'.$extension;
            $path = $request->file('bus_image')->storeAs('public/images', $fileToStore);
        } else {
            $fileToStore = 'no image';
        }
        $data['admin_id']=auth()->user()->id;
        $data['bus_image']=$fileToStore;
        $classmodel = $this->classmodel->create($data);
        return redirect(route("{$redirect}.index"))->with('message',
            'Record was successfully saved!!');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $classmodel = $this->classmodel->find($id);
        return view($this->views['edit'], compact('classmodel'));
    }

    public function update(Request $request, $id)
    {
        $redirect = isset($this->redirect) ? $this->redirect : $this->view;
        $data = $request->except('_token');
        $classmodel = $this->classmodel->find($id);
        $classmodel->update($data);
        return redirect(route("{$redirect}.edit", $id))->with('message', 'Record was successfully Updated!!');
    }
    public function destroy($id)
    {
        $classmodel = $this->classmodel->find($id);
        $classmodel->delete($id);
        return redirect()->back()->with('message', 'Record was successfully deleted!');
    }

}
