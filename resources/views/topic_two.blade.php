@extends('layouts.topic_content')
@section('content')
<main id="main-doc" class="col-md-10 s-layout__content">
    <div>
        <center style="color: white; background: #0F6735; width: auto; height: 50px; padding: 1px; font-family: Arial;">
            <h1>SERVER SIDE SCRIPTING</h1>
        </center>
    </div>
    <div id="install"></div>
    <section class="main-section">
        <header>
            <h3>PHP Installation</h3>
        </header>
        <p>There are many ways to install PHP on your local machine.</p>
        <p>XAMPP is freely available for all the Operating Systems. It is a package that gives you all the tools you need to get up and running.</p>
        <p>PHP is run by a HTTP Server, which is responsible for responding to HTTP requests, the ones made by the browser. When access a URL with your browser, the HTTP server responds with some HTML content.</p>
        <p>The server is typically Apache or NGINX.</p>
        <b>Why PHP?</b>
        <p>PHP stands as an open-source scripting language that serves a primary role in web development. Its availability for download and utilization comes without cost, and its file extension ".php" identifies it. The abbreviation PHP represents "PHP Hypertext Preprocessor," and it maintains compatibility with a multitude of databases, including MySQL and Oracle. Initially created by Rasmus Lerdorf in 1994, a programmer of Danish Canadian origin, PHP is instrumental across a spectrum of websites, spanning eCommerce, social platforms, and email hosting, all within the realm of open-source software.</p>
        <div class="demo-code ">
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
        <a href="{{ route('ide', ['topic' => 2, 'exercise' => 1]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
    </section>
    <br>
    <div class="demo-code" style="color: black;">
        <p>REFERENCES:</p>
        <div>
            <p><b>[1]</b> Prof. C. Joseph(2022). Introductin to PHP | Server Side Scripting from Itew3 Subject, PHP module for 3rd year college students.</p>
            <p><b>[2]</b> GeeksforGeeks(2023). How to install PHP in Windows 10 from https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/</p>
            <p><b>[3]</b> Installation of PHP XAMPP server in windows from https://www.netzole.com/how-to-download-install-php-step-by-step-guide/</p>
            <p><b>[4]</b> Jack Llyd(2022) How to Install XAMPP on Linux from https://www.wikihow.com/Install-XAMPP-on-Linux</p>

        </div>
    </div>
</main>
@endsection