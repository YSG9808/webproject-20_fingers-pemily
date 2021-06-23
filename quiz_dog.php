<!DOCTYPE html>
<html lang="ko" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>DOG QUIZ</title>
        <link rel="stylesheet" type="text/css" href="./css/quiz.css">
    </head>
    <body>

    <body onload="NextQuestion(0)">
    <main>
        <div class="modal-container" id="score-modal">

            <div class="modal-content-container">

                <h1>Congratulations !</h1>

                <div class="grade-details">
                    <p>Attempts : 3</p>
                    <p>Wrong Answers : <span id="wrong-answers"></span></p>
                    <p>Right Answers : <span id="right-answers"></span></p>
                    <p>Grade : <span id="grade-percentage"></span>%</p>
                    <p ><span id="remarks"></span></p>
                </div>

                <div class="modal-button-container">
                    <button onclick="closeScoreModal()">Continue</button>
                </div>

            </div>
        </div>

        <div class="game-quiz-container">

            <div class="game-details-container">
                <h1>Score : <span id="player-score"></span> / 3</h1>
                <h1>Question : <span id="question-number"></span> / 3</h1>
            </div>

            <div class="game-question-container">
                <h1 id="display-question"></h1>
            </div>

            <div class="game-options-container">

               <div class="modal-container" id="option-modal">

                    <div class="modal-content-container">
                         <h1>Please pick an option.</h1>

                         <div class="modal-button-container">
                            <button onclick="closeOptionModal()">Continue</button>
                        </div>

                    </div>

               </div>

                <span>
                    <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                    <label for="option-one" class="option" id="option-one-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                    <label for="option-two" class="option" id="option-two-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                    <label for="option-three" class="option" id="option-three-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                    <label for="option-four" class="option" id="option-four-label"></label>
                </span>


            </div>

            <div class="next-button-container">
                <button onclick="handleNextQuestion()">Next</button>
            </div>

        </div>
    </main>
    <script src="./js/quiz_dog.js"></script>
</body>

        <!-- <?php   
            if (!empty($_POST)) {
            $ans1 = $_POST['ans1'];
            $ans2 = $_POST['ans2'];
            $ans3 = $_POST['ans3'];

            $correct = 0;
                if ($ans1 == 5) {
                    $correct++;
                } else {
                    echo "<p>1번 문제</p>
                    <ul>
                    <li>양파와 파는 매운맛이 나는 티오설페이트때문에 강아지의 빈혈과 호흡곤란을 일으킵니다.</li>
                    <li>우유의 락토스(유당) 성분을 분해하는 능력이 없어서 설사, 알레르기, 구토, 췌장염등을 유발합니다.</li>
                    <li>초콜릿에는 테오브로민과 카페인이 들어있어서 최악의 경우 심장마비로 사망할 수도 있습니다.</li>
                    <li><mark>황태는 타우린과 베타인성분이 풍부하여 강아지들의 피로회복, 간해독에 도움을 주며 단백질보충도 해 줄 수 있는 음식입니다.<BR> (사람이 먹는 황태는 염분때문에 강아지용으로 나온 황태간식을 주는 것이 좋습니다).</mark></li>
                    </ul>";
                }
                if ($ans2 == 3) {
                    $correct++;
                } else {
                    echo "<p>2번 문제</p>
                    <ul>
                    <li>국화는 접촉과 섭취 둘 다 모두 강아지에게 위험한 식물입니다. 접촉시 피부염 섭취 시 구토 및 설사의 증상이 나타납니다.</li>
                    <li>무화과의 수액이나 잎, 가지에는 강아지에게 위험한 강한 독성이 있습니다. 잎이나 가지에 접촉하면 피부염을 일으키고 섭취 시에는 구토, 과도한 침 흘림의 증상이 나타날 수 있습니다.</li>
                    <li><mark>강아지가 바질을 먹으면 항산화효과, 항암효과, 피모 및 눈과 장 건강에 도움을 줍니다.(과한 섭취를 한다면 위와 신장에 무리가 갈 수 있으므로 주의해야합니다.)</mark></li>
                    <li>강아지가 진달래를 먹으면 고혈압, 혼수상태에 빠질 수 있고 심할 경우 사망에 이를 수 있습니다.</li>
                    <li>아마릴리스는 강아지가 섭취할 경우 구토, 무기력증, 우을증상, 설사, 복통, 전신경련등의 증상이 나타납니다.</li>
                    </ul>";
                }
                if ($ans3 == 1) {
                    $correct++;
                } else {
                    echo "<p>3번 문제</p>
                    <ul>
                    <li><mark>강아지는 기분이 좋으면 꼬리를 흔드는데 꼬리 뿐만이 아니라 몸 전체를 S자로 같이 흔듭니다.</mark></li>
                    <li>강아지가 꼬리를 뻣뻣하게 천천히 흔들면 경계 중인 상태입니다.</li>
                    <li>강아지는 우울하고 스트레스를 받으면 감정을 진정시키기 위해서 발을 계속 핥습니다.</li>
                    <li>보통 혼나고 나서 하는 행동으로 무서워서 쳐다보는 것입니다.</li>
                    </ul>";
                }
                echo "<p>3문제 중 $correct 문제를 맞추셨습니다!</p>";
                $grade = ($correct / 4) * 100;
                if ($correct == 0) {
                    echo "<p>강아지에 대해 조금 더 공부해주세요</p>";
                } elseif ($correct == 1) {
                    echo "<p>강아지를 조금 알고 계시는군요!</p>";
                } elseif ($correct == 2) {
                    echo "<p>강아지를 키우시는 분이군요!</p>";
                } else {
                    echo "<p>당신은 강아지 마스터!</p>";
                }
            } else {
                echo "<p><b>강아지 상식 QUIZ !</b></p>
                <p>보기에서 맞는 번호를 입력해주세요</p>";
            }
        ?>
        <form action="quiz_dog.php" method="post">
            <p>1. 다음 중 강아지에게 위험하지 <b>않은</b> 음식은?</p>
            <ol>
            <li> 양파</li>
            <li> 파 </li>
            <li> 우유 및 유제품 </li>
            <li> 초콜릿 </li>
            <li> 황태</li>
            </ol>
            <input type="number" name="ans1">
            <p>2. 다음 중 강아지에게 위험하지 <b>않은</b> 식물은?</p>
            <ol>
            <li> 국화 </li>
            <li> 무화과 </li>
            <li> 바질</li>
            <li> 진달래 </li>
            <li> 아마릴리스</li>
            </ol>
            <input type="number" name="ans2">
            <p>3. 다음 중 강아지가 기분이 <b>좋은</b> 상태는?</p>
            <ol>
            <li> 몸 전체를 S자로 흔들며 꼬리와 몸을 같이 흔든다. </li>
            <li> 뻣뻣하게 만든 꼬리를 천천히 흔든다. </li>
            <li> 발을 계속 핥는다. </li>
            <li> 눈을 치켜뜨며 주인을 바라본다. </li>
            </ol>
            <input type="number" name="ans3">
            <p>제출 버튼을 눌러 결과를 확인하세요.</p>
            <input type="submit" value="결과 확인" id="button">
        </form> -->
    </body>
</html>