@extends('layouts.topic_content')
@section('content')
<main id="main-doc" class="col-md-10 s-layout__content">
    <div>
        <br>
        <center style="color: white; background: #0F6735; width: auto; height: 50px; padding: 1px; font-family: Arial;">
            <h1>SERVER SIDE SCRIPTING</h1>
        </center>
    </div>
    <br>
    <br>
    <div id="introduction"></div>
    <section class="main-section">
        <header>
            <b>Introduction to PHP</b>
        </header>
        <br>
        <p>PHP is a open source general-purpose scripting language that is specially designed for web development and can be embedded into HTML. The term PHP is an acronym for PHP: Hypertext Preprocessor. PHP is a server-side scripting language designed specifically for web development. It is open-source which means it is free to download and use. It is very simple to learn and use. The files have the extension <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">“.php”</code>. </p>
        <br>
        <div class="demo-code">
            <code>
                <span style="color: black">
                    &lt;!DOCTYPE html&gt;<br>
                    &lt;html&gt;<br>
                    &lt;body&gt;<br>

                    &lt;?php<br>
                    echo "Greetings, Dangal ng Bayan!";<br>
                    ?><br>

                    &lt;/body&gt;<br>
                    &lt;/html&gt;<br>
                </span>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Greetings, Dangal ng Bayan!
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 1]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <p>Instead of lots of commands to output HTML, PHP pages contain HTML with embedded code. The PHP code is enclosed in special start and end processing instructions that allow you to jump into and out of "PHP mode."</p>
        <ul>
            <br>
            <li>starts with <b>?php</b></li>
            <li>ends with <b>?></b></li>
        </ul>
        <br>

        <p>It was first created in 1994 by Rasmus Lerdorf to build his personal website. It became popular later, in 1997/1998, and exploded in the 2000s when PHP 4 landed.</p>
        <br>
        <header>
            <h3>What Kind of Language is PHP?</h3>
        </header>
        <p>Programming languages are divided into groups depending on their characteristics. </p>
        <ul>
            <li>interpreted/compiled, </li>
            <br>
            <li>strongly/loosely typed, </li>
            <br>
            <li>dynamically/statically typed.</li>
            <br>
        </ul>
        <p>PHP is often called a “scripting language” and it’s an interpreted language. If you’ve used compiled languages like <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">C or C# or Go</code>, the main difference is that you don’t need to compile a PHP program before you run it.</p>
        <p>Those languages are compiled and the compiler generates an executable program that you then run. It’s a 2-steps process. The PHP interpreter is responsible for interpreting the instructions written in a PHP program when it’s executed. It’s just one step. You tell the interpreter to run the program. It's a completely different workflow.
            <br><br>
            PHP is a <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;"> dynamically typed language</code>. The types of variables are checked at runtime, rather than before the code is executed as happens for statically typed languages.
            <br><br>
            PHP is also loosely (weakly) typed. Compared to strongly typed languages like <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;"> C#, Go, C or Java</code>, you don’t need to declare the types of your variables. Being interpreted and loosely/dynamically typed will make bugs harder to find before they happen at runtime. In compiled languages, you can often catch errors at compile time, something that does not happen in interpreted languages. But on the other hand, an interpreted language has more flexibility.
            <br><br>
            PHP is written internally in <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">C</code>, a compiled and statically typed language. PHP is similar to <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">JavaScript</code>, another dynamically typed, loosely typed, and interpreted language. PHP supports object-oriented programming, and also functional programming.
        </p>
        <br>

    </section>
    <!-- section 2 -->
    <div id="features"></div>
    <section class="main-section">
        <header>
            <b>Features</b>
            <br>
        </header>
        <ul>
            <li>PHP is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. </li>
            <br>
            <li>It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.</li>
            <br>
            <li>PHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time</li>
            <br>
            <li>PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time. </li>
            <br>
            <li>PHP is forgiving: PHP language tries to be as forgiving as possible. </li>
            <br>
            <li>PHP Syntax is C-Like. </li>
            <br>
        </ul>
        <header>
            <h3>Characteristics of PHP</h3>
        </header>
        <ul>
            <li>Simplicity</li>
            <br>
            <li>Efficiency</li>
            <br>
            <li>Security</li>
            <br>
            <li>Flexibility</li>
            <br>
            <li>Familiarity</li>
        </ul>
        <p class="lead">Rasmus Lerdorf inspired the first version of PHP and participated in the later versions.</p>
    </section>
    <!-- section 3 -->
    <div id="syntax"></div>
    <section class="main-section">
        <header>
            <b>PHP Syntax Overview</b>
            <br>
        </header>
        <p>Four ways of Escaping to PHP</p>
        <br>
        <ul>
            <p><b>1. &nbsp; &nbsp;</b>Canonical PHP Tags</p>
            <ul>
                <b>
                </b><b>?php … ?></b>
            </ul>
            <br>
            <p><b>2. &nbsp; &nbsp;</b>SGML-Style Tags (Short-open)</p>
            <ul>
                <b>
                </b><b>? … ?></b>
                <p>Short tags are, as one might expect, the shortest option You must do one of two things to enable PHP to recognize the tags: </p>
                <ul>
                    <li>Choose the --enable-short-tags configuration option when you're building PHP.</li>
                    <br>
                    <li>Set the short_open_tag setting in your php.ini file to on. This option must be disabled to parse XML with PHP because the same syntax is used for XML tags. </li>
                </ul>
            </ul>
            <p><b>3. &nbsp; &nbsp;</b>ASP-style tags</p>
            <ul>
                <b><% … %></b>
                <p>ASP-style tags mimic the tags used by Active Server Pages to delineate code blocks. To use ASP-style tags, you will need to set the configuration option in your <code style="background: #F0F0F0; border-radius: 2px; padding: 3px;">php.ini</code> file.</p>
            </ul>
            <p><b>4. &nbsp; &nbsp;</b>HTML script tags</p>
            <ul>
                <b>HTML script tags look like this:</b>
                <div class="demo-code ">
                    <code>
                        <div class="code notranslate htmlHigh">
                            &lt;script language="PHP"&gt;...&lt;/script&gt;
                        </div>
                    </code>
                    <p></p>
            </ul>

        </ul>
    </section>
    <!-- section 4 -->
    <div id="comments"></div>
    <section class="main-section">
        <header>
            <b>Commenting PHP Code</b>
            <br>
        </header>
        <p>A <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">comment</code> is the portion of a program that exists only for the human reader and stripped out before displaying the programs result. There are two commenting formats in PHP: </p>
        <p><b>Single-line comments:</b> They are generally used for short explanations or notes relevant to the local code. Here are the examples of single line comments.</p>
        <div class="demo-code">
            <code>
                <div>
                    &lt;?php<br>
                    &nbsp; &nbsp; &nbsp;# This is a comment, and<br>
                    &nbsp; &nbsp; &nbsp;# This is the second line of the comment<br>
                    &nbsp; &nbsp; &nbsp;// This is a comment too. Each style comments only <br>
                    &nbsp; &nbsp; &nbsp;print "An example with single line comments";<br>
                    ?&gt;
                </div>
            </code>
        </div>
        <p><b>Multi-lines printing: </b> Here are the examples to print multiple lines in a single print statement:</p>
        <div class="demo-code">
            <code>
                <div>
                    &lt;?php<br>
                    &nbsp; &nbsp; &nbsp;#Example<br>
                    &nbsp; &nbsp; &nbsp;print&nbsp;"This spans <br>
                    &nbsp; &nbsp; &nbsp;multiple lines. The newlines will be<br>
                    &nbsp; &nbsp; &nbsp;output as well";<br>
                    ?&gt
                </div>
            </code>
        </div>

        <p><b>Multi-lines comments: </b> They are generally used to provide pseudocode algorithms and more detailed explanations when necessary. The multiline style of commenting is the same as in C. Here are the example of multi lines comments.</p>

        <div class="demo-code">
            <code>
                <div>
                    &lt;?php<br>
                    &nbsp; &nbsp; &nbsp;/* This is a comment with multiline<br>
                    Purpose: Multiline Comments Demo<br>
                    &nbsp; &nbsp; &nbsp;Subject: PHP<br>
                    &nbsp; &nbsp; &nbsp;*/<br>
                    &nbsp; &nbsp; &nbsp;print "Multi line comments example";<br>
                    ?&gt;<br>
                </div>
            </code>
        </div>

        <p class="lead"> In PHP comment should starts with the pound <code style="background: khaki; border-radius: 4px; padding: 3px;">(#)</code>, double forward-slash <code style="background: khaki; border-radius: 4px; padding: 3px;">(//)</code> or start with <code style="background: khaki; border-radius: 4px; padding: 3px;">/* </code>and end with <code style="background: khaki; border-radius: 4px; padding: 3px;">*/ .</code></p>
    </section>
    <!-- section 5 -->
    <div id="sensitive"></div>
    <section class="main-section">
        <header>
            <b>PHP is case sensitive</b>
            <br>
        </header>
        <p>Just like other languages such as C# or Java, PHP is a case sensitive language.</p>
        <p>PHP is <b>partially case-sensitive</b>. Knowing what are case sensitive and what is not is very important to avoid syntax errors.</p>
        <p>If you have a function such as <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">count</code>, you can use it as <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">COUNT</code>. It would work properly.</p>
        <p>On the other hand, variables are case-sensitive. e.g., <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$message</code> and <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$MESSAGE</code> are different variables.</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                $capital = 67;<br>
                print("Variable capital is $capital&lt;br&gt;");<br><br>
                print("Variable CaPiTaL is $CaPiTaL&lt;br&gt;");<br>
                ?&gt;
            </code>
        </div>
        Output:
        <div class="demo-code">
            <code>
                Variable capital is 67<br>
                Variable CaPiTaL is
            </code>
        </div>

        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 2]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <header>
            <b>PHP is whitespace insensitive </b>
            <br>
        </header>
        <p>The rules of PHP are lenient on whitespaces. This feature is significant in web design in achieving minimalism on the front end. It is also vital as far as coding is concerned.</p>
        <p>It includes things like spaces, carriage returns, tabs, and others which leave blanks. PHP is insensitive to spaces; whether you leave one or ten or a thousand steps, the parser ignores them. For instance, find the fault in the code below:</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                echo "Here is how to calculate in PHP"?&gt;&lt;br&gt;<br>
                &lt;?php<br>
                $enstudents =<br>
                23;<br>
                $notenstudents<br>
                = 27;<br>
                <br>

                $students = $enstudents&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$notenstudents;<br>
                echo "The number of students is ",<br>

                $students, ", there are 23 enrolled and 27 not enrolled";?&gt;

            </code>
        </div>
        Output:
        <div class="demo-code">
            <code>
                Here is how to calculate in PHP<br>
                The number of students is 50 , there are 23 enrolled and 27 not enrolled
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 3]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <header>
            <h3>Statements are expressions terminated by semicolons</h3>
        </header>
        <p>A <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">statement</code> in PHP is any expression that is followed by a semicolon <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">(;)</code>. Any sequence of valid PHP statements that is enclosed by the PHP tags is a valid PHP program. Here is a typical statement in PHP, which in this case assigns a string of characters to a variable called <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$greeting:</code></p>
        <div class="demo-code">
            <code>
                $greeting = "Dangal Greetings!!!";
            </code>
        </div>
        <p class="lead"><b>Note:</b> PHP statements is sensitive it should have an end with a <code style="background: khaki; border-radius: 4px; padding: 3px;">semicolon (;)</code>.</p>
    </section>
    <!-- section 6 -->
    <div id="variables"></div>
    <section class="main-section">
        <header>
            <h3>How Variables Work in PHP</h3>
        </header>
        <p>Variables in PHP start with the dollar sign <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$</code>, followed by an identifier, which is a set of alphanumeric chars and the underscore. You can assign a variable any type of value, like strings (defined using single or double quotes):</p>

        <div class="demo-code">
            <code>
                $name = "Juan";<br>
                $name> = 'Juan';<br>
                #or numbers<br>
                $number = 123;<br>
            </code>
        </div>
        <p class="lead">Once a variable is assigned a value, for example a string, we can reassign it a different type of value, like a number:</p>
        <div class="demo-code">
            <code>
                $name = 3;
            </code>
        </div>
        <p>PHP won’t complain that now the type is different. Variable names are case-sensitive. <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$name</code> is different from <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$Name</code>.</p>
        <p>It’s not a hard rule, but generally variable names are written in camelCase format, like this: <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$brandOfCar</code> or <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$ageOfDog</code>. We keep the first letter lowercase, and the letters of the subsequent words uppercase.</p>

        <header>
            <h3>Expressions are combinations of tokens </h3>
        </header>
        <p>Although statements cannot be combined like expressions, you can always put a sequence of statements anywhere a statement can go by enclosing them in a set of curly braces. Here both statements are equivalent:</p>
        <div class="demo-code">
            <code>
                if(3 == 3 + 1)<br>
                print("Good - I haven't totally lost my mind."&lt;br&gt;);<br>
                if(3 == 3 + 1)<br>
                {<br>
                &nbsp; &nbsp;print("Good - I haven't totally");<br>
                &nbsp; &nbsp;print("lost my mind."&lt;br&gt;);<br>
                }
            </code>
        </div>
        <header>
            <h3>Variables Types</h3>
        </header>
        <p>The main way to store information in the middle of a PHP program is by using a variable. Here are the most important things to know about variables in PHP.</p>
        <ul>
            <li>All variables in PHP are denoted with a leading dollar sign <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">($)</code>. </li>
            <br>
            <li>The value of a variable is the value of its most recent assignment.</li>
            <br>
            <li>Variables are assigned with the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">=</code> operator, with the variable on the left-hand side and the expression to be evaluated on the right. </li>
            <br>
            <li>Variables can, but do not need, to be declared before assignment</li>
            <br>
            <li>Variables in PHP do not have intrinsic types - a variable does not know in advance whether it will be used to store a number or a string of characters</li>
            <br>
            <li>Variables used before they are assigned have default values. </li>
            <br>
            <li>PHP does a good job of automatically converting types from one to another when necessary. </li>
            <br>
            <li>PHP variables are Perl-like. </li>
        </ul>
        <br>
        <header>
            <h3>Here Document </h3>
        </header>
        <p>You can assign multiple lines to a single string variable using <b>here document</b>:</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                &nbsp;&nbsp;&nbsp;$channel = &lt;&lt;&lt;_XML_<br>
                &nbsp;&nbsp;&nbsp;&lt;channel&gt;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Whats For Dinner&lt;/title&gt;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;link&gt;www.google.com&lt;/link&gt;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;description&gt;Choose what to eat tonight.&lt;/description&gt;<br>
                &nbsp;&nbsp;&nbsp;&lt;/channel&gt;<br>
                &nbsp;&nbsp;&nbsp;_XML_;
                <br>
                <br>
                &nbsp;&nbsp;&nbsp;echo<&lt;&lt;&lt;END<br>
                    &nbsp;&nbsp;&nbsp;This uses the "here document" syntax to output multiple lines with variable<br>
                    &nbsp;&nbsp;&nbsp;interpolation. Note that the here document terminator must appear on a line with <br>
                    &nbsp;&nbsp;&nbsp;just a semicolon. no extra whitespace!<br>
                    &nbsp;&nbsp;&nbsp;END;<br>
                    &nbsp;&nbsp;&nbsp;print $channel;<br>
                    ?&gt;<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                This uses the "here document" syntax to output multiple lines with variable<br>
                interpolation. Note that the here document terminator must appear on a line with<br>
                just a semicolon. no extra whitespace!
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 4]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <b>Variable Naming</b>
        <p>Rules for naming a variable is: </p>
        <ul>
            <li>Variable names must begin with a letter or underscore character. </li>
            <br>
            <li>A variable name can consist of numbers, letters, underscores but you cannot use characters like <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">+ , - , % , ( , ) . & , etc </code></li>
        </ul>
        <p class="lead">There is no size limit for variables.</p>
        <br>
        <b>PHP – Variables </b>
        <p>Scope can be defined as the range of availability a variable has to the program in which it is declared. PHP variables can be one of four scope types: </p>
        <ul>
            <li>Local variables </li>
            <ul>
                <p>A variable declared in a function is considered local; that is, it can be referenced solely in that function. Any assignment outside of that function will be considered to be an entirely different variable from the one contained in the function:</p>
            </ul>
        </ul>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                &nbsp;&nbsp;&nbsp;$x&nbsp;=&nbsp;4;<br>
                &nbsp;&nbsp;&nbsp;function&nbsp;assignx()<br>
                &nbsp;&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$x&nbsp;=&nbsp;0;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print&nbsp;"\$x inside function is $x. ";<br>
                &nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;assignx();<br>
                &nbsp;&nbsp;&nbsp;print&nbsp;"\$x outside of function is $x. ";<br>
                ?&gt;<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                $x inside function is 0. $x outside of function is 4.
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 5]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <ul>
            <li>Function parameters</li>
            <ul>
                <p>PHP Functions are covered in detail in PHP Function Chapter. In short, a function is a small unit of program which can take some input in the form of parameters and does some processing and may return a value. </p>
                <p>Function parameters are declared after the function name and inside parentheses. They are declared much like a typical variable would be:</p>
            </ul>
        </ul>
        <div class="demo-code">
            <code>
                &lt;?php</span><br>
                &nbsp;&nbsp;&nbsp;// multiply a value by 10 and return it to the caller </span><br>
                &nbsp;&nbsp;&nbsp;function&nbsp;multiply($value)<br>
                &nbsp;&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$value&nbsp;=&nbsp;$value&nbsp;*&nbsp;10;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$value;<br>
                &nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;$retval&nbsp;=&nbsp;multiply&nbsp;(10);<br>
                &nbsp;&nbsp;&nbsp;print&nbsp;"Return value is $retval\n";<br>
                ?&gt;<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Return value is 100
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 6]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <ul>
            <li>Global variables</li>
            <ul>
                <p>In contrast to local variables, a global variable can be accessed in any part of the program. However, in order to be modified, a global variable must be explicitly declared to be global in the function in which it is to be modified. This is accomplished, conveniently enough, by placing the keyword <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">GLOBAL</code> in front of the variable that should be recognized as <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">global</code>. Placing this keyword in front of an already existing variable tells PHP to use the variable having that name.</p>
            </ul>
        </ul>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                &nbsp;&nbsp;&nbsp;$somevar&nbsp;=&nbsp;15;<br>
                &nbsp;&nbsp;&nbsp;function&nbsp;addit()<br>
                &nbsp;&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GLOBAL&nbsp;$somevar;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$somevar++;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print&nbsp;"Somevar is $somevar";<br>
                &nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;addit();<br>
                ?&gt;<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Somevar is 16
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 7]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <ul>
            <li>Static Variables </li>
            <ul>
                <p>The final type of variable scoping that I discuss is known as static. In contrast to the variables declared as function parameters, which are destroyed on the function's exit, a static variable will not lose its value when the function exits and will still hold that value should the function be called again.</p>
                <p>You can declare a variable to be static simply by placing the keyword <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">STATIC</code> in front of the variable name.</p>
            </ul>
        </ul>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                &nbsp;&nbsp;&nbsp;function&nbsp;keep_track()<br>
                &nbsp;&nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STATIC&nbsp;$count&nbsp;=&nbsp;0;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$count++;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print&nbsp;$count;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print&nbsp;" ";<br>
                &nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;keep_track();<br>
                &nbsp;&nbsp;&nbsp;keep_track();<br>
                &nbsp;&nbsp;&nbsp;keep_track();<br>
                ?&gt;<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                1 2 3
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 8]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
    </section>

    <div id="datatypes"></div>
    <section class="main-section">
        <header>
            <h3>Data Types</h3>
        </header>
        <p>Data Types define the type of data a variable can store. PHP allows eight different types of data types. All of them are discussed below. There are pre-defined, user-defined, and special data types.</p>
        <p>PHP has a total of eight data types which we use to construct our variables:</p>
        <b>The predefined data types are:</b>
        <p><b>Integers. </b>They are whole numbers, without a decimal point, like 4195. They are the simplest type .they correspond to simple whole numbers, both positive and negative. Integers can be assigned to variables, or they can be used in expressions, like so:</p>
        <div class="demo-code">
            <code>
                $int_var = 12345;<br>
                $another_int = -12345 + 12345;<br>
            </code>
        </div>
        <p class="lead">Integer can be in decimal (base 10), octal (base 8), and hexadecimal (base 16) format. Decimal format is the default, octal integers are specified with a leading 0, and hexadecimals have a leading 0x. For most common platforms, the largest integer is (2**31 . 1) (or 2,147,483,647), and the smallest (most negative) integer is . (2**31 . 1) (or .2,147,483,647).</p>
        <p><b>Doubles. </b>They like 3.14159 or 49.1. By default, doubles print with the minimum number of decimal places needed. For example, the code:</p>
        <div class="demo-code">
            <code>
                $many = 2.2888800;<br>
                $many_2 = 2.2111200;<br>
                $few = $many + $many_2;<br>
                print("$many + $many_2 = $few&lt;br&gt;";<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                2.28888 + 2.21112 = 4.5
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 9]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <p><b>Boolean. </b>They have only two possible values either true or false. PHP provides a couple of constants especially for use as Booleans: TRUE and FALSE, which can be used like so:</p>
        <div class="demo-code">
            <code>
                if&nbsp;(TRUE)<br>
                print("Welcome to Pamantasan ng Cabuyao&lt;br&gt;");<br>
                else<br>
                print("Dangal Greetings!!!&lt;br&gt;");<br>

            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Welcome to Pamantasan ng Cabuyao
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 10]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <b>Interpreting other types as Booleans</b>
        <p>Here are the rules for determine the "truth" of any value not already of the Boolean type:</p>
        <ul>
            <li>If the value is a number, it is false if exactly equal to zero and true otherwise.</li>
            <br>
            <li>If the value is a string, it is false if the string is empty (has zero characters) or is the string "0", and is true otherwise. </li>
            <br>
            <li>Values of type NULL are always false. </li>
            <br>
            <li>If the value is an array, it is false if it contains no other values, and it is true otherwise. For an object, containing a value means having a member variable that has been assigned a value. </li>
            <br>
            <li>Valid resources are true (although some functions that return resources when they are successful will return FALSE when unsuccessful).</li>
            <br>
            <li>Don't use double as Booleans. </li>
            <br>
        </ul>
        <div class="demo-code">
            <code>
                $true_num = 3 + 0.14159;<br>
                $true_str = "Tried and true";<br>
                $true_array[49] = "An array element";<br>
                $false_array = array();<br>
                $false_null = NULL<;<br>
                    $false_num = 999 - 9999;<br>
                    $false_str = "";<br>
            </code>
        </div>
        <p class="lead">Each of the following variables has the truth value embedded in its name when it is used in a Boolean context.</p>
        <br>
        <p><b>Strings. </b>They are sequences of characters, like "PHP supports string operations". Following are valid examples of string: </p>
        <div class="demo-code">
            <code>
                $string_1 = "This is a string in double quotes"<br>
                $string_2 = "This is a somewhat longer, singly quoted string";<br>
                $string_39 = "This string has thirty-nine characters";<br>
                $string_0 = "";&nbsp;// a string with zero characters</span>
            </code>
        </div>
        <p>Singly quoted strings are treated almost literally, whereas doubly quoted strings replace variables with their values as well as specially interpreting certain character sequences.</p>
        <div class="demo-code">
            <code>
                $variable = "name";<br>
                $literally = 'My $variable will not print!\n';<br>
                print($literally);<br>
                $literally = "My $variable will not print!\n";<br>
                print($literally);<br>
            </code>
        </div>
        <p>There are no artificial limits on string length - within the bounds of available memory, you ought to be able to make arbitrarily long strings. Strings that are delimited by double quotes (as in "this") are preprocessed in both the following two ways by PHP: </p>
        <ul>
            <li>Certain character sequences beginning with backslash <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">(\)</code> are replaced with special characters </li>
            <br>
            <li>Variable names <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">(starting with $)</code> are replaced with string representations of their values. </li>
            <br>
        </ul>
        <p>The escape-sequence replacements are: </p>
        <ul>
            <li>\n is replaced by the newline character </li>
            <br>
            <li>\r is replaced by the carriage-return character </li>
            <br>
            <li>\t is replaced by the tab character </li>
            <br>
            <li>\$ is replaced by the dollar sign itself ($) </li>
            <br>
            <li>\" is replaced by a single double-quote (") </li>
            <br>
            <li>\\ is replaced by a single backslash (\) </li>
            <br>
        </ul>
        <b>The user-defined (compound) data types are:</b>
        <p><b>Array. </b>Is a compound data type that can store multiple values of the same data type. Below is an example of an array of integers. It combines a series of data that are related together.</p>
        <div class="demo-code">
            <code>
                $intArray = array( 10, 20, 30);<br>
                echo "First Element: $intArray[0]&lt;br&gt;";<br>
                echo "First Element: $intArray[1]&lt;br&gt;";<br>
                echo "First Element: $intArray[2]&lt;br&gt;";<br>
                <br>
                //returns data type and value<br>
                var_dump($intArray);<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                First Element: 10<br>
                Second Element: 20<br>
                Third Element: 30<br>
                <br>

                array(3) {<br>
                [0]=><br>
                int(10)<br>
                [1]=><br>
                int(20)<br>
                [2]=><br>
                int(30)<br>
                }
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 11]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <p><b>Objects. </b>are defined as instances of user-defined classes that can hold both values and functions and information for data processing specific to the class. This is an advanced topic and will be discussed in detail in further articles. When the objects are created, they inherit all the properties and behaviours from the class, having different values for all the properties.</p>
        <p>Objects are explicitly declared and created from the new keyword.</p>
        <div class="demo-code">
            <code>
                class MyClass<br>
                {<br>
                &nbsp;&nbsp;&nbsp;public&nbsp;$name&nbsp;=&nbsp;"John";<br>
                }<br>
                <br>
                $obj&nbsp;=&nbsp;new&nbsp;MyClass();<br>
                ech "The name is ". $obj->name;<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                The name is John
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 12]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <b>The special data types are:</b>
        <p><b>NULL:</b> These are special types of variables that can hold only one value i.e., NULL. We follow the convention of writing it in capital form, but it’s case-sensitive. If a variable is created without a value or no value, it is automatically assigned a value of NULL. It is written in capital letters.
        </p>
        <div class="demo-code">
            <code>
                $nm = NULL;<br>
                echo $nm; // this will return no output<br>
                // return data type<br>
                var_dump($nm);
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                NULL
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 13]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <p><b>Resources:</b> Resources in PHP are not an exact data type. These are basically used to store references to some function call or to external PHP resources. For example, consider a database call. This is an external resource. Resource variables hold special handles for files and database connections.
            We will discuss resources in detail in further articles</p>
        <p class="lead">To check the type and value of an expression, use the <code style="background: khaki; border-radius: 4px; padding: 3px;">var_dump()</code> function which dumps information about a variable. <br>PHP allows the developer to cast the data type.</p>
    </section>

    <div id="constants"></div>
    <section class="main-section">
        <header>
            <h3>Constants</h3>
        </header>
        <p>A constant is a name or an identifier for a simple value. A constant value cannot change during the execution of the script. By default, a constant is case-sensitive. By convention, constant identifiers are always uppercase. A constant name starts with a <b>letter</b> or <b>underscore</b>, followed by any <b>number of letters, numbers, or underscores</b>. If you have defined a constant, it can never be changed or undefined. </p>
        <p>To define a constant you have to use <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">define()</code> function and to retrieve the value of a constant, you have to simply specifying its name. Unlike with variables, you do not need to have a constant with a <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$</code>. You can also use the function <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">constant()</code> to read a constant's value if you wish to obtain the constant's name dynamically.</p>
        <b>constant() function </b>
        <p>As indicated by the name, this function will return the value of the constant. This is useful when you want to retrieve value of a constant, but you do not know its <b>name, i.e.</b>, it is stored in a variable or returned by a function. </p>
        <br>
        <div class="demo-code">
            <code>
                define("MINSIZE", 50);<br>
                echo MINSIZE; <br>
                echo constant("MINSIZE"); // same thing as the previous line

            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                5050
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 14]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <p class="lead">Only scalar data <code style="background: khaki; border-radius: 4px; padding: 3px;">(boolean, integer, float and string)</code> can be contained in constants.</p>
        <b>Differences between constants and variables are:</b>
        <ul>
            <li>There is no need to write a dollar sign <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">($)</code> before a constant, whereas in Variable one has to write a dollar sign. </li>
            <br>
            <li>Constants cannot be defined by simple assignment, they may only be defined using the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">define()</code> function.</li>
            <br>
            <li>Constants may be defined and accessed anywhere without regard to variable scoping rules.</li>
            <br>
            <li>Once the Constant have been set, may not be redefined or undefined.</li>
            <br>
        </ul>
        <br>
        <b>PHP Magic constants </b>
        <p>PHP provides a large number of predefined constants to any script which it runs. There are five magical constants that change depending on where they are used. These special constants are case-insensitive and are as follows: </p>
        <br>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                background-color: #eee;
                font-weight: bold;
            }

            th,
            td {
                border: 1px solid #DADADA;
                line-height: 1.5;
                padding: 0.75em;
                text-align: left;
            }

            /* Stack rows vertically on small screens */
            @media (max-width: 30em) {

                /* Hide column labels */
                thead tr {
                    position: absolute;
                    top: -9999em;
                    left: -9999em;
                }

                tr {
                    border: 1px solid #DADADA;
                    border-bottom: 0;
                }

                /* Leave a space between table rows */
                tr+tr {
                    margin-top: 1.5em;
                }

                /* Get table cells to act like rows */
                tr,
                td {
                    display: block;
                }

                td {
                    border: none;
                    border-bottom: 1px solid #DADADA;
                    /* Leave a space for data labels */
                    padding-left: 50%;
                }

                /* Add data labels */
                td:before {
                    content: attr(data-label);
                    display: inline-block;
                    font-weight: bold;
                    line-height: 1.5;
                    margin-left: -100%;
                    width: 100%;
                }
            }

            /* Stack labels vertically on smaller screens */
            @media (max-width: 20em) {
                td {
                    padding-left: 0.75em;
                }

                td:before {
                    display: block;
                    margin-bottom: 0.75em;
                    margin-left: 0;
                }
            }
        </style>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="First Name">_LINE_</td>
                    <td data-label="Last Name">The current line number of the file.</td>
                </tr>
                <tr>
                    <td data-label="First Name">_FILE_</td>
                    <td data-label="Last Name">The full path and filename of the file. If it used inside an include, the name of the included file is returned. Since <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">PHP 4.0.2, _FILE_</code> always contains an absolute path whereas in older versions it obtained relative path under some circumstances.</td>
                </tr>
                <tr>
                    <td data-label="First Name">_FUNCTION_</td>
                    <td data-label="Last Name">The function name. <b>(Added in PHP 4.3.0)</b> As of PHP 5 this constant returns the <span style="text-decoration: underline;">function name</span> as it was declared <b>(case-sensitive)</b>. In PHP 4 its value is always lowercased. </td>
                </tr>
                <tr>
                    <td data-label="First Name">_CLASS_</td>
                    <td data-label="Last Name">The class name. <b>(Added in PHP 4.3.0)</b> As of PHP 5 this constant returns the <span style="text-decoration: underline;">class name</span> as it was declared <b>(case-sensitive)</b>. In PHP 4 its value is always lowercased. </td>
                </tr>
                <tr>
                    <td data-label="First Name">_METHOD_</td>
                    <td data-label="Last Name">The class method name. <b>(Added in PHP 5.0.0)</b> The method name is returned as it was declared <b>(case-sensitive)</b>. </td>
                </tr>
            </tbody>
        </table>

    </section>

    <div id="operators"></div>
    <section class="main-section">
        <header>
            <h3>Operator Types</h3>
        </header>
        <p><b>What is Operator?</b> Once you have a few variables you can make operations with them. Simple answer can be given using <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">expression 4 + 5 is equal to 9</code>. Here 4 and 5 are called operands <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">and +</code> is called operator. PHP language supports following type of operators.
        </p>
        <ul>
            <li>Assignment Operators</li>
            <br>
            <li>Conditional/Ternary Operators</li>
            <br>
            <li>Arithmetic Operators</li>
            <br>
            <li>Comparison Operators</li>
            <br>
            <li>Logical/Rational Operators</li>
        </ul>

        <b>Assignment Operators</b>
        <p>The basic assignment operator is <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">"="</code>. The left operand gets set to the value of the expression on the right.</p>
        <p>Syntax:</p>
        <div class="demo-code">
            <code>
                (Condition) ? (Statement1) : (Statement2)
            </code>
        </div>
        <ul>
            <li><b>Condition:</b> It is the expression to be evaluated which returns a boolean value.</li>
            <br>
            <li><b>Statement 1:</b> it is the statement to be executed if the condition results in a true state.</li>
            <br>
            <li><b>Statement 2:</b> It is the statement to be executed if the condition results in a false state.</li>
        </ul>
        <div class="demo-code">
            <code>
                $a = ($b = 4) + 5; // $a is equal to 9 now, and $b has been set to 4
            </code>
        </div>
        <br>
        <b>Ternary Operator</b>
        <p>Ternary operator is a conditional operator that decreases the length of code while performing comparisons and conditionals.</p>
        <b>Arithmetic Operator</b>
        <p>The following arithmetic operators are supported by PHP language: Assume variable A holds 10 and variable B holds 20</p>
        <table>
            <thead>
                <tr>
                    <th>Operator</th>
                    <th>Description</th>
                    <th>Example</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>+</td>
                    <td>Adds two operands</td>
                    <td>A + B will give 30</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>Subtracts second operand from the first</td>
                    <td>A – B will give -10</td>
                </tr>
                <tr>
                    <td>*</td>
                    <td>Multiply both operands</td>
                    <td>A * B will give 200 </td>
                </tr>
                <tr>
                    <td>/</td>
                    <td>Divide the numerator by denominator </td>
                    <td>B / A will give 2 </td>
                </tr>
                <tr>
                    <td>%</td>
                    <td>Modulus Operator and remainder of after an integer division</td>
                    <td>B % A will give 0</td>
                </tr>
                <tr>
                    <td>++</td>
                    <td>Increment operator, increases integer value by one </td>
                    <td>A++ will give 11</td>
                </tr>
                <tr>
                    <td>--</td>
                    <td>Decrement operator, decreases integer value by one </td>
                    <td>A—will give 9</td>
                </tr>
            </tbody>
        </table>
        <br>
        <b>Comparison Operators</b>
        <p>Comparison operators, as their name implies, allow you to compare two values.</p>
        <table>
            <thead>
                <tr>
                    <th>Example</th>
                    <th>Name</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$a==$b</td>
                    <td>Equal</td>
                    <td><b>true</b> if $a is equal to $b after type juggling.</td>
                </tr>
                <tr>
                    <td>$a===$b</td>
                    <td>Identical</td>
                    <td><b>true</b> if $a is equal to $b, and they are of the same type. </td>
                </tr>
                <tr>
                    <td>$a!=$b</td>
                    <td>Not Equal</td>
                    <td><b>true</b> if $a is not equal to $b after type juggling. </td>
                </tr>
                <tr>
                    <td>$a&lt;&gt;$b</td>
                    <td>Not Equal</td>
                    <td><b>true</b> if $a is not equal to $b after type juggling. </td>
                </tr>
                <tr>
                    <td>$a!==$b</td>
                    <td>Not Identical</td>
                    <td><b>true</b> if $a is not equal to $b, or they are not of the same type. </td>
                </tr>
                <tr>
                    <td>$a < $b</td>
                    <td>Less than</td>
                    <td><b>true</b> if $a is strictly less than $b. </td>
                </tr>
                <tr>
                    <td>$a > $b</td>
                    <td>Greater than</td>
                    <td><b>true</b> if $a is strictly greater than $b. </td>
                </tr>
                <tr>
                    <td>$a <= $b</td>
                    <td>Less than or equal to</td>
                    <td><b>true</b> if $a is less than or equal to $b.</td>
                </tr>
                <tr>
                    <td>$a >= $b</td>
                    <td>Greater than or equal</td>
                    <td><b>true</b> if $a is greater than or equal to $b.</td>
                </tr>
                <tr>
                    <td>$a <=> $b</td>
                    <td>Spaceship</td>
                    <td>An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively.</td>
                </tr>

            </tbody>
        </table>
        <br>
        <b>Logical Operators</b>
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Example</th>
                    <th>Name</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$a xor $b</td>
                    <td>Xor</td>
                    <td><b>true</b> if either $a or $b is <b>true</b>, but not both.</td>
                </tr>
                <tr>
                    <td>! $a</td>
                    <td>Not</td>
                    <td><b>true</b> if $a is not <b>true</b>.</td>
                </tr>
                <tr>
                    <td>$a && $b</td>
                    <td>And</td>
                    <td><b>true</b> if both $a and $b are<b>true</b>.</td>
                </tr>
                <tr>
                    <td>$a || $b</td>
                    <td>Or</td>
                    <td><b>true</b> if either $a and $b are<b>true</b>.</td>
                </tr>

            </tbody>
        </table>
    </section>

    <div id="statements"></div>
    <section class="main-section">
        <header>
            <h3>Control Structures</h3>
        </header>
        <br>
        <b>PHP Conditional Statements</b>
        <p>Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.</p>
        <p>In PHP we have the following conditional statements:</p>
        <br>
        <ul>
            <li>if statement - executes some code if one condition is true</li>
            <li>if...else statement- executes some code if a condition is true and another code if that condition is false</li>
            <li>if...elseif...else statement - executes different codes for more than two conditions</li>
            <li>switch statement - selects one of many blocks of code to be executed</li>
        </ul>
        <br>
        <b>The PHP switch Statement</b>
        <p>Use the switch statement to select one of many blocks of code to be executed.</p>
        <p>Syntax:</p>
        <div class="demo-code">
            <code>
                switch (n) {<br>
                case label1:<br>
                code to be executed if n=label1;<br>
                break;<br>
                case label2:<br>
                code to be executed if n=label2;<br>
                break;<br>
                case label3:<br>
                code to be executed if n=label3;<br>
                break;<br>
                ...<br>
                default:<br>
                code to be executed if n is different from all labels;<br>
                }

            </code>
        </div>
        <br>
        Sample:
        <div class="demo-code">
            <code>
                $today = date("D");<br>
                switch($today)<br>
                {<br>
                &nbsp;&nbsp;&nbsp;case "Mon":<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Today is Monday. Clean your house.";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                &nbsp;&nbsp;&nbsp;case "Tue":<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Today is Tuesday. Buy some food.";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                &nbsp;&nbsp;&nbsp;case "Wed":<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Today is Wednesday. Visit a doctor.";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                &nbsp;&nbsp;&nbsp;case "Thu":<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Today is Thursday. Repair your car.";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                &nbsp;&nbsp;&nbsp;case "Fri":<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Today is Friday. Party tonight.";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                &nbsp;&nbsp;&nbsp;case "Sat":<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Today is Saturday. Its movie time.";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                &nbsp;&nbsp;&nbsp;case "Sun":<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Today is Sunday. Do some rest.";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                &nbsp;&nbsp;&nbsp;default:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "No information available for that day.";<br>
                &nbsp;&nbsp;&nbsp;&nbsp;break;<br>
                }
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Today is Wednesday. Visit a doctor.
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 15]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>


    </section>

    <div id="loops"></div>
    <section class="main-section">
        <header>
            <h3>PHP Loops</h3>
        </header>
        <br>
        <p>Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.</p>
        <p>Loops are used to execute the same block of code again and again, as long as a certain condition is true.</p>
        <p>In PHP, we have the following loop types:</p>
        <ul>
            <li>while - loops through a block of code as long as the specified condition is true</li>
        </ul>
        <div class="demo-code">
            <code>
                $i=1;<br>
                while($i<=5)<br>
                    {<br>
                    echo "The number is " . $i . &lt;br&gt;";<br>

                    $i++;<br>
                    }

            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                The number is 1<br>
                The number is 2<br>
                The number is 3<br>
                The number is 4<br>
                The number is 5<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 16]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <ul>
            <li>do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true</li>
        </ul>
        <div class="demo-code">
            <code>
                $x1=1;<br>
                do {<br>
                echo "Increment Number : $x1 &lt;br /&gt;";<br>
                $x1=$x1+1;<br>
                }while ($x1<=5)<br>

            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Increment Number : 1<br>
                Increment Number : 2<br>
                Increment Number : 3<br>
                Increment Number : 4<br>
                Increment Number : 5<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 17]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <ul>
            <li>for - loops through a block of code a specified number of times</li>
        </ul>
        <div class="demo-code">
            <code>
                for($n=1;$n<=10;$n++){<br>
                    echo "$n&lt;br/&gt;";><br>
                    }

            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                1<br>
                2<br>
                3<br>
                4<br>
                5<br>
                6<br>
                7<br>
                8<br>
                9<br>
                10<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 18]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <ul>
            <li>foreach - loops through a block of code for each element in an array</li>
        </ul>
        <div class="demo-code">
            <code>
                $season=array("summer","winter","spring","autumn"); <br>
                foreach( $season as $arr ){ <br>
                echo "Season is: $arr&lt;br /&gt;"; <br>
                } <br>

            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Season is: summer<br>
                Season is: winter<br>
                Season is: spring<br>
                Season is: autumn<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 1, 'exercise' => 19]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
    </section>

    <section>
        <header>
            <h3>QUIZ TIME And a Quick Survey</h3>
        </header>
        <br>

        <center>
            <p>You should test your knowledge based on the quiz provided</p>
            <p>This will not take any longer and no time limit it's your chance to remember what you study.</p>
            <a href="{{ route('quiz', ['topic' => 1]) }}" target="_blank">
                <button class="run-buttons">take this quiz</button>
            </a>
        </center>

    </section>




    <!-- reference !-->
    <br>
    <br>
    <br>
    <div class="demo-code" style="color: black;">
        <p>REFERENCES:</p>
        <div>
            <p><b>[1]</b> Prof. C. Joseph(2022). Introductin to PHP | Server Side Scripting from Itew3 Subject, PHP module for 3rd year college students.</p>
            <p><b>[2]</b> Tutorials Point(2023). Learn PHP from https://www.tutorialspoint.com/php/index.htm & https://www.tutorialspoint.com/php/php_variable_types.htm</p>
            <p><b>[3]</b> PHP Tutorial from https://www.w3schools.com/php/default.asp</p>
            <p><b>[4]</b> GeeksforGeeks(2023). Data Types from https://www.geeksforgeeks.org/php-data-types/</p>

        </div>

    </div>
</main>
@endsection