@extends('dgaAdmin.app')
@section('main')
    <main id="main-container">
        <div class="content">
            <div class="row">
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        @if ($errors->has('status'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <p class="mb-0">
                                    {{ $errors->first('message') }}
                                </p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title fs-3 fw-bold">Chuyển tiền</div>
                            </div>

                            <form action="{{ route('admin.sendMoney') }}" method="POST">
                                @csrf
                                <div class="card-body p-9">
                                    <div class="row mb-8">
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-semibold mt-2 mb-3" for="example-select">Chọn tài khoản
                                                chuyển</div>
                                        </div>
                                        <div class="col-xl-9 fv-row">
                                            <select class="form-select" id="phoneSend" name="phoneSend">
                                                @foreach ($GetAccountMomo as $row)
                                                    <option value="{{ $row->phone }}">{{ $row->phone }} -
                                                        {{ number_format($row->balance) }} đ</option>
                                                @endforeach
                                            </select></span>
                                        </div>
                                    </div>
                                    <div class="row mb-8">
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-semibold mt-2 mb-3">Số điện thoại nhận</div>
                                        </div>
                                        <div class="col-xl-9 fv-row">
                                            <input type="text" class="form-control form-control-solid" id="phone"
                                                name="phone" placeholder="SĐT">
                                        </div>
                                    </div>
                                    <div class="row mb-8">
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-semibold mt-2 mb-3">Số tiền</div>
                                        </div>
                                        <div class="col-xl-9 fv-row">
                                            <input type="text" class="form-control form-control-solid" id="amount"
                                                name="amount" placeholder="VNĐ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-semibold mt-2 mb-3">Nội dung</div>
                                        </div>
                                        <div class="col-xl-9 fv-row">
                                            <input type="text" class="form-control form-control-solid" id="comment"
                                                name="comment" placeholder="Không cần">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="submit" class="btn btn-primary">Chuyển tiền</button>
                                </div>
                            </form>
                            <!--end:Form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal" id="infoMomo" tabindex="-1" role="dialog" aria-labelledby="infoMomo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">THÔNG TIN MOMO</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content fs-sm" id="showInfo">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteMomo(phone) {
            Swal.fire({
                text: "Bạn chắc chẵn muốn xóa số momo này ?",
                showCancelButton: true,
                confirmButtonText: "Xóa",
                cancelButtonText: "Không",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "{{ route('admin.deleteMomo') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            phone: phone,
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                swal(data.message, "success");
                                document.getElementById("td_" + phone).remove();
                            } else {
                                swal(data.message, "error");
                            }
                        },
                    });
                }
            });
        }

        function soakMomo(phone) {
            Swal.fire({
                text: "Bạn chắc chẵn muốn ngâm momo này ?",
                showCancelButton: true,
                confirmButtonText: "Chắc chắn",
                cancelButtonText: "Không",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "{{ route('admin.soakMomo') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            phone: phone,
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                swal(data.message, "success");
                                $("#status_" + phone).className =
                                    'fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning';
                                $("#status_" + phone).innerHTML = 'Ngâm';
                            } else {
                                swal(data.message, "error");
                            }
                        },
                    });
                }
            });
        }

        function loginAllMomo() {

            Swal.fire({
                text: "Bạn chắc chẵn muốn đăng nhập lại toàn bộ momo ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Không",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "{{ route('admin.loginAllMomo') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                swal(data.message, "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            } else {
                                swal(data.message, "error");
                            }
                        },
                    });
                }
            });
        }

        function checkStatusTransfer() {
            Swal.fire({
                text: "Bạn muốn kiểm tra trạng thái lịch sử ?",
                showCancelButton: true,
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Không",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "{{ route('admin.checkStatusTransfer') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                swal(data.message, "success");
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            } else {
                                swal(data.message, "error");
                            }
                        },
                    });
                }
            });
        }

        function infoMomo(phone) {
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "{{ route('admin.infoMomo') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    phone: phone,
                },
                success: function(data) {
                    if (data.status == "success") {
                        $('#showInfo').html(data.html)
                    } else {
                        swal(data.message, "error");
                    }
                },
            });
            $('#infoMomo').modal('show');
        }

        function activeMomo(phone) {
            Swal.fire({
                text: "Bạn chắc chẵn muốn chỉnh trạng thái hoạt động số momo này ?",
                showCancelButton: true,
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Không",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "{{ route('admin.activeMomo') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            phone: phone,
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                swal(data.message, "success");
                                $("#status_" + phone).className =
                                    'fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success';
                                $("#status_" + phone).innerHTML = 'Hoạt động';
                            } else {
                                swal(data.message, "error");
                            }
                        },
                    });
                }
            });
        }

        function loginOneMomo(phone) {
            Swal.fire({
                text: "Bạn chắc chẵn muốn đăng nhập lại số momo này ?",
                showCancelButton: true,
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Không",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "{{ route('admin.loginMomoOne') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            phone: phone,
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                swal(data.message, "success");
                                $("#status_" + phone).className =
                                    'fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success';
                                $("#status_" + phone).innerHTML = 'Hoạt động';
                            } else {
                                swal(data.message, "error");
                            }
                        },
                    });
                }
            });
        }

        function hideMomo(phone) {
            Swal.fire({
                text: "Bạn chắc chẵn muốn chỉnh trạng thái ẩn số momo này ?",
                showCancelButton: true,
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Không",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "{{ route('admin.hideMomo') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            phone: phone,
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                swal(data.message, "success");
                                $("#status_" + phone).className =
                                    'fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger';
                                $("#status_" + phone).innerHTML = 'Ẩn';
                            } else {
                                swal(data.message, "error");
                            }
                        },
                    });
                }
            });
        }

        function maintenanceMomo(phone) {
            Swal.fire({
                text: "Bạn chắc chẵn muốn chỉnh trạng thái bảo trì số momo này ?",
                showCancelButton: true,
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Không",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        dataType: "JSON",
                        url: "{{ route('admin.maintenanceMomo') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            phone: phone,
                        },
                        success: function(data) {
                            if (data.status == "success") {
                                swal(data.message, "success");
                                $("#status_" + phone).className =
                                    'fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger';
                                $("#status_" + phone).innerHTML = 'Bảo trì';
                            } else {
                                swal(data.message, "error");
                            }
                        },
                    });
                }
            });
        }
    </script>
@endsection
@section('script')
    <script>
        $("#btnGETOTP").click(function() {
            var phone = $("#phone").val();
            var password = $("#password").val();
            var min = $("#min").val();
            var max = $("#max").val();
            var proxy = $("#proxy").val();
            $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "{{ route('admin.getOTP') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    phone: phone,
                    password: password,
                    min: min,
                    max: max,
                    proxy: proxy
                },
                success: function(data) {
                    if (data.status == "success") {
                        swal(data.message, "success");
                    } else {
                        swal(data.message, "error");
                    }
                },
            });
        });
    </script>
@endsection
