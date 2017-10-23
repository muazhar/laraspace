@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Form Layouts</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active">Form Layouts</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Basic Form</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control"
                                           placeholder="First Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control"
                                           placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control"
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control"
                                       placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>

                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="male" checked> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female"> Female
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control"
                                       placeholder="Password">
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Horizontal Form</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">First Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Last Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Password</label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <button class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Inline Form</h6>
                    </div>
                    <div class="card-body">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="staticEmail2" class="sr-only">Email</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                            </div>
                            <div class="form-group mx-sm-3">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Confirm identity</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
