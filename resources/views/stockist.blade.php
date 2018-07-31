@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <h2 class="header center-align">Become Our Stockist</h2>


            <!---Left Side-->

            <div class="card horizontal">
                <div class="card-content">
                    <h5 class="header center-align">Register Yourself Now</h5>

                    <p>We are expanding and we introduce you to new era of business by offering you the perfect partnership
                        to grow your business and at the same time you will help us grow ours.
                        If you are a retailer and interested in stocking our product than drop us on E-mail.</p>

                    <form>

                        <div class="row col s12 m6 l6">

                            <div class="input-field col s12">
                                <input id="company_name" type="text" class="validate">
                                <label for="company_name">Company / Individual Name/(Registered Name)<span class="red-text">*</span></label>
                            </div>


                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email<span class="red-text">*</span></label>
                            </div>


                            <div class="input-field col s12">
                                <input id="office_phone" type="number" class="validate">
                                <label for="office_phone">Office Phone<span class="red-text">*</span></label>
                            </div>


                            <div class="input-field col s12">
                                <input id="poc_name" type="text" class="validate">
                                <label for="poc_name">POC Name<span class="red-text">*</span></label>
                            </div>

                            <div class="input-field col s12">
                                <input id="poc_phone" type="number" class="validate">
                                <label for="poc_phone">POC Contact Number<span class="red-text">*</span></label>
                            </div>


                            <div class="input-field col s12">
                                <input id="poc_phone" type="number" class="validate">
                                <label for="poc_phone">NTN Number</label>
                            </div>

                        </div>


                        <div class="row col s12 m6 l6 center-align">

                            <div class="input-field col s12">
                                <input id="cnic" type="number" class="validate">
                                <label for="cnic">Owner's CNIC<span class="red-text">*</span></label>
                            </div>

                            <div class="input-field col s12">
                                <input id="cell" type="number" class="validate">
                                <label for="cell">Cell Number<span class="red-text">*</span></label>
                            </div>

                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Form Of Organization </option>
                                    <option value="1">Sole Proprietor</option>
                                    <option value="2">Private Limited</option>
                                    <option value="3">Partnership</option>
                                    <option value="3">Indivisual</option>
                                    <option value="3">NGO</option>
                                </select>

                            </div>

                            <div class="input-field col s12">
                                <input id="poc_email" type="email" class="validate">
                                <label for="poc_email">POC Email<span class="red-text">*</span></label>
                            </div>

                            <div class="input-field col s12">
                                <input id="country" type="text" class="validate">
                                <label for="country">Country<span class="red-text">*</span></label>
                            </div>

                            <div class="input-field col s12">
                                <textarea id="address" class="materialize-textarea"></textarea>
                                <label for="address">Address (Company Place of Business)<span class="red-text">*</span></label>
                            </div>

                            <button class="btn waves-effect waves-light red accent-1" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>

                        </div>
                    </form>
                </div>
            </div>


        </div>


    </div>


@endsection