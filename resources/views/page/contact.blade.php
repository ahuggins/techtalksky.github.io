@extends('layouts.page')

@section('title', 'Writer Theme | Contact')

@section('body_classes')

@section('content')

<div class="row">

                <div id="menu-target">
                    <ul><li><i class="fa fa-home"></i><a href="{{ URL::to('index.html') }}">Home</a></li>
                        <li><i class="fa fa-user"></i><a href="{{ URL::to('author.html') }}">John Smith</a></li>
                        <li><i class="fa fa-anchor"></i><a href="{{ URL::to('page.html') }}">About</a></li>
                        <li><i class="fa fa-star"></i><a href="{{ URL::to('favorites.html') }}">Favorites</a></li>
                        <li><i class="fa fa-paper-plane"></i><a href="{{ URL::to('contact.html') }}">Contact</a></li>
                    </ul><hr><ul><li><i class="fa fa-file"></i><a href="{{ URL::to('post.html') }}">Post Page</a></li>
                        <li><i class="fa fa-file"></i><a href="{{ URL::to('post-sidebar.html') }}">Post with Sidebar</a></li>

                        <li><i class="fa fa-home"></i><a href="{{ URL::to('alt-home.html') }}">Alternate Home</a></li>
                        <li><i class="fa fa-image"></i><a href="{{ URL::to('category.html') }}">Category Page</a></li>
                    </ul></div>

                <section class="sidebar col-md-5 col-sm-12" style="background-image: url(img/default-contact.jpg)"><span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

                    <div class="site-info">
                        <div class="primary-info">
                        <h1>Contact</h1>
                            <p>Our team would love to hear from you. We're here for a quick chat, a lengthy discussion or perhaps just a hey.</p>

                        </div>
                        <div class="secondary-info">

                            <p><a class="btn btn-default" href="{{ URL::to('#') }}"><i class="fa fa-user-plus"></i>Newsletter Signup</a>
                        </p></div>
                    </div>

                </section><div class="col-md-7 col-sm-12 col-md-offset-5 main-content">

                    <h3>Contact our Team</h3>

                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" placeholder="Jane Doe" class="form-control" name="name"></div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" placeholder="example@email.com" class="form-control" name="email"></div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" placeholder="Example Ltd" class="form-control" name="company"></div>

                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input type="tel" placeholder="+44778217779" class="form-control" name="number"></div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" placeholder="Hello, lets chat"></textarea></div>

                        <div class="form-group">
                            <input class="btn btn-default" type="submit" value="Send"></div>
                    {{ csrf_field() }}
</form>

                    <footer class="split-footer"><a href="{{ URL::to('post.html') }}">About</a>
                        <i class="link-spacer"></i>
                        <a href="{{ URL::to('post.html') }}">Writer 2015</a>
                    </footer></div><!-- main content -->
            </div>
@stop
