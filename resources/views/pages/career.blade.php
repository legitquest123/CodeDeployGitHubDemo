@extends('layouts.layout')
@section('title','LegitQuest | Career')

@section('content')
  <section class="section  section-hero pt-9 pb-0  bg-gray">
        <div class="container">
                            @if(session('success'))
                            <div id="messagediv1" class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif
                              @if(session('error'))
                            <div id="messagediv2" class="alert alert-danger">
                                {{session('error')}}
                            </div>
                            @endif
          <div class="row row-grid justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-7 text-center">
              <h1 class="section__title mb-4 font-weight-bold">{{$slugData->heading}}</h1>

              <p>Don't see a position that's a good fit for you, but you're interested in working with us? Email us your application along with your resume at <a href="#">career@legitquest.com</a> </p>
            </div>
          </div>
        </div>
        <nav class="mt-5">
          <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active px-4 py-3"  data-toggle="tab" data-target="#job-opening" href="" role="tab" aria-controls="job-opening" aria-selected="true">Job Openings</a>
            <a class="nav-item nav-link px-4 py-3"  data-toggle="tab" data-target="#cap" href="" role="tab" aria-controls="cap" aria-selected="false">Campus Ambassador Prog.</a>
          </div>
        </nav>
      </section>

      
        <section id="sectionJobList" class="section section-job-list gradient-light--upright pt-6">
        <div class="container">

          <div class="tab-content">
            <div class="tab-pane fade show active" id="job-opening" role="tabpanel" aria-labelledby="home-tab">
              <div class="row row-grid justify-content-center">
                <div class="col-md-10">
                  <div class="job-list__wrapper mb-6">
                    @foreach($data as $key => $value)
                    @if($value->careertype == "JOB")
                    <div class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                      <div class="card-body">
                        <button class="btn btn-link p-0 text-left" name="button" data-toggle="collapse" data-target="#collapse{{$key}}">
                          <span class="row justify-content-between align-items-center">
                            <span class="col-md-6 color--heading">
                              <span class="badge badge-circle background--danger text-white mr-3">{{Helpers::cutString($value->heading)}}</span>{{$value->heading}}
                            </span>

                            <span class="col-5 col-md-2 my-3 my-sm-0 color--text">
                              <i class="fas fa-clock mr-1"></i>{{$value->type}}
                            </span>

                            <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                              <i class="fas fa-map-marker-alt mr-1"></i> Delhi,India
                            </span>

                            <span class="d-none d-md-block col-1 text-center color--text">
                              <small><i class="fas fa-chevron-right"></i></small>
                            </span>
                          </span>
                        </button>
                        <div class="collapse" id="collapse{{$key}}">
                          <div class="row p-4">
                            <div class="col-lg-6">
                              <div class="job-detail">
                                <div class="element-wrapper">
                                  <h6 class="element-header">
                                    Job Responsibilities:
                                  </h6>
                                </div>
                                <ul class="arrow-list">
                                  <li>Understanding and analysing the case judgements</li>
                                  <li>
                                    Segregating various elements of a case judgement
                                  </li>
                                  <li>
                                    Reporting and tracking daily/weekly work schedules
                                  </li>
                                  <li>
                                    Coordinating with technology team for support
                                  </li>
                                  <li>
                                    Thinking out of the box &amp; finding unique approaches to problems or roadblocks
                                  </li>
                                  <li>
                                    Contributing towards various organisational tasks
                                  </li>
                                  <li>
                                    Taking ownership and accountability for the work
                                  </li>
                                  <li>
                                    Supporting team members in getting work done
                                  </li>
                                  <li>
                                    Taking other initiatives and responsibilities beyond the defined role and responsibility
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="job-detail">
                                <div class="element-wrapper">
                                  <h6 class="element-header">
                                    Desired Profile:
                                  </h6>
                                </div>
                                <ul class="arrow-list">
                                  <li>
                                    Passion to transform the Indian Legal System
                                  </li>
                                  <li>At least graduate in law</li>
                                  <li>
                                    Additional law related course/certificate would be an added advantage
                                  </li>
                                  <li>
                                    LLM would be preferred for managerial role
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="apply-btn text-center mt-4">
                            <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#apply-form{{$key}}">Apply Now</button>
                          </div>
                        </div>
                      </div>
                    </div> <!-- Job Card -->
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="cap" role="tabpanel" aria-labelledby="cap">
              <div class="row">
                @foreach($data as $value)
                @if($value->careertype == "CAP")
                <div class="col-md-4">
                  <div class="card p-0 border-0 shadow h-100">
                    <div class="card-body p-5 p-md-4 p-lg-5">
                      <h4 class="font-weight-bold mb-4">{{$value->heading}}</h4>
                      <ul class="arrow-list">
                        <li>
                            Access to LegitQuest’s product
                        </li>
                        <li>
                            Certificate of appreciation
                        </li>
                        <li>
                            Networking with like-minded people in your fraternity
                        </li>
                        <li>
                            Opportunity to work in close collaboration with the Team LegitQuest to gain relevant experience
                        </li>
                        <li>
                            Exposure to the real life learning during the journey by being our proponent
                        </li>
                    </ul>
                    </div>
                  </div>
                </div>
                @endif
                @endforeach
              </div>
              <div class="text-center mt-6 mb-6">
                <button type="button" class="btn btn-primary" data-target="#cap-apply-form" data-toggle="modal">Apply Campus Ambassador Programme Now</button>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- END Section Job List -->
  
       <!-- END Section Job List -->



      <!-- Modal -->

