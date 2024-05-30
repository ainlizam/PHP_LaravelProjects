<!DOCTYPE html>
<html lang="en">

@extends('master.layout')
@section('content')

<body>

</body>
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row justify-content-center"> <!-- Center the entire row -->
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="title-box-2">
                <h5 class="title-left">
                  Add Student
                </h5>
              </div>
              <div>
                <!--action tu yg paling penting utk tentukan action lepas user click button-->
                <form action="addstudent" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="matric_id" class="form-control" id="matric_id" placeholder="Matric ID" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="number" class="form-control" name="phone_no" id="phone_no" placeholder="Phone Number" required>
                        </div>
                      </div>
                      <div class="col-md-12 text-center my-3">
                        <!-- <button type="submit" class="button button-a button-big button-rouded">Save</button> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
</html>
@endsection
