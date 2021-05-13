@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm thương slide
                        </header>
                        <div class="panel-body">

                            <?php
                                $message = Session::get('message');
                                if($message){
                                    echo $message;
                                    Session::put('message',null);
                                }
                            ?>

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/insert-slide')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên slide</label>
                                    <input type="text" name="slide_name" class="form-control" id="exampleInputEmail1" placeholder="Tên slide">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh</label>
                                    <input type="file" name="slide_image" class="form-control" id="exampleInputEmail1" placeholder="Tên slide">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả slide</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="slide_desc"  placeholder="Mô ta slide"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                    <select name="slide_status" class="form-control input-sm m-bot15">
                                        <option value="0"> Ẩn </option>
                                        <option value="1">Hiển thị </option>                                        
                                    </select>
                                </div>
                                
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm slider</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
    @endsection