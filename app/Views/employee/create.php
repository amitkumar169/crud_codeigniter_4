<?= $this->extend('public_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Add Employee
                        <a href="<?=base_url('employee')?>" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('employee-store') ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" name="first_name" placeholder="first name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" name="last_name" placeholder="last name" class="form-control">
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="enter email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>phone</label>
                                <input type="number" name="phone" placeholder="enter number" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>desigination</label>
                                <input type="text" name="desigination" placeholder="enter desigination" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary px-4">Save Employee</button>
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