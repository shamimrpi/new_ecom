@extends('layouts.admin')
@section('main_mody')
    <div class="container-fluid">
              
    <div class="row">
                    <!-- column -->
                    <div class="col-sm-10 m-auto">
                        <div class="card mycard" style="">
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
              
            </div>
@endsection
@section('scripts')
<script type="text/javascript">

</script>
@endsection
