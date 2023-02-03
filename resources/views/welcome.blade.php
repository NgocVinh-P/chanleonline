
<!DOCTYPE html>
<html class="no-js" lang="vi">
<head>
<title>{{ $setting->title }}</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="{{ $setting->title }}" name="title" >
<meta content="{{ $setting->description }}" name="description">
<meta content="{{ $setting->keywords }}" name="keywords">
<meta content="/" property="og:url" />
<meta content="article" property="og:type" />
<meta content="{{ $setting->title }}" property="og:title" />
<meta content="{{ $setting->description }}" property="og:description" />
<meta content="{{ $setting->background }}" property="og:image" />
<link href="{{ $setting->favicon }}" rel="apple-touch-icon" />
<link href="{{ $setting->favicon }}" rel="shortcut icon" type="image/x-icon" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet" />
<link href="{{ url('') }}/themes/css/bootstrap.min.css?v1" rel="stylesheet" />
<link href="{{ url('') }}/themes/css/bootstrap-social.css" rel="stylesheet" />
<link href="{{ url('') }}/themes/css/style.css?ver=1" rel="stylesheet" />
<link href="{{ url('') }}/themes/css/custom.1.css?ver=28" rel="stylesheet" />
<link href="{{ url('') }}/themes/css/wheel.css?ver=1651368768" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.5.4/dist/simple-notify.min.css" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169824433-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169824433-1');
</script>
<style>
    .aa:hover,
    .aa:focus {
        background: #ad4105;
        border-radius: 5px
    }

    .coffer-box {
        display: block;
        position: fixed;
        bottom: 90px;
        right: 15px;
        width: 15%;
        z-index: 1000;
        cursor: pointer;
        /*background: #ad410569;*/
        border-radius: 10px;
        text-align: center;
        padding: 15px;
    }

    @media (max-width: 767px) {
        .coffer-box {
            background: unset;
            width: 50%;
            bottom: 20px;
        }
    }

    .mb-0 {
        margin-bottom: 0;
    }

    .mt-100 {
        margin-top: 100px;
    }

    .mainbar {
        padding: 0px !important;
    }

    .panel-heading {
            background-color: {{ $setting->color }} !important;
            border-color: {{ $setting->color }} !important;
        }

        .panel-primary {
            /*background-color: {{ $setting->color }} !important;*/
            border-color: {{ $setting->color }} !important;
        }

        .navbar {
            background-color: {{ $setting->color }} !important;

        }

        .navbar .navbar-collapse {
            background-color: {{ $setting->color }} !important;
        }

        .table .bg-primary {
            background-color: {{ $setting->color }} !important;
        }

        .footer {
            background-color: {{ $setting->color }};
            border-top: {{ $setting->color }} !important;
        }

        .mainbar {
            background-color: {{ $setting->color }};
}
.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info {
    color: #fff;
    background-color: {{ $setting->color }} !important;
    border-color: {{ $setting->color }} !important;
}
.btn-info {
    color: #fff;
    background-color: {{ $setting->color }} !important;
    border-color: {{ $setting->color }} !important;
}
.label-success {
    background: linear-gradient(to bottom right, #62fb62, #21a544) !important;
}
.label-danger {
    background: linear-gradient(to bottom right, #ff0000 0%, #990000 100%);
}
        </style>
</head>
<body>
<input type="hidden" name="main_session">
<div class="mainbar">
<div class="container">
<a href="/" class="text-center">
<div class="hidden-xs ">
<img src="{{ $setting->logo }}" height="120px" alt="Logo">
</div>
<div class="visible-xs ">
<img src="{{ $setting->logo }}" height="60px" alt="Logo">
</div>
</a>
</div>
<body class="" style="">
    <marquee width="100%" behavior="scroll" style="display: block;
            position: fixed;
            bottom: 70 px;
            left: 15 px;
            z-index: 1000;
            cursor: pointer;
            width: 100%;">
        <font color="white" style="text-shadow: 0 0 0.2em #ff0000, 0 0 0.2em #ff0000,  0 0 0.2em #ff0000"><b>{{ $setting->ads }}</b></font>
        </font>
    </marquee>
</div>
</a> 
</div>
</div>
</div>
<div class="container">
<div class="content">
<div class="content-container">
<div class="py-5" style="min-height: 80px !important;">
<div class="output" id="output">
<h3 class="cursor">
Hệ Thống Mini Game Momo Tự Động Siêu Ngon </h3>
<h4>Uy Tín - Giao dịch Tự Động 24/7 - Trả thưởng 10s! </h4>
</div>
</div>
<div class="text-center mt-5">
<button class="btn btn-default btn-primary mt-1 hidden" data-game="chanle">
Chẵn Lẻ
</button>
<button class="btn btn-default btn-primary mt-1 hidden" data-game="chanle2">
Chẵn Lẻ 2
</button>
<button class="btn btn-default btn-primary mt-1 hidden" data-game="taixiu">
Tài Xỉu
</button>
<button class="btn btn-default btn-primary mt-1 hidden" data-game="taixiu2">
Tài Xỉu 2
</button>
<button class="btn btn-default btn-primary mt-1 hidden" data-game="x3">
1 Phần 3
</button>
<button class="btn btn-default btn-primary mt-1 hidden" data-game="tong3so">
Tổng 3 Số
</button>
<button class="btn btn-default btn-primary mt-1 hidden" data-game="hieu2so">
H3
</button>
<button class="btn btn-default btn-primary mt-1 hidden" data-game="lo">
Lô
</button>
</div>
<div class="text-center mt-5" role="group">
<button class="btn btn btn-outline-primary mt-1 p-3" data-toggle="modal" data-target="#exampleModal" style="position: relative;">
Nhập CODE Khuyến Mãi
<b class="text-danger" style="position: absolute; margin-left: auto; margin-right: auto; text-align: center; left: 0px; right: 0px; top: 2px; font-size: 9px;"><font color="red">(NEW)</font></b>
</button>
</div>
<div class="row justify-content-md-center box-cl">
<div class="col-md-6 mt-3 cl">
<div class="panel panel-primary">
<div class="panel-heading text-center"  id="play">
Cách chơi
</div>
<div class="play-rules">
</div>
<div class="minigame-rules">
</div>
</div>
</div>
<div class="col-md-6 mt-3 cl">
<div class="panel panel-primary">
<div class="panel-heading text-center">
KIỂM TRA MÃ GIAO DỊCH
</div>

<div class="panel-body text-center">
    Lưu ý: Khi đạt 200 GD hoặc 49 triệu sẽ tự đổi số.
    <div class="table-responsive">
<table class="table table-striped table-bordered table-hover text-center">
<thead>
<tr class="bg-primary" role="row">
<th class="text-center text-white">
Số điện thoại
</th>
<th class="text-center text-white">
Trạng thái
</th>
<th class="text-center text-white">
Giao dịch
</th>
<th class="text-center text-white">
Hạn mức
</th>
</tr>
</thead>
<tbody id="momo-status">
</tbody>
</table>
</div>
<div class="text-center">
<div class="form-group">
<label for="tran_id">Nhập mã giao dịch</label>
<input type="number" class="form-control" name="tran_id" placeholder="Mã giao dịch: Ví dụ 11223344556">
<small id="checkHelp" class="form-text text-muted">Nhập mã giao dịch của bạn để
kiểm tra.</small>
</div>
<button class="btn btn-primary mb-2 check-tran" onclick="DUNGA.check_tranid()">Kiểm tra</button>
<div class="hidden more_infomation">
<div class="mt-3">
<small class="form-text text-danger">
Vui lòng nhập thêm thông tin để kiểm tra:
</small>
<input type="text" class="form-control" name="receiver" placeholder="Số điện thoại hệ thống">
<small class="form-text text-muted">Số điện thoại của <b class="text-danger">Hệ thống</b> bạn chuyển tiền vào. <b class="text-danger">Không</b> phải số của bạn.</small>
</div>
<button class="btn btn-primary mb-2 check-tran-2" onclick="DUNGA.check_tranid2()">Tiếp tục</button>
</div>
<div id="result-check" style="margin-top: 5px;">
</div>
</div>
<div>
<div class="alert alert-info text-left">
Nếu có lỗi, hãy liên hệ các kênh CSKH bên dưới hoặc nhấn vào nút liên hệ góc phải màn hình để báo lỗi ADMIN
</div>
<div id="contact" class="mt-5">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mt-5 text-center panel panel-primary">
<div class="row">
<div class="col-md-12 mt-3">
<div class="text-center mb-3">
<h3 class="text-uppercase">
Lịch sử tham gia
</h3>
</div>
<div class="text-center font-weight-bold m-3"><b>Làm mới sau <span class="text-danger coundown-time">0</span> s</b></div>
<center class="" style="width: 76%;margin: auto;">
<marquee>
<b id="msg_history_hu"></b>
</marquee>
</center>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover text-center">
<thead>
<tr class="bg-primary" role="row">
<th class="text-center text-white">
Số điện thoại
</th>
<th class="text-center text-white">
Tiền đặt
</th>
<th class="text-center text-white">
Nội dung
</th>
<th class="text-center text-white">
Trạng thái
</th>
</tr>
</thead>
<tbody id="history">
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="panel panel-primary week_top hidden">
<div class="panel-heading text-center">
<h4>TOP TUẦN</h4>
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover text-center">
<thead>
<tr role="row" class="bg-primary">
<th class="text-center text-white">TOP</th>
<th class="text-center text-white">Số điện thoại</th>
<th class="text-center text-white">Số tiền</th>
<th class="text-center text-white">Phần thưởng</th>
</tr>
</thead>
<tbody role="alert" aria-live="polite" aria-relevant="all" id="week_top" class="text-center">
</tbody>
</table>
<div class="text-center">
<b class="text-danger">Phần thưởng TOP sẽ dược trao vào 23:59 Chủ Nhật hàng tuần.</b>
</div>
</div>
</div>
</div>
</div>
<div class="mt-5 panel panel-primary">
</div>
<div id="hu-left-display" style="position: fixed; bottom: 15px; left: 15px; z-index: 1000; cursor: pointer; width: 15%;" class="hidden">
<div onclick="$('#hu-left-display').hide()" class="" style="left: 100%; position: absolute;">
<font color="red">
<big><b>[X]</b></big>
</font>
</div>
<b onclick="DUNGA.hu_click()">
<center><img class="jackpot" src="/upload/jackpot.gif" width="100%" style="max-height: 130px;max-width: 150px;min-height: 50px; min-width:80px;" /></center>
<div class="text-center">
<p class="hu-balance" style="border-top-right-radius: 30px; border-top-left-radius: 30px; border-radius: 30px; background: aquamarine;">0</p>
</div>
</b>
</div>
</div>
</div>
</div>
<footer class="footer">
<div class="container text-center">
<div class="row">
<div class="col-xs-12 text-white ">
Copyright 2021 © {{ $setting->name }} | <a href="https://t.me/ntddev" target="_blank" style="color:red;">DUNGDZ.DEV</a> All rights reserved
</div>
<center>
    <img src="{{ $setting->logo }}" height="60px" alt="Logo">
</center>
</div>
</footer>
<div class="modal fade" id="noteModal" tabindex="-1" role="dialog" aria-labelledby="noteModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="noteModalLabel">Thông báo</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" id="note_modal">
...
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Đã hiểu</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="hu-info" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header text-center">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h3 class="modal-title"></h3>
<h2 class="text-danger"><b>JACKPOT</b></h2>
</div>
<div class="modal-body" id="result_hu"> 
<center><img class="jackpot" src="/upload/jackpot.gif" width="30%" style="" /></center>
    <h6><strong>Cách chơi</strong></h6>
<p>- Khi tham gia, bạn sẽ có cơ hội nhận được số tiền trong JackPot với số tiền lên đến 
<strong class="text-danger"><span>{{ number_format($setting->amount_hu) }}đ</span></strong>
</p>
<p>- Nếu bạn có đuôi số mã giao dịch là 5 số giống nhau như: <br>
<span>
<strong class="text-danger">11111</strong>
<strong class="text-danger">22222</strong>
<strong class="text-danger">33333</strong>
<strong class="text-danger">44444</strong>
<strong class="text-danger">55555</strong>
<strong class="text-danger">66666</strong>
<strong class="text-danger">77777</strong>
<strong class="text-danger">88888</strong>
<strong class="text-danger">99999</strong>
</span> thì bạn sẽ nhận được toàn bộ số tiền trong JackPot
</p>
<p>- Nếu bạn có đuôi số mã giao dịch là 4 số giống nhau như: <br>
    <span>
    <strong class="text-danger">1111</strong>
    <strong class="text-danger">2222</strong>
    <strong class="text-danger">3333</strong>
    <strong class="text-danger">4444</strong>
    <strong class="text-danger">5555</strong>
    <strong class="text-danger">6666</strong>
    <strong class="text-danger">7777</strong>
    <strong class="text-danger">8888</strong>
    <strong class="text-danger">9999</strong>
    </span> thì bạn sẽ nhận được {{ $setting->ratioHu }}% số tiền trong JackPot
    </p>
<p>- Nếu bạn nổ hũ, vui lòng chat cho CSKH gửi mã giao dịch để nhận thưởng.</p>
<p>(Lưu ý trương trình chỉ áp dụng trong ngày, qua ngày sẽ không được tính)</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" style="border-radius: 0;" data-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div> <div id="player" class="hidden"></div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          
            <div class="text-center">
                <p style="line-height: 0.8;"></p>
                <p style="modal-title text-center text-bold text-success"><b>CODE KHUYẾN MẠI</b></p>
                <div class="form-group" id="non_query"
                     style="background-color:#f5f5f5 ; border-color: #ad4105; padding: 20px;">
                    <label for="partnerId">Mã code:</label>
                    <input type="text" class="form-control"
                           name="giftcode"
                           id="giftcode" placeholder="ABCXYZ"
                    />
                    <label for="partnerId" style="margin-top: 10px;">Số điện thoại:</label>
                    <input type="text" class="form-control"
                           name="phoneCode"
                           id="phoneCode"
                           placeholder="094xxxxxxx"/>
                    <small id="partnerId" class="form-text text-muted" style="color: #ff0000">Nhập số điện thoại của
                        bạn để kiểm tra và
                        nhận
                        thưởng.</small> <br/>
                    <button class="btn btn-success check-day-mission" onclick="check_Giftcode()">Kiểm Tra</button>
                </div>
                <div class="form-group" id="query_done" style="display: none;"></div>
                <div class="form-group bg-warning" id="day_mission_querying" style="display: none;">Đang truy vấn...
                    xin chờ
                    nhé...
                </div>
                <div class="occho" id="muc_huongdan">
                    1. Một số điện thoại chỉ được nhập 1 mã/ngày. <br>
                    2. Mã code khuyến mại sẽ tùy vào điều kiện để sử dụng, có thời hạn. <br>
                    3. Mã code khuyến mại sẽ được cấp theo các chương trình khuyến mại của hệ thống Momo Lô Tô. <br>
                    4. Vui lòng liên hệ chát CSKH để biết thêm chi tết khi bạn nhận được CODE. <br>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="https://js.pusher.com/7.0/pusher.min.js" id="pusher-js"></script>
<script src="{{ url('') }}/themes/js/wheel.min.js?V2"></script>
<script src="{{ url('') }}/themes/js/jquery-1.10.1.min.js"></script>
<script src="{{ url('') }}/themes/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="{{ url('') }}/themes/js/bootstrap.min.js"></script>
<script src="{{ url('') }}/themes/js/moment.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.4/dist/simple-notify.min.js"></script>
<script src="{{ url('') }}/themes/js/script.js?ver=28042003.v890">
</script>
<script>
window.addEventListener('DOMContentLoaded', (event) => {
    $('[data-toggle="tooltip"]').tooltip();
    $('.cash-format').each(function(index) {
        $(this).html(parseInt($(this).text()).toLocaleString('it-IT', {
            style: 'currency',
            currency: 'VND'
        }));
    });
    $('button[data-game]').click(function() {
        let button = $(this);
        let game = button.attr('data-game');
        game_active = game;
        $('.game').removeClass('active');
        $(`.game[game-tab=${game}]`).addClass('active').removeClass("hidden");
        $("button[data-game]").removeClass("btn-info").addClass("btn-primary");
        $("[data-minigame]").removeClass("btn-success");
        button.removeClass("btn-primary").addClass("btn-info");
    });
    $('button[data-minigame]').click(function() {
        let button = $(this);
        let game = button.attr('data-minigame');
        game_active = "minigame";
        $('.game').removeClass('active');
        $(`.game[game-tab=${game}]`).addClass('active').removeClass("hidden");
        $("[data-minigame]").removeClass("btn-success");
        $("[data-game]").removeClass("btn-success").addClass("btn-primary");
        button.addClass("btn-success");
    });
});
</script>
<style>
    .jackpot {
        wiggle 1.3s linear infinite
    }
</style>

</html>