@foreach($data as $key=> $value)
@if($value->careertype == "JOB")   

<div class="modal fade apply-form" id="apply-form{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Send Us Your CV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="text-center bg-gray p-4">
        <small class="text-muted">Position</small>
        <h3 class="font-weight-bold ">
          {{$value->heading}}
        </h3>
      </div>
    
      <div class="modal-body">
         <form action="{{route('app')}}" method="post" name="jobform" enctype='multipart/form-data'>
          @csrf
        <div class="form-box">

            <div class="row">
                <div class="col-md-6">
                            
                    <div class="form-group">
                        <label>Name&nbsp;<span style="color: red">*</span></label>
                        <input class="form-control form-control-sm" id="name" name="name" type="text"  placeholder="Enter full name">
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email Address&nbsp;<span style="color: red">*</span></label>
                        <input class="form-control form-control-sm" id="email" name="email" type="text"  placeholder="Enter email id">
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="EmailAddress" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact No&nbsp;<span style="color: red">*</span></label>
                        <input class="form-control form-control-sm" id="contact" name="contact" type="text" placeholder="Enter contact no.">
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="ContactNo" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>LinkedIn Url&nbsp;<span style="color: red">*</span></label>
                        <input class="form-control form-control-sm" id="url" name="url"  type="text"  placeholder="Enter linkedin url">
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="LinkedInUrl" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <!-- <label>Jobtype<span style="color: red">*</span></label> -->
                        <input type="hidden" value="Normal Job Seeker" name="jobtype" id="jobtype" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                         <!-- <label>Apply For<span style="color: red">*</span></label> -->
                        <input type="hidden" value="{{$value->heading}}" name="applyfor" id="applyfor" class="form-control form-control-sm">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Resume <small>(.pdf,.doc &amp; .docx only)</small>&nbsp;<span style="color: red">*</span></label>
                        <input type="file"  name="resume" i="resume" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit Application</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endif
@endforeach



