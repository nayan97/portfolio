@extends('admin.layouts.app')

@section('main-section')

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">All Portfolios</h4>
            </div>
            <div class="card-body">
                @include('validate-main')
                <div class="table-responsive">
                    <table class="table mb-0 data-table-haq">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Feature</th>
                                <th>Category</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($portfolios as $item)
                                <tr style="">
                                    <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $item -> title }}</td>
                                    <td><img style="width:60px;height:60px;object-fit:cover;" src="{{ url('img/' . $item -> featured ) }}" alt=""></td>
                                    <td>
                                        <ul style="list-style:none;" class="comet-list">
                                            @foreach( $item -> category as $cat )
                                                <li> <i class="fa fa-angle-right"></i> {{ $cat -> name }}</li>
                                            @endforeach
                                        </ul>    
                                    </td>
                                    <td>{{ $item -> created_at -> diffForHumans() }}</td>
                                    <td>
                                        @if($item -> status )
                                                <span class="badge badge-success">Published</span>
                                                <a class="text-danger" href="#"><i class="fa fa-times"></i></a>
                                        @else 
                                            <span class="badge badge-danger">unpublished</span>
                                            <a class="text-success" href="#"><i class="fa fa-check"></i></a>
                                        @endif    
                                    </td>
                                    <td>
                                        {{-- <a class="btn btn-sm btn-info" href="#"><i class="fa fa-eye"></i></a> --}}
                                        <a class="btn btn-sm btn-warning" href="#"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('portfolio.destroy', $item -> id ) }}" class="d-inline delete-form" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                
                            @endforelse

                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">

        @if( $form_type == 'create')
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add new Portfolio</h4>
            </div>
            <div class="card-body">
                @include('validate')
                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" type="text" value="{{ old('title') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Featured Photo</label>
                        <br>
                        <img style="max-width:100%;" id="slider-photo-preview" src="" alt="">
                        <br>
                        <input style="display:none;" name="photo" type="file" class="form-control" id="slider-photo">
                        <label for="slider-photo">
                            <img style="width:100px; cursor:pointer;" src="https://icon-library.com/images/image-icon/image-icon-2.jpg" alt="">
                        </label>
                        <img style="max-width:50%;display:block"id="product_image_load"
                                                            src="" alt="">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Select One Categories</label>                        
                        <ul style="list-style:none" class="comet-list">
                            @foreach ($categories as $cat)
                                <li> 
                                    <label><input name="cat[]" value="{{ $cat -> id }}" type="checkbox"> {{ $cat -> name }}</label> 
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>
                
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @endif





    </div>
</div>


@endsection 