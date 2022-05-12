<?php
namespace App\Http\Controllers\backend;
use  App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class backendcontreoller  extends Controller {
    protected $model;
public function __construct(Model$model)
{
$this->model=$model;
}
    public function index(){
        $rows=$this->model;
        $rows=$this->fliter($rows);
        $with=$this->with();
        if(!empty($with)){
            $rows=$rows->with($with);
        }
        $rows=$rows->paginate(10);

        return view('backeend.'.$this->getclassname().'.index',compact('rows'));
    }

    public function create(){
       $append=$this->append();
        return view('backeend.'.$this->getclassname().'.create')->with( $append);
    }
    protected function getclassname(){
    return str_plural(strtolower(class_basename($this->model)));
    }
    public function delete($id){
        $row=$this->model->findorfail($id);
        $row->delete();
        alert()->success('','تم الحذف بنجاح');
        return redirect()->back();
    }
    public function edit($id){
        $row=$this->model->findorfail($id);
        $append=$this->append();
        return view('backeend.'.$this->getclassname().'.edit',compact('row'))->with($append);
    }
    protected function fliter($rows){
    return $rows;
    }
    protected function with(){
        return [];
    }
    protected function append(){
        return [];
    }
}
