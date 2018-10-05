@extends('layouts.admin')
@section('content')
<div class="col-md-12">
  <div class="tile">
    <h3 class="tile-title">Danh sách bình luận</h3>
    <div class="pull-right">
      a
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>
            <th>Product_id</th>
            <th>Customer_id</th>
            <th>Approve</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($comments as $key => $comment)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $comment->title }}</td>
              <td>{{ $comment->content }}</td>
              <td>{{ $comment->product_id }}</td>
              <td>{{ $comment->customer_id }}</td>
              <td>
                @if($comment->approve == 1)
                  <p class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></p>
                @endif
                @if($comment->approve == 0)
                  <a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
                @endif  
              </td>  
              <td>
                <a href="" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a>
                 <a href="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $comments->links() }}
    </div>
  </div>
</div>
@endsection