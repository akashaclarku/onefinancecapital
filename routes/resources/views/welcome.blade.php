@extends('layouts.app')
@section('section')
<section class="py100" style="background-image: url({{asset('bg.png')}});">
    <div class="container">
      <h1 class="fs-50 fw-400 mb-30">One Capital Personal Loans
      </h1>
      <div class="fs-24 mb-25">
        Maximize Your Wealth & Minimize Your Worries
      </div>
      <a href="{{url('apply-now')}}" class="btn hover">
        Apply Now
      </a>
    </div>
  </section>
  <section class="spacing bg-black">
    <div class="container">
      <div class="fs-48 mb-3">
        <strong>Welcome</strong>
      </div>
      <div class="fs-18 mb-40">
        We’re the largest responsible personal loan company in the United States <br> <br>
        A trusted lender for more than 20 years Fixed rates and fixed payments Personalized services.
      </div>
      <div class="grid3">
        <div class="welcomeCard">
          <div class="welcomImage mb-12">
            <svg preserveAspectRatio="xMidYMid meet" data-bbox="35.5 28 129 144" viewBox="35.5 28 129 144" height="200"
              width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"
              aria-label="">
              <g>
                <path fill="#3940B2" d="M164.5 100v6h-87v-6h87z" data-color="1"></path>
                <path d="M131.5 103h-6v-6h-9v-6h12a3 3 0 0 1 3 3v9z" fill="#3940B2" data-color="1"></path>
                <path d="M143.5 103h-6v-9a3 3 0 0 1 3-3h15V61h-12v-6h15a3 3 0 0 1 3 3v36a3 3 0 0 1-3 3h-15v6z"
                  fill="#3940B2" data-color="1"></path>
                <path
                  d="M140.5 85h-9a3 3 0 0 1-3-3V31a3 3 0 0 1 3-3h9c4.963 0 9 4.037 9 9v39c0 4.963-4.037 9-9 9zm-6-6h6c1.655 0 3-1.346 3-3V37c0-1.654-1.345-3-3-3h-6v45z"
                  fill="#3940B2" data-color="1"></path>
                <path fill="#3940B2" d="M68.5 148v15h-6v-15h6z" data-color="1"></path>
                <path
                  d="M104.866 170.437L87.719 139H68.5c-11.578 0-21-9.42-21-21V85c0-8.271 6.729-15 15-15h12c.624 0 1.236.195 1.743.558L96.461 85H110.5a2.998 2.998 0 0 1 2.979 2.657c.041.344.914 8.489-3.876 13.862-2.654 2.974-6.39 4.481-11.104 4.481h-12a3.003 3.003 0 0 1-1.664-.504l-18-12 3.328-4.992L87.408 100H98.5c2.974 0 5.139-.81 6.624-2.474 1.679-1.884 2.227-4.551 2.388-6.526H95.5a2.999 2.999 0 0 1-1.743-.558L73.539 76H62.5c-4.963 0-9 4.037-9 9v33c0 8.271 6.729 15 15 15h21c1.099 0 2.109.599 2.634 1.563l18 33-5.268 2.874z"
                  fill="#3940B2" data-color="1"></path>
                <path
                  d="M118.293 169.939l-14.484-43.956C102.145 121.23 97.592 118 92.5 118h-15a3 3 0 0 1-3-3V97h6v15h12a18.019 18.019 0 0 1 16.989 12.053l14.505 44.008-5.701 1.878z"
                  fill="#3940B2" data-color="1"></path>
                <path d="M83.5 151h-21c-14.889 0-27-12.113-27-27V79h6v45c0 11.58 9.422 21 21 21h21v6z" fill="#3940B2"
                  data-color="1"></path>
                <path d="M66.004 125.664L60.895 118H38.5v-6h24c1.002 0 1.939.501 2.496 1.336l6 9-4.992 3.328z"
                  fill="#3940B2" data-color="1"></path>
                <path
                  d="M83.5 172h-12a2.995 2.995 0 0 1-2.121-.879l-3.879-3.879-3.879 3.879A2.995 2.995 0 0 1 59.5 172h-12v-6h10.758l5.121-5.121a2.998 2.998 0 0 1 4.242 0L72.742 166H83.5v6z"
                  fill="#3940B2" data-color="1"></path>
                <path
                  d="M67 67c-9.097 0-16.5-7.113-16.5-15.855v-4.289C50.5 38.113 57.903 31 67 31s16.5 7.113 16.5 15.855v4.289C83.5 59.887 76.097 67 67 67zm0-30c-5.789 0-10.5 4.421-10.5 9.855v4.289C56.5 56.579 61.211 61 67 61s10.5-4.421 10.5-9.855v-4.289C77.5 41.421 72.789 37 67 37z"
                  fill="#3940B2" data-color="1"></path>
              </g>
            </svg>
          </div>
          <div class="fs-16 mb-12">
            HOW IT WORKS
          </div>
          <div class="fs-14">
            Complete our online application, Submit your loan application, along with your personal, employment, and
            financial information
          </div>
        </div>
        <div class="welcomeCard">
          <div class="welcomImage mb-12">
            <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200"
              width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"
              aria-label="">
              <g>
                <path
                  d="M27.5 164.873a2.5 2.5 0 0 1-2.5-2.5V73.291c0-5.95 4.841-10.791 10.791-10.791H42.5a2.5 2.5 0 1 1 0 5h-6.709A5.798 5.798 0 0 0 30 73.291v89.082a2.5 2.5 0 0 1-2.5 2.5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M37.5 165a2.5 2.5 0 0 1-2.5-2.5V75a2.5 2.5 0 0 1 2.5-2.5h5a2.5 2.5 0 1 1 0 5H40v85a2.5 2.5 0 0 1-2.5 2.5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M172.5 164.873a2.5 2.5 0 0 1-2.5-2.5V73.291a5.798 5.798 0 0 0-5.791-5.791H157.5a2.5 2.5 0 1 1 0-5h6.709c5.95 0 10.791 4.841 10.791 10.791v89.082a2.5 2.5 0 0 1-2.5 2.5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M162.5 165a2.5 2.5 0 0 1-2.5-2.5v-85h-2.5a2.5 2.5 0 1 1 0-5h5A2.5 2.5 0 0 1 165 75v87.5a2.5 2.5 0 0 1-2.5 2.5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M160 180H40c-7.17 0-12.285-1.635-15.638-4.997-2.91-2.919-4.378-7.128-4.362-12.51A2.5 2.5 0 0 1 22.5 160h55a2.5 2.5 0 0 1 2.5 2.5v2.5h40v-2.5a2.5 2.5 0 0 1 2.5-2.5h55a2.5 2.5 0 0 1 2.5 2.5c0 10.794-7.664 17.5-20 17.5zM25.13 165c.32 2.8 1.236 4.93 2.773 6.472C30.237 173.813 34.307 175 40 175h120c4.152 0 13.373-1.032 14.81-10H125v2.5a2.5 2.5 0 0 1-2.5 2.5h-45a2.5 2.5 0 0 1-2.5-2.5V165H25.13z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M92.5 92.51h-.001l-20-.01C65.607 92.5 60 86.892 60 80V60c0-22.056 17.944-40 40-40s40 17.944 40 40a2.5 2.5 0 1 1-5 0c0-19.299-15.701-35-35-35S65 40.701 65 60v20c0 4.135 3.364 7.5 7.5 7.5l20.001.01a2.5 2.5 0 0 1-.001 5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M102.5 97.5h-5c-4.136 0-7.5-3.36-7.5-7.49 0-4.141 3.364-7.51 7.5-7.51h5c4.136 0 7.5 3.369 7.5 7.51 0 4.13-3.364 7.49-7.5 7.49zm-5-10c-1.355 0-2.5 1.149-2.5 2.51 0 1.35 1.145 2.49 2.5 2.49h5c1.355 0 2.5-1.14 2.5-2.49 0-1.36-1.145-2.51-2.5-2.51h-5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M137.5 85a2.5 2.5 0 0 1-2.5-2.5V70a2.5 2.5 0 1 1 5 0v9.653c3.004-.88 5-3.356 5-6.523v-3.75c0-3.987-3.154-6.88-7.5-6.88a2.5 2.5 0 1 1 0-5c7.126 0 12.5 5.107 12.5 11.88v3.75c0 6.767-5.374 11.87-12.5 11.87z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M62.5 85C55.374 85 50 79.897 50 73.13v-3.75c0-6.773 5.374-11.88 12.5-11.88a2.5 2.5 0 1 1 0 5c-4.346 0-7.5 2.893-7.5 6.88v3.75c0 3.981 3.154 6.87 7.5 6.87a2.5 2.5 0 1 1 0 5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M110.064 105.494a2.5 2.5 0 0 1-.939-4.818C118.62 96.826 125 87.514 125 77.505V60c0-13.785-11.215-25-25-25S75 46.215 75 60v17.505c0 .745.034 1.51.103 2.274a2.502 2.502 0 0 1-2.269 2.712 2.504 2.504 0 0 1-2.712-2.269A30.81 30.81 0 0 1 70 77.505V60c0-16.542 13.458-30 30-30s30 13.458 30 30v17.505c0 12.023-7.634 23.197-18.997 27.805a2.491 2.491 0 0 1-.939.184z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M100 107.5c-11.328 0-21.57-6.268-26.728-16.357a2.499 2.499 0 1 1 4.452-2.276C82.023 97.276 90.559 102.5 100 102.5a2.5 2.5 0 1 1 0 5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M102.5 140h-5c-5.503 0-7.5-4.485-7.5-7.5V125a2.5 2.5 0 0 1 2.5-2.5h15a2.5 2.5 0 0 1 2.5 2.5v7.5c0 3.015-1.997 7.5-7.5 7.5zM95 127.5v5c.029 1.124.486 2.5 2.5 2.5h5c2.014 0 2.471-1.376 2.5-2.53v-4.97H95z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M77.5 140H75a2.5 2.5 0 0 1-2.5-2.5v-14.569c0-4.085 1.44-8.064 4.056-11.203l9.023-10.828a2.5 2.5 0 1 1 3.841 3.201l-9.023 10.828a12.525 12.525 0 0 0-2.897 8.002V135c4.966 0 11.099-8.358 12.856-11.286a2.5 2.5 0 0 1 4.288 2.572C93.801 127.69 86.165 140 77.5 140z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M92.503 160a2.5 2.5 0 0 1-2.483-2.811l2.5-20a2.5 2.5 0 1 1 4.961.62l-2.5 20A2.5 2.5 0 0 1 92.503 160z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M107.497 160a2.5 2.5 0 0 1-2.477-2.19l-2.5-20a2.5 2.5 0 1 1 4.961-.62l2.5 20a2.5 2.5 0 0 1-2.484 2.81z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M95 127.5c-7.91 0-10-8.177-10-12.5v-12.5a2.5 2.5 0 1 1 5 0V115c.002.299.103 7.5 5 7.5a2.5 2.5 0 1 1 0 5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M105 127.5a2.5 2.5 0 1 1 0-5c4.897 0 4.998-7.201 5-7.508V102.5a2.5 2.5 0 1 1 5 0V115c0 4.323-2.09 12.5-10 12.5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M47.5 155a2.5 2.5 0 0 1-2.5-2.5v-8.154c0-14.716 7.578-25.018 20.271-27.559.051-.01.102-.019.153-.026l10.018-1.366a2.499 2.499 0 1 1 .676 4.954l-9.939 1.356C55.895 123.797 50 132.044 50 144.346v8.154a2.5 2.5 0 0 1-2.5 2.5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M125 140h-2.5c-8.665 0-16.301-12.31-17.144-13.714a2.5 2.5 0 0 1 4.287-2.574C111.406 126.641 117.551 135 122.5 135v-12.069c0-2.919-1.029-5.76-2.897-8.002l-9.024-10.828a2.5 2.5 0 0 1 3.841-3.201l9.023 10.828a17.534 17.534 0 0 1 4.056 11.203V137.5A2.498 2.498 0 0 1 125 140z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M152.5 155a2.5 2.5 0 0 1-2.5-2.5v-8.154c0-12.301-5.895-20.549-16.179-22.641l-9.938-1.356a2.5 2.5 0 0 1 .676-4.954l10.017 1.366c.051.007.102.016.153.026C147.422 119.328 155 129.63 155 144.346v8.154a2.5 2.5 0 0 1-2.5 2.5z"
                  fill="#01016C" data-color="1"></path>
                <path
                  d="M82.5 67.5A2.5 2.5 0 0 1 80 65v-2.5c0-4.135 3.364-7.5 7.5-7.5h13.787c3.339 0 6.478-1.3 8.839-3.661l.607-.607a2.5 2.5 0 0 1 3.535 0l5 5a2.5 2.5 0 1 1-3.535 3.536l-3.286-3.286A17.368 17.368 0 0 1 101.287 60H87.5a2.503 2.503 0 0 0-2.5 2.5V65a2.5 2.5 0 0 1-2.5 2.5z"
                  fill="#01016C" data-color="1"></path>
              </g>
            </svg>
          </div>
          <div class="fs-16 mb-12">
            MEET WITH YOUR LOAN SPECIALIST
          </div>
          <div class="fs-14">
            If approved, a OneMain loan specialist will contact you to Verify identity, income, employment, and collateral (if applicable)
          </div>
        </div>
        <div class="welcomeCard">
          <div class="welcomImage mb-12">
            <svg preserveAspectRatio="xMidYMid meet" data-bbox="43 31 114 138" viewBox="43 31 114 138" height="200"
              width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"
              aria-label="">
              <g>
                <path
                  d="M129.991 51.284a57.24 57.24 0 0 0-9.926-4.901l-6.43 6.749a48.563 48.563 0 0 1 11.932 5.342c14.398 8.954 23.004 24.48 23.018 41.528a48.866 48.866 0 0 1-7.268 25.695c-6.615 10.742-16.826 18.253-28.582 21.431l13.446-14.112-2.296-9.808-29.733 31.2L134.613 169l-2.296-9.81-13.832-4.99c12.287-4.199 22.899-12.544 29.983-24.055A57.31 57.31 0 0 0 157 99.996c-.02-19.995-10.115-38.205-27.009-48.712z"
                  fill="#2F54DD" data-color="1"></path>
                <path
                  d="M51.41 99.996a48.855 48.855 0 0 1 7.273-25.69c6.613-10.744 16.826-18.265 28.582-21.435L73.814 66.987l2.299 9.81 29.733-31.205L65.382 31l2.301 9.81 13.841 4.992c-12.294 4.2-22.909 12.54-29.994 24.053A57.333 57.333 0 0 0 43 100.002c.018 20.001 10.113 38.209 27.004 48.714a57.231 57.231 0 0 0 9.928 4.903l6.432-6.751a48.499 48.499 0 0 1-11.932-5.34c-14.401-8.954-23.007-24.48-23.022-41.532z"
                  fill="#2F54DD" data-color="1"></path>
              </g>
            </svg>
          </div>
          <div class="fs-16 mb-12">
            SIGN AND RECEIVE YOUR FUNDS
          </div>
          <div class="fs-14">
            After you review and accept your loan terms. Sign your contract & Easy Receive your funds
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="spacing">
    <div class="container">
      <div class="fs-48 mb-3">
        <strong>Types of loans</strong>
      </div>
      <div class="fs-18 mb-40">
        Leave It To Us And Get Rid Of Your Debt And Bills Instantly!
      </div>
      <div class="grid3">
        <div class="loanCard">
          <div class="loanImage mb-12">
              <img src="./assets/images/loan1.avif" alt="loan">
          </div>
          <div class="fs-16 mb-12">
            Personal Loan
          </div>
          <div class="fs-14">
            Personal Loans provide fast and easy money solutions with loan amounts ranging from hundreds to thousands based on your state.
          </div>
        </div>
        <div class="loanCard">
          <div class="loanImage mb-12">
            <img src="./assets/images/loan2.avif" alt="loan">
          </div>
          <div class="fs-16 mb-12">
            Business Loan
          </div>
          <div class="fs-14">
            Start or expand your business with loans guaranteed by the Small Business Administration. Use Lender Match to find lenders that offer loans for your business
          </div>
        </div>
        <div class="loanCard">
          <div class="loanImage mb-12">
            <img src="./assets/images/loan3.avif" alt="loan">
          </div>
          <div class="fs-16 mb-12">
            Payday Loans
          </div>
          <div class="fs-14">
            Payday Loan, also known as a One Capital finance loan, is a short-term loan typically due on your next payday.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py50 bg-black">
    <div class="container">
        <div class="fs-48 text-center mb-40">
         <strong> Proudly serving our customers </strong>
        </div>
        <div class="grid4">
          <div class="">
          <div class="awardCard mb-3">
            <img src="./assets/images/award1.avif" alt="">
          </div>
          <div class="fs-15 text-center">Reviews 21,532</div>
          </div>
          <div class="">
          <div class="awardCard mb-3">
            <img src="./assets/images/award2.avif" alt="">
          </div>
          <div class="fs-15 text-center">Reviews 161          </div>
          </div>
          <div class="">
          <div class="awardCard mb-3">
            <img src="./assets/images/award3.avif" alt="">
          </div>
          <div class="fs-15 text-center">Reviews 56,781
          </div>
          </div>
          <div class="">
          <div class="awardCard mb-3">
            <img src="./assets/images/award4.avif" alt="">
          </div>
          <div class="fs-15 text-center">Reviews 79,862
          </div>
          </div>
        </div>
    </div>
  </section>
  <section class="p100 bg-black">
    <div class="container">
      <div class="d-flex justify-content-between gap-100 flexDirection">
        <div class="mx600 fs-20">
          <div class="mb-50">
            At One Capital personal loans, we believe trust is a give-and-take relationship rather than a one-way street. We are
            proudly associated with many financial institutions and banks to ensure the path of trust remains intact.

          </div>
          <a href="#" class=" text-white">More about us</a>
        </div>
        <div class="mx388 fs-32">
          <div class="mb-20">
            $100+ million disbursed
          </div>
          <div class="mb-20">
            15 years & counting
          </div>
          <div class="mb-20">
            420k+ happy customers
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="spacing">
    <div class="container">
      <div class="d-flex justify-content-between gap-10 flexDirection">
        <div class="mx421">
          <img src="./assets/images/photoleft.svg" class="w-100" alt="">
        </div>
        <div class="mx600 fs-32 fs24">
          Do you know most of the loans get rejected due to credit score even when the customer has the capacity to
          repay it back ?
        </div>
      </div>
    </div>
  </section>
  <section class="spacing bg-black">
    <div class="container">
      <div class="d-flex justify-content-between align-items-lg-center gap30 flexDirection">
        <div class="mx496">
          <div class="fs-52 mb-3">
            Our offerings
          </div>
          <div class="fs-20">
            Helping you get the best out of us by offering the lowest APR in the market.
          </div>
        </div>
        <div class="fs-64 text-end">
          10.00% APR
        </div>
      </div>
    </div>
  </section>
  
  @endsection
