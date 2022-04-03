@extends('admin.admindashboard')

@section('body')
<div class="row">
    <div class="card">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/add_product">
            <div class="card-body">
              @csrf

                <div class="form-group row">
                    @if(session()->has('mag'))
                    <div class="alert  alert-success">{{session('mag')}}</div>
                 @endif
                 @if(session()->has('delete'))
                 <div class="alert  alert-danger">{{session('delete')}}</div>
              @endif
                    @error('product_name')
                    <div class="alert  alert-danger"> {{$message}}</div>
                    @enderror
                    @error('category')
                    <div class="alert  alert-danger"> {{$message}}</div>
                    @enderror
                    @error('photo')
                    <div class="alert  alert-danger"> {{$message}}</div>
                    @enderror
                    @error('date')
                    <div class="alert  alert-danger"> {{$message}}</div>
                    @enderror
                    @error('price')
                    <div class="alert  alert-danger"> {{$message}}</div>
                    @enderror
                    @error('descripton')
                    <div class="alert  alert-danger"> {{$message}}</div>
                    @enderror
                    <div class="col-md-6">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="product_name"  name="product_name" placeholder="Product Name ">
                        </div>
                        <br>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="file"  name="file[]" multiple="multiple"  >
                        </div>
                        <br>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="price"  name="price" placeholder="Product price ">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-sm-9">
                            <select name="category" id="category" name="category" class="form-control">
                                <option value="1"> Select Category</option>
                                @foreach ($cate_id as $Category)
                                <option value="{{$Category->id}}">{{$Category->cate_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" placeholder="Date YYYY-MM-DD" name="date" ">
                        </div><br>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Amazon"  placeholder="Amazon Link" name="zamazon_link" ">
                        </div>
                  </div>

                         <br><br><br><br><br>
                         <br><br><br>
                <div class="col-sm-9 col-md-11">
                    <textarea name="descripton" id="editor1" class="form-control"  name="descripton" cols="30" rows="10">Product Description</textarea>
                   </div>

                </div>

            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Add Products</button>
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
                        <table id="date_table" class="table table-striped " >
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 173.575px;">Product Name </th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 278.038px;">Picture </th>
                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110.85px;" aria-sort="descending">Price</th>
                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 110.85px;" aria-sort="descending">Amazon Link</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 103.637px;">Edit</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 103.637px;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($red_product as $product )
                        <tr role="row" class="odd">
                            <td class="">{{$product->product_name}}</td>
                            <td>
                             @if ($product->pic )
                                    @foreach(explode('|', $product->pic) as $info)

                                        <a href="{{$info}}">{{$info}}</a><br>
                                                                     {{-- <td class=""><a href="pic/{{$info}}" target="blank"><img src="pic/{{$info}}" width="70px" height="70px" alt=""></a></td> --}}
                                        @endforeach
                                    @endif

                            </td>
                            <td class="">{{$product->price}}</td>
                            <td class=""><a href="{{$product->amazon_link}}">Product Link</a></td>

                            <td class="sorting_1"><a href="" class="btn btn-primary">Edit</a></td>
                            <td class="sorting_1"> <a class="btn btn-danger " href="/product_delete/{{$product->id}}">Delete</a></td>

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
