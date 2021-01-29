@extends('layouts.app')
@section('content')

    <!-- Register Section -->
    <section class="register-section pt-100 pb-100">
        <div class="container">
            <div class="register-box">

                <div class="sec-title text-center mb-30">
                    <h2 class="title mb-10">Create New Account</h2>
                </div>

                <!-- Login Form -->
                <div class="styled-form">
                    <div id="form-messages"></div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="">
                        @csrf
                        <div class="row clearfix">


                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input type="text" id="name" name="name" value="" placeholder="Your Name" required>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input type="email" id="email" name="email" value="" placeholder="Email address "
                                       required>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input type="password" id="password" name="password" value=""
                                       placeholder="Your Password"
                                       required>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <input type="password" id="password_confirmation" name="password_confirmation" value=""
                                       placeholder="Confirm Password"
                                       required>
                            </div>

                            <div class="form-group col-lg-12">
                                <input type="text" id="department" name="department" value=""
                                       placeholder="Your Department" required>
                            </div>

                            <div class="form-group col-lg-12">
                                <select id="pay_option" name="pay_option"
                                        style="height: 50px;padding: 6px 30px;width: 100%;">
                                    <option value="pay">Select Method</option>
                                    <option value="pay1">Pay Now</option>
                                    <option value="other">Pay Later</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-12">
                                <select id="designations" name="designation"
                                        style="height: 50px;padding: 6px 30px;width: 100%;">
                                    <option value="designations">Select Designation</option>
                                    @foreach($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->title }}</option>
                                    @endforeach
                                    {{--<option value="volvo">Volvo</option>--}}
                                    {{--<option value="saab">Saab</option>--}}
                                    {{--<option value="fiat">Fiat</option>--}}
                                    {{--<option value="audi">Audi</option>--}}
                                </select>
                            </div>

                            <div class="form-group col-lg-12">
                                <select id="programs" name="programs"
                                        style="height: 50px;padding: 6px 30px;width: 100%;">
                                    <option value="programs">Select Program</option>
                                    @foreach($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-12">
                                <select id="universities" name="universities"
                                        style="height: 50px;padding: 6px 30px;width: 100%;">
                                    <option value="universities">Select University</option>
                                    @foreach($universities as $university)
                                        <option value="{{ $university->id }}">{{ $university->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <!-- Form Group -->

                            <div class="form-group col-lg-12" id="otherType">
                                <label> Upload Picture</label>
                                <input type="file" id="image" name="image" value=""
                                       style="padding-left: 0%; padding-right: 0%;">
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="row clearfix">
                                    <!-- Column -->
                                    <div class="column col-lg-3 col-md-4 col-sm-12">
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" id="type-1">
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="column col-lg-3 col-md-4 col-sm-12">
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" id="type-2">
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="column col-lg-3 col-md-4 col-sm-12">
                                        <div class="radio-box">
                                            <input type="radio" name="remember-password" id="type-3">
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="column col-lg-12 col-md-12 col-sm-12">
                                        <div class="check-box">
                                            <input type="checkbox" name="remember-password" id="type-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                <button type="submit" class="readon register-btn" id="submit"><span
                                            class="txt">Sign Up</span>
                                </button>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="users">Already have an account? <a href="{{ route('login') }}">Sign In</a>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- End Login Section -->
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <script>
        $(document).ready(function () {
            $('#pay_option').on('change', function () {
                if ($(this).val() === "other") {
                    $("#otherType").hide()
                }
                else {
                    $("#otherType").show()
                }
            })
        });

    </script>


    {{--<script>--}}
    {{--$("#contactUsForm").validate({--}}
    {{--rules: {--}}
    {{--password: {--}}
    {{--required: true,--}}
    {{--minlength: 10--}}
    {{--},--}}

    {{--},--}}
    {{--messages: {--}}
    {{--password: {--}}
    {{--required: "Please enter password",--}}
    {{--minlength: "Your name maxlength should be 10 characters long."--}}
    {{--},--}}

    {{--},--}}
    {{--submitHandler: function (form) {--}}
    {{--$.ajax({--}}
    {{--url: "{{ route('register') }}",--}}
    {{--type: "POST",--}}
    {{--data: $('#contactUsForm').serialize(),--}}
    {{--success: function (response) {--}}
    {{--$('#submit').html('Submit');--}}
    {{--$("#submit").attr("disabled", false);--}}
    {{--alert('Ajax form has been submitted successfully');--}}
    {{--document.getElementById("contactUsForm").reset();--}}
    {{--}--}}
    {{--});--}}
    {{--}--}}
    {{--})--}}

    {{--</script>--}}



@endsection



