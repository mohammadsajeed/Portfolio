@extends('admin.admindashboard')
@section('body')
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/add_project">
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
                                @error('project_name')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                @error('github_link')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                @error('pic')
                                <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                @error('description')
                                <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                <div class="col-md-6 ">
                                    <label for="fname">Project Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="project_name"
                                            placeholder="Please Write Project Name ">
                                        <br>

                                    </div>
                                    <label for="fname"> Link</label>
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
                                                style="width: 173.575px;">Project Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Decription </th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Link  </th> <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Picture </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Start date: activate to sort column ascending"
                                                style="width: 110.85px;" aria-sort="descending">Delete</th>s

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($read_project as $project)
                             <tr role="row" class="odd">
                                <td class="">{{$project->project_name}}</td>
                                <td class="">{{$project->description}}</td>
                                <td class="">{{$project->github_link}}</td>
                                <td class=""> <a href="images/{{$project->pic}}" target="blank"><img src="images/{{$project->pic}}" width="80px" height="80px" alt=""></a></td>

                                <td class="sorting_1"><a href="/project_delete/{{$project->id}}" class="btn btn-danger"><span style="color: white ">Delete</span></a></td>

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
