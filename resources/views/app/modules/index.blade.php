@extends('layouts.dashboard')

@section('content')
<style>
.options-disable::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.884);
  pointer-events: none; /* Permet de cliquer sur l'image sous le calque */
}

.skeleton {
  opacity: .7;
  animation: skeleton-loading 1s linear infinite alternate;
}

.skeleton-text {
  width: 100%;
  height: .5rem;
  margin-bottom: .25rem;
  border-radius: .125rem;
}

.skeleton-text:last-child {
  margin-bottom: 0;
  width: 80%;
}

@keyframes skeleton-loading {
  0% {
    background-color: hsl(200, 20%, 70%);
  }

  100% {
    background-color: hsl(200, 20%, 95%);
  }
}

</style>
<div class="bg-image" style="background-image: url('{{ asset('assets/logo/modules-1.jpg') }}'); border-radius: 5px;">
    {{-- <div class="bg-primary-dark-op"> --}}
      <div class="content content-full text-center py-6">
        <h1 class="h2 text-white mb-2">Liste des Modules de Production</h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">Suivez tous le processus de votre production.</h2>
      </div>
    {{-- </div> --}}
  </div>
  <div class="content content-full content-boxed">
    <!-- New Arrivals -->
    <h2 class="content-heading">Module de Production</h2>
    <div class="row items-push">

        @foreach ($modules as $module)
            <div class="col-md-6 col-xl-4">
                <div class="block block-rounded h-100 mb-0">
                <div class="block-content p-1">
                    <div class="options-container @if (App\Models\App\Module::getTableName($module->id, $production->id)) options-disable @endif ">
                    <img class="img-fluid options-item colored-image" src="{{ asset("assets/media/modules/$module->image") }}" alt="">
                    <div class="options-overlay bg-black-75">
                        <div class="options-overlay-content">
                            <a class="btn btn-sm btn-alt-secondary" href="{{route('modules.create', ['production' => $production , 'module' => $module])}}">
                                Voir le module
                            </a>
                            {{-- <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="fa fa-plus text-success me-1"></i> Add to cart
                            </a> --}}
                            {{-- <div class="text-warning mt-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-alt"></i>
                                <span class="text-white">(35)</span>
                            </div> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="mb-1">
                    <div class="fw-semibold float-end ms-1">{{$loop->index + 1 }}</div>
                    <a class="h6" href="be_pages_ecom_store_product.html">{{$module->name}}</a>
                    </div>
                    <p class="fs-sm text-muted">{{$module->description}}</p>
                </div>
                </div>
            </div>
        @endforeach

    </div>
  </div>
@endsection
