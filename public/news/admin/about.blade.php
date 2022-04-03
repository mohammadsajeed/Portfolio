@extends('admin.admindashboard')
@section('body')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" method="POST"  enctype="multipart/form-data" action="/add_about">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">About  Managment</h4><br>
                        <div class="form-group row">
                            @if(session()->has('msg'))
                            <div class="alert  alert-success">{{session('msg')}}</div>

                            @endif
                            @if(session()->has('delete'))
                            <div class="alert  alert-success">{{session('delete')}}</div>

                            @endif

                            @error('photo')

                            <div class="alert  alert-danger"> {{$message}}</div>
                            @enderror
                            @error('description')

                            <div class="alert  alert-danger"> {{$message}}</div>
                            @enderror
                            <div  class="col-md-6 ">
                               <label for="fname" >Title</label>
                               <div class="col-sm-9">
                                   <input type="text" class="form-control" id="title"  name="title" placeholder="Title ">
                                   <br>

                               </div>

                            </div>
                            <div  class="col-md-6 ">
                               <label for="fname" >Picture</label>
                               <div class="col-sm-9">
                                   <input type="file" class="form-control" id="photo"  name="photo" >
                                   <br>

                               </div>
                            </div>
                            <div  >
                               <label for="fname" >Description About Company</label>
                               <div class="col-sm-9">
                                   <textarea name="description" id="editor1" class="form-control"  name="description" cols="30" rows="10"></textarea>
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
                            <table id="date_table" class="table table-striped  " >
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 173.575px;">Title</th>
                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Description </th>
                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Picture </th>
                                <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110.85px;" aria-sort="descending">Edit</th>
                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 103.637px;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ( $res_aabout as $about  )
                             <tr role="row" class="odd">
                                <td class="">{{$about->title}}</td>
                                <td class="">{{$about->description}}</td>
                                <td class=""><a href="pic/{{$about->pic}}" target="blank"><img src="pic/{{$about->pic}}" width="70px" height="70px" alt=""></a></td>
                                <td class="sorting_1"><a href="" class="btn btn-primary">Edit</a></td>
                                <td class="sorting_1"><button class="btn btn-danger "  wire:click.prevent="delete({{$about->id}})"> Delete</button></td>

                            </tr>

                             @endforeach

                        </tbody>

                    </table></div></div>
                   </div>
                </div>

            </div>
        </div>

    </div>


   </div>
@endsection
