@extends('layouts.topic_content')
@section('content')
<main id="main-doc" class="col-md-10 s-layout__content">
    <div>
        <center style="color: white; background: #0F6735; width: auto; height: 50px; padding: 1px; font-family: Arial;">
            <h1>SERVER SIDE SCRIPTING</h1>
        </center>
    </div>
    <div id="database"></div>
    <section class="main-section">
        <header>
            <h3>Database Connection</h3>
        </header>
        <b>Opening Database Connection</b>
        <p>PHP provides <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">mysql_connect</code> function to open a <b>database connection</b>. This function takes five parameters and returns a MySQL link identifier on success, or FALSE on failure.</p>
        <p>Syntax:</p>
        <div class="demo-code">
            <code>
                connection mysql_connect(server,user,passwd,new_ link,client_flag);
            </code>
        </div>
        <br>
        <ul>
            <li><b>server:</b> The host name running database server. If not specified then default value is <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">localhost:3306</code>.</li>
            <br>
            <li><b>User:</b> The username accessing the database. If not specified then default is the name of the user that owns the server process.</li>
            <br>
            <li><b>passwd:</b> The password of the user accessing the database. If not specified then default is an empty password.</li>
            <br>
            <li><b>new_link:</b> If a second call is made to <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">mysql_connect()</code> with the same arguments, no new connection will be established; instead, the identifier of the already opened connection will be returned</li>
            <br>
            <li><b>client_flags:</b> A combination of the following constants −</li>
            <br>
        </ul>
        <p>MYSQL_CLIENT</p>
        <ul>
            <li><b>MYSQL_CLIENT_SSL</b> − Use SSL encryption</li>
            <br>
            <li><b>MYSQL_CLIENT_COMPRESS</b> − Use compression protocol</li>
            <br>
            <li><b>MYSQL_CLIENT_IGNORE_SP ACE</b> − Allow space after function names</li>
            <br>
            <li><b>MYSQL_CLIENT_INTER ACTIVE</b> − Allow interactive timeout seconds of inactivity before closing the connection</li>
        </ul>
        <p class="lead">NOTE − You can specify server, user, passwd in <code style="background: khaki; border-radius: 4px; padding: 3px;">php.ini</code> file instead of using them again and again in your every PHP scripts. </p>
    </section>

    <div id="closing"></div>
    <section class="main-section">
        <header>
            <h3>Closing Database Connection</h3>
        </header>
        <p>Its simplest function <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">mysql_close</code> PHP provides to close a database connection. This function takes connection resource returned by mysql_connect function. It returns <b>TRUE</b> on success or <b>FALSE</b> on failure.</p>
        <b>Syntax:</b>
        <div class="demo-code">
            <code>
                bool mysql_close ( resource $link_identifier );
            </code>
        </div>
        <br>
        <p>If a resource is not specified then last open database is closed.</p>
        <p>Try out following example to open and close a database connection</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>

                $dbhost = 'localhost:3036';<br>
                $dbuser = 'guest';<br>
                $dbpass = 'guest123';<br>
                $conn = mysql_connect($dbhost, $dbuser, $dbpass);<br>
                <br>
                if(! $conn ) {<br>
                die('Could not connect: ' . mysql_error());<br>
                }<br>
                <br>
                echo 'Connected successfully';<br>
                mysql_close($conn);<br>
                ?&gt;<br>
            </code>
        </div>
    </section>

    <div id="insert"></div>
    <section class="main-section">
        <header>
            <h3>Insert Database Connection</h3>
        </header>
        <p>Data can be entered into MySQL tables by executing <b>SQL INSERT</b> statement through PHP function mysql_query.Try out following example to insert record into employee table.</p>

        <div class="demo-code">
            <code>
                &lt;?php<br>

                $dbhost = 'localhost:3036';<br>
                $dbuser = 'root';<br>
                $dbpass = 'rootpassword';<br>
                $conn = mysql_connect($dbhost, $dbuser, $dbpass);<br>
                <br>
                if(! $conn ) {<br>
                die('Could not connect: ' . mysql_error());<br>
                }<br>
                <br>
                $sql = 'INSERT INTO employee '.<br>
                '(emp_name,emp_address, emp_salary, join_date) ' .<br>
                'VALUES ( "guest", "XYZ", 2000, NOW() )';<br>
                <br>
                mysql_select_db('test_db');<br>
                $retval = mysql_query( $sql, $conn );<br>
                <br>
                if(! $retval ) {<br>
                die('Could not enter data: ' . mysql_error());<br>
                }<br>
                echo "Entered data successfully\n";<br>
                <br>
                mysql_close($conn);<br>


                ?&gt;<br>
            </code>
        </div>
        <br>
        <p>In real application, all the values will be taken using HTML form and then those values will be captured using PHP script and finally they will be inserted into MySQL tables.</p>
        <p>While doing data insert its best practice to use function <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">get_magic_quotes_gpc()</code> to check if current configuration for magic quote is set or not. If this function returns false then use function <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">addslashes()</code> to add slashes before quotes.</p>
        <p>Try out this example by putting this code into <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">add_employee.php</code>, this will take input using HTML Form and then it will create records into database.</p>

        <div class="demo-code">
            <code>
                if(! get_magic_quotes_gpc() ) {<br>
                $emp_name = addslashes ($_POST['emp_name']);<br>
                $emp_address = addslashes ($_POST['emp_address']);<br>
                }else {<br>
                $emp_name = $_POST['emp_name'];<br>
                $emp_address = $_POST['emp_address'];<br>
                }<br>
                <br>
                $emp_salary = $_POST['emp_salary'];<br>
                <br>
                $sql = "INSERT INTO employee ". "(emp_name,emp_address, emp_salary, <br>
                join_date) ". "VALUES('$emp_name','$emp_address',$emp_salary, NOW())";<br>
                <br>
                mysql_select_db('test_db');<br>
                $retval = mysql_query( $sql, $conn );<br>
                <br>
                if(! $retval ) {<br>
                die('Could not enter data: ' . mysql_error());<br>
                }<br>
                </body>

                </html>


            </code>
        </div>


    </section>

    <div id="getting"></div>
    <section class="main-section">
        <header>
            <h3>Getting Database Connection</h3>
        </header>
        <p>Data can be fetched from MySQL tables by executing <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">SQL SELECT</code> statement through PHP function <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">mysql_query</code>. You have several options to fetch data from MySQL.</p>
        <p>The most frequently used option is to use function <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">mysql_fetch_array()</code>. This function returns row as an associative array, a numeric array, or both. This function returns FALSE if there are no more rows.</p>
        <p>Try out following example to display all the records from employee table.</p>

        <div class="demo-code">
            <code>
                &lt;?php<br>
                while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {<br>
                echo "EMP ID :{$row['emp_id']} &lt;br&gt; ".<br>
                "EMP NAME : {$row['emp_name']} &lt;br&gt; ".<br>
                "EMP SALARY : {$row['emp_salary']} &lt;br&gt; ".<br>
                "--------------------------------&lt;br&gt;";<br>
                }<br>
                <br>
                echo "Fetched data successfully\n";<br>
                <br>
                mysql_close($conn);<br>
                ?&gt;<br>

            </code>
        </div>

        <p>The content of the rows are assigned to the variable $row and the values in row are then printed.</p>
        <p>In above example the constant <b>MYSQL_ASSOC</b> is used as the second argument to <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">mysql_fetch_array()</code>, so that it returns the row as an associative array. With an associative array you can access the field by using their name instead of using the index.</p>
        <p>PHP provides another function called <b>mysql_fetch_assoc()</b> which also returns the row as an associative array.</p>
        <p>Try out following example to display all the records from employee table using <b>mysql_fetch_assoc()</b> function.</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                while($row = = mysql_fetch_assoc($retval) {<br>
                echo "EMP ID :{$row['emp_id']} &lt;br&gt; ".<br>
                "EMP NAME : {$row['emp_name']} &lt;br&gt; ".<br>
                "EMP SALARY : {$row['emp_salary']} &lt;br&gt; ".<br>
                "--------------------------------&lt;br&gt;";<br>
                }<br>
                <br>
                echo "Fetched data successfully\n";<br>
                <br>
                mysql_close($conn);<br>
                ?&gt;<br>

            </code>
        </div>

        <p>You can also use the constant <b>MYSQL_NUM</b>, as the second argument to <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">mysql_fetch_array()</code>. This will cause the function to return an array with numeric index.</p>
        <p>Try out following example to display all the records from employee table using <b>MYSQL_NUM</b> argument.</p>

        <div class="demo-code">
            <code>
                &lt;?php<br>
                while($row = = mysql_fetch_array($retval, MYSQL_NUM)) {<br>
                echo "EMP ID :{$row['emp_id']} &lt;br&gt; ".<br>
                "EMP NAME : {$row['emp_name']} &lt;br&gt; ".<br>
                "EMP SALARY : {$row['emp_salary']} &lt;br&gt; ".<br>
                "--------------------------------&lt;br&gt;";<br>
                }<br>
                <br>
                echo "Fetched data successfully\n";<br>
                <br>
                mysql_close($conn);<br>
                ?&gt;<br>

            </code>
        </div>

    </section>

    <div id="releasing"></div>
    <section class="main-section">
        <header>
            <h3>Releasing Memory</h3>
        </header>
        <p>Its a good practice to release cursor memory at the end of each SELECT statement. This can be done by using PHP function <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">mysql_free_result()</code>. Below is the example to show how it has to be used.</p>
        <div class="demo-code">
            <code>
                &lt;?php<br>
                while($row = = mysql_fetch_array($retval, MYSQL_NUM)) {<br>
                echo "EMP ID :{$row['emp_id']} &lt;br&gt; ".<br>
                "EMP NAME : {$row['emp_name']} &lt;br&gt; ".<br>
                "EMP SALARY : {$row['emp_salary']} &lt;br&gt; ".<br>
                "--------------------------------&lt;br&gt;";<br>
                }<br>
                mysql_free_result($retval);<br>
                echo "Fetched data successfully\n";<br>
                <br>
                mysql_close($conn);<br>
                ?&gt;<br>

            </code>
        </div>

        <p class="lead">While fetching data you can write as complex SQL as you like. Procedure will remain same as mentioned above.</p>
    </section>

    <div id="paging"></div>
    <section class="main-section">
        <header>
            <h3>Using Paging through PHP</h3>
        </header>
        <p>Its always possible that your SQL SELECT statement query may result into thousand of records. But its is not good idea to display all the results on one page. So we can divide this result into many pages as per requirement.</p>
        <p>Paging means showing your query result in multiple pages instead of just put them all in one long page.</p>
        <p>MySQL helps to generate paging by using <b>LIMIT</b> clause which will take two arguments. First argument as OFFSET and second argument how many records should be returned from the database.</p>
        <p>Below is a simple example to fetch records using LIMIT clause to generate paging</p>
        <div class="demo-code">
            <code>
                $left_rec = $rec_count - ($page * $rec_limit);<br>
                $sql = "SELECT emp_id, emp_name, emp_salary " .<br>
                "FROM employee ".<br>
                "LIMIT $offset, $rec_limit";<br>
            </code>
        </div>
    </section>

    <div id="update"></div>
    <section class="main-section">
        <header>
            <h3>Updating Data into MySQL Database</h3>
        </header>
        <p>Data can be updated into MySQL tables by executing <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">SQL UPDATE</code> statement through PHP functio n mysql_query.</p>
        <p>Below is a simple example to update records into <b>employee table</b>. To update a record in any table it is required to locate that record by using a conditional clause. Below example uses primary key to match a record in employee table.</p>
        <div class="demo-code">
            <code>
                $sql = "UPDATE employee ". "SET emp_salary = $emp_salary ".<br>
                "WHERE emp_id = $emp_id" ;<br>
                mysql_select_db('test_db');<br>
                $retval = mysql_query( $sql, $conn );<br>
            </code>
        </div>
    </section>

    <div id="delete"></div>
    <section class="main-section">
        <header>
            <h3>Deleting Data from MySQL Database</h3>
        </header>
        <p>Data can be deleted from MySQL tables by executing SQL DELETE statement through PHP function <b>mysql_query</b>.</p>
        <p>Below is a simple example to delete records into employee table. To delete a record in any table it is required to locate that record by using a conditional clause. Below example uses primary key to match a record in employee table.</p>

        <div class="demo-code">
            <code>
                $sql = "DELETE FROM employee WHERE emp_id = $emp_id" ;<br>
                mysql_select_db('test_db');<br>
                $retval = mysql_query( $sql, $conn );<br>
            </code>
        </div>
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