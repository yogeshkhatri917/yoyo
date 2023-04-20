<div class="alert alert-primary h3 text-center">
    Disease Edit Form
</div>
<form action="<?=ROOT;?>disease/update/<?=$info['id'];?>" method="post">
    <div class="container border">
    <div class="mb-3">
        <label for="name">Disease Name:</label>
        <input type="text" name="name" value="<?=$info['Name'];?>" class="form-control" id="name" placeholder="Enter Disease Name">
    </div>
    <div class="mb-3">
        <label for="symptoms">symptoms:</label>
        <textarea name="symptoms" class="form-control" placeholder="Enter symptoms" id="symptoms"><?=$info['Symptoms'];?></textarea>
    </div>
    <div class="mb-3">
        <label for="prescription">Prescription:</label>
        <textarea name="prescription" class="form-control" placeholder="Enter Prescription"><?=$info['Prescription'];?></textarea>
    </div>
    <div class="mb-3">
        <label for="checkupdate">Checkup Date:</label>
        <input type="date" name="checkupdate" class="form-control" id="checkupdate" value="<?=$info['checkupdate'];?>">
    </div>
    <div class="mb-3 text-center">
        <button class="btn btn-success">Update</button>
    </div>
</div>
</form>