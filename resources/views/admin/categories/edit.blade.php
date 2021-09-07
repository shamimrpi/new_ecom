@extends('layouts.admin')
@section('main_mody')
    <div class="container-fluid">
              
    <div class="row">
                    <!-- column -->
                    <div class="col-sm-10 m-auto">
                        <div class="card mycard" style="">
                            <div class="card-body">
                                <form class="form" action="{{route('product.category.update',$category->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-2 right">
                                            <label class="right">Category Name<label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Category Name" name="name" value="{{ $category->name }}">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="submit" value="Update" class="btn btn-info">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
              
            </div>
@endsection
@section('scripts')
<script type="text/javascript">

</script>
@endsection
