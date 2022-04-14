@extends('admin.admindashboard')
@section('body')
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="POST"  action="/add_about">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">About Managment</h4><br>
                            <div class="form-group row">
                                @if (session()->has('msg'))
                                    <div class="alert  alert-success">{{ session('msg') }}</div>
                                @endif
                                @if (session()->has('delete'))
                                    <div class="alert  alert-danger">{{ session('delete') }}</div>
                                @endif

                                @error('photo')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                @error('Description')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                {{-- <div class="col-md-6 ">
                                    <label for="fname">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Title ">
                                        <br>

                                    </div>

                                </div> --}}
                                <div>
                                    <label for="fname">About Us </label>
                                    <div class="col-sm-9">
                                        <textarea name="description" id="editor1" class="form-control"  cols="30" rows="10"></textarea>
                                        <br>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Add About Info</button>
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
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Description </th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 103.637px;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($read_about as $about)
                             <tr role="row" class="odd">

                                <td class="">{!! $about->Description !!}</td>
                                <td class="sorting_1"><a href="/about_delete/{{$about->id}}" class="btn btn-danger" ><span style="color: white">Delete</span></a></td>

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
