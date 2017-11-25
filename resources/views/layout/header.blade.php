<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="trangchu">MrT Express</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="gioithieu">Giới thiệu</a>
        </li>
        <li>
          <a href="lienhe">Liên hệ</a>
        </li>

        @foreach($theloai as $tl)
        @if(count($tl->loaitin) > 0)
        <li class="dropdown">
          <a id="tentheloai" class="dropdown-toggle btn info" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $tl->Ten }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @foreach($tl->loaitin as $lt)
            <li><a href="loaitin/{{ $lt->id }}/{{ $lt->TenKhongDau }}.html">{{$lt->Ten}}</a></li>
            @endforeach
          </ul>
        </li>
        @endif
        @endforeach
      </ul>

      <ul class="nav navbar-nav pull-right">
      @if(!Auth::user())
        <li>
          <a href="dangky">Đăng ký</a>
        </li>
        <li>
          <a href="dangnhap">Đăng nhập</a>
        </li>
      @else
        <li>
          <a href="nguoidung">
            <span class ="glyphicon glyphicon-user"></span>
              {{ Auth::user()->name }}
          </a>
        </li>
        <li>
          <a href="dangxuat">Đăng xuất</a>
        </li>
      @endif
      </ul>
    </div>
  <!-- /.navbar-collapse -->
  </div>
<!-- /.container -->
</nav>