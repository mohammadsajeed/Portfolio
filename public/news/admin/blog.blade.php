@extends('admin.admindashboard')

@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/add_blogs">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Blogs Managment</h4>
                    <div class="form-group row">
                        @if(session()->has('msg'))
                        <div class="alert  alert-success">{{session('msg')}}</div>
                     @endif
                        @error('title')

                        <div class="alert  alert-danger"> {{$message}}</div>
                        @enderror
                        @error('photo')

                        <div class="alert  alert-danger"> {{$message}}</div>
                        @enderror
                        @error('description')

                        <div class="alert  alert-danger"> {{$message}}</div>
                        @enderror
                        @error('date')

                        <div class="alert  alert-danger"> {{$message}}</div>
                        @enderror

                         <div class="col-md-4">
                           <div class="col-sm-9">
                               <label for=""> Title</label>
                               <input type="text" class="form-control" id="title"  name="title"    placeholder="Blog Title  ">
                               <br>

                           </div>

                         </div>
                         <div class="col-md-4">
                           <div class="col-sm-9"><label for=""> Picture</label>
                               <input type="file" class="form-control" id="photo"  name="photo" placeholder=" ">
                               <br>

                           </div>
                         </div>
                         <div class="col-md-4">
                           <div class="col-sm-9"> <label for=""> Date</label>
                               <input type="date" class="form-control" id="date"  name="date" placeholder="">
                               <br>

                           </div>
                         </div>

                         <div class="col-md-12">
                           <label for=""> Description</label>
                             <textarea   id="editor1" cols="30" rows="10"  name="description" class="form-control"></textarea>

                         </div>

                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary" >Add Blog</button>
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

                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Title </th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Desctiption </th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Picture </th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Date </th>
                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110.85px;" aria-sort="descending">Edit</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 103.637px;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ( $blogs as $blog  )
                         <tr role="row" class="odd">
                            <td class="">{{$blog->title}}</td>
                            <td class="">{{$blog->decription}}</td>
                            <td class=""><a href="pic/{{$blog->pic}}" target="blank"><img src="pic/{{$blog->pic}}" height="70px" width="70px" alt=""></a></td>
                            <td class="">{{$blog->date}}</td>
                            <td class="sorting_1"><a href="" class="btn btn-primary">Edit</a></td>
                            <td class="sorting_1"><a href="/blog_delete/{{$blog->id}}" class="btn btn-danger" >Delete</a></td>

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
