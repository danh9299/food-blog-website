@extends('master')

@section('content')
<!--All Posts-->
<section class="section featured" aria-label="featured post">
    <div class="container">

        <p class="section-subtitle">
            Chúng tớ có <strong class="strong">tất cả các bài viết sau:</strong>
        </p>

        <ul class="has-scrollbar">
            @if(count($posts) > 0)

            @foreach($posts as $row)
            <li class="scrollbar-item">
          
                <div class="blog-card">
                
                    <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                    
                        <img  src="{{asset('assets/images/'.$row->image->image_name)}}" width="500" height="600" loading="lazy"
                            alt="{{$row->image->image_name}}" class="img-cover">


                        <ul class="avatar-list absolute">

                            <li class="author-name">
                                <h3 class="author name" style="--width: 100; --height: 100; background-color:white;">
                                    <a href="#" class="card-title hover:underline">
                                        <strong>{{ $row->author->username }}</strong></a>

                                </h3>
                            </li>

                        </ul>
                    </figure>
                    
                    <div class="card-content">
                        <h3 class="h4">
                            <a href="{{ route('posts.show', $row->post_id) }}" class="card-title hover:underline">
                                {{$row->title}}
                            </a>
                        </h3>

                        <p class="card-text">
                        <a href="{{ route('posts.show', $row->post_id) }}" class="card-title hover:underline">
                            {{$row->meta}}
                            </a>
                        </p>

                    </div>

                </div>
                
            </li>
            @endforeach

            @else
            <tr>
                <td colspan="5" class="text-center">Không có bài viết</td>
            </tr>
            @endif
        </ul>

    </div>
</section>
@include('posts.latest')
@endsection('content')