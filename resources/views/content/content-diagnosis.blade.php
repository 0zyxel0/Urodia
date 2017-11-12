@extends('master.layout-profile') @section('content')
<link href="{{asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{asset('css/custom.css') }}" rel="stylesheet">
<link href="{{asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
<script>
    $(document).ready(function () {
        $('#sui_isd').change(function () {
            $('.children-1').toggle();
        });

        $('#sui_tot_ru').change(function () {
            $('.children-2').toggle();
        });

        $('#oab_nod').change(function () {
            $('.children-3').toggle();
        });

    });
</script>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                @foreach($data as $data)
                <h3>UROGYNECOLOGY Profile of {{$data["givenname"]}} </h3> @endforeach
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <form id="demo-form" action="/urodia/public/show" method="post">
        <div class="x_panel">
            <div class="x_content">
                <div class="col-md-6">
                    <div class="x_title">
                        <h3>I. SUI</h3>
                    </div>
                    <div class="funkyradio">
                        <div class="funkyradio-success">
                            <input type="checkbox" name="sui_hm" id="sui_hm" />
                            <label for="sui_hm">Urethral Hypermobility</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="sui_isd" id="sui_isd" />
                            <label for="sui_isd">ISD</label>
                            <ul style="list-style: none; display:none;" class="children-1">
                                <li>
                                    <input type="checkbox" name="sui_isd_1" id="sui_isd_1" />
                                    <label for="sui_isd_1">SUI Type 1</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="sui_isd_2" id="sui_isd_2" />
                                    <label for="sui_isd_2">SUI Type 2</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="sui_isd_3" id="sui_isd_3" />
                                    <label for="sui_isd_3">SUI Type 3</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="sui_isd_g1" id="sui_isd_g1" />
                                    <label for="sui_isd_g1">SUI Grade 1</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="sui_isd_g2" id="sui_isd_g2" />
                                    <label for="sui_isd_g2">SUI Grade 2</label>
                                </li>
                            </ul>
                        </div>

                        <div class="funkyradio-success">
                            <input type="checkbox" name="sui_tot" id="sui_tot" />
                            <label for="sui_tot">TOT</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="sui_tot_ru" id="sui_tot_ru" />
                            <label for="sui_tot_ru">Retropubic Urethropexy</label>
                        </div>
                        <ul style="list-style: none; display:none;" class="children-2">
                            <li>
                                <input type="checkbox" name="sui_tot_rup" id="sui_tot_rup" />
                                <label for="sui_tot_rup">Open Retropubic Urethropexy Primary (Burch, MMK)</label>
                            </li>
                            <li>
                                <input type="checkbox" name="sui_tot_rupc" id="sui_tot_rupc" />
                                <label for="sui_tot_rupc">
                                    Open Retropubic Urethropexy Complicated Secondary Repair Secondary (Burch, MMK)
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
                        <h3>II. OAB</h3>
                    </div>
                    <div class="funkyradio">
                        <div class="funkyradio-success">
                            <input type="checkbox" name="oab_do" id="oab_do" />
                            <label for="oab_do">Dry OAB</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="oab_wo" id="oab_wo" />
                            <label for="oab_wo">Wet OAB</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="oab_nod" id="oab_nod" />
                            <label for="oab_nod">Neurogenic or detrusor dyssynergia </label>
                            <ul style="list-style: none; display: none;" class="children-3">
                                <li>
                                    <input type="checkbox" name="checkbox" id="a" />
                                    <label for="a">SOAB phasic/ systolic</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="c" />
                                    <label for="c">OAB-idiopathic</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="d" />
                                    <label for="d">OAB-idiopathic</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="f" />
                                    <label for="f">OAB-idiopathic</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="g" />
                                    <label for="g">OAB provoked</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="g" />
                                    <label for="g">OAB de novo</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="g" />
                                    <label for="g">Hyperreflexia</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="g" />
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
                            <input type="checkbox" name="checkbox" id="checkbox3" />
                            <label for="checkbox3">Mixed Incontinence </label>
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">1. Vesico Vaginal</label>
                            <ul style="list-style: none;" class="addedChoices">
                                <li>
                                    <input type="checkbox" name="checkbox" id="a" />
                                    <label for="a">RVS 57320 Vaginal Repair</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="c" />
                                    <label for="c">RVS 57330 Transvesical&Transvaginal Apposition</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="d" />
                                    <label for="d">RVS 51900 Tranabdominal</label>
                                </li>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="f" />
                                        <label for="f">e.1.b. Transposition of Island Skin-flap </label>
                                    </li>
                                </ul>
                                <li>
                                    <input type="checkbox" name="checkbox" id="f" />
                                    <label for="f">e.2. vesico-uterine</label>
                                </li>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="f" />
                                        <label for="f">RVS 51920 Repair</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="f" />
                                        <label for="f">RVS 51925 Repair of vesico-uterine </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="f" />
                                        <label for="f">f. with Hysterectomy</label>
                                    </li>
                                </ul>
                                <li>
                                    <input type="checkbox" name="checkbox" id="g" />
                                    <label for="g">e.2. uretero-vaginal </label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="g" />
                                    <label for="g">e.3. uterine –vaginal</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="g" />
                                    <label for="g">e.4. urethro-vaginal </label>
                                </li>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="g" />
                                        <label for="g">RVS 57310 Double-breasted closure technique</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="g" />
                                        <label for="g">RVS 57311 Closure withbulbo-cavernosus transplant</label>
                                    </li>
                                </ul>
                                <li>
                                    <input type="checkbox" name="checkbox" id="g" />
                                    <label for="g">e.5. recto-vaginal</label>
                                </li>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="g" />
                                        <label for="g">RVS 57300Transvaginal/TransanalRepair</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="g" />
                                        <label for="g">RVS 57305Transabdominal Repair</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="g" />
                                        <label for="g"> RVS 57307Transabdominal with Concomitant Colostomy</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="g" />
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Dementia</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption" />
                            <label for="checkbox2">Infection</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption" />
                            <label for="checkbox2">Atrophic Vagina</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption" />
                            <label for="checkbox2">Pharmacotherapy</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption" />
                            <label for="checkbox2">Psychological</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption" />
                            <label for="checkbox2">Endocrine abnormality –DM,D. Insipidus</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption" />
                                    <label for="checkbox2">Restricted Mobility</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="checkbox2" class="moreOption" />
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Voiding Dysfunction</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">VD- pharmacologic</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">VD-BOO</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Post-operative</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">VD-Overdistention</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Psychogenic</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">VD-Neurologic</label>
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Voiding Dysfunction</label>
                        </div>
                        <ul>
                            <li>
                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                <label for="checkbox1">Anterior compartment</label>
                            </li>
                            <ul>
                                <li>
                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                    <label for="checkbox1">RVS 57200 Non-obstetrical Colporrhaphy</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                    <label for="checkbox1">RVS 57240 Anterior Repair & Kelly Plication</label>
                                </li>
                            </ul>
                            <li>
                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                <label for="checkbox1">Posterior compartment</label>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 57210 Non-obstetrical Colpoperineorrphaphy</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 57250 Posterior Colporrhaphy</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                <label for="checkbox1">Anterior and Posterior Compartment Prolapse</label>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 57260 Combined AP Colporrhaphy</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                <label for="checkbox1">Anterior and Posterior Compartment Prolapse with Enterocele</label>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 57265 Combined AP Colporrhaphy with Enterocele Repair</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                <label for="checkbox1">Apical or vault</label>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 57282SSLF Uterosacral Ligament Fixation</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 57280Sacral colpopexy</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 57425 Laparoscopic Sacral colpopexy</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 57120 Le Fort / partial colpocleisis</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="checkbox" id="checkbox1123" />
                                <label for="checkbox1123">Enterocele</label>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1123" />
                                        <label for="checkbox1123">RVS 57268 Vaginal repair Abdominal Repair (Moschowitx, Halban, Uterosacral Plication)</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <input type="checkbox" name="checkbox" id="checkbox1123" />
                                <label for="checkbox1123">Utero-vaginal Prolapse</label>
                                <ul>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1123" />
                                        <label for="checkbox1123">RVS 57280 Vaginal hysterectomy</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1123" />
                                        <label for="checkbox1123">RVS 58550 Laparocopy-assisted VH</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="checkbox" id="checkbox1123" />
                                        <label for="checkbox1123">RVS 58552 Laparoscopy-assisted VH with Removal of FT & Ovaries</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="funkyradio-success">
                                    <input type="checkbox" name="checkbox" id="ffff" />
                                    <label for="ffff">Pessary</label>
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">IC</label>
                            <ul style="list-style: none;">
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 52260 Cystourethroscopy with dilatation / distention of bladder for IC</label>
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">RVS 53502 Urethrorrhaphy, suture of urethral wound or injury</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">RVS 53430Urethroplasty, Reconstruction of urethra</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">RVS 53502Urethrorrhaphy, suture of urethral wound or injury</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">RVS 57220 Kelly Urethral Plication / Vaginal Urethroplasty</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">RVS 57230 Plastic Repair of Urethrocele</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Diverticulum</label>
                            <ul>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 53240Marsupialization of urethral diverticulum(Spence operation)</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">RVS 53230Excision of urethral diverticulum</label>
                                        <ul>
                                            <li>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                                    <label for="checkbox1">Marsupialization </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                                    <label for="checkbox1">Double-breasted closure technique </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Prolapse</label>
                                        <ul>
                                            <li>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                                    <label for="checkbox1">RVS 53275 Excision or fulguration of urethral prolapse</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Fibroma</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Stenosis</label>
                                        <ul>
                                            <li>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                                    <label for="checkbox1">Reconstruction</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Caruncle</label>
                                        <ul>
                                            <li>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                                    <label for="checkbox1">RVS 53265Excision or fulguration of urethral caruncle</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Polyp</label>
                                        <ul>
                                            <li>
                                                <div class="funkyradio-success">
                                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                                    <label for="checkbox1">RVS 53260Excision or fulguration of urethral polyp</label>
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">RVS 51880 Closure of cystostomy</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">RVS 51550 Cystectomy, partial</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">RVS 51860 Cystorrhaphy (Suture of bladder wound, injury, or rupture</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Ureteroureterostomy</label>
                            <ul>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Transperitoneal (end-to-side anastomosis)</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Ureteroneocystostomy w/ or w/obladder flap</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Intestinal loop urinary diversion</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Ureteroileoneocystostomy</label>
                        </div>
                        <div class="funkyradio-success">
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Clam gastrocystoplasty</label>
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">UTI</label>
                            <ul>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Recurrent UTI</label>
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
                            <input type="checkbox" name="checkbox" id="checkbox1" />
                            <label for="checkbox1">Sexual Desire disorders</label>
                            <ul>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Sexual Desire disorders</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="funkyradio-success">
                                        <input type="checkbox" name="checkbox" id="checkbox1" />
                                        <label for="checkbox1">Sexual Aversion</label>
                                    </div>
                                </li>
                            </ul>
                            <div class="funkyradio-success">
                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                <label for="checkbox1">Sexual Arousal disorders</label>
                            </div>
                            <div class="funkyradio-success">
                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                <label for="checkbox1">Orgasmic disorders</label>
                            </div>
                            <div class="funkyradio-success">
                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                <label for="checkbox1">Sexual Pain disorders</label>
                                <ul>
                                    <li>
                                        <div class="funkyradio-success">
                                            <input type="checkbox" name="checkbox" id="checkbox1" />
                                            <label for="checkbox1">Dyspareunia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="funkyradio-success">
                                            <input type="checkbox" name="checkbox" id="checkbox1" />
                                            <label for="checkbox1">Vaginismus</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="funkyradio-success">
                                            <input type="checkbox" name="checkbox" id="checkbox1" />
                                            <label for="checkbox1">Non-coital Sexual Pain disorders</label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="funkyradio-success">
                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                    <label for="checkbox1">Abnormal Placentation w/ bladder invasion</label>
                                </div>
                                <div class="funkyradio-success">
                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                    <label for="checkbox1">Iatrogenic / Traumatic Lower Urinary Tract Injury</label>
                                </div>
                                <div class="funkyradio-success">
                                    <input type="checkbox" name="checkbox" id="checkbox1" />
                                    <label for="checkbox1">Benign Urogenital Neoplasms</label>
                                    <ul>
                                        <li>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                                <label for="checkbox1">Suburethralmyoma</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="funkyradio-success">
                                                <input type="checkbox" name="checkbox" id="checkbox1" />
                                                <label for="checkbox1">Angiomyxoma</label>
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
<!-- /page content -->
@stop