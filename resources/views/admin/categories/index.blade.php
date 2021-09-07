@extends('layouts.admin')
@section('main_mody')
    <div class="container-fluid">
              
                <div class="row">
                    <div class="col-sm-10 m-auto">
                        <div class="card crate_form" style="">
                            <div class="card-body">
                                <form class="form" action="{{route('product.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-2 right">
                                            <label class="right">Category Name<label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Category Name" name="name">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="submit" value="Create" class="btn btn-info">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card mycard">
                            <div class="card-body">
                                <h4 class="card-title">Category Table</h4>
                               <br/>
                              
                               <br/>
                               <br/>
                                <div class="table-responsive">
                                    <table class="my-table user-table no-wrap">
                                        <thead >
                                            <tr class="table-head" style="background: pink; padding: 10px 0;height: 50px">
                                                <th class="border-top-0">#SL</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $key=>$category)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$category->name}}</td>
                                                    <td>
                                                        <a href="{{ route('product.category.edit',$category->id) }}" class="btn btn-info btn-sm edit_btn"><i class="fa fa-edit"></i>Edit</a>

                                                        <a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                                    </td>
                                                    
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
@endsection
@section('scripts')
<script type="text/javascript">
    $('.create_btn').on('click',function(){
        $(this).show('.crate_form');
    })
</script>
@endsection
