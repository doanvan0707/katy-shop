@extends('layouts.admin')
@section('content')
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Danh sách đơn hàng</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Quản lý đơn đặt hàng</li>
          <li class="breadcrumb-item active"><a href="#">Danh sách</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên người đặt hàng</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đặt hàng</th>
                    <th>Email khách hàng</th>
                    <th>Trạng thái</th>
                    <td>Hành động</td>
                    <th>Xóa</th>
                  </tr>               
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Van</td>
                    <td>Dn</td>
                    <td>2011/04/25</td>
                    <td>vangmail.com</td>
                    <td>Chưa xử lý</td>
                    <td><a href="{{ route('orders.detail') }}">Detail</a></td>
                    <td><a href="">Delete</a></td>
                  </tr>                                   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection