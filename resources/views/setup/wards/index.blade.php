@extends('layouts.master')
@section('PageTitle', 'Wards')


@section('content')
    <!-- content @s -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="card-header header-elements">
                <span class="me-2">Wards</span>

                <div class="card-header-elements ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addNewModal" class="btn btn-sm btn-primary">
                        <span class="tf-icon ti ti-plus ti-xs me-1"></span>Add Wards(s)
                    </button>
                </div>
            </div>
            @include('setup.wards.table')
        </div>
        <!--/ Basic Bootstrap Table -->
        @include('setup.wards.add_modal')
        @include('setup.wards.edit_modal')
    </div>
    <!-- content @e -->

    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">

                <div class="row mb-2">
                    <div class="col-md-9">
                        <input type="text" name="name[]" class="form-control" placeholder="Enter Ward Name" />
                    </div>
                    <div class="col-md-3 mt-1">
                        <div class="d-flex">
                            <span class="btn btn-success  addeventmore me-2"><i class="fa fa-plus-circle"></i></span>
                            <span class="btn btn-danger  removeeventmore"><i class="fa fa-minus-circle"></i></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    @include('setup.wards.script')
    <script src="/sweetalert.min.js"></script>
@endsection
