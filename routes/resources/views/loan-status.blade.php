@extends('layouts.app')

@section('section')
<section class="p100">
    <div class="container">
      <div class="mx400">
        <form action="{{url('loan-status-success')}}">
        <div class="mb-22 fs-18 animated-div">
          <label for="name">Your Application #*</label>
          <input type="text" id="name" placeholder="Enter Your Application #*" required>
          {{-- <div>This field is required</div> --}}
        </div>
        <div class="mb-22 fs-18 animated-div">
          <label for="name">Your SSN#*</label>
          <input
          type="text"
          id="ssn"
          name="ssn"
          placeholder="123-45-6789"
          required
          maxlength="11"
          oninput="formatSSN(this)"
          pattern="\d{3}-\d{2}-\d{4}"
          title="Format: 123-45-6789"
        >
        </div>
        <button type="submit" class="btn contactBtn mx-auto animated-div">Check your loan status</button>
        </form>
        {{-- <a href="./loan-status-success.html" class="btn contactBtn mx-auto animated-div">
          Check your loan status
        </a> --}}
      </div>
    </div>
  </section>

  <script>
    function formatSSN(input) {
        let value = input.value.replace(/\D/g, '').slice(0, 9); // only digits, max 9
        let formatted = '';
    
        if (value.length > 0) formatted = value.slice(0, 3);
        if (value.length >= 4) formatted += '-' + value.slice(3, 5);
        if (value.length >= 6) formatted += '-' + value.slice(5, 9);
    
        input.value = formatted;
    }
    </script>
@endsection
