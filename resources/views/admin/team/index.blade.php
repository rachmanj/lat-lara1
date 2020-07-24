@extends('templates.default')

@section('breadcrumb')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <h4 class="page-title">Teams Data</h4>
        <div class="col-lg-12">
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="#">Rocker</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
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
                    <a href="{{ route('team.create') }}" class="btn btn-success btn-sm mb-1"><i class="fa fa-plus"></i><span> Add New</span></a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Display Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ACC</td>
                                    <td>Accounting</td>
                                    <td>Accounting</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
