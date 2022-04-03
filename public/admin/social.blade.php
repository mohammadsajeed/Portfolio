@extends('admin.admindashboard')
@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" method="post" action="add_social">
                @csrf
                <div class="card-body">
                    <h4 class="card-title">Social Media Managment</h4><br>
                    <div class="form-group row">
                        @if(session()->has('msg'))
                        <div class="alert  alert-success">{{session('msg')}}</div>

                        @endif
                        @if(session()->has('delete'))
                        <div class="alert  alert-danger">{{session('delete')}}</div>

                        @endif


                        @error('facebook')

                        <div class="alert  alert-danger"> {{$message}}</div>
                        @enderror
                        @error('twitter')

                        <div class="alert  alert-danger"> {{$message}}</div>
                        @enderror
                        @error('whatsapp')

                        <div class="alert  alert-danger"> {{$message}}</div>
                        @enderror
                        <div  class="col-md-4 ">
                           <label for="fname" >Facebook</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="facebook"  name="facebook" placeholder="facebook Account Info ">
                               <br>

                           </div>


                        </div>
                        <div  class="col-md-4 ">
                           <label for="fname" >Twitter</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="twitter"  name="twitter"  placeholder=" Twitter Account Info ">
                               <br>

                           </div>
                        </div>
                        <div  class="col-md-4 ">
                           <label for="fname" >Whatsapp</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="whatsapp"  name="whatsap" >
                               <br>

                           </div>

                        </div>


                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Add Social Media </button>
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
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 173.575px;">Facebook</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">twitter </th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Whatsapp </th>
                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110.85px;" aria-sort="descending">Edit</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 103.637px;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ( $red_social as $soical  )
                         <tr role="row" class="odd">
                            <td class="">{{$soical->facebook}}</td>
                            <td class="">{{$soical->twitter}}</td>
                            <td class="">{{$soical->whatsap}}</td>
                            <td class="sorting_1"><a href="" class="btn btn-primary">Edit</a></td>
                            <td class="sorting_1"><a class="btn btn-danger" href="social_delete/{{$soical->id}}">Delete</a></td>

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
