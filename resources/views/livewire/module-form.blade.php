
<div class="content">



    <form class="js-validation" action="be_forms_validation.html" method="POST">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Validation Form</h3>
        </div>
        <div class="block-content block-content-full">
          <!-- Regular -->
          <h2 class="content-heading border-bottom mb-4 pb-2">Regular</h2>
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
                                <input type="text" class="form-control" id="val-username" name="{{ $key }}" placeholder="Entrez {{ $value }}..">
                            </div>
                        @elseif((is_numeric($key)) && ($key != 'other_observations'))
                            <div class="mb-4">
                                <label class="form-label" for="val-number"> {{App\Models\Modules\TranslateModuleName::MODULE_NAME_TRANSLATE[$key] }}
                                     <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="val-number" name="{{ $key }}" placeholder="5.0">
                            </div>
                        @else
                            <div class="mb-4">
                                <label class="form-label" for="val-suggestions">Autres Observations <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="val-suggestions" name="other_observations" rows="5" placeholder="What would you like to see?"></textarea>
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
    <!-- jQuery Validation -->

    <!-- Terms Modal -->
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
              <h3 class="block-title">Terms &amp; Conditions</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                  <i class="fa fa-fw fa-times"></i>
                </button>
              </div>
            </div>
            <div class="block-content">
              <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
              <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
            </div>
            <div class="block-content block-content-full text-end bg-body">
              <button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">Done</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Terms Modal -->
</div>
