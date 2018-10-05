@extends('layouts.admin')
@section('content')
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Chi tiết đơn hàng</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Quản lý đơn đặt hàng</li>
          <li class="breadcrumb-item active"><a href="#">Chi tiết</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Thông tin khách hàng</th>
                    <th></th>
                  </tr>               
                </thead>
                <tbody>
                  <tr>
                    <td>Thông tin người đặt hàng</td>
                    <td>Van</td>
                  </tr>
                  <tr>
                    <td>Ngày đặt hàng</td>
                    <td>5/9/2018</td>
                  </tr>
                  <tr>
                    <td>số điện thoại</td>
                    <td>01662456743</td>
                  </tr>
                  <tr>
                    <td>Địa chỉ</td>
                    <td>DN</td>
                  </tr>   
                  <tr>
                    <td>Email</td>
                    <td>doanvanvandvv@gmail.com</td>
                  </tr>                        
                  <tr>
                    <td>Ghi chú</td>
                    <td>Cần chuyển hàng ngay trong tuần</td>
                  </tr>         
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá tiền</th>
                  </tr>               
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Iphone 9</td>
                    <td>5</td>
                    <td>20.000.000</td>
                  </tr> 
                  <tr>
                    <td colspan="3">Tổng tiền</td>
                    <td>50.000.00</td>
                  </tr>                                   
                </tbody>
              </table>
              <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                  <form action="" method="post">
                    {{  csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-inline">
                        <label>Trạng thái giao hàng:&nbsp;&nbsp;</label>
                        <select name="status" class="form-control">
                            <option value="1">Chưa giao</option>
                            <option value="2">Đang giao</option>
                            <option value="2">Đã giao</option>
                        </select>
                        <input type="submit" value="Xử lý" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
@endsection