@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container" style="color:red; background-color: #ffb3b3;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="text-align:center;">{{ __('Client In-take Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="submit" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="pilot">Pilot:</label>
                            <input id="pilot" name="pilot" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nairobi">Nairobi:</label>
                            <input id="nairobi" name="nairobi" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="client">name of client:</label>
                            <input id="client" name="client" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ref">ref:</label>
                            <input id="ref" name="ref" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">date:</label>
                            <input id="date" name="date" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gender">gender:</label>
                            <div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="gender" id="gender_0" type="checkbox" class="custom-control-input" value="female">
                                    <label for="gender_0" class="custom-control-label">female</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="gender" id="gender_1" type="checkbox" class="custom-control-input" value="male">
                                    <label for="gender_1" class="custom-control-label">male</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="gender" id="gender_2" type="checkbox" class="custom-control-input" value="other">
                                    <label for="gender_2" class="custom-control-label">other</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="age">age :</label>
                            <input id="age" name="age" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dob">date of birth :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-birthday-cake"></i>
                                    </div>
                                </div>
                                <input id="dob" name="dob" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">email :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-tablet"></i>
                                    </div>
                                </div>
                                <input id="email" name="email" placeholder="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="caddress">contact address :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="caddress" name="caddress" placeholder="address" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no">mobile number :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-book"></i>
                                    </div>
                                </div>
                                <input id="no" name="no" placeholder="mobile" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ocontacts">other contacts</label>
                            <input id="ocontacts" name="ocontacts" placeholder="contact" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="residence">residence</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                                <input id="residence" name="residence" placeholder="residence" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="loe">level of education</label>
                            <div>
                                <select id="loe" name="loe" class="custom-select" aria-describedby="loeHelpBlock" required="required">
                                    <option value="primary">primary</option>
                                    <option value="secondary">secondary</option>
                                    <option value="certificate">certificate</option>
                                    <option value="diploma">diploma</option>
                                    <option value="degree">degree</option>
                                    <option value="masters">masters</option>
                                    <option value="pHd">pHd</option>
                                    <option value="kindergarten">kindergarten</option>
                                    <option value="none">none</option>
                                </select>
                                <span id="loeHelpBlock" class="form-text text-muted">choose clients level of education</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="language">language</label>
                            <div>
                                <select id="language" name="language" class="custom-select" required="required" multiple="multiple">
                                    <option value="english">english</option>
                                    <option value="kiswahili">kiswahili</option>
                                    <option value="local">local/venacular</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>proficiency level</label>
                            <div>
                                <div class="custom-control custom-checkbox custom-control-inline" required="required">
                                    <input name="pl" id="pl_0" type="checkbox" class="custom-control-input" value="written">
                                    <label for="pl_0" class="custom-control-label">written</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="pl" id="pl_1" type="checkbox" class="custom-control-input" value="spoken">
                                    <label for="pl_1" class="custom-control-label">spoken</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>employment status</label>
                            <div>
                                <div class="custom-control custom-checkbox custom-control-inline" required="required">
                                    <input name="employment status" id="employment status_0" type="checkbox" class="custom-control-input" value="casual">
                                    <label for="employment status_0" class="custom-control-label">casual</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="employment status" id="employment status_1" type="checkbox" class="custom-control-input" value="contract">
                                    <label for="employment status_1" class="custom-control-label">contract</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="employment status" id="employment status_2" type="checkbox" class="custom-control-input" value="permanent">
                                    <label for="employment status_2" class="custom-control-label">permanent</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="employment status" id="employment status_3" type="checkbox" class="custom-control-input" value="unemployed">
                                    <label for="employment status_3" class="custom-control-label">unemployed</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="occupation">occupation</label>
                            <input id="occupation" name="occupation" placeholder="occupation" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ipm">income per month kshs</label>
                            <input id="ipm" name="ipm" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pd">per day kshs/ On/Off</label>
                            <input id="pd" name="pd" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="marital status">marital status</label>
                            <div>
                                <select id="marital status" name="marital status" class="custom-select" required="required">
                                    <option value="single">single</option>
                                    <option value="married">married</option>
                                    <option value="separated">separated</option>
                                    <option value="divorced">divorced</option>
                                    <option value="widowed">widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vulnerability">vulnerability</label>
                            <div>
                                <select id="vulnerability" name="vulnerability" class="custom-select" aria-describedby="vulnerabilityHelpBlock" required="required" multiple="multiple">
                                    <option value="orphaned">orphaned</option>
                                    <option value="divorced">divorced</option>
                                    <option value="child">child</option>
                                    <option value="woman">woman</option>
                                    <option value="physical imparement">physical impairment</option>
                                    <option value="mental impairment">mental impairment</option>
                                    <option value="none">none</option>
                                </select>
                                <span id="vulnerabilityHelpBlock" class="form-text text-muted">for vulnerable clients</span>
                            </div>
                        </div>
                        <label style="margin-top: 50px; font-size:30px;">Nature of case:</label>

                        <div class="form-group" ">
                                <label style=" margin-left: 25px;">abuse of office:</label>
                            <div style="margin-left: 100px;">
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-checkbox">
                                        <input name="aof" id="aof_0" type="checkbox" class="custom-control-input" value="intimidation">
                                        <label for="aof_0" class="custom-control-label">intimidation</label>
                                    </div>
                                </div>
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-checkbox">
                                        <input name="aof" id="aof_1" type="checkbox" class="custom-control-input" value="threats">
                                        <label for="aof_1" class="custom-control-label">threats</label>
                                    </div>
                                </div>
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-checkbox">
                                        <input name="aof" id="aof_2" type="checkbox" class="custom-control-input" value="disappearance">
                                        <label for="aof_2" class="custom-control-label">disappearance</label>
                                    </div>
                                </div>
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-checkbox">
                                        <input name="aof" id="aof_3" type="checkbox" class="custom-control-input" value="wrongful detention">
                                        <label for="aof_3" class="custom-control-label">wrongful detention</label>
                                    </div>
                                </div>
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-checkbox">
                                        <input name="aof" id="aof_4" type="checkbox" class="custom-control-input" value="corruption by formal government authorities">
                                        <label for="aof_4" class="custom-control-label">corruption by formal government authorities</label>
                                    </div>
                                </div>
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-checkbox">
                                        <input name="aof" id="aof_5" type="checkbox" class="custom-control-input" value="access to legal documents">
                                        <label for="aof_5" class="custom-control-label">access to legal documents</label>
                                    </div>
                                </div>
                                <div class="custom-controls-stacked">
                                    <div class="custom-control custom-checkbox">
                                        <input name="aof" id="aof_6" type="checkbox" class="custom-control-input" value="appeals of judicial review nature">
                                        <label for="aof_6" class="custom-control-label">appeals of judicial review nature</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="aof">others(specify)</label>
                            <textarea id="aof" name="aof" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label style="margin-left: 25px;">criminal :</label>
                            <div style="margin-left: 100px;">
                                <div class="form-group">
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="criminal" id="criminal_0" type="checkbox" class="custom-control-input" value="robbery with violence">
                                            <label for="criminal_0" class="custom-control-label">robbery with violence</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="criminal" id="criminal_1" type="checkbox" class="custom-control-input" value="theft">
                                            <label for="criminal_1" class="custom-control-label">theft</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="criminal" id="criminal_2" type="checkbox" class="custom-control-input" value="assault">
                                            <label for="criminal_2" class="custom-control-label">assault</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="criminal" id="criminal_3" type="checkbox" class="custom-control-input" value="domestic violence">
                                            <label for="criminal_3" class="custom-control-label">domestic violence</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="margin-left: 25px;">sexual violence :</label>
                                <div style="margin-left: 100px;">
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="sexual violence" id="sexual violence_0" type="checkbox" class="custom-control-input" value="rape">
                                            <label for="sexual violence_0" class="custom-control-label">rape</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="sexual violence" id="sexual violence_1" type="checkbox" class="custom-control-input" value="defilement">
                                            <label for="sexual violence_1" class="custom-control-label">defilement</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="sexual violence" id="sexual violence_2" type="checkbox" class="custom-control-input" value="sexual harassment">
                                            <label for="sexual violence_2" class="custom-control-label">sexual harassment</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="criminal">others()specify</label>
                                <textarea id="criminal" name="criminal" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label style="margin-left: 25px;">civil :</label>
                                <div style="margin-left: 100px;">
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_0" type="checkbox" class="custom-control-input" value="child abandonment/neglect">
                                            <label for="civil_0" class="custom-control-label">child abandonment/neglect</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_1" type="checkbox" class="custom-control-input" value="wife neglect">
                                            <label for="civil_1" class="custom-control-label">wife neglect</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_2" type="checkbox" class="custom-control-input" value="maintenance">
                                            <label for="civil_2" class="custom-control-label">maintenance</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_3" type="checkbox" class="custom-control-input" value="marital problems">
                                            <label for="civil_3" class="custom-control-label">marital problems</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_4" type="checkbox" class="custom-control-input" value="child custody/access">
                                            <label for="civil_4" class="custom-control-label">child custody/access</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_5" type="checkbox" class="custom-control-input" value="divorce">
                                            <label for="civil_5" class="custom-control-label">divorce</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_6" type="checkbox" class="custom-control-input" value="succession">
                                            <label for="civil_6" class="custom-control-label">succession</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_7" type="checkbox" class="custom-control-input" value="burial dispute">
                                            <label for="civil_7" class="custom-control-label">burial dispute</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_8" type="checkbox" class="custom-control-input" value="employment">
                                            <label for="civil_8" class="custom-control-label">employment</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_9" type="checkbox" class="custom-control-input" value="unpaid wage">
                                            <label for="civil_9" class="custom-control-label">unpaid wage</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_10" type="checkbox" class="custom-control-input" value="breach of contract">
                                            <label for="civil_10" class="custom-control-label">breach of contract</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_11" type="checkbox" class="custom-control-input" value="debt">
                                            <label for="civil_11" class="custom-control-label">debt</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_12" type="checkbox" class="custom-control-input" value="housing">
                                            <label for="civil_12" class="custom-control-label">housing</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_13" type="checkbox" class="custom-control-input" value="land/property dispute">
                                            <label for="civil_13" class="custom-control-label">land/property dispute</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_14" type="checkbox" class="custom-control-input" value="evictions">
                                            <label for="civil_14" class="custom-control-label">evictions</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_15" type="checkbox" class="custom-control-input" value="accident claims">
                                            <label for="civil_15" class="custom-control-label">accident claims</label>
                                        </div>
                                    </div>
                                    <div class="custom-controls-stacked">
                                        <div class="custom-control custom-checkbox">
                                            <input name="civil" id="civil_16" type="checkbox" class="custom-control-input" value="migrants">
                                            <label for="civil_16" class="custom-control-label">migrants</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="civil">others(specify)</label>
                                <textarea id="civil" name="civil" cols="40" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="form-group" action="REF upload.blade.php">
                                <label for="fileToUpload">attached document REF:</label>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <div class="form-group">

                                    <label for="summary of case">summary of case</label>
                                    <textarea id="summary of case" name="summary of case" cols="40" rows="15" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label style="font-size:20px;">action taken :</label>
                                    <div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_0" type="checkbox" class="custom-control-input" value="legal advice">
                                                <label for="action taken_0" class="custom-control-label">legal advice</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_1" type="checkbox" class="custom-control-input" value="counseling">
                                                <label for="action taken_1" class="custom-control-label">counseling</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_2" type="checkbox" class="custom-control-input" value="legal representation in court">
                                                <label for="action taken_2" class="custom-control-label">legal representation in court</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_3" type="checkbox" class="custom-control-input" value="mediation">
                                                <label for="action taken_3" class="custom-control-label">mediation</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_4" type="checkbox" class="custom-control-input" value="drafting of court documents">
                                                <label for="action taken_4" class="custom-control-label">drafting of court documents</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_5" type="checkbox" class="custom-control-input" value="letter">
                                                <label for="action taken_5" class="custom-control-label">letter</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_6" type="checkbox" class="custom-control-input" value="referrals to probono lawyers for representation">
                                                <label for="action taken_6" class="custom-control-label">referrals to probono lawyers for representation</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_7" type="checkbox" class="custom-control-input" value="referral to facilitating organization">
                                                <label for="action taken_7" class="custom-control-label">referral to facilitating organization</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_8" type="checkbox" class="custom-control-input" value="referral to other legal aid providers for court representation">
                                                <label for="action taken_8" class="custom-control-label">referral to other legal aid providers for court representation</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_9" type="checkbox" class="custom-control-input" value="referral to PCSC">
                                                <label for="action taken_9" class="custom-control-label">referral to PCSC</label>
                                            </div>
                                        </div>
                                        <div class="custom-controls-stacked">
                                            <div class="custom-control custom-checkbox">
                                                <input name="action taken" id="action taken_10" type="checkbox" class="custom-control-input" value="referral to other government department">
                                                <label for="action taken_10" class="custom-control-label">referral to other government department</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="action taken">others(specify)</label>
                                    <textarea id="action taken" name="action taken" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>how clients got to know about NLAS</label>
                                    <div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_0" type="checkbox" class="custom-control-input" value="walk-in">
                                            <label for="know about us_0" class="custom-control-label">walk-in</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_1" type="checkbox" class="custom-control-input" value="word of mouth">
                                            <label for="know about us_1" class="custom-control-label">word of mouth</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_2" type="checkbox" class="custom-control-input" value="judiciary">
                                            <label for="know about us_2" class="custom-control-label">judiciary</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_3" type="checkbox" class="custom-control-input" value="facilitating organization">
                                            <label for="know about us_3" class="custom-control-label">facilitating organization</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_4" type="checkbox" class="custom-control-input" value="police">
                                            <label for="know about us_4" class="custom-control-label">police</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_5" type="checkbox" class="custom-control-input" value="NGO">
                                            <label for="know about us_5" class="custom-control-label">NGO</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_6" type="checkbox" class="custom-control-input" value="administrative officer">
                                            <label for="know about us_6" class="custom-control-label">administrative officer</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_7" type="checkbox" class="custom-control-input" value="paralegal">
                                            <label for="know about us_7" class="custom-control-label">paralegal</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_8" type="checkbox" class="custom-control-input" value="media">
                                            <label for="know about us_8" class="custom-control-label">media</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_9" type="checkbox" class="custom-control-input" value="former client">
                                            <label for="know about us_9" class="custom-control-label">former client</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_10" type="checkbox" class="custom-control-input" value="NLSA staff">
                                            <label for="know about us_10" class="custom-control-label">NLSA staff</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_11" type="checkbox" class="custom-control-input" value="MOJNCA">
                                            <label for="know about us_11" class="custom-control-label">MOJNCA</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="know about us" id="know about us_12" type="checkbox" class="custom-control-input" value="PCSC">
                                            <label for="know about us_12" class="custom-control-label">PCSC</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="know about us">other(please specify)</label>
                                    <textarea id="know about us_13" name="know about us" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label>has legal aid been sought on the same matter :</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="legal ait" id="legal ait_0" type="radio" class="custom-control-input" value="yes" required="required" aria-describedby="legal aitHelpBlock">
                                            <label for="legal ait_0" class="custom-control-label">yes</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="legal ait" id="legal ait_1" type="radio" class="custom-control-input" value="no" required="required" aria-describedby="legal aitHelpBlock">
                                            <label for="legal ait_1" class="custom-control-label">no</label>
                                        </div>
                                        <span id="legal aitHelpBlock" class="form-text text-muted" style="margin-bottom: 10px;">if yes fill the below :</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="institute" name="institute" placeholder="institute sought:" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-book"></i>
                                            </div>
                                        </div>
                                        <input id="contacts" name="contacts" placeholder="contacts of institute :" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="nature" name="nature" placeholder="nature of assistance given to client" type="text" class="form-control">
                                </div>
                                <div class="form-group" style="margin-top:15px;">
                                    <label for="date of case filed">a) Date of case filed:</label>
                                    <input id="date of case filed" name="date of case filed" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="court">which court:</label>
                                    <input id="court" name="court" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input id="court no" name="court no" placeholder="court no :" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>b) status :</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="status of case" id="status of case_0" type="radio" class="custom-control-input" value="Part-Heard">
                                            <label for="status of case_0" class="custom-control-label">Part-Heard</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="status of case" id="status of case_1" type="radio" class="custom-control-input" value="fresh">
                                            <label for="status of case_1" class="custom-control-label">fresh</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="status of case" id="status of case_2" type="radio" class="custom-control-input" value="finalized">
                                            <label for="status of case_2" class="custom-control-label">finalized</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="status of case" id="status of case_3" type="radio" class="custom-control-input" value="Don't know">
                                            <label for="status of case_3" class="custom-control-label">Don't know</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="times ">c) times client attended court :</label>
                                    <input id="times " name="times " type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>d) Representation :</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="rep" id="rep_0" type="radio" class="custom-control-input" value="pro se">
                                            <label for="rep_0" class="custom-control-label">pro se</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="rep" id="rep_1" type="radio" class="custom-control-input" value="pro bono">
                                            <label for="rep_1" class="custom-control-label">pro bono</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="rep" id="rep_2" type="radio" class="custom-control-input" value="paid-up advocate">
                                            <label for="rep_2" class="custom-control-label">paid-up advocate</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>e) Results :</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="results" id="results_0" type="radio" class="custom-control-input" value="Judgement">
                                            <label for="results_0" class="custom-control-label">Judgement</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="results" id="results_1" type="radio" class="custom-control-input" value="SOG">
                                            <label for="results_1" class="custom-control-label">SOG</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="results" id="results_2" type="radio" class="custom-control-input" value="Dismissed">
                                            <label for="results_2" class="custom-control-label">Dismissed</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="results" id="results_3" type="radio" class="custom-control-input" value="Acquittal">
                                            <label for="results_3" class="custom-control-label">Acquittal</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="results" id="results_4" type="radio" class="custom-control-input" value="Don't know">
                                            <label for="results_4" class="custom-control-label">Don't know</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="recommendation">recommendation on the case:</label>
                                    <textarea id="recommendation" name="recommendation" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="officer">officer attending to client:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">officer</div>
                                        </div>
                                        <input id="officer" name="officer" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date today">date today:</label>
                                    <input id="date today" name="date today" type="date" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <button name="submit" type="submit" class="btn btn-danger">Submit</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection