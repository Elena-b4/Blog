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
                                <span class="info-box-number">{{ $allPosts->count() }}</span>
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
                <section class="blog-posts grid-system">
                    <div class="col-lg-12">
                        <div class="all-blog-posts">
                            <div class="row">
                                @foreach($posts as $post)
                                    <div class="col-lg-6">
                                        <div class="blog-post">
                                            <div class="blog-thumb">
                                                <img src="{{ $post->path_image }}" alt="">
                                            </div>
                                            <div class="down-content">
                                                <h4 class="text-uppercase d-flex justify-content-between align-items-center">
                                                    <a style="color: black" href="{{ route('admin.edit', $post->id) }}"> {{ $post->title }}
                                                        <i class="fas fa-edit ml-1"></i></a>
                                                    <form action="{{ route('admin.destroy', $post->id) }}"
                                                          method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-outline-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </h4>


                                                <p class="text-lowercase">{{ substr($post->content, 0, 120) }}...</p>
                                                <ul class="post-info mb-4">
                                                    <li>{{ $post->created_at }}</li>
                                                    <li><i class="fa fa-comments"
                                                           title="Comments"></i> {{ $post->comments->count() }}</li>
                                                    <li>{{ $post->category->title }}</li>
                                                </ul>
                                                <ul>
                                                    @foreach($post->tags as $tag)
                                                        <li class="tags">{{ $tag->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-lg-12">
                                    {{ $posts->links('vendor/pagination.bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection
