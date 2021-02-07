@extends('Admin.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Posts</span>
                                <span class="info-box-number">{{ $posts->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bars"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Categories</span>
                                <span class="info-box-number">{{ $categories->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-hashtag"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Tags</span>
                                <span class="info-box-number">{{ $tags->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1  white"><i
                                    class="far fa-comment"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Comments</span>
                                <span class="info-box-number">{{ $comments->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <section>
                    <div class="col-lg-12">
                        <div class="all-blog-posts">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog-post">
                                        <form action="{{ route('admin.update', $post->id) }}" method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')

                                            <div class="down-content">
                                                <label>Image</label>
                                                <div class="m-2">
                                                    <input type="file" id="exampleInputFile" name="path_image">
                                                    @error('path_image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <label>Title</label>
                                                <div class="m-2">
                                                    <input
                                                        class="form-control" name="title" placeholder="Title"
                                                        value="{{ $post->title }}">
                                                    @error('title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <label>Content</label>
                                                <div class="m-2">
                                                <textarea class="form-control" name="content" rows="7"
                                                          placeholder="Content">{{ $post->content }}
                                                </textarea>
                                                @error('content')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                </div>

                                                <label class="mt-2">Category</label>
                                                <div class="m-2">
                                                <select class="form-control" name="category_id">
                                                    @foreach($categories as $category)
                                                        <option
                                                            value="{{ $category->id }}" {{ $category->id === $post->category->id ? " selected" : "" }}>{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                                    @error('category_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <label>Tags</label>
                                                <div class="m-2">
                                                @foreach($tags as $tag)
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="tags[]"
                                                               value="{{ $tag->id }}">
                                                        <label class="form-check-label"
                                                               for="inlineCheckbox1">{{ $tag->title }}</label>
                                                    </div>
                                                        @error('tags[]')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                @endforeach
                                                </div>

                                            </div>
                                            <div class="mt-4">
                                            <button type="submit" class="btn btn-outline-dark btn-block">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
