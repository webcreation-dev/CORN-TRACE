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

                                    <span class="badge bg-warning rounded-pill">SUIVANT</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">

                                    <span class="badge bg-black-50 rounded-pill">MODIFIER</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content">

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

            <form class="js-validation" action="be_forms_validation.html" method="POST">
                <div class="block block-rounded">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">FORMULAIRE DU MODULE {{ $module->name }} </h3>
                  </div>
                  <div class="block-content block-content-full">
                    <!-- Regular -->
                    <h2 class="content-heading border-bottom mb-4 pb-2">Informations</h2>
                    <div class="row items-push">
                      <div class="col-lg-12 col-xl-12">
                          @foreach($step_modules as $item)
                              @foreach( array_filter($item->toArray(), function($key) {
                                      return !in_array($key, ['id', 'module_id', 'created_at', 'updated_at']);
                                      }, ARRAY_FILTER_USE_KEY
                                  ) as $key => $value
                              )

                                  @if ((is_string($key)) && ($key != 'other_observations'))
                                      <div class="mb-4">
                                          <label class="form-label" for="val-username">
                                              {{App\Models\Modules\TranslateModuleName::MODULE_NAME_TRANSLATE[$key] }}
                                              <span class="text-danger">*</span>
                                          </label>
                                          <input type="text" class="form-control" id="val-username" value="{{$value}}" name="{{ $key }}" placeholder="Entrez {{ $value }}..">
                                      </div>
                                  @elseif((is_numeric($key)) && ($key != 'other_observations'))
                                      <div class="mb-4">
                                          <label class="form-label" for="val-number"> {{App\Models\Modules\TranslateModuleName::MODULE_NAME_TRANSLATE[$key] }}
                                               <span class="text-danger">*</span></label>
                                          <input type="text" class="form-control" id="val-number" value="{{$value}}" name="{{ $key }}" placeholder="5.0">
                                      </div>
                                  @else
                                      <div class="mb-4">
                                          <label class="form-label" for="val-suggestions">Autres Observations <span class="text-danger">*</span></label>
                                          <textarea class="form-control" id="val-suggestions" value="{{$value}}" name="other_observations" rows="5" placeholder="What would you like to see?"></textarea>
                                      </div>
                                  @endif
                              @endforeach
                          @endforeach

                          {{-- SELECT 2 FORM --}}
                          {{-- <div class="mb-4">
                              <label class="form-label" for="val-select2">Select2 <span class="text-danger">*</span></label>
                              <select class="js-select2 form-select" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one..">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="javascript">JavaScript</option>
                                <option value="angular">Angular</option>
                                <option value="react">React</option>
                                <option value="vuejs">Vue.js</option>
                                <option value="ruby">Ruby</option>
                                <option value="php">PHP</option>
                                <option value="asp">ASP.NET</option>
                                <option value="python">Python</option>
                                <option value="mysql">MySQL</option>
                              </select>
                          </div> --}}
                      </div>
                    </div>
                    <!-- END Regular -->

                    <!-- Advanced -->
                    {{-- <h2 class="content-heading border-bottom mb-4 pb-2">Advanced</h2>
                    <div class="row items-push">

                      <div class="col-lg-12 col-xl-12">

                        <div class="mb-4">
                          <label class="form-label" for="val-email">Email <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="val-password">Password <span class="text-danger">*</span></label>
                          <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                          <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                          <select class="form-select" id="val-skill" name="val-skill">
                            <option value="">Please select</option>
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="javascript">JavaScript</option>
                            <option value="angular">Angular</option>
                            <option value="react">React</option>
                            <option value="vuejs">Vue.js</option>
                            <option value="ruby">Ruby</option>
                            <option value="php">PHP</option>
                            <option value="asp">ASP.NET</option>
                            <option value="python">Python</option>
                            <option value="mysql">MySQL</option>
                          </select>
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="val-currency">Currency <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$21.60">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="val-website">Website <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="val-phoneus">Phone (US) <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="212-999-0000">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="val-digits">Digits <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="5">
                        </div>

                        <div class="mb-4">
                          <label class="form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
                        </div>
                        <div class="mb-4">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">Terms &amp; Conditions</a> <span class="text-danger">*</span>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="val-terms" name="val-terms">
                            <label class="form-check-label" for="val-terms">I agree</label>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <!-- END Advanced -->

                    <!-- Third Party Plugins -->
                    {{-- <h2 class="content-heading border-bottom mb-4 pb-2">Third Party Plugins</h2>
                    <div class="row items-push">

                      <div class="col-lg-12 col-xl-12">

                        <div class="mb-4">
                          <label class="form-label" for="val-select2-multiple">Select2 Multiple <span class="text-danger">*</span></label>
                          <select class="js-select2 form-select" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="javascript">JavaScript</option>
                            <option value="angular">Angular</option>
                            <option value="react">React</option>
                            <option value="vuejs">Vue.js</option>
                            <option value="ruby">Ruby</option>
                            <option value="php">PHP</option>
                            <option value="asp">ASP.NET</option>
                            <option value="python">Python</option>
                            <option value="mysql">MySQL</option>
                          </select>
                        </div>
                      </div>
                    </div> --}}
                    <!-- END Third Party Plugins -->

                    <!-- Submit -->
                    <div class="row items-push">
                      <div class="col-lg-7 offset-lg-4">
                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                      </div>
                    </div>
                    <!-- END Submit -->
                  </div>
                </div>
              </form>

            {{-- @livewire('module-form-controller', ['modules' => $modules, 'module' => $module, 'step_modules' => $step_modules, '' => $module_id, 'production' => $production, ]) --}}
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
