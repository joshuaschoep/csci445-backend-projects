<header>
    <h1>Hey everyone!</h1>
    <h2> &times; <q>A computer once beat me at chess, but it was no match for me at kick boxing</q> &times; </h2>
</header>
<div class="header-bottom"></div>
<nav>
    <ul>
        <li><a class="<?php if($service_file == "index") echo current?>" href="<?php echo $root?>index.php">Home</a></li>
        <li><a class="<?php if($service_file == "aboutme") echo current?>" href="<?php echo $root?>aboutme/aboutme.php">About me</a></li>
        <li><a class="<?php if($service_file == "jsmouse") echo current?>" href="<?php echo $root?>javascript/jsmouse.php">Mouse fun</a></li>
        <li><a class="<?php if($service_file == "jskeyboard") echo current?>" href="<?php echo $root?>javascript/jskeyboard.php">Keyboard fun</a></li>
        <li><a class="<?php if($service_file == "quiz") echo current?>" href="<?php echo $root?>jquery/quiz.php">Quiz</a></li>
        <li class="dropdown">
            <a href="https://www.w3schools.com/css/">CSS Tutorials</a>
            <div class="dropdown-content">
                <a href="<?php echo $root?>csstutorials/turtlecoders.html">Turtle Coders</a>
                <a href="<?php echo $root?>csstutorials/posEx.html">Position example</a>
                <a href="<?php echo $root?>csstutorials/floatExBoxes.html">The box model</a>
                <a href="<?php echo $root?>csstutorials/clearEx.html">Float and clear</a>
            </div>
        </li>
        <li class="dropdown">
            <a>PHP</a>
            <div class="dropdown-content">
                <a href="<?php echo $root?>php/form.php ">Form</a>
                <a href="<?php echo $root?>php/io.php ">PHP I/O</a>
            </div>
        </li>
        <li class="dropdown">
            <a>MySQL</a>
            <div class="dropdown-content">
                <a href="<?php echo $root?>mysql/orderform.php ">Shop</a>
                <a href="<?php echo $root?>mysql/allorders.php ">All Orders</a>
            </div>
        </li>
        <li class="dropdown">
            <a>AJAX</a>
            <div class="dropdown-content">
                <a href="<?php echo $root?>ajax/orderform.php ">Shop</a>
                <a href="<?php echo $root?>ajax/allorders.php ">All Orders</a>
            </div>
        </li>
        <li class="theme-switch-list">
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    Change theme
                    <input type="checkbox" id="checkbox">
                    <div class="slider round"></div>
                </label>
                <em>Theme</em>
                <script src="<?php echo $root?>javascript/theme.js"></script>
            </div>
        </li>
    </ul>
</nav>
