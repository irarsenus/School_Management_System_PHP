<?php  
include 'include/connect.php';
if (isset($_GET['exercise'])) {
    $id = $_GET['exercise'];

    $select = mysqli_query($con, "SELECT * FROM exercises WHERE exerciseId='{$id}'");
    $data = mysqli_fetch_assoc($select);
    $subject = $data['subject'];
    $teacher = $data['teacher'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESMMS | Exercise</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" href="images/favicon.png">
</head>
<body>
    <!-- start Exercise button -->
    <div class="start_btn"><button>Start Exercise</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Exercise</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Exercise while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Exercise</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Exercise Box -->
    <div class="quiz_box">
        <header>
            <div class="title"><?php echo $subject ?> EXERCISES</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Exercise Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Exercise!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <form method="GET" action="exercise_marks_process.php">
                <input type="hidden" id="marks" name="marks">
                <input type="hidden" id="marks" name="exercise" value="<?php echo $id ?>">
                <button class="restart" type="submit">Submit Marks</button>
                <button class="quit" hidden>Quit Exercise</button>
            </form>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="questions/<?php echo $id; ?>.js"></script>
    <!-- Inside this JavaScript file I've coded all Exercise Codes -->
    <script src="js/script.js"></script>

</body>
</html>
    <?php } ?>
    