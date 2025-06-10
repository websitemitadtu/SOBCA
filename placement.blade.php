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
                            Placement
                            <div class="center_head_img left_head_img"></div>
                        </div>

                        <div class="width100">
                            <div class="about_innerContent">

                                <!-- Custom Style -->
                                <style>
                                    .placement-section {
                                        background: #fff;
                                        padding: 30px;
                                        border-radius: 12px;
                                        /*box-shadow: 0 4px 10px rgba(0,0,0,0.1);*/
                                    }
                                    .placement-section h2, .placement-section h3 {
                                        color: #2c3e50;
                                        margin-top: 20px;
                                    }
                                    .placement-section p {
                                        font-size: 1rem;
                                        line-height: 1.6;
                                        color: #555;
                                    }
                                    .highlight-box {
                                        background-color: #f0f8ff;
                                        padding: 15px;
                                        border-left: 5px solid #761b89;
                                        border-radius: 8px;
                                        margin-bottom: 20px;
                                        margin-top: -45px;
                                    }
                                    .placement-section ul {
                                        list-style-type: disc;
                                        padding-left: 20px;
                                        padding: 30px;
                                    }
                                    .placement-section ul li {
                                        margin-bottom: 10px;
                                        color: #444;
                                    }
                                    @media (max-width: 600px) {
                                        .placement-section {
                                            padding: 20px;
                                        }
                                    }
                                    
                                    /*start */
                                    .accordion {
                                      background-color: #761b89;
                                      color: white;
                                      cursor: pointer;
                                      padding: 18px 22px;
                                      width: 100%;
                                      text-align: left;
                                      border: none;
                                      outline: none;
                                      transition: background-color 0.3s ease;
                                      font-size: 18px;
                                      border-radius: 8px;
                                      margin: 10px 0;
                                      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                                    }
                                
                                    .accordion:hover {
                                      background-color: #4e1a81;
                                    }
                                
                                    .active, .accordion:focus {
                                      background-color: #0066cc;
                                    }
                                
                                    .panel {
                                      padding: 0 20px 15px 20px;
                                      background-color: white;
                                      display: none;
                                      overflow: hidden;
                                      border-radius: 0 0 8px 8px;
                                      margin-top: -10px;
                                      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
                                      animation: slideDown 0.3s ease-out;
                                    }
                                
                                   
                                
                                    @media screen and (max-width: 768px) {
                                      .accordion {
                                        font-size: 16px;
                                        padding: 14px 18px;
                                      }
                                
                                      .panel {
                                        padding: 0 15px 15px 15px;
                                      }
                                    }
                                    /*end*/
                                </style>

                                <!-- Placement Content -->
                                
                                <div class="placement-section">

                                    <div class="highlight-box">
                                        <strong>Highlights:</strong> The Placement Cell actively facilitates student success through recruitment drives, training programs, and ongoing support services, proudly showcasing a successful placement record.
                                    </div>

                                <h4>Objectives of the Placement Cell</h4>
                                
                                <button class="accordion">Student Success</button>
                                  <div class="panel">
                                    <ul>
                                      <li>Equip students with essential skills through career counseling, resume writing workshops, and mock interviews.</li>
                                      <li>Help students identify career goals and align them with suitable job opportunities.</li>
                                      <li>Promote a professional image by conducting communication and soft skill training sessions.</li>
                                    </ul>
                                  </div>
                                
                                  <button class="accordion">Placement Process</button>
                                  <div class="panel">
                                    <p>The Placement Cell follows a structured process to ensure students are prepared and positioned to take advantage of employment opportunities from reputed companies visiting the campus.</p>
                                  </div>
                                
                                  <button class="accordion">Placement Initiatives</button>
                                  <div class="panel">
                                    <ul>
                                      <li><strong>Placement Induction Program:</strong> An introductory program that prepares students for placement culture, expectations, and processes.</li>
                                      <li><strong>Comprehensive Training Plan:</strong> Customized and targeted training modules focusing on aptitude, technical, and industry-relevant skills.</li>
                                      <li><strong>Soft Skills Training:</strong> Regular sessions on communication, teamwork, time management, and interview etiquette.</li>
                                      <li><strong>Technical Training:</strong> Focused sessions on domain knowledge and hands-on industry exposure.</li>
                                      <li><strong>Participation in Maritime Events:</strong> Active presence as sponsors or partners in key industry events to strengthen corporate connections and branding.</li>
                                      <li><strong>Alumni Events:</strong> Networking opportunities and mentorship from successfully placed alumni to boost student confidence and preparedness.</li>
                                      <li><strong>STCW Certifications:</strong> Industry-recognized certifications ensuring students meet global maritime standards.</li>
                                      <li><strong>On-board Training & Industrial Visits:</strong> Real-world exposure through field visits, ship tours, and internship programs.</li>
                                      <li><strong>Student Undertakings:</strong> Every cadet signs an undertaking to comply with institute regulations, instilling discipline and accountability.</li>
                                    </ul>
                                    <p>Through consistent engagement with industry leaders and tailored support programs, the Placement Cell ensures students are placement-ready and capable of excelling in their chosen career paths.</p>
                                  </div>
                                
                                  <script>
                                    const accordions = document.querySelectorAll(".accordion");
                                    accordions.forEach(btn => {
                                      btn.addEventListener("click", function () {
                                        this.classList.toggle("active");
                                        const panel = this.nextElementSibling;
                                
                                        // Close others
                                        accordions.forEach(acc => {
                                          if (acc !== this) {
                                            acc.classList.remove("active");
                                            acc.nextElementSibling.style.display = "none";
                                          }
                                        });
                                
                                        // Toggle current
                                        panel.style.display = (panel.style.display === "block") ? "none" : "block";
                                      });
                                    });
                                  </script>

                                <!--End-->

                                 
                                </div>
                                <!-- End Placement Content -->
                                <!--Recruitment sections starts-->
                                 <style>
                                    .recruiter-section {
                                        background: #fff;
                                        padding: 30px;
                                        border-radius: 12px;
                                        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
                                    }
                                    .recruiter-section h3 {
                                        color: #761b89;
                                        margin-top: -25px;
                                        padding: 17px;
                                        font-family: 'Metropolis-ExtraBold';
                                    }
                                    .recruiter-section ul {
                                        columns: 2;
                                        column-gap: 30px;
                                        list-style: disc;
                                        padding-left: 20px;
                                    }
                                    .recruiter-section ul li {
                                        margin-bottom: 8px;
                                        font-size: 0.95rem;
                                        color: #444;
                                    }
                                    .year-toggle {
                                        background-color: #f4f6f8;
                                        border: none;
                                        width: 100%;
                                        text-align: left;
                                        padding: 10px 15px;
                                        font-size: 1.1rem;
                                        font-weight: 600;
                                        margin-top: 10px;
                                        cursor: pointer;
                                        border-left: 5px solid #007BFF;
                                        border-radius: 6px;
                                    }
                                    .year-content {
                                        display: none;
                                        padding: 15px 0 0 10px;
                                    }
                                    .active-content {
                                        display: block;
                                    }
                                    @media(max-width: 768px) {
                                        .recruiter-section ul {
                                            columns: 1;
                                        }
                                    }
                                </style>
                                  <!-- JavaScript for Toggle -->
                                <script>
                                    function toggleContent(id) {
                                        var content = document.getElementById(id);
                                        content.classList.toggle("active-content");
                                    }
                                </script>

                                <div class="recruiter-section">

                                    <h3>Top Companies who recruited UG Students (2024–25)</h3>
                                    <ul>
                                        <li>Fristine Infotech Pvt Ltd</li>
                                        <li>WeDo Advertising and Marketing</li>
                                        <li>Arvind Fashions</li>
                                        <li>Svavas Technologies Pvt Ltd</li>
                                        <li>Teachnook Edutech</li>
                                        <li>Nora Group</li>
                                        <li>Bakliwal Tutorials</li>
                                        <li>NMIMS</li>
                                        <li>Academor Edutech</li>
                                        <li>Aadish Exim</li>
                                        <li>Weskill Edutech Pvt Ltd</li>
                                        <li>Accel Digital</li>
                                        <li>K12 Techno Services Pvt Ltd</li>
                                        <li>Miss Universe Maharashtra</li>
                                        <li>State Street Corporation</li>
                                        <li>ISHRAE</li>
                                        <li>Mortbuzz Solutions India Pvt Ltd</li>
                                        <li>Gyaanik - Ascend and Intellect Pvt Ltd</li>
                                        <li>Rinex Technologies</li>
                                        <li>Topperrank</li>
                                        <li>Tata Consultancy Services</li>
                                        <li>Amoya Consulting LLP</li>
                                        <li>Launched</li>
                                        <li>Zepto</li>
                                        <li>KPMG</li>
                                        <li>Krisn Impex</li>
                                        <li>PuneFinds</li>
                                        <li>Codemines Solutions Pvt Ltd</li>
                                        <li>Search Over</li>
                                        <li>Skill Intern Pvt Ltd</li>
                                        <li>Jeppy Snacks</li>
                                        <li>Hike Education</li>
                                        <li>LearnFlu</li>
                                        <li>Artech Infosystems</li>
                                        <li>Mage Marketer</li>
                                        <li>Career Mantra</li>
                                        <li>Osumare Marketing</li>
                                        <li>NZ Solutions</li>
                                        <li>My Next Hire</li>
                                        <li>Life I Design</li>
                                        <li>VR 360 Degree</li>
                                        <li>mBrothers International</li>
                                        <li>Jaro Education</li>
                                        <li>Teceze</li>
                                        <li>Launched Global</li>
                                        <li>Turinton Consulting</li>
                                        <li>Woxen Digital Pvt Ltd</li>
                                        <li>Insplore Consultants Pvt Ltd</li>
                                    </ul>

                                    <!-- Collapsible Sections by Year -->
                                    <button class="year-toggle" onclick="toggleContent('yr2023')">2023 Recruiters</button>
                                    <div id="yr2023" class="year-content">
                                        <ul>
                                            <li>The Machine Maker</li>
                                            <li>Apace Digital Cargo Ltd</li>
                                            <li>Orangewood Automation Pvt Ltd</li>
                                            <li>Astate99</li>
                                            <li>Parmesh Construction Company Limited</li>
                                            <li>Citius Communications Private Limited</li>
                                            <li>Zeel Network Solutions</li>
                                            <li>PDBORA</li>
                                            <li>Vaishnavi Construction and Net Services Company</li>
                                            <li>Pulse Multispeciality Hospital</li>
                                            <li>Maharashtra Economic Development Council</li>
                                            <li>Vijayshree Events</li>
                                            <li>ZS Enterprises</li>
                                            <li>HELPO FOUNDATION</li>
                                            <li>Indovance Private Limited</li>
                                            <li>GE GROUP</li>
                                            <li>Vasundhra Agro Crops</li>
                                            <li>Dev Amrut Agro Tech Pvt. Ltd</li>
                                            <li>Baramati Agro</li>
                                            <li>AgriNext</li>
                                            <li>Durga India</li>
                                            <li>Purandar Laxmi Shetkari Mahila Producer Co.</li>
                                            <li>HOUSIEY</li>
                                            <li>Athetaa Solution</li>
                                            <li>FinDestination</li>
                                            <li>TellMe Digiinfotech Pvt. Limited</li>
                                        </ul>
                                    </div>

                                    <button class="year-toggle" onclick="toggleContent('yr2022')">2022 Recruiters</button>
                                    <div id="yr2022" class="year-content">
                                        <ul>
                                            <li>AgMatrix</li>
                                            <li>Autospatial</li>
                                            <li>Peth Village Adoption</li>
                                            <li>Bells & Whistel Adverising Pvt. Ltd.</li>
                                            <li>CASMB</li>
                                            <li>Enery Core India Pvt Ltd</li>
                                            <li>Ethosh Designs Pvt. Ltd</li>
                                            <li>Mylead Fintech Pvt Ltd</li>
                                            <li>Gadre Marine Pvt. Ltd</li>
                                            <li>NSDM India</li>
                                            <li>ILMTEC</li>
                                            <li>Magicflare Software Services LLP</li>
                                            <li>Niyuj Sofware Services Pvt Ltd</li>
                                            <li>Quantel</li>
                                            <li>RJ Biotech Ltd</li>
                                            <li>Sonai Dairy Pvt. Ltd. Baramati</li>
                                            <li>Zplus Cyber Secure Technologies</li>
                                            <li>Bridge Bharat Council</li>
                                            <li>...and more</li>
                                        </ul>
                                    </div>

                                    <button class="year-toggle" onclick="toggleContent('yr2021')">2021 Recruiters</button>
                                    <div id="yr2021" class="year-content">
                                        <ul>
                                            <li>AIESEC</li>
                                            <li>HFI Ltd</li>
                                            <li>Army Institute of Management & Technology</li>
                                        </ul>
                                    </div>

                                    <button class="year-toggle" onclick="toggleContent('yr2020')">2020 Recruiters</button>
                                    <div id="yr2020" class="year-content">
                                        <ul>
                                            <li>Europian Institute of International Education</li>
                                            <li>Yash Foundation</li>
                                            <li>HFI Training</li>
                                            <li>Bundesverband Mittelstandische Wirtschaft</li>
                                            <li>Khusbhoo Charitable Trust</li>
                                            <li>Pride Globaltech Services, Pune</li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- End Recruiters Section -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Frontend/footer')
