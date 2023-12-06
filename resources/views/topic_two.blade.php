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

  <div id="setup"></div>
  <section class="main-section">
    <header><b>How to set up on Windows</b></header>
    <br>
    <b>Download XAMPP in Window</b>
    <p>You can download latest stable version of XAMPP from the bitnami.com official website <a onclick="window.open('https://www.apachefriends.org/download.html')" style="color: blue; cursor: pointer; text-decoration: underline;">https://www.apachefriends.org/download.html</a></p>
    <p>Upon accessing the website, it will automatically identify your operating system and present the appropriate version for your device. For instance, if we accessed the site from a 64-bit Windows system, a downloadable 64-bit XAMPP package is provided. If your system is 32-bit Windows, Linux, or MacOS, the corresponding version will be displayed. Alternatively, various versions can be obtained from the download page at www.apachefriends.org.</p>

  </section>

  <section class="main-section">
    <header>
      <h3>In order to install PHP XAMPP on Windows you have to perform following actions:</h3>
    </header>
    <br>
    <p>To start using PHP, you should:</p>
    <ul>
      <li>Find a web host with PHP and MySQL support</li>
      <br>
      <li>Install a web server on your own PC, and then install PHP and MySQL.</li>
    </ul>
    <b> Download the XAMPP Windows Installer Package from the <a onclick="window.open('https://www.apachefriends.org/download.html')" style="color: blue; cursor: pointer; text-decoration: underline;">https://www.apachefriends.org/download.html</a></p></b>
    <p>Choose a PHP version</p>
    <center>
      <table>
        <thead>
          <tr>
            <th>Version</th>
            <th>Checksum</th>
            <th>Bit</th>
            <th>Size</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8.0.28 / PHP 8.0.28</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>144 Mb</td>
          </tr>
          <tr>
            <td>8.1.17 / PHP 8.1.17</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>148 Mb</td>
          </tr>
          <tr>
            <td>8.2.4 / PHP 8.2.4</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>149 Mb</td>
          </tr>
        </tbody>
      </table>
    </center>

    <br>
    <br>
    <b>Steps:</b>
    <ul>

      <br>
      <li>Go to <b>Downloads</b>. You'll see named "xampp-windows(version you chose)-installer"</li>
      <br>
      <li>Double click the installer package.</li>
      <br>
      <li>Wait until unpacking is done to install XAMPP after that click next.</li>
      <br>
      <li><b>To set up:</b> Click on Next button in Select components page, On the Next screen, Accept the terms in the license agreement and click on the Next button.</li>
      <br>
      <li>Installation folder in default location at C:\xampp. click Next </li>
      <br>
      <li><b>After setting Up:</b> Accept default components (Learn more about Bitnami for XAMPP) with check on it or uncheck then click next. </li>
      <br>
      <li><b>Ready to install: </b>Set up is now ready to begin installing XAMPP then when you click next. Installer will ask if you want to start control panel, you can uncheck it if you don't want to open automatically after installing it.</li>
      <br>
    </ul>
    <br>
    <b>How to verify Installation</b>
    <ul>
      <li>You can verify the installation or check the version of xampp by the following steps. And run/start Apache and MYSQL services.</li>
      <br>
      <li>Check if the server is working type localhost/phpmyadmin/ in your browser</li>
    </ul>


    <br>
    <b>Running PHP Script from Command Prompt </b>
    <br>
    <p>To run your PHP script on your command prompt. Especially for the console projects</p>
    <p>You need to make a directory path in your environmental variables</p>
    <br>
    <ul>
      <li>Click start menu and search <b>"Edit the system environment variables"</b> then <b> &gt; "Environmental Variables"</b>.</li>
      <br>
      <li>Go to <b>System Variables > Path option > add a "New" path</b> put or place your PHP xampp directory > <b>C:\xampp\php</b>. </li>
      <br>
      <li>To avoid worries just also add <b>C:\xampp\php\php.exe</b> directory to the path.</li>
      <br>
      <li>Restart your device, and open your command prompt and type "<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">php -v</code>" to check php version.</li>
      <br>

    </ul>
    <ul>
      <li>You can run your PHP script on your command prompt. Assuming you have the following content in test.php file.
      </li>
    </ul>
    <div class="demo-code">
      <code>
        &lt;?php
        echo " Dangal Greetings!!!";
        ?&gt;
      </code>
    </div>
    <ul>
      <li>To run a php in cmd, Run the script at command prompt you need to type the script below</code></li>
      <br>
    </ul>
    <div class="demo-code">
      <code>
        php test.php
      </code>
    </div>
    <br>
    <p class="lead">You should see the PHP version information printed in the terminal. If you still encounter the “php: command not found”, “php not recognize” error, try restarting your terminal or opening a new terminal window and check again.</p>
  </section>

  <section class="main-section">
    <header>
      <h3>How to set up on Linux Ubuntu</h3>
    </header>
    <p>Head over to this website to download XAMPP. You’ll notice three download options for different platforms: Windows, Linux, and OS X. Click on Linux and choose what's best option in your device.</p>
    <b> Download the XAMPP Linux Installer Package from the <a onclick="window.open('https://www.apachefriends.org/download.html')" style="color: blue; cursor: pointer; text-decoration: underline;">https://www.apachefriends.org/download.html</a></p></b>
    <p>Choose a PHP version</p>
    <center>
      <table>
        <thead>
          <tr>
            <th>Version</th>
            <th>Checksum</th>
            <th>Bit</th>
            <th>Size</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8.0.28 / PHP 8.0.28</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>151 Mb</td>
          </tr>
          <tr>
            <td>8.1.17 / PHP 8.1.17</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>153 Mb</td>
          </tr>
          <tr>
            <td>8.2.4 / PHP 8.2.4</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>150 Mb</td>
          </tr>
        </tbody>
      </table>
    </center>
    <br>
    <b>Steps:</b>
    <ul>
      <li>Once XAMPP's downloading file finishes</li>
      <br>
      <li>Open terminal or type <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">Alt + Ctrl + T</code> to open a new Terminal window.</li>
    </ul>
    <p>Move to the Downloads folder by using the following command:</p>
    <div class="demo-code">
      <code>
        $ cd /home/[username]/Downloads
      </code>
    </div>
    <br>
    Or
    <br>
    <div class="demo-code">
      <code>
        $ cd Downloads
      </code>
    </div>
    <ul>
      <li>Make sure you capitalize "Downloads".</li>
      <br>
      <li>You can run the following <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">chmod</code> command on your terminal shell to give permission. And <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">sudo</code> to install a file.</li>
      <br>
    </ul>
    <div class="demo-code">
      <code>
        $ chmod 755 xampp-linux-x64-[PHP version]-installer.run<br>
        $ sudo ./xampp-linux-x64-[PHP version]-installer.run
      </code>
    </div>
    <br>
    Or
    <br>
    <div class="demo-code">
      <code>
        $ chmod 755 xampp-linux-x64-*-installer.run<br>
        $ sudo ./xampp-linux-x64-*-installer.run
      </code>
    </div>
    <br>
    <p>While installing, in your terminal. Will ask you to select components you want to install. Enter <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">Y</code> two times if YES.</p>
    <ul>
      <li>Installation directory to /opt/lampp</li>
      <br>
      <li>Click Enter to install</li>
      <br>
      <li>Then, it will tell you "Set up is finished".</li>
    </ul>
    <br>
    <p>Or this option after typing <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">chmod</code> and <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">sudo</code> into your terminal.</p>
    <ul>
      <li>Enter your password when prompted. Type the password you used to log into your computer, if you don't have a password in your device then no need.</li>
      <br>
      <li>Xampp installer will launch</li>
      <br>
      <li>Click Next three times.</li>
      <br>
      <li><b>After setting Up:</b> Accept default components (Learn more about Bitnami for XAMPP) with check on it or uncheck then click next. </li>
      <br>
      <li><b>Ready to install: </b>Set up is now ready to begin installing XAMPP then when you click next. Installer will ask if you want to start control panel, you can uncheck it if you don't want to open automatically after installing it.</li>
      <br>
    </ul>
    <b>How to verify Installation</b>
    <ul>
      <li>You can verify the installation or check the version of xampp by the following steps. And run/start Apache and MYSQL services.</li>
      <br>
      <li>Or type:</li>
    </ul>
    <div class="demo-code">
      <code>
        php -v
      </code>
    </div>
    <br>



    <br>
    <b>Running PHP Script from Command Prompt </b>
    <br>
    <p>To run your PHP script on your command prompt. Especially for the console projects</p>
    <p>You need to make a path to your directory</p>
    <br>
    <p>If php is not recognized</p>
    <ul>
      <li>Type <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">~/</code> means the path to the beginning of a directory.</li>
      <br>
      <li>Default directory in linux. <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">/opt/lampp/</code></li>
      <br>
    </ul>
    <p>To path PHP in the direcory use export and <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">php -v</code> to check its version number</p>
    <br>
    <div class="demo-code">
      <code>
        export PATH="/opt/lampp/bin:$PATH"<br>
        php -v
      </code>
    </div>
    <br>
    <p>Then the output will like this.</p>
    <br>
    <div class="demo-code">
      <code>
        PHP 8.2.4 (cli) (built: Apr 6 2023 08:21:45) (NTS)<br>
        Copyright (c) The PHP Group<br>
        Zend Engine v4.2.4, Copyright (c) Zend Technologies<br>
      </code>
    </div>
    <br>
    <ul>
      <li>You can run your PHP script on your command prompt. Assuming you have the following content in test.php file.
      </li><br>

    </ul>
    <div class="demo-code">
      <code>
        &lt;?php
        echo " Dangal Greetings!!!";
        ?&gt;
      </code>
    </div>
    <ul>
      <li>You should be at the inside of the directory.</li><br>
      <li>To run a php in cmd, Run the script at command prompt you need to type the script below</li>
      <br>
    </ul>
    <div class="demo-code">
      <code>
        root@localhost:/opt/lampp/htdocs# php index.php
      </code>
    </div>
    <br>
    <p class="lead">You should see the PHP version information printed in the terminal. If you still encounter the “php: command not found”, “php not recognize” error, try restarting your terminal or opening a new terminal window and check again.</p>
  </section>

  <section class="main-section">
    <header>
      <h3>How to set up on OS</h3>
    </header>
    <p>Head over to this website to download XAMPP. You'll notice three download options for different platforms: Windows, Linux, and OS X. Click on Linux and choose what's best option in your device.</p>
    <b> Download the XAMPP OS Installer Package from the <a onclick="window.open('https://www.apachefriends.org/download.html')" style="color: blue; cursor: pointer; text-decoration: underline;">https://www.apachefriends.org/download.html</a></p></b>
    <p>Choose a PHP version</p>
    <center>
      <table>
        <thead>
          <tr>
            <th>Version</th>
            <th>Checksum</th>
            <th>Bit</th>
            <th>Size</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>8.0.28 / PHP 8.0.28</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>149 Mb</td>
          </tr>
          <tr>
            <td>8.1.17 / PHP 8.1.17</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>151 Mb</td>
          </tr>
          <tr>
            <td>8.2.4 / PHP 8.2.4</td>
            <td>md5 sha1</td>
            <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
            <td>149 Mb</td>
          </tr>
        </tbody>
      </table>
    </center>
    <br>
    <p class="lead">A Native installer installs MariaDB, PHP, Perl, etc. directly onto your macOS system. It supports intel (x64) or Apple M1 (arm64) CPUs.</p>
    <br>
    <b>Steps:</b>
    <ul>

      <br>
      <li>Go to <b>Downloads</b>. You'll see named "xampp-windows(version you chose)-installer.dmg" or dicrect to your browser downloads pop up notification.</li>
      <br>
      <li>Open the installer package.</li>
      <br>
      <li><b>To set up:</b> Click Next button three times.</li>
      <br>
      <li>Wait until unpacking is done to install XAMPP</li>
      <br>
      <li>Installation folder in default location at /Application/XAMPP.</li>
      <br>
      <li>Installer will ask if you want to start control panel, you can uncheck it if you don't want to open automatically after installing it.</li>
      <li>Launch <b>control panel > Manage Servers > </b>click <b>Apache Web Server & MySQL Database > </b>click <b>start</b>.</li>
      <br>
    </ul>
    <br>
    <b>How to verify Installation</b>
    <br>
    <ul>
      <li>You can verify the installation or check the version of xampp by the following steps. And run/start Apache and MYSQL services.</li>
      <br>
      <li>Check if the server is working type localhost/phpmyadmin/ in your browser</li>
      <br>
      <li>Type <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">php -v</code></li>
    </ul>
    <b>Running PHP Script from Command Prompt </b>
    <br>
    <p>To run your PHP script on your command prompt. Especially for the console projects</p>
    <p>You need to make a directory path in your device using terminal</p>
    <br>
    <ul>
      <li>Open a terminal on your macOS.</li>
      <br>
      <li>Locate the XAMPP installation directory. By default, it is installed in the “/Applications/XAMPP” directory. If you have installed it in a different location, adjust the path accordingly.</li>
      <br>
      <li>Add your PHP to PATH Environment and check the PHP version</li>
      <br>
    </ul>
    <div class="demo-code">
      <code>
        export PATH="/Applications/XAMPP/bin:$PATH"<br>
        php -v
      </code>
    </div>
    <ul>
      <li>You can run your PHP script on your command prompt. Assuming you have the following content in test.php file.
      </li>
    </ul>
    <div class="demo-code">
      <code>
        &lt;?php
        echo " Dangal Greetings!!!";
        ?&gt;
      </code>
    </div>
    <ul>
      <li>To run a php in cmd, Run the script at command prompt you need to type the script below</code></li>
      <br>
    </ul>
    <div class="demo-code">
      <code>
        php test.php
      </code>
    </div>
    <br>
    <p class="lead">You should see the PHP version information printed in the terminal. If you still encounter the “php: command not found”, “php not recognize” error, try restarting your terminal or opening a new terminal window and check again.</p>
  </section>


  <section>
    <header>
      <h3>QUIZ TIME And a Quick Survey</h3>
    </header>
    <br>

    <center>
      <p>You should test your knowledge based on the quiz provided</p>
      <p>This will not take any longer and no time limit it's your chance to remember what you study.</p>
      <a id="quiz-btn" href="{{ route('quiz', ['topic' => 2]) }}" target="_blank">
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