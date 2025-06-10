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
                            Students speak
                            <div class="center_head_img left_head_img"></div>
                        </div>

                        <div class="width100">
                            <div class="about_innerContent">
                                {{-- Your content goes here --}}
                                <div class="student-speak-section">
                                    <div class="row g-4">
                                        <!-- Student Card 1 -->
                                        <div class="col-md-6">
                                            <div class="student-card">
                                                <div class="student-photo">
                                                    <img src="{{ asset('assets_web/images/tejal.jpg') }}" alt="Tejal Krishna" />
                                                </div>
                                                <div class="student-info">
                                                    <h5>Tejal Krishna</h5>
                                                    <p><strong>Program:</strong> BBA (Digital Marketing), Third Year</p>
                                                    <p class="student-quote">“As a third-year student pursuing a BBA (DM) at MIT ADT University, I have indeed had an inspiring
                                                        experience. The university boasts a lively learning environment that is both intellectually
                                                        challenging and practically grounded...”</p>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <!-- Student Card 2 -->
                                        <div class="col-md-6">
                                            <div class="student-card">
                                                <div class="student-photo">
                                                    <img src="{{ asset('assets_web/images/nandini.jpg') }}" alt="Nandini Loya" />
                                                </div>
                                                <div class="student-info">
                                                    <h5>Nandini Loya</h5>
                                                    <p><strong>Program:</strong> BBA (Digital Marketing), Third Year</p>
                                                    <p class="student-quote">“MIT ADT University, situated in Pune, India, is a distinguished institution that has rapidly gained
                                                        recognition for its innovative educational practices since its establishment in 2015...”</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Frontend/footer')

<style>
    .student-speak-section {
    margin-top: -20px;
    margin-bottom: 40px;
}

.student-card {
    display: flex;
    flex-direction: column;
    background-color: #fff0f6;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 20px;
    height: 100%;
    transition: transform 0.3s ease;
}

.student-card:hover {
    transform: translateY(-5px);
}

.student-photo img {
    width: 35%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
}

.student-info {
    padding-top: 15px;
}

.student-info h5 {
    font-weight: 700;
    color: #d63384;
    margin-bottom: 8px;
}

.student-info p {
    font-size: 15px;
    margin-bottom: 10px;
    color: #444;
}

.student-quote {
    font-style: italic;
    font-family: "Georgia", "Cursive", sans-serif;
    color: #555;
}

</style>