@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê Banner
    </div>
    
    <div class="table-responsive">
      <?php
          $message = Session::get('message');
          if($message){
              echo $message;
              Session::put('message',null);
              }
          ?>

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>Tên slide</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
            <th>Tình trạng</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_slide as $key => $slide )
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$slide ->slide_name}}</td>
            <td><img src="public/uploads/slider/{{$slide->slide_image}}" height="100" width="180" ></td>
            <td>{{$slide ->slide_desc}}</td>
            <td><span class="text-ellipsis">
              <?php
                if($slide ->slide_status==0){
              ?>
                      <a href="{{URL::to('/unactive-slide/'.$slide ->slide_id)}}">Ẩn</a>;
              <?php
                }else{
              ?>
                      <a href="{{URL::to('/active-slide/'.$slide ->slide_id)}}">Hiện thị</a>;
              <?php
                }
              ?>
            </span></td>
            <td>
              <a onclick="return confirm('Bạn chắc chắc muốn xóa slide này không?')" href="{{URL::to('/delete-slide/'.$slide ->slide_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></i></a>
                
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection