@extends('admin.admindashboard')
@section('body')
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="POST"  action="/add_experience">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Experience Managment</h4><br>
                            <div class="form-group row">
                                @if (session()->has('msg'))
                                    <div class="alert  alert-success">{{ session('msg') }}</div>
                                @endif
                                @if (session()->has('delete'))
                                    <div class="alert  alert-success">{{ session('delete') }}</div>
                                @endif

                                @error('feild_name')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                @error('description')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                <div class="col-md-12 ">
                                    <label for="fname">Field Nmae </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="feild_name"
                                            placeholder="Please Write a Field  ">
                                        <br>

                                    </div>

                                </div>
                                <div>
                                    <label for="fname">Description About Feild </label>
                                    <div class="col-sm-9">
                                        <textarea name="description" id="editor1" class="form-control"  cols="30" rows="10"></textarea>
                                        <br>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Add Field</button>
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
                                <table id="date_table" class="table table-striped  ">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 173.575px;">Field Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Description </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Start date: activate to sort column ascending"
                                                style="width: 110.85px;" aria-sort="descending">Edit</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 103.637px;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($read_experience as $experience)
                             <tr role="row" class="odd">
                                <td class="">{{$experience->feild_name}}</td>
                                <td class="">{!! $experience->description !!}</td>
                                <td class="sorting_1"><a href="" class="btn btn-primary">Edit</a></td>
                                <td class="sorting_1"><button class="btn btn-danger " wire:click.prevent="delete({{$experience->id}})"> Delete</button></td>

                            </tr>

                             @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    </div>
@endsection
