@extends('admin.admindashboard')
@section('body')
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data"  action="/add_artical">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Articales Managment</h4><br>
                            <div class="form-group row">
                                @if (session()->has('msg'))
                                    <div class="alert  alert-success">{{ session('msg') }}</div>
                                @endif
                                @if (session()->has('delete'))
                                    <div class="alert  alert-danger">{{ session('delete') }}</div>
                                @endif

                                @error('title')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                @error('date')
                                <div class="alert  alert-danger"> {{ $message }}</div>
                            @enderror
                                @error('category')
                                <div class="alert  alert-danger"> {{ $message }}</div>
                            @enderror

                                @error('description')
                                    <div class="alert  alert-danger"> {{ $message }}</div>
                                @enderror
                                <div class="col-md-6 ">
                                    <label for="fname">Artical Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder=" ">
                                        <br>

                                    </div>

                                </div>
                                <div class="col-md-6 ">
                                    <label for="fname">Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="date"
                                            placeholder="DD-MM-YYYY ">
                                        <br>

                                    </div>

                                </div>
                                <div class="col-md-6 ">
                                    <label for="fname">Category </label>
                                    <div class="col-sm-9">

                                      <select name="category"  class="form-control">
                                          <option value=""> Select Category </option>
                                          <option value="1">Web Desgin </option>
                                          <option value="2">Android Development </option>
                                          <option value="3">Backend Development </option>

                                      </select>
                                        <br>

                                    </div>

                                </div>
                                <div class="col-md-6 ">
                                    <label for="fname">Picture</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="title" name="file"
                                         ">
                                        <br>

                                    </div>

                                </div>
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
                                <button type="submit" class="btn btn-primary">Add Articales</button>
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
                                                style="width: 173.575px;">Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Category </th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Date </th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Description </th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 278.038px;">Picture </th>

                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 103.637px;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($read_aritcals as $artical)
                             <tr role="row" class="odd">
                                <td class="">{{$artical->title}}</td>
                                <td class="">@if($artical->category ==1)
                                        {{'Web Desgin '}}
                                @elseif ($artical->category ==2)
                                         {{'Android Development'}}
                                @elseif ($artical->category ==3)
                                         {{'Backend Development '}}
                                @endif</td>
                                <td class="">{{$artical->date}}</td>
                                <td class="">{!! $artical->description !!}</td>
                                <td class=""><a href=""></a><img src="/images/{{$artical->pic}}" alt="" width="60px" height="60px"></td>


                                <td class="sorting_1"><a href="/artical_delete/{{$artical->id}}" class="btn btn-danger"><span style="color: white ">Delete</span></a></td>

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
