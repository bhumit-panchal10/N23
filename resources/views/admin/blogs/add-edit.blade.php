@extends('layouts.app')

@section('title', isset($blog) ? 'N23 - Edit Blog' : 'N23 - Add Blog')

@section('content')

    <div class="main-content">

        <div class="page-content">

            <div class="container-fluid">

                {{-- Alert Messages --}}
                @include('common.alert')


                <div class="row">

                    <div class="col-12">

                        <div class="d-flex justify-content-between align-items-center mb-3">

                            <h4>

                                {{ isset($blog) ? 'Edit Blog' : 'Add Blog' }}

                            </h4>


                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">

                                <i class="fas fa-arrow-left"></i>

                                Back
                            </a>

                        </div>

                    </div>

                </div>


                <div class="card">

                    <div class="card-body">

                        <form
                            action="{{ isset($blog) ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}"
                            method="POST" enctype="multipart/form-data">

                            @csrf


                            @if (isset($blog))
                                @method('PUT')
                            @endif


                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Service
                                        <span style="color:red;">*</span>
                                    </label>

                                    <select name="service_id" id="service_id" class="form-control">
                                        <option value="">Select Service</option>

                                        @foreach ($Services as $Service)
                                            <option value="{{ $Service->id }}"
                                                {{ old('service_id', $blog->service_id ?? '') == $Service->id ? 'selected' : '' }}>
                                                {{ $Service->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('service_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                </div>
                                {{-- ========================================== --}}
                                {{-- BLOG NAME --}}
                                {{-- ========================================== --}}

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">

                                        Blog Name

                                        <span style="color:red;">*</span>

                                    </label>


                                    <input type="text" name="name" class="form-control" maxlength="255"
                                        placeholder="Enter Blog Name"
                                        value="{{ old('name', isset($blog) ? $blog->name : '') }}">


                                    @if ($errors->has('name'))
                                        <span class="text-danger">

                                            {{ $errors->first('name') }}

                                        </span>
                                    @endif

                                </div>

                                {{-- ========================================== --}}
                                {{-- IMAGE --}}
                                {{-- ========================================== --}}

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">
                                        Image
                                    </label>

                                    <input type="file" name="image" class="form-control"
                                        accept=".jpg,.jpeg,.png,.webp,.gif">

                                    @if ($errors->has('image'))
                                        <span class="text-danger">
                                            {{ $errors->first('image') }}
                                        </span>
                                    @endif


                                    {{-- Existing Image On Edit --}}
                                    @if (isset($blog) && !empty($blog->image))
                                        <div class="mt-3">

                                            <label class="form-label d-block">
                                                Current Image
                                            </label>

                                            <img src="{{ asset('blogs/' . $blog->image) }}" alt="{{ $blog->name }}"
                                                style="
                                                    width: 120px;
                                                    height: 80px;
                                                    object-fit: cover;
                                                    border-radius: 6px;
                                                    border: 1px solid #ddd;
                                                    padding: 3px;
                                                ">

                                        </div>
                                    @endif

                                </div>


                                {{-- ========================================== --}}
                                {{-- META TITLE --}}
                                {{-- Keep DB spelling: meta_tittle --}}
                                {{-- ========================================== --}}

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">

                                        Meta Title

                                    </label>


                                    <input type="text" name="meta_tittle" class="form-control" maxlength="255"
                                        placeholder="Enter Meta Title"
                                        value="{{ old('meta_tittle', isset($blog) ? $blog->meta_tittle : '') }}">


                                    @if ($errors->has('meta_tittle'))
                                        <span class="text-danger">

                                            {{ $errors->first('meta_tittle') }}

                                        </span>
                                    @endif

                                </div>


                                {{-- ========================================== --}}
                                {{-- DESCRIPTION --}}
                                {{-- ========================================== --}}

                                <div class="col-md-12 mb-4">

                                    <label class="form-label">

                                        Description

                                    </label>


                                    <textarea name="description" class="form-control ckeditor" rows="5" placeholder="Enter Description">{{ old('description', isset($blog) ? $blog->description : '') }}</textarea>


                                    @if ($errors->has('description'))
                                        <span class="text-danger">

                                            {{ $errors->first('description') }}

                                        </span>
                                    @endif

                                </div>


                                {{-- ========================================== --}}
                                {{-- META DESCRIPTION --}}
                                {{-- ========================================== --}}

                                <div class="col-md-12 mb-4">

                                    <label class="form-label">

                                        Meta Description

                                    </label>


                                    <textarea name="meta_description" class="form-control ckeditor" rows="4" placeholder="Enter Meta Description">{{ old('meta_description', isset($blog) ? $blog->meta_description : '') }}</textarea>


                                    @if ($errors->has('meta_description'))
                                        <span class="text-danger">

                                            {{ $errors->first('meta_description') }}

                                        </span>
                                    @endif

                                </div>


                                {{-- ========================================== --}}
                                {{-- HEAD --}}
                                {{-- ========================================== --}}

                                <div class="col-md-12 mb-4">

                                    <label class="form-label">

                                        Head

                                    </label>


                                    <textarea name="head" class="form-control" rows="6" placeholder="Enter Head Content">{{ old('head', isset($blog) ? $blog->head : '') }}</textarea>


                                    @if ($errors->has('head'))
                                        <span class="text-danger">

                                            {{ $errors->first('head') }}

                                        </span>
                                    @endif

                                </div>


                                {{-- ========================================== --}}
                                {{-- BODY --}}
                                {{-- ========================================== --}}

                                <div class="col-md-12 mb-4">

                                    <label class="form-label">

                                        Body

                                    </label>


                                    <textarea name="body" class="form-control" rows="12" placeholder="Enter Body Content">{{ old('body', isset($blog) ? $blog->body : '') }}</textarea>


                                    @if ($errors->has('body'))
                                        <span class="text-danger">

                                            {{ $errors->first('body') }}

                                        </span>
                                    @endif

                                </div>


                                {{-- ========================================== --}}
                                {{-- SAVE / UPDATE --}}
                                {{-- ========================================== --}}

                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-primary">

                                        <i class="fas fa-save"></i>

                                        {{ isset($blog) ? 'Update' : 'Save' }}

                                    </button>


                                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">

                                        Cancel

                                    </a>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.2/ckeditor.js"></script>
@endsection
