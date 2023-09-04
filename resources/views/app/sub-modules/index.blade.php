@extends('layouts.dashboard')

@section('content')
@php
    use Carbon\Carbon;
@endphp

<div class="row">

    @foreach ($modules as $item)
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" @if($item->id == $module_id) style="border: 2px double #f9ac36;" @endif  href="be_pages_ecom_product_edit.html">
                <div class="block-content block-content-full">
                    <div class="fs-2 fw-semibold text-success">
                        <img src="{{ asset("assets/media/svg/$item->svg") }}" alt="">
                    </div>
                </div>
                <div class="block-content py-2 bg-body-light">
                    <p class="fw-medium fs-sm mb-0" style="color: #f9ac36;">
                        {{$item->name}}
                    </p>
                </div>
            </a>
        </div>
    @endforeach

    {{-- <div class="col-6 col-lg-3">
        <a class="block block-rounded block-link-shadow text-center" style="border: 2px double #f9ac36;" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <div class="fs-2 fw-semibold text-dark">1</div>
            </div>
            <div class="block-content py-2 bg-body-light">
                <p class="fw-medium fs-sm mb-0" style="color: #f9ac36;">
                    Conditions du sol
                </p>
            </div>
        </a>
    </div>
    <div class="col-6 col-lg-3">
        <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
            <div class="block-content block-content-full">
                <div class="fs-2 fw-semibold text-dark">2</div>
            </div>
            <div class="block-content py-2 bg-body-light">
                <p class="fw-medium fs-sm text-muted mb-0">
                    Préparation des semences
                </p>
            </div>
        </a>
    </div>
    <div class="col-6 col-lg-3">
        <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
            <div class="block-content block-content-full">
                <div class="fs-2 fw-semibold text-dark">3</div>
            </div>
            <div class="block-content py-2 bg-body-light">
                <p class="fw-medium fs-sm text-muted mb-0">
                    Planification de l'ensemencement
                </p>
            </div>
        </a>
    </div> --}}
</div>

