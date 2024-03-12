<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Title</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

    <?php // Thư viện dùng chung toàn website -- KHÔNG ĐƯỢC SỬA ?>
    <link href="css/vendor/normalize.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/hitech/ht-base.css" rel="stylesheet" />
    <script src="js/vendor/jquery-3.6.1.js" type="text/javascript"></script>
    <script src="js/hitech/ht-base.js" type="text/javascript"></script>

    <?php // Thư viện chỉ dùng cho trang này -- KHÔNG ĐƯỢC SỬA ?>
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <?php // CSS & JS dùng chung toàn website ?>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/execercise-chi-tiet.css">
    <script src="js/style.js" type="text/javascript"></script>
    <!-- Khi đặt js trong thẻ head cần có thuộc tính defer để tránh tình trạng load file js trước
         mà DOM chưa được load sẽ xảy ra lỗi -->
    <script defer src="js/exercises-chi-tiet.js"></script>

    <?php // CSS, JS chỉ dùng cho trang này ?>

</head>
<body>
    <div class="progress-bar">
        <div id="progress" class="progress"></div>
        <a href="exercises-danh-sach.php" class="btn-exit"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>
    <div class="s-section-4">
        <div class="container">
            <ul id="progress-list">
                <!-- hướng dẫn cách làm -->
                <li class="active">
                    <div class="ht-format-detail">
                        <h2 class="heading-3">Trước khi bắt đầu,Mình cùng ôn lại kiến thức nhé!</h2>
                        <p>Hello có nghĩa xin chào</p>
                        <p>Goodbye tạm biệt, thì thào Wishper</p>
                        <p>Lie nằm, Sleep ngủ, Dream mơ</p>
                        <p>Thấy cô gái đẹp See girl beautiful</p>
                        <p>I want tôi muốn, kiss hôn</p>
                        <p>Lip môi, Eyes mắt ... sướng rồi ... oh yeah!</p>
                        <p>Long dài, short ngắn, tall cao</p>
                        <p>Here đây, there đó, which nào, where đâu</p>
                        <p>Sentence có nghĩa là câu</p>
                        <p>Lesson bài học, rainbow cầu vồng</p>
                    </div>
                    <button class="nextBtn start" onclick="nextStep()">Start</button>
                </li>
                <li class="type-1 type" data-type="1">
                    <!-- Loại 1-->
                    <h2 class="heading-3">Trong câu sau, đâu là mệnh đề quan hệ?</h2>
                    <div class="question audio-container" data-audio="audio1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(33, 126, 197, 1);transform: ;msFilter:;"><path d="M16 21c3.527-1.547 5.999-4.909 5.999-9S19.527 4.547 16 3v2c2.387 1.386 3.999 4.047 3.999 7S18.387 17.614 16 19v2z"></path><path d="M16 7v10c1.225-1.1 2-3.229 2-5s-.775-3.9-2-5zM4 17h2.697L14 21.868V2.132L6.697 7H4c-1.103 0-2 .897-2 2v6c0 1.103.897 2 2 2z"></path></svg>
                        <p class="name">New York City (NYC), often called simply New York, is the most populous city in the United States.</p>
                    </div>
                    <!--
                        Hiển thị số lượng đáp án "ĐÚNG" dùng để kiểm tra khi người dùng chọn thiếu số lượng đáp án
                        Loại 1: chỉ có 1 đáp án đúng, điền data-numtrue=1
                    -->
                    <div class="text-hide total_anstrue" data-numtrue="1"></div>

                    <div class="row row-flex">
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio2" data-true="false"> <!-- nếu đáp án đúng true, sai là false -->
                                <span class="ans_character"><span>A</span></span>
                                <span class="ans_name">often called simply New York</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio3" data-true="true">
                                <span class="ans_character">B</span>
                                <span>is the most populous city in the United States</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio2" data-true="false"> <!-- nếu đáp án đúng true, sai là false -->
                                <span class="ans_character"><span>C</span></span>
                                <span class="ans_name">New York</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio2" data-true="false"> <!-- nếu đáp án đúng true, sai là false -->
                                <span class="ans_character"><span>D</span></span>
                                <span class="ans_name">often called </span>
                            </div>
                        </div>
                    </div>

                    <audio id="audio1" class="audio-element">
                        <source src="images/audio/question.mp3" type="audio/mp3">
                    </audio>
                    <audio id="audio2" class="audio-element">
                        <source src="images/audio/ans1.mp3" type="audio/mp3">
                    </audio>
                    <audio id="audio3" class="audio-element">
                        <source src="images/audio/ans2.mp3" type="audio/mp3">
                    </audio>
                </li>
                <li class="type-1 type" data-type="1">
                    <!-- Loại 1-->
                    <h2 class="heading-3">Trong câu sau, đâu là giới từ?</h2>
                    <div class="question audio-container" data-audio="audio1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(33, 126, 197, 1);transform: ;msFilter:;"><path d="M16 21c3.527-1.547 5.999-4.909 5.999-9S19.527 4.547 16 3v2c2.387 1.386 3.999 4.047 3.999 7S18.387 17.614 16 19v2z"></path><path d="M16 7v10c1.225-1.1 2-3.229 2-5s-.775-3.9-2-5zM4 17h2.697L14 21.868V2.132L6.697 7H4c-1.103 0-2 .897-2 2v6c0 1.103.897 2 2 2z"></path></svg>
                        <p class="name">New York City (NYC), often called simply New York, is the most populous city in the United States.</p>
                    </div>
                    <!--
                        Hiển thị số lượng đáp án "ĐÚNG" dùng để kiểm tra khi người dùng chọn thiếu số lượng đáp án
                        Loại 1: chỉ có 1 đáp án đúng, điền data-numtrue=1
                    -->
                    <div class="text-hide total_anstrue" data-numtrue="1"></div>

                    <div class="row row-flex">
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio2" data-true="true"> <!-- nếu đáp án đúng true, sai là false -->
                                <span class="ans_character"><span>A</span></span>
                                <span class="ans_name">often</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio3" data-true="false">
                                <span class="ans_character">B</span>
                                <span>the most</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio2" data-true="false"> <!-- nếu đáp án đúng true, sai là false -->
                                <span class="ans_character"><span>C</span></span>
                                <span class="ans_name">New York</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio2" data-true="false"> <!-- nếu đáp án đúng true, sai là false -->
                                <span class="ans_character"><span>D</span></span>
                                <span class="ans_name">called </span>
                            </div>
                        </div>
                    </div>

                    <audio id="audio1" class="audio-element">
                        <source src="images/audio/question.mp3" type="audio/mp3">
                    </audio>
                    <audio id="audio2" class="audio-element">
                        <source src="images/audio/ans1.mp3" type="audio/mp3">
                    </audio>
                    <audio id="audio3" class="audio-element">
                        <source src="images/audio/ans2.mp3" type="audio/mp3">
                    </audio>
                </li>
                <li class="type-2 type" data-type="2">
                    <h2 class="heading-3">
                        <p>Điền vào chỗ trống trong câu còn thiếu <a href="javascript:;" ht-trigger="c-tooltip" ht-placement="right" ht-content="Có nhiều hơn 1 câu đúng!" style="color: #ffb907; font-size: 20px;"><i class="fa fa-info-circle" aria-hidden="true"></i></a></p>
                    </h2>
                    <div class="question audio-container" data-audio="audio-ques2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(33, 126, 197, 1);transform: ;msFilter:;"><path d="M16 21c3.527-1.547 5.999-4.909 5.999-9S19.527 4.547 16 3v2c2.387 1.386 3.999 4.047 3.999 7S18.387 17.614 16 19v2z"></path><path d="M16 7v10c1.225-1.1 2-3.229 2-5s-.775-3.9-2-5zM4 17h2.697L14 21.868V2.132L6.697 7H4c-1.103 0-2 .897-2 2v6c0 1.103.897 2 2 2z"></path></svg>
                        <p class="name">Students from rural areas can (now) _____ access to learning materials online.</p>
                    </div>
                    <!-- Hiển thị số lượng đáp án "ĐÚNG" dùng để kiểm tra khi người dùng chọn thiếu số lượng đáp án -->
                    <div class="text-hide total_anstrue" data-numtrue="2"></div>
                    <div class="row row-flex">
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio-ans2_1" data-true="true"> <!-- nếu đáp án đúng true, sai là false -->
                                <span class="ans_character"><span>A</span></span>
                                <span class="ans_name">Have</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio-ans2_2" data-true="true">
                                <span class="ans_character">B</span>
                                <span>Gain</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="answer audio-container" data-audio="audio-ans2_3" data-true="false">
                                <span class="ans_character"><span>C</span></span>
                                <span class="ans_name">Take</span>
                            </div>
                        </div>
                    </div>

                    <audio id="audio-ques2" class="audio-element">
                        <source src="images/audio/ques2.mp3" type="audio/mp3">
                    </audio>
                    <audio id="audio-ans2_1" class="audio-element">
                        <source src="images/audio/ans2-1.mp3" type="audio/mp3">
                    </audio>
                    <audio id="audio-ans2_2" class="audio-element">
                        <source src="images/audio/ans2-2.mp3" type="audio/mp3">
                    </audio>
                    <audio id="audio-ans2_3" class="audio-element">
                        <source src="images/audio/ans2-3.mp3" type="audio/mp3">
                    </audio>
                </li>
                <li class="type-3 type" data-type="3">
                    <!-- Loại 3 -->
                     <h2 class="heading-3">Sắp xếp từ để được 1 câu hoàn chỉnh</h2>
                     <div class="s-writing-content">
                        <div class="tab-question active_panel" id="question-1">
                            <div class="s-sentence">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" style="fill: rgba(16, 112, 184, 1);transform: ;msFilter:;"><path d="M20 8H8l1.212-3.03a2 2 0 0 0-1.225-2.641l-.34-.113a.998.998 0 0 0-1.084.309L2.231 7.722a1.001 1.001 0 0 0-.231.64V19a2 2 0 0 0 2 2h7.21a2 2 0 0 0 1.987-1.779L14 12h6a2 2 0 0 0 0-4z"></path></svg>
                                <span>Việc học đại học sẽ trang bị cho học sinh nhiều kiến thức hơn.</span>
                            </div>
                            <div class="s-fill">
                                <ul>

                                </ul>
                            </div>
                            <div class="s-part ht-mrt30">
                                <ul>
                                    <li>Entering</li>
                                    <li>equip </li>
                                    <li>can </li>
                                    <li>higher </li>
                                    <li>Joining </li>
                                    <li>with </li>
                                    <li>students </li>
                                    <li>education </li>
                                    <li>more </li>
                                    <li>knowledge </li>
                                    <li>greater </li>
                                    <li>by </li>
                                </ul>
                            </div>
                            <div class="s-fill-answer hidden">
                                <h4><i class="fa fa-check" aria-hidden="true"></i> The correct answer</h4>
                                <span>Entering higher education can equip students with more knowledge. </span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="type-4 type" data-type="4">
                    <h2 class="heading-3">Điền vào các chỗ trống còn thiếu?</h2>
                    <div class="question-number bg__question-number__white">
                        <div class="s-pharse">
                            <div class="ht-mrb15">
                                <span>
                                    <span>The government must force people to obey the law</span>
                                </span>
                                <div id="answer_read_1" class="c-select c-form-border question-tich-chon">
                                    <div class="c_input text--icon" ht-trigger="c-select"></div>
                                    <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    <div class="c_list" data-da="to">
                                        <div class="c-radio">
                                            <label><input value="beging vioted" type="radio" name="dap_an_chon_0"><span>beging vioted</span></label>
                                        </div>
                                        <div class="c-radio">
                                            <label><input value="harm" type="radio" name="dap_an_chon_0"><span>harm</span></label>
                                        </div>
                                        <div class="c-radio">
                                            <label><input value="to" type="radio" name="dap_an_chon_0"><span>to</span></label>
                                        </div>
                                    </div>
                                </div>
                                <span>
                                    <span>protect them from  </span>
                                </span>
                                <div id="answer_read_2" class="c-select c-form-border question-tich-chon">
                                    <div class="c_input text--icon" ht-trigger="c-select"></div>
                                    <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    <div class="c_list" data-da="harm">
                                        <div class="c-radio">
                                            <label><input value="beging vioted" type="radio" name="dap_an_chon_0"><span>beging vioted</span></label>
                                        </div>
                                        <div class="c-radio">
                                            <label><input value="harm" type="radio" name="dap_an_chon_0"><span>harm</span></label>
                                        </div>
                                        <div class="c-radio">
                                            <label><input value="to" type="radio" name="dap_an_chon_0"><span>to</span></label>
                                        </div>
                                    </div>
                                </div>
                                <span>
                                    <span>and prevent individuals' rights from  </span>
                                </span>
                                <div id="answer_read_3" class="c-select c-form-border question-tich-chon">
                                    <div class="c_input text--icon" ht-trigger="c-select"></div>
                                    <span class="c-icons"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    <div class="c_list" data-da="beging vioted">
                                        <div class="c-radio">
                                            <label><input value="beging vioted" type="radio" name="dap_an_chon_0"><span>beging vioted</span></label>
                                        </div>
                                        <div class="c-radio">
                                            <label><input value="harm" type="radio" name="dap_an_chon_0"><span>harm</span></label>
                                        </div>
                                        <div class="c-radio">
                                            <label><input value="to" type="radio" name="dap_an_chon_0"><span>to</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="type-5 type">
                    <h2 class="heading-3">Các bạn nối các cụm sau đây với collocation phù hợp của chúng nhé</h2>
                    <div id="order_4" class="question-number bg__question-number__white check_stt2" style="order:2">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="item question-keo-tha" data-da="TRUE">
                                    <h3 class="text-bold">An animal is likely to live longer in a zoo than in the wild</h3>
                                    <div class="connection">
                                        <div class="circle-node">
                                            <div class="circle-inner-node"></div>
                                        </div>
                                        <div class="line-node"></div>
                                        <div class="circle-node">
                                            <div class="circle-inner-node"></div>
                                        </div>
                                    </div>
                                    <div class="item-answer" id="item-answer-1">
                                        <div class="ui-droppable">Your answer here: </div>
                                    </div>
                                </div>
                                <div class="item question-keo-tha" data-da="TRUE">
                                    <h3 class="text-bold">There are some species in zoos which can no longer be found in the wild.</h3>
                                    <div class="connection">
                                        <div class="circle-node">
                                            <div class="circle-inner-node"></div>
                                        </div>
                                        <div class="line-node"></div>
                                        <div class="circle-node">
                                            <div class="circle-inner-node"></div>
                                        </div>
                                    </div>
                                    <div class="item-answer" id="item-answer-2">
                                        <div class="ui-droppable">Your answer here: </div>
                                    </div>
                                </div>
                                <div class="item question-keo-tha" data-da="NOT GIVEN">
                                    <h3 class="text-bold">Improvements in the quality of TV wildlife documentaries have resulted in increased numbers of zoo visitors.</h3>
                                    <div class="connection">
                                        <div class="circle-node">
                                            <div class="circle-inner-node"></div>
                                        </div>
                                        <div class="line-node"></div>
                                        <div class="circle-node">
                                            <div class="circle-inner-node"></div>
                                        </div>
                                    </div>
                                    <div class="item-answer" id="item-answer-3">
                                        <div class="ui-droppable">Your answer here: </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-list">
                                <div class="list-answer ui-widget-content" id="draggable">
                                    <h3 class="text-bold">Kéo đáp án vào phần trả lời</h3>
                                    <ul class="ui-widget-header">
                                        <li class="list-item draggable ui-draggable ui-draggable-handle" style="background: rgb(255, 255, 255);">
                                            <div class="answer">
                                                <span>Yes, I do</span>
                                                <span><input type="hidden" id="answerID_1" name="custId" value="Yes, I do"></span>
                                            </div>
                                        </li>
                                        <li class="list-item draggable ui-draggable ui-draggable-handle" style="background: rgb(255, 255, 255);">
                                            <div class="answer">
                                                <span>No</span>
                                                <span><input type="hidden" id="answerID_2" name="custId" value="No"></span>
                                            </div>
                                        </li>
                                        <li class="list-item draggable ui-draggable ui-draggable-handle" style="background: rgb(255, 255, 255);">
                                            <div class="answer">
                                                <span>I like you</span>
                                                <span><input type="hidden" id="answerID_3" name="custId" value="I like you"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="type">
                    <p>Step 7</p>
                </li>
            </ul>
            <div class="cta" style="display: none;">
                <div class="container">
                    <div class="list-cta start">
                        <button class="prevBtn" onclick="prevStep()">Back</button>
                        <div class="">
                            <button class="checkAnsBtn" onclick="checkAns(this)">Kiểm tra</button>
                        </div>
                    </div>
                    <div class="list-cta check">
                        <div class="show_result">
                            <!-- Nếu đúng sucess sai error -->
                           <div class="show_result-info success" style="display: none;">
                                <img src="images/icons/success.png" alt="success">
                                <span>Chính xác !</span>
                           </div>
                           <div class="show_result-info error" style="display: none;">
                               <img src="images/icons/error.png" alt="error">
                                <span>Sai rồi !</span>
                           </div>
                        </div>
                        <div class="show_cta">
                            <button class="explainBtn" ht-trigger="c-modal" ht-target="#myModal">Đáp án & Giải thích</button>
                            <button class="nextBtn" onclick="nextStep()">Tiếp tục</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal" class="c-modal" ht-close="c-modal"> <!-- Thay đổi tên id -->
                <div class="c-modal-box">
                    <div class="c-modal-group" ht-skip="parent">
                        <div class="c_close text--white" ht-close="c-modal"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="c_header">Đáp án & giải thích</div>
                        <div class="c_body">
                            <h2 class="heading-4"> Câu hỏi và đáp án </h2>
                            <div class="question_modal">
                                <h3 class="ques_info">Trong câu sau, đâu là mệnh đề quan hệ?</h3>
                                <div>
                                    <img src="images/icons/success.png" alt="">
                                    <span>often called simply New York</span>
                                </div>
                            </div>
                            <h2 class="heading-4 ht-mrt15">Giải thích</h2>
                            <div class="ht-format-detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="c_footer"><button class="c-btn--sm" ht-close="c-modal">Đã hiểu</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>