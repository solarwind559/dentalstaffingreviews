<form class="OTMForm footer-form">
  <div class="form">
    <label for="from" class="form__label">Full Name</label>
    <input class="text-field-input form__input" id="from" type="text" name="from" required>
  </div>

  <div class="form">
    <label for="sender" class="form__label">Email Address</label>
    <input class="text-field-input form__input" type="email" name="sender" required>
  </div>

  <div class="form">
    <label for="phone" class="form__label">Phone Number</label>
    <input class="text-field-input form__input" type="text" name="phone" required>
  </div>

  <div class="form">
    <label for="msg" class="form__label">Your Message</label>
    <textarea class="text-field-input form__input" rows="7" name="msg"></textarea>
    <input class="d-none" name="your-url" type="text" tabindex="-1" autocomplete="off" />
  </div>
<div class="d-flex justify-content-center">
  <button class="btn1c from-top easing" type="submit" title="Click to Submit">Submit Message</button>
</div>

  <div class="alert alert-success mt-2 d-none" role="alert">
    Your Message Has been Successfully Sent. Looking forward to speaking with you soon.
  </div><!--/.alert-success-->
  <div class="alert alert-danger mt-2 d-none" role="alert">
    Your Message Has Not been sent. Try again later.
  </div><!--/.alert-danger-->
</form>