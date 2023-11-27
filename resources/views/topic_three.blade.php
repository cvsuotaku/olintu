@extends('layouts.topic_content')
@section('content')
<main id="main-doc" class="col-md-10 s-layout__content">
    <div>
        <center style="color: white; background: #0F6735; width: auto; height: 50px; padding: 1px; font-family: Arial;">
            <h1>SERVER SIDE SCRIPTING</h1>
        </center>
    </div>
    <div id="commonuse"></div>
    <section class="main-section">
        <header>
            <h3>Common Uses of PHP</h3>
        </header>
        <p>PHP performs system functions, from files on a system it can create, open, read, write, and close them. The other uses of PHP are: </p>
        <ul>
            <li>PHP can handle forms, i.e. gather data from files, save data to a file, thru email you can send data, return data to the user. </li>
            <br>
            <li>You add, delete, modify elements within your database thru PHP.</li>
            <br>
            <li>Access cookies variables and set cookies. </li>
            <br>
            <li>Using PHP, you can restrict users to access some pages of your website. </li>
            <br>
            <li>It can encrypt data. </li>
        </ul>
    </section>

    <section class="main-section">
        <header>
            <h3>PHP File Create/Write/Open/Close</h3>
        </header>
        <ul>
            <li>The <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fopen()</code> function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.</li>
            <br>
            <li>The <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fwrite()</code> function is used to write to a file.</li>
            <br>
            <li>Close the file with <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fclose()</code> function.</li>
        </ul>
        <p>Example:</p>
        <div class="demo-code">
            <code>
                $myfile = fopen("olintumessage.txt", "r") or die("Unable to open file!");<br>
                echo fread($myfile,filesize("olintumessage.txt"));<br>
                fclose($myfile);<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Hello, Olintu users!
            </code>
        </div>
        <br>
        <button class="run-button" onclick="window.open('compiler/ide20')">try this code</button>
        <br>
        <p class="lead">Note: You must have an existing file in your folder so that you can open, read and close it, just like the example above where the file name is olintumessage.txt</p>
    </section>

    <section>
        <header>
            <h3>QUIZ TIME And a Quick Survey</h3>
        </header>
        <br>

        <center>
            <p>You should test your knowledge based on the quiz provided</p>
            <p>This will not take any longer and no time limit it's your chance to remember what you study.</p>
            <button class="run-buttons" onclick="window.open('quiz/introduction_to_php_quiz')">take this quiz</button>
        </center>
    </section>

</main>
@endsection