<div class="row">
    <div class="col-xl-8">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ $module->name }}</h3>
                <div class="block-options">
                    <div class="dropdown">
                        <button type="button" class="btn-block-option" id="dropdown-ecom-filters"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions <i class="fa fa-angle-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">

                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                {{-- Processing --}}
                                <span class="badge bg-warning rounded-pill">SUIVANT</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                {{-- Pending.. --}}
                                <span class="badge bg-black-50 rounded-pill">MODIFIER</span>
                            </a>
                            {{-- <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                For Delivery
                                <span class="badge bg-info rounded-pill">20</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Canceled
                                <span class="badge bg-danger rounded-pill">72</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Delivered
                                <span class="badge bg-success rounded-pill">890</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                All
                                <span class="badge bg-primary rounded-pill">997</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                    {{-- <div class="mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search"
                                name="one-ecom-orders-search" placeholder="Faire une recherche">
                            <span class="input-group-text bg-body border-0">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div> --}}
                </form>

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-left">OPTIONS</th>
                                <th>DETAILS</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if($step_modules->isEmpty())

                                <tr>
                                    <div class="mb-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-alt"
                                                name="one-ecom-orders-search" placeholder="Aucune donnée disponible pour l'instant dans la base">
                                            {{-- <span class="input-group-text bg-body border-0">
                                                <i class="fa fa-search"></i>
                                            </span> --}}
                                        </div>
                                    </div>
                                </tr>
                            @else

                                @foreach ($step_modules as $item)
                                    <tr>
                                        <td class="text-left fs-sm">
                                            <a class="fw-semibold" href="be_pages_ecom_order.html">
                                                <strong style="color: black !important;">Options</strong>
                                            </a>
                                        </td>
                                        <td>
                                            <span class=" badge bg-primary ">{{$item->choix}}</span>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>

                {{-- <nav aria-label="Photos Search Navigation">
                    <ul class="pagination pagination-sm justify-content-end mt-2">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                Next
                            </a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <!-- Subscribe -->
        <div class="block block-rounded">
            <div class="block-content">
                <a class="btn w-100 mb-4" style="background-color: #F9AC36;" href="javascript:void(0)">Voir le taux d'aflatoxine</a>
                {{-- <p class="fs-sm text-center">
                    or <a class="link-effect fw-medium" href="javascript:void(0)">buy this course for $28</a>
                </p> --}}
            </div>
        </div>
        <!-- END Subscribe -->

        <!-- Course Info -->
        <div class="block block-rounded">
            <div class="block-header block-header-default text-center">
                <h3 class="block-title">A propos de la production</h3>
            </div>
            <div class="block-content">
                @php
                    $created_date = Carbon::parse($production->created_at);
                    $current_date = Carbon::now();
                    $days_ago = $created_date->diffInDays($current_date);
                @endphp
                <table class="table table-striped table-borderless fs-sm">
                    <tbody>
                        <tr>
                            <td>
                                <i class="fa fa-fw fa-book me-1"></i> {{$production->identifiant}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-fw fa-clock me-1"></i> {{$production->type}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-fw fa-heart me-1"></i> {{$production->region}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-fw fa-calendar me-1"></i> Depuis le {{$production->created_at->formatLocalized('%e %B %Y')}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-fw fa-tags me-1"></i>
                                <a class="fw-semibold link-fx text-primary" href="javascript:void(0)">EN COURS</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Course Info -->

        <!-- About Instructor -->
        <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
            <div class="block-header block-header-default text-center">
                <h3 class="block-title">A Propos du Producteur</h3>
            </div>
            <div class="block-content block-content-full text-center">
                <div class="push">
                    <img class="img-avatar" src="{{asset('assets/media/modules/farmer.png')}}" alt="">
                </div>
                <div class="fw-semibold mb-1">Pascal HOUESSOU</div>
                <div class="fs-sm text-muted">Producteur | Bohicon</div>
            </div>
        </a>
        <!-- END About Instructor -->
    </div>
</div>

<div class="block block-rounded">
<div class="block-header block-header-default">
    <h3 class="block-title">FORMULAIRE DU MODULE</h3>
</div>
<div class="block-content">
    <div class="row justify-content-center">
    <div class="col-md-10 col-lg-8">
        <form action="be_pages_ecom_product_edit.html" method="POST" onsubmit="return false;">
        <div class="mb-4">
            <label class="form-label" for="one-ecom-product-id">PID</label>
            <input type="text" class="form-control" id="one-ecom-product-id" name="one-ecom-product-id" value="789" readonly>
        </div>
        <div class="mb-4">
            <label class="form-label" for="one-ecom-product-name">Name</label>
            <input type="text" class="form-control" id="one-ecom-product-name" name="one-ecom-product-name" value="Dark Souls III">
        </div>
        <div class="mb-4">
            <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
            <!-- For more info and examples you can check out http://ckeditor.com -->
            <label class="form-label">Description</label>
            <textarea id="js-ckeditor" name="one-ecom-product-description"></textarea>
        </div>
        <div class="mb-4">
            <label class="form-label" for="one-ecom-product-description-short">Short Description</label>
            <textarea class="form-control" id="one-ecom-product-description-short" name="one-ecom-product-description-short" rows="4"></textarea>
        </div>
        <div class="mb-4">
            <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
            <!-- For more info and examples you can check out https://github.com/select2/select2 -->
            <label class="form-label" for="one-ecom-product-category">Category</label>
            <select class="js-select2 form-select" id="one-ecom-product-category" name="one-ecom-product-category" style="width: 100%;" data-placeholder="Choose one..">
            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
            <option value="1">Cables</option>
            <option value="2" selected>Video Games</option>
            <option value="3">Tablets</option>
            <option value="4">Laptops</option>
            <option value="5">PC</option>
            <option value="6">Home Cinema</option>
            <option value="7">Sound</option>
            <option value="8">Office</option>
            <option value="9">Adapters</option>
            </select>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
            <label class="form-label" for="one-ecom-product-price">Price in USD ($)</label>
            <input type="text" class="form-control" id="one-ecom-product-price" name="one-ecom-product-price" value="59,00">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
            <label class="form-label" for="one-ecom-product-stock">Stock</label>
            <input type="text" class="form-control" id="one-ecom-product-stock" name="one-ecom-product-stock" value="29">
            </div>
        </div>
        <div class="mb-4">
            <label class="form-label">Condition</label>
            <div class="space-x-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="one-ecom-product-condition-new" name="one-ecom-product-condition" value="new" checked>
                <label class="form-check-label" for="one-ecom-product-condition-new">New</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="one-ecom-product-condition-old" name="one-ecom-product-condition" value="old">
                <label class="form-check-label" for="one-ecom-product-condition-old">Old</label>
            </div>
            </div>
        </div>
        <div class="mb-4">
            <label class="form-label">Published?</label>
            <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" value="" id="one-ecom-product-published" name="one-ecom-product-published" checked>
            <label class="form-check-label" for="one-ecom-product-published"></label>
            </div>
        </div>
        <div class="mb-4">
            <button type="submit" class="btn btn-alt-primary">Update</button>
        </div>
        </form>
    </div>
    </div>
</div>
</div>

@endsection
