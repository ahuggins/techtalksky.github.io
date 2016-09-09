@extends('layouts.page')

@section('title', 'Writer Post')

@section('body_classes')

@section('content')

<div class="row">
                <div class="col-xs-12 col-md-8 single-content-sidebar">


                    <h1>A Great Story Never Told</h1>

                    <p class="subtitle">Like I said, never told...</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra ligula eget feugiat sollicitudin. Praesent accumsan, ante ut porttitor aliquet, odio felis mollis ante, et pretium arcu ipsum eget turpis. Quisque congue odio tristique, tincidunt arcu a, dignissim neque. Cras ligula erat, porta sed tristique at, sollicitudin sit amet ligula. Quisque eleifend elementum mauris, eu condimentum tortor ultrices a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer hendrerit, arcu a aliquam malesuada, sapien quam tempor neque, nec aliquam odio mi vel diam. Pellentesque egestas pharetra justo, id malesuada erat tincidunt ac. Ut mauris mauris, ultricies ut pharetra sit amet, suscipit sed nibh. Suspendisse vestibulum sem sed rhoncus pharetra. Nunc commodo, neque eget gravida mattis, augue est sollicitudin nunc, elementum aliquet tortor mi ac velit. Ut nec pharetra est. Vestibulum at mauris sapien. Duis sed turpis at lectus egestas rhoncus.</p>

                    <p class="pullquote">Ut ullamcorper turpis nec felis vestibulum, vitae pretium mi sodales.</p>


                    <p>Suspendisse laoreet consequat pellentesque. Aliquam erat volutpat. Nulla est elit, bibendum sit amet mauris eu, varius sollicitudin nibh. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus veniam laborum sapiente, doloribus placeat culpa aliquam asperiores laudantium nobis ipsum ut, suscipit delectus! Aut delectus, voluptate, sunt fugiat ea harum!</p>

                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptatem optio, excepturi, sapiente corporis nihil quis natus quibusdam odio ex laborum cupiditate minima eos.</blockquote>

                    <p>auctor a erat ac, dignissim bibendum urna. Ut aliquet convallis scelerisque. Praesent id luctus leo. Nam vestibulum interdum ligula blandit molestie. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis tempore illum inventore sit commodi, id eos nemo est voluptate aperiam tenetur? In, sint sed reprehenderit ipsum voluptas, nam molestias velit.</p>

                    <hr><p>Etiam sed condimentum elit. Curabitur eu malesuada turpis. Nam sit amet dui tellus. Nullam eget neque sed lectus tincidunt fermentum. Aenean ac interdum odio, vitae consectetur erat. Nunc venenatis turpis sed consectetur lacinia. Phasellus euismod odio feugiat, semper ligula in, egestas magna. Duis ullamcorper gravida lacus a blandit. Fusce et diam pellentesque, egestas diam pellentesque, gravida libero. Ut condimentum, nulla ac faucibus porttitor, est dui gravida est, vel varius mi justo at erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla facilisis diam eu libero suscipit lacinia. Sed sollicitudin justo ut fermentum venenatis. Morbi justo magna, pellentesque rutrum scelerisque eget, vehicula ac eros. Nam quis velit ac lorem blandit egestas eget id ante. Integer nibh arcu, vulputate eget luctus vel, porta eu ligula.</p>

                        <ul><li>Maecenas pulvinar, turpis quis luctus tincidunt.</li>
                            <li>Maecenas pulvinar, turpis quis luctus tincidunt.</li>
                            <li>Maecenas pulvinar, turpis quis luctus tincidunt.</li>
                            <li>Maecenas pulvinar, turpis quis luctus tincidunt.</li>
                        </ul><p>Lorem massa hendrerit mi, ut dapibus sem enim at nisl. Nullam ut mollis arcu. Quisque lobortis nibh diam, non molestie dui pretium et. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quos, mollitia dolor nam soluta consequuntur excepturi eveniet quod autem quasi. Labore dolorum vel voluptates molestias qui perspiciatis eveniet non, culpa!</p>


                </div><!-- main-content/col -->
                <div class="col-xs-12 col-md-3 col-md-offset-1 single-content-sidebar-area">

                    <img src="{{ URL::to('img/profile-1.jpg') }}" class="user-icon " alt="user-image"><div class="meta">

                        <div class="sidebar-info">
                            <a href="{{ URL::to('category.html') }}">James Reddy</a> in <a href="{{ URL::to('category.html') }}">Storytime</a>
                        </div>

                        <div class="sidebar-readtime">
                            <i class="fa fa-bookmark"></i> 23 minute read
                        </div>

                    </div>

                    <h2 class="favorites">Similar Categories</h2>

                    <a href="{{ URL::to('category.html') }}">
                        <div class="similar-cat">
                            <img src="{{ URL::to('img/similar-cat-1.jpg') }}"><h3>Storytime</h3>
                        </div>
                    </a>

                    <a href="{{ URL::to('category.html') }}">
                        <div class="similar-cat">
                            <img src="{{ URL::to('img/similar-cat-2.jpg') }}"><h3>Nature</h3>
                        </div>
                    </a>

                    <a href="{{ URL::to('category.html') }}">
                        <div class="similar-cat">
                            <img src="{{ URL::to('img/similar-cat-3.jpg') }}"><h3>Travel</h3>
                        </div>
                    </a>

                    <h2 class="favorites">Similar Posts</h2>

                    <div class="similar-post">
                        <a href="{{ URL::to('post.html') }}"><h3>Leave the City for a Life on the Road</h3></a>
                    </div>

                    <div class="similar-post">
                        <a href="{{ URL::to('post.html') }}"><h3>The Best Story Never Told</h3></a>
                    </div>

                    <div class="similar-post">
                        <a href="{{ URL::to('post.html') }}"><h3>Stop Thinking and Start Doing</h3></a>
                    </div>

                    <div class="similar-post">
                        <a href="{{ URL::to('post.html') }}"><h3>You Don't Have To Be Great To Get Started</h3></a>
                    </div>

                </div>
            </div>
@stop
