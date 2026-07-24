@extends('layouts.app')

@section('section')
<section class="aboutSpacing">
    <div class="container">
      <div class="d-flex justify-content-between mb-50 flexDirection">
        <div class="fs-72">
          About us
        </div>
        <div class="mx600 fs-20">
          <div class="fs18">
            We are a one-of-a-kind finance company in the USA, offering loans based on your repayment capacity rather
            than solely relying on credit scores, helping our customers access money stress-free.
          </div>
          <br class="d-none d-lg-block"><br>
          <div class="fs18">
            Since 2005, our company has disbursed over $15 million in loans to our customers. We've consistently been
            our customers' favorite finance company, with a repeat customer ratio of 70%, and we are happy to offer them
            refinancing options.
          </div>
        </div>
      </div>
      <img src="./assets/images/aboutus.avif" class="w-100 mb-50" alt="">
      <div class="fs-52 mb-40">
        Our team
      </div>
      <div class="d-flex  flex-wrap flexDirection">
        <div class="w-50 mb-100 ">
          <img src="./assets/images/e1.avif" alt="" class="teamImage mb-20">
          <div class="fs-32 mb-25">
            James Anderson
          </div>
          <div class="fs-20">
            Accounting Manager
          </div>
        </div>
        <div class="mt-50 w-50 mb-100 ">
          <img src="./assets/images/e2.avif" alt="" class="teamImage mb-20">
          <div class="fs-32 mb-25">
            Jacob Smith
          </div>
          <div class="fs-20">
            Sr. Loan Officer
          </div>
        </div>
        <div class="w-50 mb-100 ">
          <img src="./assets/images/e3.avif" alt="" class="teamImage mb-20">
          <div class="fs-32 mb-25">
            Jennifer Ross
          </div>
          <div class="fs-20">
            Documents Manager - Activation
          </div>
        </div>
        <div class="mt-50 w-50 mb-100 ">
          <img src="./assets/images/e4.jpg" alt="" class="teamImage mb-20">
          <div class="fs-32 mb-25">
            Catherine Dorsen
          </div>
          <div class="fs-20">
            Verification Team - Accounts
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
