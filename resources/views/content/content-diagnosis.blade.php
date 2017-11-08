@extends('master\layout-profile')
@section('content')
  <script src="http://localhost:8899/urodia/public/js/bootstrap.js"></script>
  <script src="http://localhost:8899/urodia/public/js/custom.js"></script>
  <script src="http://localhost:8899/urodia/public/js/jquery.mCustomScrollbar.js"></script>


  <script>
      $(document).ready(function() {





      });

  </script>



  <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              @foreach($data as $data)
              <h3>UROGYNECOLOGY Profile of {{$data["givenname"]}} </h3>

              @endforeach
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

      <div class="x_panel">

        <div class="x_content">

          <div class="col-md-6">
            <div class="x_title">
              <h3>I.	SUI</h3>


            </div>

            <div class="funkyradio">
              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox3"/>
                <label for="checkbox3">Urethral Hypermobility</label>
              </div>
              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
                <label for="checkbox2">ISD</label>
                <ul style="list-style: none;" class="addedChoices">
                  <li>
                    <input type="checkbox" name="checkbox" id="a"/>
                    <label for="a">SUI Type 1</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="c"/>
                    <label for="c">SUI Type 2</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="d"/>
                    <label for="d">SUI Type 3</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="f"/>
                    <label for="f">SUI Grade 1</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">SUI Grade 2</label>
                  </li>
                </ul>

              </div>



              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox1"/>
                <label for="checkbox1">TOT</label>
              </div>
              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox0" class="moreOption"/>
                <label for="checkbox0">Retropubic Urethropexy</label>
              </div>
              <ul style="list-style: none;" class="addedChoices">
                <li>
                  <input type="checkbox" name="checkbox" id="a"/>
                  <label for="a">Open Retropubic Urethropexy Primary (Burch, MMK)</label>
                </li>
                <li>
                  <input type="checkbox" name="checkbox" id="c"/>
                  <label for="c">Open Retropubic Urethropexy Complicated Secondary
                    Repair Secondary (Burch, MMK)
                  </label>
                </li>
              </ul>
            </div>

          </div>



        </div>




      </div>
      <div class="x_panel">
      <div class="x_content">

          <div class="col-md-6">
            <div class="x_title">
              <h3>II.	OAB</h3>
            </div>

            <div class="funkyradio">
              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox3"/>
                <label for="checkbox3">Dry OAB</label>
              </div>
              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
                <label for="checkbox2">Wet OAB</label>

              </div>



              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox1"/>
                <label for="checkbox1">Neurogenic or detrusor dyssynergia </label>


                <ul style="list-style: none;" class="addedChoices">
                  <li>
                    <input type="checkbox" name="checkbox" id="a"/>
                    <label for="a">SOAB phasic/ systolic</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="c"/>
                    <label for="c">OAB-idiopathic</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="d"/>
                    <label for="d">OAB-idiopathic</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="f"/>
                    <label for="f">OAB-idiopathic</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">OAB provoked</label>
                  </li>

                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">OAB de novo</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">Hyperreflexia</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">Sensory urgency</label>
                  </li>
                </ul>

              </div>

            </div>

          </div>

        </div>
      </div>
      <div class="x_panel">
        <div class="x_content">

          <div class="col-md-6">
            <div class="x_title">
              <h3>III. MIXED UI</h3>
            </div>

            <div class="funkyradio">
              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox3"/>
                <label for="checkbox3">Mixed Incontinence   </label>
              </div>


            </div>

          </div>

        </div>
      </div>
      <div class="x_panel">
        <div class="x_content">

          <div class="col-md-6">
            <div class="x_title">
              <h3>IV. OVERFLOW UI</h3>
            </div>

          </div>

        </div>
      </div>
      <div class="x_panel">
        <div class="x_content">

          <div class="col-md-6">
            <div class="x_title">
              <h3>V. CONTINUOUS (FISTULA)</h3>
            </div>

            <div class="funkyradio">
              <div class="funkyradio-success">
                <input type="checkbox" name="checkbox" id="checkbox1"/>
                <label for="checkbox1">1. Vesico Vaginal</label>


                <ul style="list-style: none;" class="addedChoices">
                  <li>
                    <input type="checkbox" name="checkbox" id="a"/>
                    <label for="a">RVS 57320 Vaginal Repair</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="c"/>
                    <label for="c">RVS 57330 Transvesical&Transvaginal Apposition</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="d"/>
                    <label for="d">RVS 51900 Tranabdominal</label>
                  </li>
                    <ul>
                      <li>
                        <input type="checkbox" name="checkbox" id="f"/>
                        <label for="f">e.1.b. Transposition of Island Skin-flap </label>
                      </li>
                    </ul>
                  <li>
                    <input type="checkbox" name="checkbox" id="f"/>
                    <label for="f">e.2. vesico-uterine</label>
                  </li>
                  <ul>
                    <li>
                      <input type="checkbox" name="checkbox" id="f"/>
                      <label for="f">RVS 51920 Repair</label>
                    </li>
                    <li>
                      <input type="checkbox" name="checkbox" id="f"/>
                      <label for="f">RVS 51925 Repair of vesico-uterine </label>
                    </li>
                    <li>
                      <input type="checkbox" name="checkbox" id="f"/>
                      <label for="f">f. with Hysterectomy</label>
                    </li>
                  </ul>
                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">e.2. uretero-vaginal </label>
                  </li>

                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">e.3. uterine –vaginal</label>
                  </li>
                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">e.4. urethro-vaginal </label>
                  </li>
                  <ul>
                    <li>
                      <input type="checkbox" name="checkbox" id="g"/>
                      <label for="g">RVS 57310 Double-breasted closure technique</label>
                    </li>
                    <li>
                      <input type="checkbox" name="checkbox" id="g"/>
                      <label for="g">RVS 57311 Closure withbulbo-cavernosus transplant</label>
                    </li>
                  </ul>



                  <li>
                    <input type="checkbox" name="checkbox" id="g"/>
                    <label for="g">e.5. recto-vaginal</label>
                  </li>
                  <ul>
                    <li>
                      <input type="checkbox" name="checkbox" id="g"/>
                      <label for="g">RVS 57300Transvaginal/TransanalRepair</label>
                    </li>
                    <li>
                      <input type="checkbox" name="checkbox" id="g"/>
                      <label for="g">RVS 57305Transabdominal Repair</label>
                    </li>
                    <li>
                      <input type="checkbox" name="checkbox" id="g"/>
                      <label for="g"> RVS 57307Transabdominal with Concomitant Colostomy</label>
                    </li>
                    <li>
                      <input type="checkbox" name="checkbox" id="g"/>
                      <label for="g">Musset-Poitout-Noble Perineotomy</label>
                    </li>
                  </ul>
                </ul>

              </div>

            </div>

          </div>

          </div>

        </div>
      <div class="x_panel">
      <div class="x_content">

        <div class="col-md-6">
          <div class="x_title">
            <h3>VI. FUNCTIONAL UI – DIAPPERS</h3>
          </div>
          <div class="funkyradio">
            <div class="funkyradio-success">

              <input type="checkbox" name="checkbox" id="checkbox1"/>
              <label for="checkbox1">Dementia</label>
            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
              <label for="checkbox2">Infection</label>

            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
              <label for="checkbox2">Atrophic Vagina</label>

            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
              <label for="checkbox2">Pharmacotherapy</label>

            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
              <label for="checkbox2">Psychological</label>

            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
              <label for="checkbox2">Endocrine abnormality –DM,D. Insipidus</label>
              <ul>
                <li>
                  <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
                  <label for="checkbox2">Restricted Mobility</label>
                </li>
                <li>
                  <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption"/>
                  <label for="checkbox2">Stool Impaction</label>
                </li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>

    <div class="x_panel">
      <div class="x_content">

        <div class="col-md-6">
            <div class="x_title">
              <h3>VII. Voiding Dysfunction</h3>
            </div>

          <div class="funkyradio">
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox1"/>
              <label for="checkbox1">Voiding Dysfunction</label>
            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox1"/>
              <label for="checkbox1">VD- pharmacologic</label>
            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox1"/>
              <label for="checkbox1">VD-BOO</label>
            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox1"/>
              <label for="checkbox1">Post-operative</label>
            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox1"/>
              <label for="checkbox1">VD-Overdistention</label>
            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox1"/>
              <label for="checkbox1">Psychogenic</label>
            </div>
            <div class="funkyradio-success">
              <input type="checkbox" name="checkbox" id="checkbox1"/>
              <label for="checkbox1">VD-Neurologic</label>
            </div>

          </div>

            </div>
      </div>
    </div>


  </div>


      </div>
      <!-- /page content -->
@stop