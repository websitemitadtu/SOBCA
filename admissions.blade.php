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
              Admission Apply Now/ Eligibility Criteria
              <div class="center_head_img left_head_img"></div>
            </div>

            <div class="width100">
              <div class="about_innerContent">

                <!-- Custom Styles -->
                <style>
                  .admission-box {
                    max-width: 900px;
                    margin: auto;
                    background: white;
                    padding: 30px;
                    border-radius: 12px;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                  }
                  .admission-box h2 {
                    color: #2c3e50;
                    border-left: 6px solid #4CAF50;
                    padding-left: 12px;
                    font-size: 1.6em;
                  }
                  .note {
                    background-color: #e8f5e9;
                    border-left: 4px solid #43a047;
                    padding: 10px 15px;
                    margin-bottom: 20px;
                    border-radius: 8px;
                    font-size: 0.95em;
                  }
                  ul.requirements {
                    list-style: none;
                    padding: 0;
                  }
                  ul.requirements li {
                    background: #fdfdfd;
                    margin: 10px 0;
                    padding: 12px 16px;
                    border-left: 5px solid #2196F3;
                    border-radius: 6px;
                    display: flex;
                    align-items: center;
                    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
                    transition: transform 0.2s ease;
                  }
                  ul.requirements li:hover {
                    transform: scale(1.01);
                  }
                  ul.requirements li::before {
                    content: '📄';
                    margin-right: 10px;
                    font-size: 1.2em;
                  }
                  @media (max-width: 600px) {
                    .admission-box {
                      padding: 20px;
                    }
                    ul.requirements li {
                      font-size: 0.95em;
                    }
                  }
                </style>

                <!-- Admission Requirements Section -->
                <div class="admission-box">
                  <h2>📌 Admission Requirements – UG Programs</h2>

                  <div class="note">
                    To confirm your admission, please ensure the following documents are submitted. Documents must be attested by the <strong>Principal of your (10+2) school</strong> or a <strong>Gazetted Officer</strong> of the Government of India.
                  </div>

                  <ul class="requirements">
                    <li>Passport (Self-attested copy)</li>
                    <li>Matriculation / Secondary School Certificate and Mark Sheet</li>
                    <li>Higher Secondary / Intermediate / Senior Secondary (10+2) Certificate and Mark Sheet</li>
                    <li>Attested Internet copy of Class XII mark sheet (if hard copy not received)</li>
                    <li>Transfer Certificate from the last institution attended</li>
                    <li>Migration Certificate <strong>(Not Applicable for Maharashtra students)</strong></li>
                    <li>BBA/BCA CET Score Card</li>
                    <li>Domicile Certificate <strong>(Only for Maharashtra students)</strong></li>
                    <li>Caste Certificate</li>
                    <li>Caste Validity Certificate</li>
                    <li>Date of Birth Certificate</li>
                    <li>Non-Creamy Layer Certificate <strong>(If applicable)</strong></li>
                    <li>GAP Certificate <strong>(If applicable)</strong></li>
                    <li>Aadhar Card</li>
                    <li>Certificates for Sports or Extra-curricular Activities <strong>(from Std. VII and above, if available)</strong></li>
                  </ul>
                </div>
                <!-- End of Admission Requirements Section -->

              </div> <!-- about_innerContent -->
            </div> <!-- width100 -->
          </div> <!-- col-lg-11 -->
        </div> <!-- row -->
      </div> <!-- container -->
    </div> <!-- inner_page_content_box -->
  </div> <!-- width100 -->
</div> <!-- right_panel -->

@include('Frontend/footer')
