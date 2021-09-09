@extends('layouts.front')

@section('content')
<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">{{'Contact Us'}}</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{URL::to('/')}}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> {{'Home'}}</a></li>
                            <li>{{'Contact'}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{asset('front/img/icons/10.png')}}" alt="Icon Image">
                    </div>
                    <h3>{{'Email Address'}}</h3>
                    <p>enquiries@thicn.org <br>contact@thicn.org</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{asset('front/img/icons/11.png')}}" alt="Icon Image">
                    </div>
                    <h3>{{'Phone Number'}}</h3>
                    <p>020 7247 8080 <br>020 7247 8080</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{asset('front/img/icons/12.png')}}" alt="Icon Image">
                    </div>
                    <h3>{{'Office Address'}}</h3>
                    <p>Osmani Centre 58 Underwood Rd, <br> London E1 5AW</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->

<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mb-120 mb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Get A Quote</h4>
                    @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert" style="margin-top:10px;">
                      {{Session::get('message_sent')}}
                    </div>
                    @endif
                    <form action="{{route('contact.send')}}" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">First name</label>
                                <div class="input-item input-item-name ">
                                    <input type="text" name="fname" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Last name</label>
                                <div class="input-item input-item-name ">
                                    <input type="text" name="lname" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Company</label>
                                <div class="input-item input-item-name ">
                                    <input type="text" name="company" placeholder="Company">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <div class="input-item input-item-email ">
                                    <input type="email" name="email" placeholder="Enter email address">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-item">
                                  <label for="">I'm interested in becoming a..</label>
                                    <select name="interest" class="nice-select">
                                        <option>=== Select ===</option>
                                        <option value="Member">Member </option>
                                        <option value="Volunteer">Volunteer</option>
                                        <option value="Supporter">Supporter</option>
                                        <option value="Partner">Partner</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Phone number</label>
                                <div class="input-item input-item-phone ">
                                    <input type="text" name="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ">
                            <textarea name="message" placeholder="My Enquiry"></textarea>
                        </div>
                        <p><label class="input-info-save mb-0"><input type="checkbox" required name="agree"> I agree to my data being processed in accordance with the <span style="color: #00a19a;"><a href="#">Privacy Policy</a></span>.</label></p>

                        <p><label class="input-info-save mb-0"><input type="checkbox" required name="agree"> Marketing Preference </label></p>
                        <p>Please keep me updated on Future Youth Zone news and updates by email, post, SMS, phone or other electronic means. Future Youth Zone will always treat your personal details with the utmost care and will never sell them to other companies for marketing purposes. <br>Visiting Tower Hamlets Island Community Nertwork</p>

                        <div class="btn-wrapper mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">get a free service</button>
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT MESSAGE AREA END -->

<!-- GOOGLE MAP AREA START -->
<div class="google-map mb-120">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.5764216963335!2d-0.06643358402779395!3d51.52098661753037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ccebaedf0ef%3A0x40c73963bc6ddbc7!2sOsmani%20Trust!5e0!3m2!1sen!2sbd!4v1629543088454!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>
<!-- GOOGLE MAP AREA END -->
@endsection
