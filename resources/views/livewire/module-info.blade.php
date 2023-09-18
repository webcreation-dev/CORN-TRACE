@php
use Carbon\Carbon;
@endphp

<div>
    <div class="row">

        @foreach ($modules as $item)
        <div class="col-6 col-lg-3">
            <a wire:click="changeModule({{ $item->id }}, {{ $production->id }})"
                class="block block-rounded block-link-shadow text-center" @if($item->id == $module_id) style="border:
                2px double #f9ac36;" @endif
                href="#" >

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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    {{-- <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search"
                                    name="one-ecom-orders-search" placeholder="Faire une recherche">
                                <span class="input-group-text bg-body border-0">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>--}}

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
                                                    name="one-ecom-orders-search"
                                                    placeholder="Aucune donnée disponible pour l'instant dans la base">
                                            </div>
                                        </div>
                                    </tr>
                                @else

                                    {{-- @foreach ($step_modules as $item)
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
                                    @endforeach --}}

                                    @foreach($step_modules as $item)
                                        @foreach( array_filter($item->toArray(), function($key) {
                                                return !in_array($key, ['id', 'module_id', 'created_at', 'updated_at']);
                                                }, ARRAY_FILTER_USE_KEY
                                            ) as $key => $value
                                        )
                                            <tr>
                                                <td class="text-left fs-sm">
                                                    <a class="fw-semibold" href="be_pages_ecom_order.html">
                                                        <strong style="color: black !important;">{{App\Models\Modules\TranslateModuleName::MODULE_NAME_TRANSLATE[$key] }}</strong>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class=" badge bg-primary ">{{ $value }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach

                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <!-- Subscribe -->
            <div class="block block-rounded">
                <div class="block-content">
                    <a class="btn w-100 mb-4" style="background-color: #F9AC36;" href="javascript:void(0)">Voir le taux
                        d'aflatoxine</a>

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
                                    <i class="fa fa-fw fa-calendar me-1"></i> Depuis le
                                    {{$production->created_at->formatLocalized('%e %B %Y')}}
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
</div>
