<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
                <h4 class="card-title">User Form</h4>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password Here">
                        </div>
                    </div>
                            <div class="form-group row">
                                <label class="col-md-3 m-t-15">Choose Role</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="role">
                                        <option>Select</option>
                                        <optgroup label="Role">
                                            <option value="admin">Admin</option>
                                            <option value="User">User</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                </div>
                <div class="border-top">
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
