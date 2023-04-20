<?php
class EmployeeControler extends Controler{
    public function index(){
        $empobj=$this->loadModel('employee');
        $empobj->All();
        $this->view->load("employee.index");
        
    }
    public function create(){
        echo "<div>This is create of Emplopyee</div>";
    }
    public function edit(){
        echo "<div>This is edit of Emplopyee</div>";
    }
    public function store(){
        echo "<div>This is store of Emplopyee</div>";
    }
    public function update(){
        echo "<div>This is update of Emplopyee</div>";
    }  
    public function destroy(){
        echo "<div>This is delete of Emplopyee</div>";
    }
    
}
?>