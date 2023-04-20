<?php
class DiseaseControler extends Controler{
    public $dis; 
    public function __construct(){
        
        parent::__construct();
        check_login();
        $this->dis=$this->loadModel('disease');
        
    }
    public function index(){
        $data=$this->dis->All();
        $this->view->load("disease.index",compact('data'));
        
    }
    public function create(){
        $this->view->load("disease.create");
        //echo "<div>This is create of Emplopyee</div>";
    }
    public function edit($id){
        $info=$this->dis->find($id);
        $this->view->load('disease.edit',compact('info')); 
        //print_r($info);
        //echo "<div>This is edit of $id</div>";
    }
    public function store(){
        $file="";
        if($_FILES['pics']['name']){
            $file=move($_FILES['pics']['tmp_name'],time()."_".$_FILES['pics']['name']);
        }
        $storeinfo=[
            'name'=>request('name'),
            'symptoms'=>request('sysptoms'),
            'prescription'=>request('prescription'),
            'pics'=>$file
        ];
        $this->dis->save($storeinfo);
        redirect('disease');
        //echo "<div>This is store of Emplopyee</div>";
    }
    public function update($id){
        $storeinfo=[
            'name'=>request('name'),
            'symptoms'=>request('symptoms'),
            'prescription'=>request('prescription')
        ];
        $this->dis->update($storeinfo,$id);
        redirect('disease');

        //echo "<div>This is update of Emplopyee</div>";
    }  
    public function destroy($id){
        $this->dis->delete($id);
        redirect('disease');
        //echo "<div>This is delete of Emplopyee</div>";
    }
    
}
?>