<div class="modal fade cap-apply-form" id="cap-apply-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Send Us Your CV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="text-center bg-gray p-4">
        <small class="text-muted">Position</small>
        <h3 class="font-weight-bold ">
          Campus Ambassador Programme
        </h3>
      </div>
      <div class="modal-body">

        <div class="form-box">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name&nbsp;<span style="color: red">*</span></label>
                        <input class="form-control form-control-sm" id="Name" name="Name" type="text" value="" placeholder="Enter full name">
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email Address&nbsp;<span style="color: red">*</span></label>
                        <input class="form-control form-control-sm" id="EmailAddress" name="EmailAddress" type="text" value="" placeholder="Enter email id">
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="EmailAddress" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact No&nbsp;<span style="color: red">*</span></label>
                        <input class="form-control form-control-sm" id="ContactNo" name="ContactNo" type="text" value="" placeholder="Enter contact no.">
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="ContactNo" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>LinkedIn Url&nbsp;<span style="color: red">*</span></label>
                        <input class="form-control form-control-sm" id="LinkedInUrl" name="LinkedInUrl"  type="text" value="" placeholder="Enter linkedin url">
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="LinkedInUrl" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Law School / University&nbsp;<span style="color: red">*</span></label>
                    <div class="select-control">
                        <select class="form-control form-control-sm" id="University" name="University" style="display: inline;"><option>Select one</option>
                            <option>NLSIU Bangalore</option>
                            <option>NALSAR Hyderabad</option>
                            <option>NUJS Kolkata</option>
                            <option>National Law University, Jodhpur</option>
                            <option>National Law Institute University Bhopal</option>
                            <option>Gujarat National Law University Gandhinagar</option>
                            <option>National University of Advanced Legal Studies Kochi</option>
                            <option>Dr. Ram Manohar Lohiya National Law University Lucknow</option>
                            <option>National Law University, Odisha</option>
                            <option>National University of Study and Research Ranchi</option>
                            <option>Hidayatullah National Law University Raipur</option>
                            <option>Rajiv Gandhi National University Of Law Patiala</option>
                            <option>National Law University and Judicial Academy Guwahati</option>
                            <option>Chanakya National Law University Patna</option>
                            <option>Tamil Nadu National Law School Trichy</option>
                            <option>Damodaram Sanjivayya National Law University Vishakhapatnam</option>
                            <option>National Law University, Delhi</option>
                            <option>Faculty of Law, Aligarh Muslim University</option>
                            <option>Faculty of Law, Jamia Millia Islamia Delhi</option>
                            <option>Indian Law Society's Law College Pune</option>
                            <option>Government Law College Mumbai</option>
                            <option>Symbiosis Society's Law College Pune</option>
                            <option>Amity Law School Noida</option>
                            <option>New Law College Pune</option>
                            <option>Faculty of Law, University of Delhi</option>
                            <option>University Law College Bangalore Univeristy</option>
                            <option>Faculty of Law Mumbai University</option>
                            <option>Faculty of Law BHU</option>
                            <option>Bangalore Institute of Legal Studies</option>
                            <option>Tamil Nadu Dr Ambedkar Law University</option>
                            <option>Army Institute of Law Mohali</option>
                            <option>DES Law College Pune</option>
                            <option>Department of Law, University of Calcutta</option>
                            <option>Government Law College Thiruvananthapuram</option>
                            <option>National Law University and Judicial Academy, Assam</option>
                            <option>Chanakya National Law University, Patna</option>
                            <option>Osmania University College of Law, Osmania University</option>
                            <option>Department of Laws, Panjab University, Chandigarh</option>
                            <option>Baroda School of Legal Studies</option>
                            <option>Faculty of Law, Banaras Hindu University, Varanasi</option>
                            <option>M.S. Ramaiah College of Law, Bangalore</option>
                            <option>School of Law, Christ University, Bangalore</option>
                            <option>Department of law, Himachal Pradesh University, Shimla</option>
                            <option>Government Law College, Calicut</option>
                            <option>Department of Legal Studies &amp; Research (DLSR), Barkatullah University, Bhopal</option>
                            <option>K.C. Law College, Mumbai</option>
                            <option>Central Law College, Nagpur</option>
                            <option>Ambedkar Law College, Dhule</option>
                            <option>KIIT School of Law Bhubaneswar</option>
                            <option>Department of Laws, Guru Nanak Dev University, Amritsar</option>
                            <option>Lloyd Law College, Greater Noida</option>
                            <option>Lloyd Law College, Greater Noida</option>
                            <option>Forensic science</option>
                            <option>Amity Law School, Delhi</option>
                            <option>Indraprastha university </option>
                            <option>University Five Year Law College (UFYLC), University of Rajasthan (UOR)</option>
                            <option>Acharya Nagarjuna university</option>
                            <option>Acharya Nagarjuna university</option>
                            <option>Kerala Law Academy Law College,Trivandrum</option>
                            <option>Kurukshetra University, Kurukshetra</option>
                            <option>O.P. Jindal Global University</option>
                            <option>Others</option>
                            </select>
                          <span style="color: red"><span class="field-validation-valid" data-valmsg-for="University" data-valmsg-replace="true"></span></span>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Programme&nbsp;<span style="color: red">*</span></label>
                    <div class="select-control">
                        <select class="form-control form-control-sm" id="Programme" name="Programme"><option>Select one</option>
                          <option>3 Years</option>
                          <option>5 Years</option>
                          </select>
                        <span style="color: red"><span class="field-validation-valid" data-valmsg-for="Programme" data-valmsg-replace="true"></span></span>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Year In School&nbsp;<span style="color: red">*</span></label>
                      <div class="select-control">
                          <select class="form-control form-control-sm" id="YearInSchool" name="YearInSchool"><option>Select one</option>
                          </select>
                          <span style="color: red"><span class="field-validation-valid" data-valmsg-for="YearInSchool" data-valmsg-replace="true"></span></span>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>How did you learn&nbsp;<span style="color: red">*</span></label>
                      <div class="select-control">
                          <select class="form-control form-control-sm" id="Learn" name="Learn"><option>Select one</option>
                            <option>Career services at school</option>
                            <option>Email</option>
                            <option>LinkedIn</option>
                            <option>Facebook</option>
                            <option>Student organization / journal</option>
                            <option>Friends / Family</option>
                            <option>Others</option>
                            </select>
                          <span style="color: red"><span class="field-validation-valid" data-valmsg-for="Learn" data-valmsg-replace="true"></span></span>
                      </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Resume <small>(.pdf,.doc &amp; .docx only)</small>&nbsp;<span style="color: red">*</span></label>
                        <input type="file" accept="text/cfg" name="input-file-preview" class="form-control form-control-sm">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit Application</button>
      </div>
    </div>
  </div>
</div>
@endsection