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
              <h3>UROGYNECOLOGY Profile</h3>
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

      </div>
      <!-- /page content -->
@stop