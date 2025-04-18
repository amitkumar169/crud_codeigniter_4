<?= $this->extend('public_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Employee
                        <a href="<?=base_url('employee')?>" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('employee/update/'.$employee['id'] ) ?>" method="POST">
                        <input type="hidden" name="_method" value="PUT"> <!--update data using put method-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" name="first_name" value="<?= $employee['first_name'] ?>" placeholder="first name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" name="last_name" value="<?= $employee['last_name'] ?>" placeholder="last name" class="form-control">
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $employee['email'] ?>" placeholder="enter email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>phone</label>
                                <input type="number" name="phone" value="<?= $employee['phone'] ?>" placeholder="enter number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>desigination</label>
                                <input type="text" name="desigination" value="<?= $employee['desgination'] ?>" placeholder="enter desigination" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary px-4">Update Employee</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>  <!-- Add parentheses here -->