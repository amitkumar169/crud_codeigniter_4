<?= $this->extend('public_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">

        <?php
            if(session()->getFlashdata('status')){
                echo "<h4>".session()->getFlashdata('status')."</h4>";
            }
        ?>

            <div class="card">
                <div class="card-header">
                    <h4>Add Data
                        <a href="<?=base_url('employee-add')?>" class="btn btn-primary float-end">Add Employee</a>
                    </h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Designation</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                        <?php foreach ($employee as $emp) : ?>
                            <tr>
                                <td><?= $emp['id'] ?></td>
                                <td><?= $emp['first_name'] ?></td>
                                <td><?= $emp['last_name'] ?></td>
                                <td><?= $emp['email'] ?></td>
                                <td><?= $emp['phone'] ?></td>
                                <td><?= $emp['desgination'] ?></td>
                                <td><?= $emp['create_at'] ?></td>
                                <td>
                                    <a href="<?= base_url('employee/edit/'.$emp['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                                    <!-- <a href="<?//= base_url('employee/delete/'.$emp['id']) ?>" class="btn btn-danger btn-sm">Delete</a> -->
                                    <form action="<?= base_url('employee/delete/'.$emp['id']) ?>" method="POST">
                                        <input type="hidden" name="_method" value="DELETE"> <!--delete data using delete method-->
                                        <button type="submit" class="btn btn-danger btn-sm float-end">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>  <!-- Add parentheses here -->