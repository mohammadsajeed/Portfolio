@extends('admin.admindashboard')
@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal"  method="POST" action="/add_category">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Category Managment</h4>
                    <div class="form-group row">
                        @if(session()->has('mas'))
                        <div class="alert  alert-success">{{session('mas')}}</div>

                     @endif
                     @if(session()->has('delete'))
                     <div class="alert  alert-danger">{{session('delete')}}</div>

                  @endif
                        @error('category')

                        <div class="alert  alert-danger"> {{$message}}</div>
                        @enderror
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="categroy_name" name="category"  placeholder="Category Name ">
                            <br>

                        </div>

                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Datatable</h5>
            <div class="table-responsive">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="date_table" class="table table-striped  " >
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 173.575px;">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Category Name </th>
                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110.85px;" aria-sort="descending">Edit</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 103.637px;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ( $category as $cate  )
                         <tr role="row" class="odd">
                            <td class="">{{$cate->id}}</td>
                            <td class="">{{$cate->cate_name}}</td>
                            <td class="sorting_1"><a href="" class="btn btn-primary">Edit</a></td>
                            <td class="sorting_1"><a class="btn btn-danger" href="category_delete/{{$cate->id}}">Delete </a></td>
                        </tr>
                         @endforeach
                    </tbody>
                </table></div></div>
               </div>
            </div>

        </div>
    </div>
</div>
@endsection
