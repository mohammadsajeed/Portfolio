@extends('admin.admindashboard')
@section('body')
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="POST" action="/add_project">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Porjects Managment</h4><br>
                            <div class="form-group row">
                                @if (session()->has('msg'))
                                    <div class="alert  alert-success">{{ session('msg') }}</div>
                                @endif
                                @if (session()->has('delete'))
                                    <div class="alert  alert-success">{{ session('delete') }}</div>
                                @endif

                                @error('skills_name')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                @error('skills_persentage')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                <div class="col-md-6 ">
                                    <label for="fname">Project Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="project_name"
                                            placeholder="Please Write Project Name ">
                                        <br>

                                    </div>
                                    <label for="fname">Github Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="github_link"
                                            placeholder="Please Write Github Link ">
                                        <br>

                                    </div>

                                </div>
                                <div class="col-md-6 ">
                                    <label for="fname">Description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="description"
                                            placeholder="Please Write Project decription ">
                                        <br>

                                    </div>
                                    <label for="fname">Picture</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="title" name="pic"
                                            ">
                                        <br>

                                    </div>

                                </div>
                                {{-- <div>
                                    <label for="fname">About Us </label>
                                    <div class="col-sm-9">
                                        <textarea name="description" id="editor1" class="form-control"  cols="30" rows="10"></textarea>
                                        <br>

                                    </div>
                                </div> --}}


                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Add Project</button>
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
                                                style="width: 173.575px;">Technology Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Ability Persentage </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Start date: activate to sort column ascending"
                                                style="width: 110.85px;" aria-sort="descending">Edit</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 103.637px;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($read_technology as $technology)
                             <tr role="row" class="odd">
                                <td class="">{{$technology->technology_name}}</td>
                                <td class="">{{$technology->ablity_persentage}}</td>
                                <td class="sorting_1"><a href="" class="btn btn-primary">Edit</a></td>
                                <td class="sorting_1"><button class="btn btn-danger" style="color:white"> Delete</button></td>

                            </tr>

                             @endforeach --}}

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
