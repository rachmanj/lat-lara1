@extends('templates.default')

@section('breadcrumb')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Add New Team</h4>
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="javaScript:void();">Rocker</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card"> <!--Please remove the height before using this page style="height:600px" -->
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="display_name">Display Name</label>
                            <input type="text" name="display_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary shadow-primary px-5">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
