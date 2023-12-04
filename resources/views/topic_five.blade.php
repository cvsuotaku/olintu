@extends('layouts.topic_content')
@section('content')
<main id="main-doc" class="col-md-10 s-layout__content">
    <div>
        <center style="color: white; background: #0F6735; width: auto; height: 50px; padding: 1px; font-family: Arial;">
            <h1>SERVER SIDE SCRIPTING</h1>
        </center>
    </div>
    <div id="concepts"></div>
    <section class="main-section">
        <header>
            <h3>Web Concepts</h3>
        </header>
        <p>This session illustrates how PHP can deliver dynamic content based on factors such as browser type, randomly generated numbers, or user input. It also showcases the ability to redirect the client's browser.</p>
        <b>Identifying Browser & Platform</b>
        <p>PHP creates useful <b>environment variables</b> that can be seen in the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">phpinfo.php</code> page that was used to setup the PHP environment.</p>
        <p><code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">HTTP_USER_AGENT</code> is one of the environment variables which identifies the user’s brower and operating system.</p>
        <p><code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">getenv()</code> is a PHP function to access the value of all environment variables.</p>
        <p>Example:</p>
        <div class="demo-code">
            <code>
                function getBrowser() {<br>
                $u_agent = $_SERVER['HTTP_USER_AGENT'];<br>
                $bname = 'Unknown';<br>
                $platform = 'Unknown';<br>
                $version = "";<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Your browser: Google Chrome 115.0.0.0 on windows reports:<br>
                Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 1]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
    </section>

    <div id="forms"></div>
    <section class="main-section">
        <header>
            <h3>HTML Forms</h3>
        </header>
        <br>
        <p>HTML forms is the most important thing on dealing HTML any form element in an HTML page will automatically be available to your PHP scripts.
            <br>
            Try out following example by putting the source code in two separate files action.php and test.php.
        </p>
        <br>
        <p>Example: <br> action.php</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                if( $_POST["name"] || $_POST["age"] ) {<br>
                if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {<br>
                die ("invalid name and name should be alpha");<br>
                }<br>
                <br>
                echo "Welcome ". $_POST['name']. "&lt;br /&gt;";<br>
                echo "You are ". $_POST['age']. " years old.";<br>
                <br>
                exit();<br>
                }<br>
                ?&gt;
            </code>
        </div>
        <br>
        <p>Example: <br> test.php</p>
        <div class="demo-code">
            <code>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                &lt;form action = "action.php" method = "POST"&gt;<br>
                Name: &lt;input type = "text" name = "name" /&gt;<br>
                Age: &lt;input type = "text" name = "age" /&gt;<br>
                &lt;input type = "submit" /&gt;<br>
                &lt;/form&gt; <br>
                &lt;/body&gt;<br>
                &lt;/html&gt;<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">

            <html>

            <body>
                <form action="#" method="POST">
                    Name: <input type="text" name="name" />
                    Age: <input type="text" name="age" />
                    <input type="submit" />
                </form>
            </body>

            </html>

        </div>
        <br>
        <p class="lead">The PHP will call the action.php when you click "submit" button. The <code style="background: khaki; border-radius: 4px; padding: 3px;">method = "POST"</code> is used to post user data to the server script. There are two methods of posting data to the server script which are discussed in PHP GET & POST.</p>
        <br>
        <b>Browser Redirection</b>
        <br>
        <p>The PHP <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">header()</code> function supplies raw HTTP headers to the browser and can be used to redirect it to another location. The redirection script should be at the very top of the page to prevent any other part of the page from loading</p>
        <p>The target is specified by the Location: header as the argument to the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">header()</code> function. After calling this function the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">exit()</code> function can be used to halt parsing of rest of the code.</p>
        <p>Following example demonstrates how you can redirect a browser request to another web page. Try out this example by putting the source code in action.php and test.php script.</p>
        <br>
        <p>action.php</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                if( $_POST["location"] ) {<br>
                $location = $_POST["location"];<br>
                header( "Location:$location" );<br>
                <br>
                exit();<br>
                }
                ?&gt;

            </code>
        </div>
        <br>
        <p>test.php</p>
        <div class="demo-code">
            <code>
                &lt;html&gt;<br>
                &lt;body&gt;<br>

                &lt;p&gt;Choose a site to visit :&lt;/p&gt;<br>

                &lt;form action = "&lt;action.php&gt;" method ="POST"&gt;<br>
                &lt;select name = "location"&gt;.<br>

                &lt;option value = "http://www.tutorialspoint.com"&gt;<br>
                Tutorialspoint.com<br>
                &lt;/option&gt;<br>

                &lt;option value = "http://www.google.com"&gt;<br>
                Google Search Page
                &lt;/option&gt;<br>

                &lt;/select&gt;<br>
                &lt;input type = "submit" /&gt;<br>
                &lt;/form&gt;<br>

                &lt;/body&gt;<br>
                &lt;/html&gt;<br>

            </code>
        </div>


    </section>

    <div id="method"></div>
    <section class="main-section">
        <header>
            <h3>GET and POST Method</h3>
        </header>
        <p>There are two ways the browser client can send information to the web server.</p>
        <ul>
            <li>The GET Method</li>
            <br>
            <li>The POST Method</li>
        </ul>
        <p>Before the browser sends the information, it encodes it using a scheme called URL encoding. In this scheme, name/value pairs are joined with equal signs and different pairs are separated by the ampersand.</p>
        <div class="demo-code">
            <code>
                name1=value1&name2=value2&name3=value3
            </code>
        </div>
        <p class="lead">Spaces are removed and replaced with the <code style="background: khaki; border-radius: 4px; padding: 3px;">+</code> character and any other nonalphanumeric characters are replaced with a hexadecimal values. After the information is encoded it is sent to the server.</p>
        <br>
        <b>The GET Method</b>
        <p>The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">?</code> character.</p>
        <div class="demo-code">
            <code>
                http://www.test.com/index.htm?name1=value1&name2=value2
            </code>
        </div>
        <ul>
            <li>The GET method produces a long string that appears in your server logs, in the browser's Location: box.</li>
            <br>
            <li>The GET method is restricted to send up to 1024 characters only.</li>
            <br>
            <li>Never use GET method if you have password or other sensitive information to be sent to the server.</li>
            <br>
            <li>GET can't be used to send binary data, like images or word documents, to the server.</li>
            <br>
            <li>The data sent by GET method can be accessed using QUERY_STRING environment variable.</li>
            <br>
            <li>The PHP provides $_GET associative array to access all the sent information using GET method. </li>
        </ul>
        <p>Try out following example by putting the source code in action.php and test.php script.</p>
        <p>action.php</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                if( $_GET["name"] || $_GET["age"] ) {<br>
                echo "Welcome ". $_GET['name']. "&lt;br /&gt;";<br>
                echo "You are ". $_GET['age']. " years old."; <br>
                exit();<br>
                }<br>
                ?&gt;
            </code>
        </div>
        <br>
        <p>test.php</p>
        <div class="demo-code">
            <code>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                &lt;form action = "action.php" method = "POST"&gt;<br>
                Name: &lt;input type = "text" name = "name" /&gt;<br>
                Age: &lt;input type = "text" name = "age" /&gt;<br>
                &lt;input type = "submit" /&gt;<br>
                &lt;/form&gt; <br>
                &lt;/body&gt;<br>
                &lt;/html&gt;<br>
            </code>
        </div>
        <br>
        <b>The POST Method</b>
        <p>The POST method transfers information via HTTP headers. The information is encoded as described in case of GET method and put into a header called <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">QUERY_STRING</code>.</p>
        <ul>
            <li>The POST method does not have any restriction on data size to be sent.</li>
            <br>
            <li>The POST method can be used to send ASCII as well as binary data.</li>
            <br>
            <li>The data sent by POST method goes through HTTP header so security depends on HTTP protocol. By using Secure HTTP you can make sure that your information is secure.</li>
            <br>
            <li>The PHP provides <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$_POST</code> associative array to access all the sent information using POST method.</li>
        </ul>
        <b>The $_REQUEST variable</b>
        <p>The PHP <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$_REQUEST</code> variable contains the contents of both <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$_GET, $_POST</code>. The PHP <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$_REQUEST</code> variable can be used to get the result from form data sent with both the GET and POST methods.</p>
        <p>Try the following example:</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                if( $_REQUEST["name"] || $_REQUEST["age"] ) {<br>
                echo "Welcome ". $_REQUEST['name']. "&lt;br /&gt;";<br>
                echo "You are ". $_REQUEST['age']. " years old.";<br>
                exit();<br>
                }<br>
                ?&gt;
            </code>
        </div>
        <br>
        <p>test.php</p>
        <div class="demo-code">
            <code>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                &lt;form action = "action.php" method = "POST"&gt;<br>
                Name: &lt;input type = "text" name = "name" /&gt;<br>
                Age: &lt;input type = "text" name = "age" /&gt;<br>
                &lt;input type = "submit" /&gt;<br>
                &lt;/form&gt; <br>
                &lt;/body&gt;<br>
                &lt;/html&gt;<br>
            </code>
        </div>

    </section>

    <div id="inclusion"></div>
    <section class="main-section">
        <header>
            <h3>PHP File Inclusion</h3>
        </header>
        <p>You can include the content of a PHP file into another PHP file before the server executes it. There are two PHP functions which can be used to included one PHP file into another PHP file.</p>
        <ul>
            <li>The include() Function</li>
            <br>
            <li> The require() Function</li>
        </ul>
        <p>This is a strong point of PHP which helps in creating functions, headers, footers, or elements that can be reused on multiple pages.</p>
        <br>
        <b>The include() Function</b>
        <p>The <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">include()</code> function takes all the text in a specified file and copies it into the file that uses the include function. If there is any problem in loading a file then the <b>include() function</b> generates a warning but the script will continue execution.</p>
        <p>For example you want to create a common menu for your website. You create a file menu.php with the following content.</p>
        <div class="demo-code">
            <code>
                &lt;a href="http://www.tutorialspoint.com/index.htm"&gt;Home&lt;/a&gt; <br>
                &lt;a href="http://www.tutorialspoint.com/ebxml"&gt;ebXML&lt;/a&gt; <br>
                &lt;a href="http://www.tutorialspoint.com/ajax"&gt;AJAX&lt;/a&gt; <br>
                &lt;a href="http://www.tutorialspoint.com/perl"&gt;PERL&lt;/a&gt; &lt;br /&gt;<br>
            </code>
        </div>
        <p>Now create as many pages as you like and include this file to create header. For example now your test.php file can have following content.</p>
        <div class="demo-code">
            <code>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                &lt;?php include("menu.php"); ?&gt;<br>
                &lt;p>This is an example to show how to include PHP file!&lt;/p&gt;<br>
                &lt;/body&gt;<br>
                &lt;/html&gt;<br>
            </code>
        </div>
        <br>
        <b>The require() Function</b>
        <p>The <b>require()</b> function takes all the text in a specified file and copies it into the file that uses the include function. If there is any problem in loading a file then the require() function generates a fatal error and halt the execution of the script.
            <br>
            <br>
            So there is no difference in require() and include() except they handle error conditions. It is recommended to use the require() function instead of include(), because scripts should not continue executing if files are missing or misna med.
            <br>
            <br>
            You can try using above example with require() function and it will generate same result. But if you will
            try following two examples where file does not exist then you will get different results.
        </p>
        <div class="demo-code">
            <code>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                &lt;?php include("xxmenu.php"); ?&gt;<br>
                &lt;p>This is an example to show how to include PHP file!&lt;/p&gt;<br>
                &lt;/body&gt;<br>
                &lt;/html&gt;<br>
            </code>
        </div>
        <br>
        <p>This will produce the following result −</p>
        <div class="demo-code">
            <code>
                This is an example to show how to include PHP file!
            </code>
        </div>
        <br>
        <p>Now lets try same example with require() function.</p>
        <div class="demo-code">
            <code>
                &lt;html&gt;<br>
                &lt;body&gt;<br>
                &lt;?php require("xxmenu.php"); ?&gt;<br>
                &lt;p>This is an example to show how to include PHP file!&lt;/p&gt;<br>
                &lt;/body&gt;<br>
                &lt;/html&gt;<br>
            </code>
        </div>
        <br>
        <p class="lead">This time file execution halts and nothing is displayed.</p>
    </section>

    <div id="inputout"></div>
    <section class="main-section">
        <header>
            <h3>PHP File and I/O</h3>
        </header>
        <br>
        <b>Opening and Closing Files</b>
        <p>The PHP <b>fopen()</b> function is used to open a file. It requires two arguments stating first the file name and then mode in which to operate.
            <br>
            <br>
            If an attempt to open a file fails then fopen returns a value of false otherwise it returns a file pointerwhich is used for further reading or writing to that file.
            <br>
            <br>
            After making a changes to the opened file it is important to close it with the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fclose()</code> function. The fclose() function requires a file pointer as its argument and then returns true when the closure succeeds or false if it fails.
            <br>
            <br>
            Once a file is opened using fopen() function it can be read with a function called <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fread()</code>. This function requires two arguments. These must be the file pointer and the length of the file expressed in bytes.
            <br>
            <br>
            The files length can be found using the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">filesize()</code> function which takes the file name as its argument and returns the size of the file expressed in bytes.
            <br>
            <br>
            So here are the steps required to read a file with PHP.
        </p>
        <ul>
            <li>Open a file using <b>fopen()</b> function.</li>
            <br>
            <li>Get the file's length using <b>filesize()</b> function.</li>
            <br>
            <li>Read the file's content using <b>fread()</b> function.</li>
            <br>
            <li>Close the file with <b>fclose()</b> function.</li>
        </ul>
        <p>The following example assigns the content of a text file to a variable then displays those contents on the web page.</p>
        <div class="demo-code">
            <code>
                $filename = "olintumessage.txt";<br>
                $file = fopen( $filename, "r" );<br>
                <br>
                if( $file == false ) {<br>
                echo ( "Error in opening file" );<br>
                exit();<br>
                }<br>
                <br>
                $filesize = filesize( $filename );<br>
                $filetext = fread( $file, $filesize );<br>
                fclose( $file );<br>
                <br>
                echo ( "File size : $filesize bytes" );<br>
                echo ( "&lt;pre&gt;$filetext&lt;/pre&gt;" );<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 2]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <b>Writing a file</b>
        <p>A new file can be written or text can be appended to an existing file using the PHP <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fwrite()</code> function. This function requires two arguments specifying a file pointer and the string of data that is to be written. Optionally a third integer argument can be included to specify the length of the data to write. If the third argument is included, writing would will stop after the specified length has been reached.
            <br>
            <br>
            The following example creates a new text file then writes a short text heading inside it. After closing this file its existence is confirmed using <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">file_exist()</code> function which takes file name as an argument
        </p>
        <div class="demo-code">
            <code>
                $filename = "olintumessage.txt";<br>
                $file = fopen( $filename, "w" );<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 3]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>

    </section>


    <div id="cookies"></div>
    <section class="main-section">
        <header>
            <h3>PHP Cookies</h3>
        </header>
        <p>
            Cookies are text files stored on the client computer and they are kept of use tracking purpose. PHP transparently supports HTTP cookies.
            <br>
            <br>
            There are three steps involved in identifying returning users:
        </p>
        <ul>
            <li>Server script sends a set of cookies to the browser. For example name, age, or identification number etc.</li>
            <br>
            <li>Browser stores this information on local machine for future use.</li>
            <br>
            <li>When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.
            </li>
        </ul>
        <br>
        <b>The Anatomy of a Cookie</b>
        <p>Cookies are usually set in an HTTP header (although JavaScript can also set a cookie directly on a browser). A PHP script that sets a cookie might send headers that look something like this </p>
        <div class="demo-code">
            <code>
                HTTP/1.1 200 OK<br>
                Date: Fri, 04 Feb 2000 21:03:38 GMT<br>
                Server: Apache/1.3.9 (UNIX) PHP/4.0b3<br>
                Set-Cookie: name=xyz; expires=Friday, 04-Feb-07 22:03:38 GMT; <br>
                path=/; domain=tutorialspoint.com<br>
                Connection: close<br>
                Content-Type: text/htm<br>
            </code>
        </div>
        <p>As you can see, the <b>Set-Cookie header</b> contains a name value pair, a <b>GMT date</b>, a path and a domain. The name and value will be URL encoded. The expires field is an instruction to the browser to "forget" the cookie after the given time and date.
            <br>
            <br>
            If the browser is configured to store cookies, it will then keep this information until the expiry date. If the user points the browser at any page that matches the path and domain of the cookie, it will resend the cookie to the server.The browser's headers might look something like this
        </p>
        <br>
        <div class="demo-code">
            <code>
                GET / HTTP/1.0<br>
                Connection: Keep-Alive<br>
                User-Agent: Mozilla/4.6 (X11; I; Linux 2.2.6-15apmac ppc)<br>
                Host: zink.demon.co.uk:1126<br>
                Accept: image/gif, */*<br>
                Accept-Encoding: gzip<br>
                Accept-Language: en<br>
                Accept-Charset: iso-8859-1,*,utf-8<br>
                Cookie: name=xyz<br>
            </code>
        </div>
        <br>
        <p>A PHP script will then have access to the cookie in the environmental variables <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$_COOKIE</code> or <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$HTTP_COOKIE_VARS[]</code> which holds all cookie names and values. Above coo kie can be accessed using <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$HTTP_COOKIE_VARS["name"]</code>.</p>
        <br>
        <b>Setting Cookies with PHP</b>
        <p>PHP provided <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">setcookie()</code> function to set a cookie. This function requires upto six arguments and should be called before &lt;html&gt; tag. For each cookie this function has to be call ed separately</p>
        <div class="demo-code">
            <code>
                setcookie(name, value, expire, path, domain, security);
            </code>
        </div>
        <br>
        <p>Here is the detail of all the arguments</p>
        <ul>
            <li><b>Name</b> − This sets the name of the cookie and is stored in an environment variable called HTTP_COOKIE_VARS. This variable is used while accessing cookies.</li>
            <br>
            <li><b>Value</b> − This sets the value of the named variable and is the content that you actually want to store.</li>
            <br>
            <li><b>Expiry</b> − This specify a future time in seconds since 00:00:00 GMT on 1st Jan 1970. After this time cookie will become inaccessible. If this para meter is not set then cookie will automatically expire when the Web Browser is closed.</li>
            <br>
            <li><b>Path</b> − This specifies the directories for which the cookie is valid. A single forward slash character permits the cookie to be valid for all directories.</li>
            <br>
            <li><b>Domain</b> − This can be used to specify the domain name in very large domains and must contain at least two periods to be valid. All cookies are only valid for the host and domain which created them.</li>
            <br>
            <li><b>Security</b> − This can be set to 1 to specify that the cookie should only be sent by secure transmission using HTTPS otherwise set to 0 which mean cookie can be sent by regular HTTP.</li>
        </ul>
        <p>Following example will create two cookies name and age these cookies will be expired after one hour.</p>
        <div class="demo-code">
            <code>
                setcookie(name, value, expire, path, domain, security);
            </code>
        </div>
        <br>
        <p>Following example will create two cookies <b>name</b> and <b>age</b> these cookies will be expired after one hour.</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                setcookie("name", "John Watkin", time()+3600, "/","", 0);<br>
                setcookie("age", "36", time()+3600, "/", "", 0);<br>
                ?&gt;<br>
                &lt;html&gt;<br>
                &lt;head&gt;<br>
                &lt;title&gt;Setting Cookies with PHP&lt;/title&gt;<br>
                &lt;/head&gt;<br>
                <br>
                &lt;body&gt;<br>
                &lt;?php echo "Set Cookies"?&gt;<br>
                &lt;/body&gt;<br>
                &lt;/html&gt;<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 4]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <b>Accessing Cookies with PHP</b>
        <p>PHP provides many ways to access cookies. Simplest way is to use either <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$_COOKIE</code> or <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$HTTP_COOKIE_VARS</code> variables. Following example will access all the cookies set in above example.</p>
        <div class="demo-code">
            <code>
                echo @$_COOKIE["name"]. "&lt;br /&gt;";<br>

                /* is equivalent to */<br>
                echo @$HTTP_COOKIE_VARS["name"]. "&lt;br /&gt;";<br>
                <br>
                echo @$_COOKIE["age"] . "&lt;br /&gt;";<br>
                <br>
                /* is equivalent to */<br>
                echo @$HTTP_COOKIE_VARS["age"] . "&lt;br /&gt;";<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 5]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <p>You can use <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">isset()</code> function to check if a cookie is set or not.</p>
        <div class="demo-code">
            <code>
                if( isset($_COOKIE["name"]))<br>
                echo "Welcome " . $_COOKIE["name"] . "&lt;br /&gt;";<br>
                <br>
                else<br>
                echo "Sorry... Not recognized" . "&lt;br /&gt;";<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 6]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <b>Deleting Cookie with PHP</b>
        <p>Officially, to delete a cookie you should call <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">setcookie()</code> with the name argument only but this does not always work well, however, and should not be relied on.
            <br><br>
            It is safest to set the cookie with a date that has already expired
        </p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                setcookie( "name", "", time()- 60, "/","", 0);<br>
                setcookie( "age", "", time()- 60, "/","", 0);<br>

                ?&gt;<br>
                &lt;html&gt;<br>
                &lt;head&gt;<br>
                &lt;title&gt;Setting Cookies with PHP&lt;/title&gt;<br>
                &lt;/head&gt;<br>
                <br>
                &lt;body&gt;<br>
                &lt;?php echo "Delete Cookies"?&gt;<br>
                &lt;/body&gt;<br>
                &lt;/html&gt;<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 7]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <b>PHP Sessions</b>
        <p>An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.</p>
        <p>A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.</p>
        <p>The location of the temporary file is determined by a setting in the <b>php.ini</b> file called <b>session.save_path</b>. Before using any session variable make sure you have setup this path.</p>
        <p>When a session is started following things happen</p>
        <ul>
            <li>PHP first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers such as <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">3c7foj34c3jj973hjkop2fc937e3443</code>.</li>
            <br>
            <li>A cookie called <b>PHPSESSID</b> is automatically sent to the user's computer to store unique session identification string.</li>
            <br>
            <li>A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">sess_ie sess_3c7foj34c3jj973hjkop2fc937e3443</code>.</li>
        </ul>
        <p>When a PHP script wants to retrieve the value from a session variable, PHP automatically gets the unique session identifier string from the PHPSESSID cookie and then looks in its temporary directory for the file bearing that name and a validation can be done by comparing both values.</p>
        <p>A session ends when the user loses the browser or after leaving the site, the server will terminate the session after a predetermined period of time, commonly 30 minutes duration.</p>
        <b>Starting a PHP Session</b>
        <p>A PHP session is easily started by making a call to the <b>session_start()</b> function.This function first checks if a session is already started and if none is started then it starts one. It is recommended to put the call to <b>session_start()</b> at the beginning of the page.
        </p>
        <p>Session variables are stored in associative array called <b>$_SESSION[]</b>. These variables can be accessed during lifetime of a session.</p>
        <p>The following example starts a session then register a variable called counter that is incremented each time the page is visited during the session.</p>
        <p>Make use of <b>isset()</b> function to check if session variable is already set or not.</p>
        <p>Put this code in a <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">test.php</code> file and load this file many times to see the result</p>

        <div class="demo-code">
            <code>
                &lt;?php<br>
                session_start();<br>

                if( isset( $_SESSION['counter'] ) ) {<br>
                $_SESSION['counter'] += 1;<br>
                }else {<br>
                $_SESSION['counter'] = 1;<br>
                }<br>
                $msg = "You have visited this page ". $_SESSION['counter'];<br>
                $msg .= "in this session.";<br>


                ?&gt;<br>
                &lt;html&gt;<br>
                &lt;head&gt;<br>
                &lt;title&gt;Setting up a PHP session<&lt; /title&gt;<br>
                    &lt;/head&gt;<br>
                    <br>
                    &lt;body&gt;<br>
                    &lt;?php echo ( $msg );?&gt;<br>
                    &lt;/body&gt;<br>
                    &lt;/html&gt;<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 8]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <b>Destroying a PHP Session</b>
        <p>A PHP session can be destroyed by <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">session_destroy()</code> function. This function does not need any argument and a single call can destroy all the session variables. If you want to destroy a single session variable then you can use <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">unset()</code> function to unset a session variable.</p>
        <p>Here is the example to unset a single variable</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                unset($_SESSION['counter']);<br>
                ?&gt;<br>
            </code>
        </div>
        <br>
        <p>Here is the call which will destroy all the session variables</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                session_destroy();<br>
                ?&gt;<br>
            </code>
        </div>
        <br>
        <b>Turning on Auto Session</b>
        <p>You don't need to call <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">start_session()</code> function to start a session when a user visits your site if you can set <b>session.auto_start</b> variable to 1 in <b>php.ini</b> file.</p>
        <b>Sessions without cookies</b>
        <p>There may be a case when a user does not allow to store cookies on their machine. So there is another method to send session ID to the browser.</p>
        <p>Alternatively, you can use the constant SID which is defined if the session started. If the client did not send an appropriate session cookie, it has the form session_name=session_id. Otherwise, it expands to an empty string. Thus, you can embed it unconditionally into URLs.</p>
        <p>The following example demonstrates how to register a variable, and how to link correctly to another page using SID.</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                session_start();<br>
                <br>
                if (isset($_SESSION['counter'])) {<br>
                $_SESSION['counter'] = 1;<br>
                }else {<br>
                $_SESSION['counter']++;<br>
                }<br>
                <br>
                $msg = "You have visited this page ". $_SESSION['counter'];<br>
                $msg .= "in this session.";<br>
                <br>
                echo ( $msg );<br>
                ?&gt;<br>
                &lt;p&gt;<br>
                To continue click following link &lt;br /&gt;<br>
                <br>
                &lt;a href = "nextpage.php?&lt;?php echo htmlspecialchars(SID); ?&gt;"&gt;<br>
                &lt;/p&gt;<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 5, 'exercise' => 9]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <p class="lead">The <code style="background: khaki; border-radius: 4px; padding: 3px;">htmlspecialchars()</code> may be used when printing the SID in order to prevent XSS related attacks</p>



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