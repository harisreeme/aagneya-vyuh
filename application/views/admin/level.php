<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<link href="http://localhost/vyuhcss/ranklist.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://localhost/vyuhcss/ranklist.js"></script>

<!-- Include the above in your HEAD tag -->

<div class="container">
    <h3>Manage Level</h3>
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Treasure Hunt 2018</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    <button class="btn btn-default btn-xs btn-add"><span class="glyphicon glyphicon-plus"></span> Add</button>
                    <button class="btn btn-default btn-xs btn-save"><span class="glyphicon glyphicon-send"></span> Save</button>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Serial Number" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Question" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Answer" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Active" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Type" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Hint" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Hint Status" disabled></th>
                    </tr>
                </thead>
                <tbody>


                <?php $i=1; ?>
                <?php foreach ($levelData_admin as $level): ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $level['serial_number']; ?></td>
                        <td><?php echo $level['question']; ?></td>
                        <td><?php echo $level['answer']; ?></td>
                        <td><?php echo $level['active']; ?></td>
                        <td><?php echo $level['type']; ?></td>
                        <td><?php echo $level['hint']; ?></td>
                        <td><?php echo $level['hint_status']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
