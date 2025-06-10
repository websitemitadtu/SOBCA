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
                                    SOB & CA Faculty
                                   <div class="center_head_img left_head_img"></div>
                                </div>

                                <div class="width100">

                                <div class="about_innerContent">
                                    
                                     <style>
                                
                                        h2 {
                                           color: #761b89;
                                            border-left: 6px solid #e07b34;
                                            padding-left: 10px;
                                            font-size: 25px;
                                            margin: revert-layer;
                                            font-weight: 700;
                                        }
                                        .card-container {
                                          display: flex;
                                          flex-wrap: wrap;
                                          gap: 20px;
                                        }
                                        .card {
                                          background-color: white;
                                          border-radius: 12px;
                                          box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                                          padding: 16px 20px;
                                          flex: 1 1 280px;
                                          transition: transform 0.3s;
                                        }
                                        .card:hover {
                                          transform: translateY(-5px);
                                        }
                                        .faculty-name {
                                          font-size: 1.1em;
                                          font-weight: bold;
                                          color: #2c3e50;
                                        }
                                        .designation {
                                          color: #555;
                                          font-size: 0.95em;
                                        }
                                        .sno {
                                          font-size: 0.85em;
                                          color: #888;
                                        }
                                      </style>
                                    </head>
                                    <body>
                                    
                                  <!--<h2 class="mt-1">BBA Faculty</h2>-->
                                    <div class="card-container">
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Dr. Ujjwal Mishra</div><div class="designation">Professor - Finance</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Dr. Dipti Tulpule</div><div class="designation">Associate Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Dr. Tushar Chandrakant Rathore</div><div class="designation">Associate Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Rupa M. Rawal</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Dr. Ravindra Narayan Khedkar</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Dr. Shahjahan Shaikh</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Ashlesha B. Hangargekar</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Vivek Vishnu Datar</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Namrata Soni Valecha</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Rajesh Babarao Sasane</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Priya Goure</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Laveena Bhatia</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Dr. Deepak Ranjan Sahoo</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Dineshkumar S. Suthar</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Dr. Anamika Kumari</div><div class="designation">Assistant Professor</div></div>
                                    </div>
                                    
                                    <!--<h2>BCA Faculty</h2>-->
                                    <div class="card-container">
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Dr. Ashwin B. Tomar</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Bhima S. Sanap</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Monica V. Jadhav</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Kumar B. Anand</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Hanifkha H. Pathan</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Jayashri S. Murhekar</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Chaitali S. Dikholkar</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Chiranjilal Rathi</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Rahul Sharma</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Snehal A. Patil</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Pratibha Tiwari</div><div class="designation">Assistant Professor</div></div>
                                      <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Harshit Kumar</div><div class="designation">Assistant Professor</div></div>
                                    </div>
                                    
                                    <!--<h2>BCOM Faculty</h2>-->
                                    <!--<div class="card-container">-->
                                    <!--  <div class="card"><div class="sno"></div><div class="faculty-name">Prof. Rupa M. Rawal</div><div class="designation">Assistant Professor</div></div>-->
                                    <!--</div>-->

                              
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