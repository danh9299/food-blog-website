@extends('master')

@section('content')
  
<!--All Posts-->
<section class="section featured" aria-label="featured post">
   
    <div class="container-fluid">

        <p class="section-subtitle">
            Chúng tớ các bài viết <strong class="strong">gần đây nhất:</strong>
        </p>

        <table class="table">
            <tr>
                <th>Tên Bài Viết</th>
                <th>Ngày Đăng</th>
                <th>Tác giả</th>
                <th>Hành Động</th>
            </tr>
            @if(count($posts) > 0)

            @foreach($posts->reverse() as $row)

            <tr>
                
                <td>{{ $row->title }}</td>
                <td>{{ $row->date_posted }}</td>
                <td>{{ $row->author->username }}</td>

                <td>
                   
                    <a style="text-decoration:underline; color:blue" href="{{ route('posts.show', $row->post_id) }}" class="">Xem bài viết</a>
             




                </td>
            </tr>

            @endforeach

            @else
            <tr>
                <td colspan="5" class="text-center">No Data Found</td>
            </tr>
            @endif
        </table>

    </div>
</section>

@endsection('content')