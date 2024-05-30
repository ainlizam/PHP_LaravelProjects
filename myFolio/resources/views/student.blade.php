<!DOCTYPE html>
<html lang="en">
@extends ('master.layout')
@section ('student')

<body>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="student-mf sect-pt4 route">
      <div class="col-sm-12">
       <div class="container">
        <div class="row justify-content-center"> <!-- Center the entire row -->
            <div class="student-mf">
              <div id="student" class="box-shadow-full">
                <div class="title-box-2">
                  <h5 class="title-left">
                    List of Student
                  </h5>
                </div>
                <div>
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                          </tr>
                        </thead>
                        <tbody>
                            <!--Start Tinker auto generate database-->
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->matric_id}}</td>
                                <td>{{$student->first_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone_no}}</td>
                            </tr>
                            @endforeach <!--End Tinker-->

                         <!--Normal Hard code to insert data-->
                         <!-- <tr>
                            <th scope="row">1</th>
                            <td>Ayuni</td>
                            <td>Lizam</td>
                            <td>ayunicantik@gmail.com</td>
                            <td>0112123456</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Ardini</td>
                            <td>Zahirah</td>
                            <td>dinizahirah@gmail.com</td>
                            <td>0182210373</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Rayyan</td>
                            <td>Ikhwan</td>
                            <td>rayyanwan@gmail.com</td>
                            <td>0123456789</td>
                          </tr> -->
                        </tbody>
                       </table>
                       <div class="col-md-12 text-center">
                        <!--<button type="submit" class="button button-a button-big button-rouded" href="/add-student">Add Student</button>-->
                        <button onclick="document.location='/add-student'" type="button" class="button-a button-big button-rouded">Add New Records</button>
                       </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section><!-- End Contact Section -->
</body>
</html>

@endsection



