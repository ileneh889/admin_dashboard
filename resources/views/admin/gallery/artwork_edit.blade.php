@extends('admin.layout.gallery')
@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

            {{-- page header --}}
            <div class="page-header">
                <div class="page-title d-flex justify-content-between w-100">
                    {{-- ////////////////////////////////////////////////////////////////////////////////// --}}
                    <h3>edit artwork ID# {{ $artwork->id }}</h3>
                    {{-- add --}}
                    <a href="{{ url('/admin/gallery') }}" type="button" class="btn btn-secondary">back
                    </a>
                </div>
            </div>
            {{-- end add --}}

        {{-- status show --}}
        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        {{-- end status --}}

        <div class="row" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        {{-- form --}}
                        <form action="" method="post" class="w-50 m-auto">
                            @csrf
                            @method('PUT')
                            {{-- artwork_id --}}
                            {{-- <label for="artwork_id">id</label>
                                    <input type="text" class="form-control" name="artwork_id"
                                        value="{{ old('artwork_id') }}" id="id"><br>
                            @error('artwork_id')
                            <span class='text-danger'>{{ $message }}</span><br>
                            @enderror --}}
                            {{-- title --}}
                            <label for="title">title</label>
                            <input type="text" class="form-control" name="title" value="{{ $artwork->title }}" id="title"><br>
                            @error('title')
                            <span class='text-danger'>{{ $message }}</span><br>
                            @enderror
                            {{-- user_id --}}
                            <label for="user_id">user_id</label>
                            <input type="text" class="form-control" name="user_id" value="{{ $artwork->user_id }}" id="user_id"><br>
                            @error('user_id')
                            <span class='text-danger'>{{ $message }}</span><br>
                            @enderror
                            {{-- submit_date --}}
                            <label for="submit_date">submit_date</label>
                            <input type="date" class="form-control" name="submit_date" value="{{ $artwork->submit_date }}" id="submit_date"><br>
                            @error('submit_date')
                            <span class='text-danger'>{{ $message }}</span><br>
                            @enderror
                            {{-- category_id --}}
                            <label for="category_id">category_id</label>
                            <input type="text" class="form-control" name="category_id" value="{{ $artwork->category_id }}" id="category_id"><br>
                            @error('category_id')
                            <span class='text-danger'>{{ $message }}</span><br>
                            @enderror
                            {{-- description --}}
                            <label for="description">description</label>
                            <input type="text" class="form-control" name="description" value="{{ $artwork->description }}" id="description"><br>
                            @error('description')
                            <span class='text-danger'>{{ $message }}</span><br>
                            @enderror
                            {{-- price --}}
                            <label for="price">price</label>
                            <input type="text" class="form-control" name="price" value="{{ $artwork->price }}" id="price"><br>
                            @error('price')
                            <span class='text-danger'>{{ $message }}</span><br>
                            @enderror
                            {{-- image_path --}}
                            <label for="image_path">image_path</label>
                            <input type="text" class="form-control" name="image_path" value="{{ $artwork->image_path }}" id="image_path"><br>
                            @error('image_path')
                            <span class='text-danger'>{{ $message }}</span><br>
                            @enderror
                            {{-- submit --}}
                            <input href="" type="submit" class="btn btn-secondary mb-2" value="update"></a>
                        </form>
                        {{-- end form --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--  END CONTENT AREA  -->
</div>


<!-- END MAIN CONTAINER -->
@endsection