@extends ('backend.layouts.app')
@section ('title', ('Sale List'))

@section('after-styles')
{{ Html::style("https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css") }}
@endsection
<?php // dd($sales->toArray()); ?>
@section('page-header')
<h1>Sale List Management</h1>
@endsection 

@section('content')
<div id="del-success-msg" class="alert alert-success"></div>
<div class="box box-success">
    <div class="box-header with-border"> 
        <h3 class="box-title">All Sale List</h3>
        <div class="box-tools pull-right">

        </div> 
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table id="sale-list-table" class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Property Id</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Sale Price</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sales as $index => $sale)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $sale->id??"NA" }}</td>  
                        <td class="detail-max">{{ $sale->architechture->describe_your_home??"NA" }}</td>
                        <td>{{ $sale->street_address??"" }}</td>
                        <!--Get city-->
                        <?php $city = city($sale->city_id); ?> 
                        <td>@if($city->count()>0){{ $city->city }} @else NA @endif</td>
                        <td>$<span class="money">{{round($sale->price)}}</span></td>
                        <td>
                            <a href="{{ route('admin.saleDetail',$sale->id) }}" class="btn btn-primary bg-blue btn-xs view-icon-btn">
                                <i class="fa fa-eye" data-toggle="tooltip" data-placement="top" data-original-title="View"></i>
                            </a>
                            <a data-id='{{ $sale->id }}' class="btn btn-danger btn-xs delete-icon-btn">
                                <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" data-original-title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>

            </table>
        </div>
    </div>
</div>


@endsection

@section('after-scripts')

{{ Html::script("https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js") }}
<!--{{ Html::script("js/backend/plugin/datatables/dataTables-extend.js") }}-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
     $('.money').mask('000,000,000,000,000', {reverse: true});
    $(function () {
        var saleTable = $('#sale-list-table').DataTable({
//            dom: 'lfrtip',
//            autoWidth: false,
//            language: {
//                search: "",
//                searchPlaceholder: "Search"
//            },
        });

        $(".actions").removeClass("sorting");

        $(document).on('click', '.delete-icon-btn', function () {
            var saleListId = $(this).attr("data-id");
            deleteSaleList(saleListId, $(this));
        });
        function deleteSaleList(saleListId, $this) {
            swal({
                title: '',
                text: "Are you sure that you want to delete this?",
                type: "warning",
                closeModal: true,
                showLoaderOnConfirm: false,
                className: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                showCancelButton: true,
                confirmButtonColor: "#ec6c62"
            }, function () {
                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        _method: 'DELETE'
                    },
                    url: "{{ url('/admin/sale/delete' ) }}" + "/" + saleListId,
                    success: function (data) {
                        var msg = '<span>' + data.message + '</span>';
                        $('#del-success-msg').html(msg);
                        $("#del-success-msg").show();
                        saleTable.row($this.parents('tr')).remove().draw();
                        window.location.reload();
                    },
                    error: function (data) {
                        swal("Oops", "We couldn't connect to the server!", "error");
                    }
                });
                setTimeout(function () {
                    $('.alert-success').fadeOut('fast');
                }, 3000);
            });
        }
    });
</script>
@endsection
