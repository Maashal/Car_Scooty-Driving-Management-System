<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tutorial.css">

    <?php

    include "../header/studentheader.php";
    ?>


</head>

<body>
    <br>
    <br>

    <div id="div1">

        <h1>Welcome <span style="color:yellow;"> <?php
                                                    if (isset($_SESSION["username"])) {
                                                        echo $_SESSION["username"];
                                                    } ?></span></h1>

    </div>

    <div id="divbody">
        <h1> <span style="padding:10px; background:black; color:white;">Basic Tutorial</span> &emsp; How to Drive a Manual Car</h1>

        <hr>
        <iframe style="width:100%; height:580px;" src="https://www.youtube.com/embed/N1RuUnLBVkM" frameborder="2" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        <br>


        <h1 id="tthead">Step by Step Written Guideline</h1>
        <p>Please Refer to Picture below to get the basic concepts of driving or watch video given above.</p>
        <hr>

        <img src="../images/tutorialpic.jpg" alt="tutoiral Pic 9 steps"><br><br>

        <ol>
            <li>Get in the car and put on your seatbelt.</li>
            <li>
                Put the key in the ignition and turn all the way until the engine starts.</li>
            <li>
                Put the clutch pedal down (this the pedal on the left).</li>
            <li>
                Move the gear stick into first gear.</li>
            <li>
                Use your right foot to press down on the accelerator gently to increase the engine’s revs very slightly.</li>
            <li>
                Slowly lift the clutch pedal using your left foot until it starts to vibrate gently.</li>
            <li>
                This vibration is known as the car’s “bite point” - this is where the clutch plates start to come together.</li>
            <li>
                Remove the handbrake and the car should start to move slowly.</li>
            <li>
                Increase the revs while slowly raising your foot off the clutch unit you are moving forward with only the use of the accelerator pedal</li>
        </ol>
        <br>

        <p id="pend"><b>Please Note:</b>
            &emsp;

            If you’re too quick lifting your foot off the clutch, or don’t give it enough revs, the car will stall: that’s where the engine cuts out and the red lights glow on the dashboard.
           . If you stall apply the brakes, turn the engine off, return the gear stick to neutral and begin the process again. </p>
    </div>


    <br>
    <br>
</body>

</html>