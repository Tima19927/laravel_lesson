@extends('default.layouts.layouts')


@section('navbar')
@parent
@endsection

@section('title_desc')
    @parent
@endsection


@section('content')

    <!-- =======  BLOG   -->
    <div class="container blog" id="blogSc">
        <div class="row">
            <div class = "col-xs-12 col-sm-12 col-md-12 title">
                <p>Blog</p>
                <hr>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.<br> Quisque enim dolor mauris ac sagittis erat pulvinar leo.</p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <img src="../../../../public/images/640x418.jpg" alt="">
                <section class="blog_info_post" onclick="">
                    <h2>Learn HTML faster!</h2>
                    <h3><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 22 Jul 2017</h3>
                    <h3><i class="fa fa-comments-o" aria-hidden="true"></i> 10 Comments</h3>
                    <p>Nunc congue dolor et tortor pulvinar, a tristique arcu lobortis.<br> Quisque enim dolor mauris ac sagittis.</p>
                    <button onclick="window.location.href='single_blog.html'"> Read More </button>
                    <a href="blog_posts.html">- Blog Posts</a>
                </section>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <img src="../../../../public/images/640x418.jpg" alt="">
                <section class="blog_info_post" onclick="">
                    <h2>Learn CSS faster!</h2>
                    <h3><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 22 Jul 2017</h3>
                    <h3><i class="fa fa-comments-o" aria-hidden="true"></i> 10 Comments</h3>
                    <p>Nunc congue dolor et tortor pulvinar, a tristique arcu lobortis.<br> Quisque enim dolor mauris ac sagittis.</p>
                    <button onclick="window.location.href='single_blog.html'"> Read More </button>
                    <a href="blog_posts.html">- Blog Posts</a>
                </section>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <img src="../../../../public/images/640x418.jpg" alt="">
                <section class="blog_info_post" onclick="">
                    <h2>Learn JS faster!</h2>
                    <h3><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 22 Jul 2017</h3>
                    <h3><i class="fa fa-comments-o" aria-hidden="true"></i> 10 Comments</h3>
                    <p>Nunc congue dolor et tortor pulvinar, a tristique arcu lobortis.<br> Quisque enim dolor mauris ac sagittis.</p>
                    <button onclick="window.location.href='single_blog.html'"> Read More </button>
                    <a href="blog_posts.html">- Blog Posts</a>
                </section>
            </div>
        </div>
    </div>



@endsection




<div class="container">
    @section('footer_top')
       @parent
    @endsection
</div>