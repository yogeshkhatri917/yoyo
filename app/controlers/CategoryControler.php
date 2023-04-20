<?php
class CategoryControler extends Controler{
    public $cat; 
    public function __construct(){
        
        parent::__construct();
        $this->cat=$this->loadModel('category');
        
    }
    public function index(){
        $data=$this->cat->All();
        $this->view->load("category.index",compact('data'));
        
    }
    public function create(){
        $this->view->load("category.create");
        //echo "<div>This is create of Emplopyee</div>";
    }
    public function edit($id){
        $info=$this->cat->find($id);
        $this->view->load('category.edit',compact('info')); 
        //print_r($info);
        //echo "<div>This is edit of $id</div>";
    }
    public function store(){
        $storeinfo=[
            'name'=>request('name'),
            'description'=>request('description'),
        ];
        if($this->cat->save($storeinfo)){
            Session::set('gmsg',"Data save successfully");
            redirect('category.index'); 
        }else{
        redirect('category.create');
        //echo "<div>This is store of Emplopyee</div>";
        }
    }
    public function update($id){
        $storeinfo=[
            'name'=>request('name'),
            'description'=>request('description'),
        ];
        if($this->cat->update($storeinfo,$id)){
            Session::set('gmsg',"Data update successfully");
            redirect('category.index'); 
        }else{
            redirect('category.create');
        //echo "<div>This is update of Emplopyee</div>";
        }   
    }  
    public function destroy($id){
        if($this->cat->delete($id)){
            Session::set('emsg',"Data delete successfully");
            redirect('category.index'); 
        }else{
        redirect('category.create');
        //echo "<div>This is delete of Emplopyee</div>";
        }
    }
    
}
?>