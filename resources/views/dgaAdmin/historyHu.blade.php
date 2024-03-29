@extends('dgaAdmin.app')
@section('main')
    <main id="main-container">
        <div class="content">
            <div
                class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
                <div class="flex-grow-1 mb-1 mb-md-0">
                    <h1 class="h3 fw-bold mb-2">
                        MOMO
                    </h1>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card block-rounded">
                        <div class="card-header block-header-default">
                            <h3 class="card-title">
                                LỊCH SỬ NỔ HŨ
                            </h3>
                        </div>
                        <div class="card-body block-content-full">
                            <div class="table-responsive">
                            <table class="table table-row-bordered gy-5" id="showdata">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Mã giao dịch</th>
                                        <th>Số MOMO</th>
                                        <th>Số tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày chuyển</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($history as $row)
                                        <tr>
                                            <td class="text-center fs-sm">{{ $row->id }}</td>
                                            <td class="fw-semibold fs-sm">{{ $row->tranId }}</td>
                                            <td class="fw-semibold fs-sm">{{ $row->phone }}</td>
                                            <td class="fw-semibold fs-sm">{{ number_format($row->amount) }}</td>
                                            <td class="fw-semibold fs-sm">
                                                @if ($row->status == 1)
                                                    <span
                                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Thành
                                                        công</span>
                                                @else
                                                    <span
                                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Thất
                                                        bại</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="text-muted fs-sm">{{ $row->created_at }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $history->links('pagination::bootstrap-4') }} --}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#showdata').DataTable({
            });
        });
    </script>
@endsection