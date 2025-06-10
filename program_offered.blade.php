
@include('Frontend/header')

@include('Frontend/SOBCA/sobca_sidebar')

<div class="right_panel">



<div class="width100">
    <div class="inner_page_content_box">

        <div class="container">

          <div class="row pt-5 pb-5">

                    <div class="col-lg-1"></div>

                        <div class="col-lg-11">

                                <div class="center_heading left_heading">
                                   Institute Programs
                                   <div class="center_head_img left_head_img"></div>
                                </div>

                                <div class="width100">

                                <div class="about_innerContent">
                                <!--Raghavendra Updated this code on 28/05/2025 at 20:42 pm-->
                                <!-- Include Bootstrap 5 CSS -->
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                                
                                <div class="container my-2">
                                  <!--<div class="text-center mb-2">-->
                                  <!--  <h2 class="fw-bold">Undergraduate Programs</h2>-->
                                  <!--  <p class="text-muted">MIT School of Business &amp; Computer Application</p>-->
                                  <!--</div>-->
                                
                                  <div class="row g-4 justify-content-center">
                                    <!-- Program Cards -->
                                    <div class="col-md-4">
                                      <div class="card border-0 shadow-lg h-100">
                                        <div class="card-body text-center">
                                          <i class="bi bi-briefcase-fill display-4 text-primary"></i>
                                          <h5 class="card-title mt-3">BBA</h5>
                                          <p class="card-text">Bachelor of Business Administration with diverse specializations and industry exposure.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card border-0 shadow-lg h-100">
                                        <div class="card-body text-center">
                                          <i class="bi bi-laptop-fill display-4 text-success"></i>
                                          <h5 class="card-title mt-3">BCA</h5>
                                          <p class="card-text">Bachelor of Computer Applications focusing on IT, software development, and analytics.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="card border-0 shadow-lg h-100">
                                        <div class="card-body text-center">
                                          <i class="bi bi-cash-coin display-4 text-warning"></i>
                                          <h5 class="card-title mt-3">BCOM</h5>
                                          <p class="card-text">Bachelor of Commerce to build foundational knowledge in finance and accounting.</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                
                                  <!-- BBA Program Details -->
                                  <div class="accordion mt-3" id="programDetails">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="bbaHeading">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#bbaDetails" aria-expanded="true" aria-controls="bbaDetails">
                                          BBA Program Overview
                                        </button>
                                      </h2>
                                      <div id="bbaDetails" class="accordion-collapse collapse show" aria-labelledby="bbaHeading" data-bs-parent="#programDetails">
                                        <div class="accordion-body">
                                          <p><strong>Duration:</strong> 3 Years</p>
                                          <p><strong>Intake:</strong> 360 Students</p>
                                
                                          <h6 class="fw-bold mt-3">Specializations:</h6>
                                          <ul class="list-group list-group-flush">
                                            <li class="list-group-item">General</li>
                                            <li class="list-group-item">Digital Marketing</li>
                                            <li class="list-group-item">Finance Technology</li>
                                            <li class="list-group-item">Accountancy and Finance by ACCA UK</li>
                                            <li class="list-group-item">Business Analytics</li>
                                            <li class="list-group-item">Data Science</li>
                                            <li class="list-group-item">Global (International Business)</li>
                                            <li class="list-group-item">Real Estate &amp; Urban Infrastructure Management (with CREDAI)</li>
                                            <li class="list-group-item">Event Management</li>
                                          </ul>
                                
                                          <div class="mt-4">
                                            <h6 class="fw-bold">About BBA General / International Business</h6>
                                            <p>
                                              BBA is a three-year course offering in-depth theoretical and practical knowledge in business, commerce, and administration. The course is designed to develop business acumen and entrepreneurial insight to prepare students for future leadership roles.
                                            </p>
                                            <p>
                                              Students with good communication skills, a problem-solving mindset, and effective time management abilities excel in this program.
                                            </p>
                                            <!--2-->
                                            <h6 class="fw-bold">BBA Digital Marketing</h6>
                                            <p>
                                              The Digital Marketing program aims to provide knowledge, skills and perspective about the general field of
                                              marketing specific inputs on Digital marketing. In today’s world digital platforms for communication, search,
                                              interaction and purchase are gaining importance because of the increase in the penetration of mobile, internet and
                                              a large number of activities getting transferred from the brick and mortar to the digital medium. This emerging
                                              trend has led to the launch of this new program on digital marketing and communication.
                                            </p>
                                            <!--3-->
                                            <h6 class="fw-bold">BBA Finance Technology</h6>
                                            <p>
                                             The BBA in Financial Technology will provide you with expert knowledge of both the academic, commercial and
                                                various technologies which has been used in financial aspects of this new world. We aim to future-proof your
                                                learning and employability across fields such as block chain, digital banking, the future of global payments,
                                                cryptocurrencies, digital business strategy, big data, Low-tech, programming with Python as well as the future of
                                                management.
                                            </p>
                                            <!--3-->
                                             <h6 class="fw-bold">BBA Finance and Accountancy ACCA UK accreditation</h6>
                                            
                                            <p>
                                             BBA- Finance &amp; Accountancy (Accredited by UK ACCA) is a dynamic course offering international exposure to
                                            students. This course will provide best placement opportunities to students as ACCA qualification is a highly
                                            respected and demanded qualification by Big 4, MNCs and reputed global consultancy firms.
                                            </p>
                                            <!--4-->
                                            <h6 class="fw-bold">BBA Business Analytics</h6>
                                            <p>
                                            Business Analytics deals with the study, analysis and interpretation of big data of organizations and businesses. It
                                            is an important part of management science. In organizations and businesses, decision making process is largely
                                            dependent on Business Analytics!
                                            </p>
                                            <p>
                                                Analytics, if carried out the right way, can help companies put the right foot forward! Business Analytics is based
                                                on data and statistical methods. It focuses on using a set of metrics to investigate an organization’s/a business’
                                                past performance in order to gain valuable insight and carry out business planning. In simple terms, it is all about
                                                exploring and inspecting the data (from past) and using it to formulate plans for the future!
                                            </p>
                                            <!--5-->
                                             <h6 class="fw-bold">BBA Data Science</h6>
                                            <p>
                                            BBA in data Science is a 3-year full-time course that comes under the domains of Computer Science,
                                            Business Analytics and Artificial Intelligence. Data Science is an interdisciplinary subject that includes the use of
                                            Statistics, Big Data Analytics, Machine Learning and related aspects in order to understand the problem or
                                            phenomena with respect to a set of real-world data.
                                            </p>
                                            <!--6-->
                                            <!--<h6 class="fw-bold">BBA Data Analytics</h6>-->
                                            <!--<p>-->
                                            <!--    Business Analytics deals with the study, analysis and interpretation of big data of organizations and businesses. It-->
                                            <!--    is an important part of management science. In organizations and businesses, decision making process is largely-->
                                            <!--    dependent on Business Analytics! Business Analytics, if carried out the right way, can help companies put the-->
                                            <!--    right foot forward! Business Analytics is based on data and statistical methods. It focuses on using a set of metrics-->
                                            <!--    to investigate an organizations/a business’ past performance in order to gain valuable insight and carry out-->
                                            <!--    business planning.-->
                                            <!--</p>-->
                                            <!--7-->
                                            <h6 class="fw-bold">BBA Real Estate &amp; Urban Infrastructure in association with CREDIA</h6>
                                            <p>
                                                 The program has been designed to impact the latest management practices being followed across various Real
                                                Estate sectors within and outside the country. It provides extensive and in-depth coverage of core and specialized
                                                courses, creating innovation and entrepreneurial qualities. It provides sufficient mix of theoretical as well as
                                                practical learning to students through class room sessions, industry visits, internships, live projects and guest
                                                sessions.
                                            </p>
                                            <P>
                                                Program emphasized the development of communications, quantitative reasoning and business analysis skills.
                                                This course equips students to gain knowledge of business practices and processes related to Real Estate &amp; Urban
                                                Infrastructure sector.
                                            </P>
                                            <!--8-->
                                            <h6 class="fw-bold">BBA Event Management</h6>
                                            
                                            <p>
                                                The MIT College of Management, under MIT-ADT University, offers a comprehensive Bachelor of Business
                                                Administration (BBA) program specializing in Event Management. This three-year undergraduate course is
                                                meticulously designed to blend theoretical knowledge with practical application, addressing the contemporary
                                                needs of the global corporate sector. The curriculum encompasses essential subjects such as event planning,
                                                logistics, marketing, budgeting, sponsorship, and customer service, ensuring a holistic understanding of
                                                the event management industry. A significant emphasis is placed on experiential learning, providing students with
                                                ample opportunities to engage in real-world projects and internships, thereby bridging the gap between academic
                                                concepts and industry practices.
                                            </p>
                                           
                                            <!--9-->
                                              <h6 class="fw-bold">Eligibility : BBA</h6>
                                                <div class="container my-4">
                                                  <div class="table-responsive">
                                                    <table class="table table-bordered table-striped align-middle">
                                                      <thead class="table-primary text-center">
                                                        <tr>
                                                          <th>Eligibility</th>
                                                          <th>Medium</th>
                                                          <th>Selection Process</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>
                                                            (Digital Marketing / Finance Technology / Business Analytics / Global / International Business / Data science / General Business Management / Real Estate & Urban Infrastructure / Finance & Accountancy by ACCA UK)  
                                                            Enterance Exam is mandatory For Example (BBA CET)
                                                            <br>
                                                            Higher Secondary School Certificate (10+2) or its (First Year) equivalent
                                                            Examination with minimum of 50% marks (45% for reserved category
                                                            candidate as per Maharashtra state government rules). 
                                                            <b style="display: flex;justify-content: space-around;">Or</b>
                                                            <br>
                                                            Three year Diploma Course (after S.S.C.) of Technical Education conducted
                                                            by Government of Maharashtra or its equivalent.
                                                           <b style="display: flex;justify-content: space-around;">Or</b>
                                                             <br>
                                                             Two year Diploma Course in Pharmacy (after H.S.C.) of Board of Technical
                                                            conducted by Government of Maharashtra or its equivalent.
                                                            <b style="display: flex;justify-content: space-around;">Or</b>
                                                             <br>
                                                              Higher Secondary School Certificate (10+2) Examination with of 50% marks
                                                            (45% for reserved category candidate as per Maharashtra state government
                                                            rules).
                                                            <br><br>
                                                            Student who is appearing for HSC examination in 2025 is also eligible to take
                                                            the provisional admission.
                                                            <br><br>
                                                            In case of Reserved Category candidate has to submit the cast certificate, Cast
                                                            validity certificate and Non Creamy layer certificate.
                                                             <br><br>
                                                             Every Eligible Candidate has to pass the Common Entrance Test conducted
                                                             by any common statutory board such as (MAH-BBA CET 2025, PERA-2025
                                                             etc)
                                                            <!--<br><strong>Note:</strong> 45% for SC/ST/OBC/PWD candidates from a recognized board in India.-->
                                                          </td>
                                                          <td class="text-center">English</td>
                                                          <td>Group Discussion &amp; Personal Interview</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                     <p>
                                                        <b>Fee Structure:</b> For BBA Courses <br>
                                                        For NRI, PIO, OCI &amp; Foreign national candidate fee (Tuition, Development and University) will be 1.5 times
                                                        higher than Indian candidate.
                                                    </p>
                                                  </div>
                                                </div>
                                           
                                            <!--10-->
                                            
                                            
                                            
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--END-->
                                  <!--2ND ACCORDIAN START-->
                                   <div class="accordion mt-3" id="programDetails">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="bcomHeading">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#bcomDetails" aria-expanded="true" aria-controls="bcomDetails">
                                          B. Com &amp; Economics Overview
                                        </button>
                                      </h2>
                                      <div id="bcomDetails" class="accordion-collapse collapse show" aria-labelledby="bcomHeading" data-bs-parent="#programDetails">
                                        <div class="accordion-body">
                                
                                          <div class="mt-4">
                                            <h6 class="fw-bold">Overview</h6>
                                            <p>
                                             B. Com is a three-year undergraduate programme designed to increase business understanding in
                                            students. The program’s curriculum teaches theoretical and practical components of the study. One of the primary
                                            and most important objectives of the programme is to introduce students in successfully operating and
                                            contributing to the modern global world of business by pursuing advanced research in the discipline. This
                                            programme offers an opportunity to opt for doing an advanced study on various topics related to accountancy
                                            business and management. This programme enables the students to build a strong foundation to pursue courses
                                            like CA, ICWA, CMA along with preparing them for pursuing a master’s degree.
                                            </p>
                                            <!--2-->
                                            <h6 class="fw-bold">Eligibility: B.Com</h6>
                                
                                                <div class="container my-4">
                                                  <div class="table-responsive">
                                                    <table class="table table-bordered table-striped align-middle">
                                                      <thead class="table-primary text-center">
                                                        <tr>
                                                          <th>Eligibility</th>
                                                          <th>Duration</th>
                                                          <th>Intake</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>
                                                            Higher Secondary School Certificate (10+2) or its equivalent
                                                            Examination.                                                
                                                            <br> <br>
                                                            Three Years Diploma Course after S.S.C. i.e. 10th standard, of Board of
                                                            Technical Education conducted by Government of Maharashtra or its
                                                            equivalent.
                                                            <br> <br>
                                                            Two Years Diploma in Pharmacy after HSC, of Board of Technical
                                                            Education conducted by Government of Maharashtra or its equivalent.
                                                             <br> <br>
                                                             Students are needed to clear the 10+2 or equivalent examination from any
                                                            recognized board or school and has secured at least 50% marks in case of
                                                            open category and 45% Marks in case of Reserved Category (Subject
                                                            submission of cast certificate, Cast validity certificate and Non Creamy layer
                                                            certificate).
                                                            <br> <br>
                                                            Student who is appearing for HSC examination in 2025 is also eligible to
                                                            take the provisional admission.
                                                            <!--<br><strong>Note:</strong> (45% for SC/ST/OBC/PWD candidates) from any recognized Board in India.-->
                                                          </td>
                                                          <td class="text-center">3</td>
                                                          <td>60</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                     <p>
                                                        <b>B. Com </b><br>
                                                       For NRI, PIO, OCI &amp; Foreign national candidate fee (Tuition, Development and University) will be 1.5 times higher than Indian candidate
                                                    </p>
                                                  </div>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--END-->
                                    <!--3RD ACCORDIAN START-->
                                   <div class="accordion mt-3" id="programDetails">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header" id="bcaHeading">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#bcaDetails" aria-expanded="true" aria-controls="bcaDetails">
                                          BCA Overview
                                        </button>
                                      </h2>
                                      <div id="bcaDetails" class="accordion-collapse collapse show" aria-labelledby="bcaHeading" data-bs-parent="#programDetails">
                                        <div class="accordion-body">
                                
                                          <div class="mt-3">
                                            <h6 class="fw-bold">Duration:</h6><p> 3 Years, Intake: 60</p>
                                            
                                            <p>
                                             Bachelor of Computer Application (BCA) is one of the popular courses among the students who want to make
                                            their career in the IT (Information Technology) field. With the rapid growth of IT industry in India, the demand of
                                            computer professionals is increasing day by day, which has created a lot of opportunities for the computer
                                            graduates. The duration of the course is 3 years and is divided into 6 semesters. A student who takes up BCA
                                            course, acquires extensive training in the essentials of Information Technology as well as knowledge on various
                                            programming subjects like C, C++, Java and Dot Net Technologies.
                                            </p>
                                            <h6 class="fw-bold">Specialization:Data Science and Analytics</h6>
                                            <h6 class="fw-bold">Specialization: Cloud Computing</h6>
                                            <h6 class="fw-bold">Specialization: IOT &amp; Web Technology</h6>
                                            <h6 class="fw-bold">Specialization: Cyber Security in Association with Mile 2</h6>
                                            <!--2-->
                                            <h6 class="fw-bold mt-5">Eligibility: For BCA</h6>
                                
                                                <div class="container my-4">
                                                  <div class="table-responsive">
                                                    <table class="table table-bordered table-striped align-middle">
                                                      <thead class="table-primary text-center">
                                                        <tr>
                                                          <th>Eligibility</th>
                                                          <th>Medium</th>
                                                          <th>Fee Structure: For BCA</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                          <td>
                                                            Pass at 10+2 level (ICSE/ CBSE/State Boards) in Science, Commerce or Management Sciences stream with
                                                            minimum percentage of 50%.
                                                            <br><strong>Note:</strong> (45% for SC/ST/OBC/PWD candidates) from any recognized Board in India.
                                                          </td>
                                                          <td class="text-center">Group Discussion &amp; Personal Interview of our center.</td>
                                                          <td>For NRI, PIO, OCI &amp; Foreign national candidate fee (Tuition, Development and University) will be 1.5 times higher than Indian candidate.</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                    
                                                  </div>
                                                </div>
                                           
                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--END-->
                                </div>
                                
                                <!-- Include Bootstrap Icons and JS -->
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                                <!--End-->
                              
`


                            </div>

                        </div>

                    </div>

        </div>
    </div>
</div>

</div>
</div>

 @include('Frontend/footer')