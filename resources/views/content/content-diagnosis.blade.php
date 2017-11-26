@extends('master.layout-profile')
@section('content')
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#checkbox_1').change(function () {
                $('.children-1').toggle();
            });

            $('#checkbox_2').change(function () {
                $('.children-2').toggle();
            });

            $('#checkbox_9').change(function () {
                $('.children-3').toggle();
            });


            $('#checkbox_14').change(function () {
                $('.children-4').toggle();
            });

            $('#checkbox_23').change(function () {
                $('.children-5').toggle();
            });

            $('#checkbox_26').change(function () {
                $('.children-6').toggle();
            });

            $('#checkbox_28').change(function () {
                $('.children-7').toggle();
            });

            $('#checkbox_35').change(function () {
                $('.children-8').toggle();
            });
            $('#checkbox_38').change(function () {
                $('.children-9').toggle();
            });
            $('#checkbox_48').change(function () {
                $('.children-10').toggle();
            });
            $('#checkbox_58').change(function () {
                $('.children-11').toggle();
            });
            $('#checkbox_59').change(function () {
                $('.children-12').toggle();
            });
            $('#checkbox_62').change(function () {
                $('.children-13').toggle();
            });
            $('#checkbox_65').change(function () {
                $('.children-14').toggle();
            });
            $('#checkbox_67').change(function () {
                $('.children-15').toggle();
            });
            $('#checkbox_69').change(function () {
                $('.children-16').toggle();
            });
            $('#checkbox_74').change(function () {
                $('.children-17').toggle();
            });
            $('#checkbox_76').change(function () {
                $('.children-18').toggle();
            });
            $('#checkbox_81').change(function () {
                $('.children-19').toggle();
            });
            $('#checkbox_88').change(function () {
                $('.children-20').toggle();
            });
            $('#checkbox_90').change(function () {
                $('.children-21').toggle();
            });
            $('#checkbox_93').change(function () {
                $('.children-22').toggle();
            });

            $('#checkbox_96').change(function () {
                $('.children-23').toggle();
            });

            $('#checkbox_98').change(function () {
                $('.children-24').toggle();
            });

            $('#checkbox_100').change(function () {
                $('.children-25').toggle();
            });

            $('#checkbox_105').change(function () {
                $('.children-26').toggle();
            });

            $('#checkbox_111').change(function () {
                $('.children-27').toggle();
            });

            $('#checkbox_114').change(function () {
                $('.children-28').toggle();
            });

            $('#checkbox_119').change(function () {
                $('.children-29').toggle();
            });

            $('#checkbox_126').change(function () {
                $('.children-30').toggle();
            });
            $('#checkbox_').change(function () {
                $('.children-').toggle();
            });








        });
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Patient Profile</h3>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form id="demo-form" action="/urodia/public/show" method="post">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="col-md-6">
                                        <div class="x_title">
                                            <h3>I. SUI</h3>
                                        </div>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_1" id="checkbox_1" />
                                                <label for="checkbox_1">Urethral Hypermobility</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_2" id="checkbox_2" />
                                                <label for="checkbox_2">ISD</label>
                                                <ul style="list-style: none; display:none;" class="children-2">
                                                    <li>
                                                        <input type="checkbox" name="checkbox_3" id="checkbox_3" />
                                                        <label for="checkbox_3">SUI Type 1</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_4" id="checkbox_4" />
                                                        <label for="checkbox_4">SUI Type 2</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_5" id="checkbox_5" />
                                                        <label for="checkbox_5">SUI Type 3</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_6" id="checkbox_6" />
                                                        <label for="checkbox_6">SUI Grade 1</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_7" id="checkbox_7" />
                                                        <label for="checkbox_7">SUI Grade 2</label>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_8" id="checkbox_8" />
                                                <label for="checkbox_8">TOT</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_9" id="checkbox_9" />
                                                <label for="checkbox_9">Retropubic Urethropexy</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <ul style="list-style: none; display:none;" class="children-3">
                                                    <li>
                                                        <input type="checkbox" name="checkbox_10" id="checkbox_10" />
                                                        <label for="checkbox_10">Open Retropubic Urethropexy Primary (Burch, MMK)</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_11" id="checkbox_11" />
                                                        <label for="checkbox_11">
                                                            Open Retropubic Urethropexy Complicated Secondary Repair Secondary (Burch, MMK)
                                                        </label>
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
                                            <h3>II. OAB</h3>
                                        </div>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_12" id="checkbox_12" />
                                                <label for="checkbox_12">Dry OAB</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_13" id="checkbox_13" />
                                                <label for="checkbox_13">Wet OAB</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_14" id="checkbox_14" />
                                                <label for="checkbox_14">Neurogenic or detrusor dyssynergia </label>
                                                <ul style="list-style: none; display: none;" class="children-4">
                                                    <li>
                                                        <input type="checkbox" name="checkbox_16" id="checkbox_16" />
                                                        <label for="checkbox_16">SOAB phasic/ systolic</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_17" id="checkbox_17" />
                                                        <label for="checkbox_17">OAB-idiopathic</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_18" id="checkbox_18" />
                                                        <label for="checkbox_18">OAB provoked</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_19" id="checkbox_19" />
                                                        <label for="checkbox_19">OAB de novo</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_20" id="checkbox_20" />
                                                        <label for="checkbox_20">Hyperreflexia</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_21" id="checkbox_21" />
                                                        <label for="checkbox_21">Sensory urgency</label>
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
                                                <input type="checkbox" name="checkbox_22" id="checkbox_22" />
                                                <label for="checkbox_22">Mixed Incontinence </label>
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
                                                <input type="checkbox" name="checkbox_23" id="checkbox_23" />
                                                <label for="checkbox_23">1. Vesico Vaginal</label>
                                                <ul style="list-style: none; display: none;" class="children-5">
                                                    <li>
                                                        <input type="checkbox" name="checkbox_24" id="checkbox_24" />
                                                        <label for="checkbox_24">RVS 57320 Vaginal Repair</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_25" id="checkbox_25" />
                                                        <label for="checkbox_25">RVS 57330 Transvesical & Transvaginal Apposition</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_26" id="checkbox_26" />
                                                        <label for="checkbox_26">RVS 51900 Tranabdominal</label>
                                                    </li>
                                                        <ul style="list-style: none; display:none;" class="children-6">
                                                            <li>
                                                                <input type="checkbox" name="checkbox_27" id="checkbox_27" />
                                                                <label for="checkbox_27">e.1.b. Transposition of Island Skin-flap </label>
                                                            </li>
                                                        </ul>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_28" id="checkbox_28" />
                                                        <label for="checkbox_28">e.2. vesico-uterine</label>
                                                    </li>
                                                        <ul style="list-style: none; display:none;" class="children-7">
                                                            <li>
                                                                <input type="checkbox" name="checkbox_30" id="checkbox_30" />
                                                                <label for="checkbox_30">RVS 51920 Repair</label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="checkbox_31" id="checkbox_31" />
                                                                <label for="checkbox_31">RVS 51925 Repair of vesico-uterine </label>
                                                            </li>
                                                            <li>
                                                                <input type="checkbox" name="checkbox_32" id="checkbox_32" />
                                                                <label for="checkbox_32">f. with Hysterectomy</label>
                                                            </li>
                                                        </ul>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_33" id="checkbox_33" />
                                                        <label for="checkbox_33">e.2. uretero-vaginal </label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_34" id="checkbox_34" />
                                                        <label for="checkbox_34">e.3. uterine –vaginal</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_35" id="checkbox_35" />
                                                        <label for="checkbox_35">e.4. urethro-vaginal </label>
                                                    </li>
                                                    <ul style="list-style: none; display:none;" class="children-8">
                                                        <li>
                                                            <input type="checkbox" name="checkbox_36" id="checkbox_36" />
                                                            <label for="checkbox_36">RVS 57310 Double-breasted closure technique</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_37" id="checkbox_37" />
                                                            <label for="checkbox_37">RVS 57311 Closure withbulbo-cavernosus transplant</label>
                                                        </li>
                                                    </ul>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_38" id="checkbox_38" />
                                                        <label for="checkbox_38">e.5. recto-vaginal</label>
                                                    </li>
                                                    <ul style="list-style: none; display:none;" class="children-9">
                                                        <li>
                                                            <input type="checkbox" name="checkbox_39" id="checkbox_39" />
                                                            <label for="checkbox_39">RVS 57300 Transvaginal/TransanalRepair</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_40" id="checkbox_40" />
                                                            <label for="checkbox_40">RVS 57305Transabdominal Repair</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_41" id="checkbox_41" />
                                                            <label for="checkbox_41"> RVS 57307Transabdominal with Concomitant Colostomy</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_42" id="checkbox_42" />
                                                            <label for="checkbox_42">Musset-Poitout-Noble Perineotomy</label>
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
                                                <input type="checkbox" name="checkbox_43" id="checkbox_43" />
                                                <label for="checkbox_43">Dementia</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_44" id="checkbox_44" />
                                               <label for="checkbox_44">Infection</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_45" id="checkbox_45" />
                                               <label for="checkbox_45">Atrophic Vagina</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_46" id="checkbox_46" />
                                               <label for="checkbox_46">Pharmacotherapy</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_47" id="checkbox_47" />
                                               <label for="checkbox_47">Psychological</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_48" id="checkbox_48" />
                                               <label for="checkbox_48">Endocrine abnormality –DM,D. Insipidus</label>
                                                <ul style="list-style: none; display:none;" class="children-10">
                                                    <li>
                                                        <input type="checkbox" name="checkbox_49" id="checkbox_49" />
                                                       <label for="checkbox_49">Restricted Mobility</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_50" id="checkbox_50" />
                                                       <label for="checkbox_50">Stool Impaction</label>
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
                                                <input type="checkbox" name="checkbox_51" id="checkbox_51" />
                                                <label for="checkbox_51">Voiding Dysfunction</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_52" id="checkbox_52" />
                                                <label for="checkbox_52">VD- pharmacologic</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_53" id="checkbox_53" />
                                                <label for="checkbox_53">VD-BOO</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_54" id="checkbox_54" />
                                                <label for="checkbox_54">Post-operative</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_55" id="checkbox_55" />
                                                <label for="checkbox_55">VD-Overdistention</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_56" id="checkbox_56" />
                                                <label for="checkbox_56">Psychogenic</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_57" id="checkbox_57" />
                                                <label for="checkbox_57">VD-Neurologic</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="col-md-6">
                                        <div class="x_title">
                                            <h3>VIII. POP</h3>
                                        </div>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_58" id="checkbox_58" />
                                                <label for="checkbox_58">Voiding Dysfunction</label>
                                            </div>
                                            <div class="funkyradio-success">
                                            <ul style="list-style: none; display:none;" class="children-11">
                                                <li>
                                                    <input type="checkbox" name="checkbox_59" id="checkbox_59" />
                                                    <label for="checkbox_59">Anterior compartment</label>
                                                </li>
                                                <ul style="list-style: none; display:none;" class="children-12">
                                                    <li>
                                                        <input type="checkbox" name="checkbox_60" id="checkbox_60" />
                                                        <label for="checkbox_60">RVS 57200 Non-obstetrical Colporrhaphy</label>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="checkbox_61" id="checkbox_61" />
                                                        <label for="checkbox_61">RVS 57240 Anterior Repair & Kelly Plication</label>
                                                    </li>
                                                </ul>

                                                <li>
                                                    <input type="checkbox" name="checkbox_62" id="checkbox_62" />
                                                    <label for="checkbox_62">Posterior compartment</label>
                                                    <ul style="list-style: none; display:none;" class="children-13">
                                                        <li>
                                                            <input type="checkbox" name="checkbox_63" id="checkbox_63" />
                                                            <label for="checkbox_63">RVS 57210 Non-obstetrical Colpoperineorrphaphy</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_64" id="checkbox_64" />
                                                            <label for="checkbox_64">RVS 57250 Posterior Colporrhaphy</label>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="checkbox_65" id="checkbox_65" />
                                                    <label for="checkbox_65">Anterior and Posterior Compartment Prolapse</label>
                                                    <ul style="list-style: none; display:none;" class="children-14">
                                                        <li>
                                                            <input type="checkbox" name="checkbox_66" id="checkbox_66" />
                                                            <label for="checkbox_66">RVS 57260 Combined AP Colporrhaphy</label>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="checkbox_67" id="checkbox_67" />
                                                    <label for="checkbox_67">Anterior and Posterior Compartment Prolapse with Enterocele</label>
                                                    <ul style="list-style: none; display:none;" class="children-15">
                                                        <li>
                                                            <input type="checkbox" name="checkbox_68" id="checkbox_68" />
                                                            <label for="checkbox_68">RVS 57265 Combined AP Colporrhaphy with Enterocele Repair</label>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="checkbox_69" id="checkbox_69" />
                                                    <label for="checkbox_69">Apical or vault</label>
                                                    <ul style="list-style: none; display:none;" class="children-16">
                                                        <li>
                                                            <input type="checkbox" name="checkbox_70" id="checkbox_70" />
                                                            <label for="checkbox_70">RVS 57282SSLF Uterosacral Ligament Fixation</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_71" id="checkbox_71" />
                                                            <label for="checkbox_71">RVS 57280Sacral colpopexy</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_72" id="checkbox_72" />
                                                            <label for="checkbox_72">RVS 57425 Laparoscopic Sacral colpopexy</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_73" id="checkbox_73" />
                                                            <label for="checkbox_73">RVS 57120 Le Fort / partial colpocleisis</label>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="checkbox_74" id="checkbox_74" />
                                                    <label for="checkbox_74">Enterocele</label>
                                                    <ul style="list-style: none; display:none;" class="children-17">
                                                        <li>
                                                            <input type="checkbox" name="checkbox_75" id="checkbox_75" />
                                                            <label for="checkbox_75">RVS 57268 Vaginal repair Abdominal Repair (Moschowitx, Halban, Uterosacral Plication)</label>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="checkbox_76" id="checkbox_76" />
                                                    <label for="checkbox_76">Utero-vaginal Prolapse</label>
                                                    <ul style="list-style: none; display:none;" class="children-18">
                                                        <li>
                                                            <input type="checkbox" name="checkbox_77" id="checkbox_77" />
                                                            <label for="checkbox_77">RVS 57280 Vaginal hysterectomy</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_78" id="checkbox_78" />
                                                            <label for="checkbox_78">RVS 58550 Laparocopy-assisted VH</label>
                                                        </li>
                                                        <li>
                                                            <input type="checkbox" name="checkbox_79" id="checkbox_79" />
                                                            <label for="checkbox_79">RVS 58552 Laparoscopy-assisted VH with Removal of FT & Ovaries</label>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="funkyradio-success">
                                                        <input type="checkbox" name="checkbox_80" id="checkbox_80" />
                                                        <label for="checkbox_80">Pessary</label>
                                                    </div>
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
                                            <h3>Chronic Pelvic Pain </h3>
                                        </div>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_81" id="checkbox_81" />
                                                <label for="checkbox_81">IC</label>
                                                <ul style="list-style: none; display:none;" class="children-19">
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_82" id="checkbox_82" />
                                                            <label for="checkbox_82">RVS 52260 Cystourethroscopy with dilatation / distention of bladder for IC</label>
                                                        </div>
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
                                            <h3>Urethral lesions</h3>
                                        </div>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_83" id="checkbox_83" />
                                                <label for="checkbox_83">RVS 53502 Urethrorrhaphy, suture of urethral wound or injury</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_84" id="checkbox_84" />
                                                <label for="checkbox_84">RVS 53430Urethroplasty, Reconstruction of urethra</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_85" id="checkbox_85" />
                                                <label for="checkbox_85">RVS 53502Urethrorrhaphy, suture of urethral wound or injury</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_86" id="checkbox_86" />
                                                <label for="checkbox_86">RVS 57220 Kelly Urethral Plication / Vaginal Urethroplasty</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_87" id="checkbox_87" />
                                                <label for="checkbox_87">RVS 57230 Plastic Repair of Urethrocele</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_88" id="checkbox_88" />
                                                <label for="checkbox_88">Diverticulum</label>
                                                <ul style="list-style: none; display:none;" class="children-20">
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_89" id="checkbox_89" />
                                                            <label for="checkbox_89">RVS 53240Marsupialization of urethral diverticulum(Spence operation)</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_90" id="checkbox_90" />
                                                            <label for="checkbox_90">RVS 53230Excision of urethral diverticulum</label>
                                                            <ul style="list-style: none; display:none;" class="children-21">
                                                                <li>
                                                                    <div class="funkyradio-success">
                                                                        <input type="checkbox" name="checkbox_91" id="checkbox_91" />
                                                                        <label for="checkbox_91">Marsupialization </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="funkyradio-success">
                                                                        <input type="checkbox" name="checkbox_92" id="checkbox_92" />
                                                                        <label for="checkbox_92">Double-breasted closure technique </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_93" id="checkbox_93" />
                                                            <label for="checkbox_93">Prolapse</label>
                                                            <ul style="list-style: none; display:none;" class="children-22">
                                                                <li>
                                                                    <div class="funkyradio-success">
                                                                        <input type="checkbox" name="checkbox_94" id="checkbox_94" />
                                                                        <label for="checkbox_94">RVS 53275 Excision or fulguration of urethral prolapse</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_95" id="checkbox_95" />
                                                            <label for="checkbox_95">Fibroma</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_96" id="checkbox_96" />
                                                            <label for="checkbox_96">Stenosis</label>
                                                            <ul style="list-style: none; display:none;" class="children-23">
                                                                <li>
                                                                    <div class="funkyradio-success">
                                                                        <input type="checkbox" name="checkbox_97" id="checkbox_97" />
                                                                        <label for="checkbox_97">Reconstruction</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_98" id="checkbox_98" />
                                                            <label for="checkbox_98">Caruncle</label>
                                                            <ul style="list-style: none; display:none;" class="children-24">
                                                                <li>
                                                                    <div class="funkyradio-success">
                                                                        <input type="checkbox" name="checkbox_99" id="checkbox_99" />
                                                                        <label for="checkbox_99">RVS 53265 Excision or fulguration of urethral caruncle</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_100" id="checkbox_100" />
                                                            <label for="checkbox_100">Polyp</label>
                                                            <ul style="list-style: none; display:none;" class="children-25">
                                                                <li>
                                                                    <div class="funkyradio-success">
                                                                        <input type="checkbox" name="checkbox_101" id="checkbox_101" />
                                                                        <label for="checkbox_101">RVS 53260 Excision or fulguration of urethral polyp</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
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
                                            <h3>Anal incontinence</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="col-md-6">
                                        <div class="x_title">
                                            <h3>Bladder & Ureter</h3>
                                        </div>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_102" id="checkbox_102" />
                                                <label for="checkbox_102">RVS 51880 Closure of cystostomy</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_103" id="checkbox_103" />
                                                <label for="checkbox_103">RVS 51550 Cystectomy, partial</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_104" id="checkbox_104" />
                                                <label for="checkbox_104">RVS 51860 Cystorrhaphy (Suture of bladder wound, injury, or rupture</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_105" id="checkbox_105" />
                                                <label for="checkbox_105">Ureteroureterostomy</label>
                                                <ul style="list-style: none; display:none;" class="children-26">
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_106" id="checkbox_106" />
                                                            <label for="checkbox_106">Transperitoneal (end-to-side anastomosis)</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_107" id="checkbox_107" />
                                                <label for="checkbox_107">Ureteroneocystostomy w/ or w/obladder flap</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_108" id="checkbox_108" />
                                                <label for="checkbox_108">Intestinal loop urinary diversion</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_109" id="checkbox_109" />
                                                <label for="checkbox_109">Ureteroileoneocystostomy</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_110" id="checkbox_110" />
                                                <label for="checkbox_110">Clam gastrocystoplasty</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="col-md-6">
                                        <div class="x_title">
                                            <h3>Infection</h3>
                                        </div>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_111" id="checkbox_111" />
                                                <label for="checkbox_111">UTI</label>
                                                <ul style="list-style: none; display:none;" class="children-27">
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_112" id="checkbox_112" />
                                                            <label for="checkbox_112">Recurrent UTI</label>
                                                        </div>
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
                                            <h3>Urolithiasis</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="col-md-6">
                                        <div class="x_title">
                                            <h3>Microscopic hematuria</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="col-md-6">
                                        <div class="x_title">
                                            <h3>Sexual Dysfunction</h3>
                                        </div>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox_114" id="checkbox_114" />
                                                <label for="checkbox_114">Sexual Desire disorders</label>
                                                <ul style="list-style: none; display:none;" class="children-28">
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_115" id="checkbox_115" />
                                                            <label for="checkbox_115">Sexual Desire disorders</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="funkyradio-success">
                                                            <input type="checkbox" name="checkbox_116" id="checkbox_116" />
                                                            <label for="checkbox_116">Sexual Aversion</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox_117" id="checkbox_117" />
                                                    <label for="checkbox_117">Sexual Arousal disorders</label>
                                                </div>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox_118" id="checkbox_118" />
                                                    <label for="checkbox_118">Orgasmic disorders</label>
                                                </div>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox_119" id="checkbox_119" />
                                                    <label for="checkbox_119">Sexual Pain disorders</label>
                                                    <ul style="list-style: none; display:none;" class="children-29">
                                                        <li>
                                                            <div class="funkyradio-success">
                                                                <input type="checkbox" name="checkbox_120" id="checkbox_120" />
                                                                <label for="checkbox_120">Dyspareunia</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="funkyradio-success">
                                                                <input type="checkbox" name="checkbox_121" id="checkbox_121" />
                                                                <label for="checkbox_121">Vaginismus</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="funkyradio-success">
                                                                <input type="checkbox" name="checkbox_123" id="checkbox_123" />
                                                                <label for="checkbox_123">Non-coital Sexual Pain disorders</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="funkyradio-success">
                                                        <input type="checkbox" name="checkbox_124" id="checkbox_124" />
                                                        <label for="checkbox_124">Abnormal Placentation w/ bladder invasion</label>
                                                    </div>
                                                    <div class="funkyradio-success">
                                                        <input type="checkbox" name="checkbox_125" id="checkbox_125" />
                                                        <label for="checkbox_125">Iatrogenic / Traumatic Lower Urinary Tract Injury</label>
                                                    </div>
                                                    <div class="funkyradio-success">
                                                        <input type="checkbox" name="checkbox_126" id="checkbox_126" />
                                                        <label for="checkbox_126">Benign Urogenital Neoplasms</label>
                                                        <ul style="list-style: none; display:none;" class="children-30">
                                                            <li>
                                                                <div class="funkyradio-success">
                                                                    <input type="checkbox" name="checkbox_127" id="checkbox_127" />
                                                                    <label for="checkbox_127">Suburethralmyoma</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="funkyradio-success">
                                                                    <input type="checkbox" name="checkbox_128" id="checkbox_128" />
                                                                    <label for="checkbox_128">Angiomyxoma</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Submit" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('js/parsley.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#demo-form').parsley().on('field:validated', function () {
                var ok = $('.parsley-error').length === 0;

            })
                .on('form:submit', function () {
                    alert('form complete');
                });
        });
    </script>
@stop