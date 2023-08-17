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

</style>
<div class="bg-image" style="background-image: url('assets/logo/modules-1.jpg'); border-radius: 5px;">
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

      <div class="col-md-6 col-xl-4">
        <div class="block block-rounded h-100 mb-0">
          <div class="block-content p-1">
            <div class="options-container">
              <img class="img-fluid options-item colored-image" src="{{asset('assets/media/modules/semis.jpg')}}" alt="">
              <div class="options-overlay bg-black-75">
                <div class="options-overlay-content">
                  <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_store_product.html">
                    View
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-plus text-success me-1"></i> Add to cart
                  </a>
                  <div class="text-warning mt-3">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                    <span class="text-white">(35)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <div class="mb-1">
              <div class="fw-semibold float-end ms-1">$9</div>
              <a class="h6" href="be_pages_ecom_store_product.html">Semi du maïs</a>
            </div>
            <p class="fs-sm text-muted">Préparation du sol avant mise en place de la culture</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="block block-rounded h-100 mb-0">
          <div class="block-content p-1">
            <div class="options-container ">
              <img class="img-fluid options-item" src="assets/media/modules/suivi.jpg" alt="">
              <div class="options-overlay bg-black-75">
                <div class="options-overlay-content">
                  <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_store_product.html">
                    View
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-plus text-success me-1"></i> Add to cart
                  </a>
                  <div class="text-warning mt-3">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span class="text-white">(48)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <div class="mb-1">
              <div class="fw-semibold float-end ms-1">$16</div>
              <a class="h6" href="be_pages_ecom_store_product.html">Iriguation</a>
            </div>
            <p class="fs-sm text-muted">Suivi de la culture du maïs</p>
          </div>
        </div>
      </div>

      <div class="col-xl-4">
        <div class="block block-rounded h-100 mb-0">
          <div class="block-content p-1">
            <div class="options-container">
              <img class="img-fluid options-item" src="assets/media/modules/traitement.jpg" alt="">
              <div class="options-overlay bg-black-75">
                <div class="options-overlay-content">
                  <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_store_product.html">
                    View
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-plus text-success me-1"></i> Add to cart
                  </a>
                  <div class="text-warning mt-3">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                    <span class="text-white">(19)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <div class="mb-1">
              <div class="fw-semibold float-end ms-1">$75</div>
              <a class="h6" href="be_pages_ecom_store_product.html">Traitement</a>
            </div>
            <p class="fs-sm text-muted">Maîtrise de l’enherbement et des dégâts des ravageurs.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="block block-rounded h-100 mb-0">
          <div class="block-content p-1">
            <div class="options-container options-disable">
              <img class="img-fluid options-item" src="assets/media/modules/recolte.jpg" alt="">
              <div class="options-overlay bg-black-75">
                <div class="options-overlay-content">
                  <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_store_product.html">
                    View
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-plus text-success me-1"></i> Add to cart
                  </a>
                  <div class="text-warning mt-3">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span class="text-white">(690)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <div class="mb-1">
              <div class="fw-semibold float-end ms-1">$44</div>
              <a class="h6" href="be_pages_ecom_store_product.html">Récolte du maïs</a>
            </div>
            <p class="fs-sm text-muted">Modalités de récolte selon la destination du maïs</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-4">
        <div class="block block-rounded h-100 mb-0">
          <div class="block-content p-1">
            <div class="options-container options-disable">
              <img class="img-fluid options-item bg-black-75" src="assets/media/modules/conservation.jpg" alt="">
              <div class="options-overlay bg-black-75">
                <div class="options-overlay-content">
                  <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_store_product.html">
                    View
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-plus text-success me-1"></i> Add to cart
                  </a>
                  <div class="text-warning mt-3">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span class="text-white">(480)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-content">
            <div class="mb-1">
              <div class="fw-semibold float-end ms-1">$58</div>
              <a class="h6" href="be_pages_ecom_store_product.html">Conversation</a>
            </div>
            <p class="fs-sm text-muted">Mise en place du stockage du maïs pour eviter la contamination</p>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
