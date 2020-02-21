@extends('BackEnd.master.master')
@section('title','Trang danh sách sản phẩm')
@section('product')
class="active"
@endsection
@section('section')
   <!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">

                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="alert bg-success" role="alert">
                                <svg class="glyph stroked checkmark">
                                    <use xlink:href="#stroked-checkmark"></use>
                                </svg>Đã thêm thành công<a href="#" class="pull-right"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            <a href="/admin/product/add" class="btn btn-primary">Thêm sản phẩm</a>
                            <table class="table table-bordered" style="margin-top:20px;">

                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Thông tin sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Tình trạng</th>
                                        <th>Danh mục</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>
                                            <div class="row">
                                            <div class="col-md-3"><img src="/Backend/img/{{$row->img}}" alt="Áo đẹp"
                                                        width="100px" class="thumbnail"></div>
                                                <div class="col-md-9">
                                                <p><strong>Mã sản phẩm : {{$row->product_code}}</strong></p>
                                                    <p>Tên sản phẩm :{{$row->name}}</p>
                                                <p>Danh mục:{{$row->category->name}}</p>
                                                    @foreach (attr_value($row->value) as $key=>$value)
                                                    <p>
                                                            {{ $key .':'}} @foreach ($value as $item)
                                                                   {{  $item.',' }}
                                                            @endforeach
                                                    </p>
                                                    @endforeach
                                                    <div class="group-color">Màu tuỳ chọn:
                                                        <div class="product-color"
                                                            style="background-color: blueviolet;"></div>
                                                        <div class="product-color" style="background-color: brown;">
                                                        </div>
                                                        <div class="product-color"
                                                            style="background-color: darkorange;"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                        <td>5{{$row->price}}</td>
                                        <td>
                                            @if ($row->state==1)
                                            <a name="" id="" class="btn btn-success" href="#" role="button">Còn hàng</a>
                                            @else
                                            <a name="" id="" class="btn btn-danger" href="#" role="button">Hết hàng</a>
                                            @endif
                                        </td>
                                        <td>{{$row->category->name}}</td>
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i> Sửa</a>
                                            <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach




                                </tbody>
                            </table>
                            <div align='right'>
                                <ul class="pagination">
                                    {{ $product->links() }}
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <!--/.row-->


        </div>
    </div>
</div>
<!--end main-->

@endsection
