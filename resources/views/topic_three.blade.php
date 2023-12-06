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
        <a href="{{ route('ide', ['topic' => 3, 'exercise' => 1]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
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
            <a id="quiz-btn" href="{{ route('quiz', ['topic' => 3]) }}" target="_blank">
                <button class="run-buttons">take this quiz</button>
            </a>
            <a id="quiz-btn-disabled">
                <button id="quiz-inner-btn" data-popover-target="popover-default" class="run-buttons">take this quiz</button>
            </a>
            <div data-popover id="popover-default" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                    <h3 class="font-semibold text-gray-900 dark:text-white">Cannot proceed 🔒</h3>
                </div>
                <div class="px-3 py-2">
                    <p>You need to complete the previous quiz before you can take this one.</p>
                </div>
                <div data-popper-arrow></div>
            </div>
        </center>

</main>
@endsection