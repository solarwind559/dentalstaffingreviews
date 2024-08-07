<form class="OTMForm vertical-form">
  <div class="input-wrapper mb-1 position-relative">
    <i class="fas fa-user position-absolute text-secondary form-icon" aria-hidden="true"></i>
    <p class="p-small">Full Name</p>
    <input class="form-control" type="text" name="from" placeholder="John Smith" required>
  </div><!--/.input-wrapper-->
  <div class="input-wrapper mb-1 position-relative">
    <p class="p-small">Email</p>
    <i class="fas fa-envelope position-absolute text-secondary form-icon" aria-hidden="true"></i>
    <input class="form-control" type="email" name="sender" placeholder="email@example.com" required>
  </div><!--/.input-wrapper-->
  <div class="input-wrapper mb-1 position-relative">
    <p class="p-small">Phone</p>
    <i class="fas fa-phone position-absolute text-secondary form-icon" aria-hidden="true"></i>
    <input class="form-control" type="text" name="phone" placeholder="123-456-7890" required>
  </div><!--/.input-wrapper-->
  <div class="input-wrapper">
  <p class="p-small">Your Ad Information</p>
    <textarea class="form-control mb-1" name="msg" placeholder="Enter information about your advertisement"></textarea>
    <input class="d-none" name="your-url" type="text" tabindex="-1" autocomplete="off" />
    <button class="btn btn-primary btn-block w-50 mt-3" type="submit" title="Click to Submit">Submit Message</button>
  </div><!--/.input-wrapper-->
  <div class="alert alert-success mt-2 d-none" role="alert">
    Your Message Has been Successfully Sent. Looking forward to speaking with you soon.
  </div><!--/.alert-success-->
  <div class="alert alert-danger mt-2 d-none" role="alert">
    Your Message Has Not been sent. Try again later.
  </div><!--/.alert-danger-->
</form>
