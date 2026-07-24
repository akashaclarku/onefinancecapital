@extends('layouts.app')

@section('section')
<section class="p100">
    <div class="container">
      <div class=" text-center">
        <div class="mx480 mb-3">
            <img src="./assets/images/inprocess.svg"  class="w-100" alt="">
        </div>
        <div class="fs-52 mb-3">
          Your verification is in process
        </div>
        <div class="fs-18 mb-4 lih">
          Your loan officer will notify you once the verification is completed & explain you the next steps of sending back the verification amount. After verification within <strong>30 minutes</strong> you will get your loan disbursed.
        </div>

        <a class="btn contactBtn mx-auto animated-div" href="{{url('banking-partner')}}">
          Check our banking partners
        </a>
      </div>
    </div>
  </section>
@endsection
