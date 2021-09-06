@extends('layouts.admin')
@section('main_body')
<br/>
<br/>
	<div class="container">
		<div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Category Table</h4>
                                
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0 text-center">#SL</th>
                                                <th class="border-top-0 text-center">Name</th>
                                                <th class="border-top-0 text-center">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($categories as $key=>$category)
                                            <tr>
                                                <td class="text-center">{{$key+1}}</td>
                                                <td class="text-center">{{$category->name}}</td>
                                                <td class="text-center">
                                                	<a href="#" class="btn btn-info "><i class="fa fa-edit"></i>  Edit</a>
                                                	<a href="#" class="btn btn-danger">Delete</a>
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