<table class="table table-striped border">
    <thead class="table-dark">
        <tr >
            <th>S.No</th>
            <th>Name</th>
            <th>symptoms</th>
            <th>prescription</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $index=0;
        foreach($data as $info){
        ?>
        <tr>
            <td><?=++$index;?></td>
            <td><?=$info['Name'];?></td>
            <td><?php echo $info['Symptoms'];?></td>
            <td><?php echo $info['Prescription'];?></td>
            <td>
                <a class="btn btn-success" href="<?=ROOT;?>disease/edit/<?=$info['id'];?>">Edit</a>
                <a class="btn btn-danger" href="#" onclick="confirmit('disease/destroy/<?=$info['id'];?>')">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>