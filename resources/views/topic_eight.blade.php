@extends('layouts.topic_content')
@section('content')
<main id="main-doc" class="col-md-10 s-layout__content">
    <div>
        <center style="color: white; background: #0F6735; width: auto; height: 50px; padding: 1px; font-family: Arial;">
            <h1>SERVER SIDE SCRIPTING</h1>
        </center>
    </div>

    <div id="oop"></div>
    <section class="main-section">
        <header>
            <h3>Object Oriented Concepts</h3>
        </header>
        <p>In this module, we’re going to explain the Object-Oriented Programming concept in PHP with some example s. We can imagine our universe made of different objects like sun, earth, moon etc. Similarly we can imagine our car made of different objects like wheel, steering, gear etc. Same way there is object oriented program ming concepts which assume everything as an object and implement a software using different objects.</p>

        <b>The Object-Oriented Pro gramming concepts are:</b>
        <ul>
            <li>Class</li>
            <br>
            <li>Objects</li>
            <br>
            <li>Inheritance</li>
            <br>
            <li>Interface</li>
            <br>
            <li>Abstraction</li>
        </ul>
    </section>

    <div id="class"></div>
    <section class="main-section">
        <header>
            <h3>Class and Objects</h3>
        </header>
        <ul>
            <li>Class is a programmer-defined data type, which includes local methods and local variables.</li>
            <br>
            <li>Class is a collection of objects. Object has properties and attributes.</li>
        </ul>
        <p>To define class in php we must have a file whose classname should be same as filename.</p>

        <p>Example:</p>
        <div class="demo-code">
            <code>
                class Students{<br>
                public function name(){<br>
                echo "Juan Dela Cruz";<br>
                }<br>
                public function grade(){<br>
                echo "English: 2.75";<br>
                }<br>
                }<br>
                $obj = new Students();<br>
                $obj->name();<br>
                echo "&lt;br&gt;";<br>
                $obj->grade();<br>


            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Juan Dela Cruz<br>
                English: 2.75<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 8, 'exercise' => 1]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <p class="lead">To create php object we have to use a new operator. Here php object is the object of the Students Class.</p>
    </section>

    <div id="objects"></div>
    <section class="main-section">
        <header>
            <h3>Creating Objects in PHP</h3>
        </header>
        <p>When class is created, we can create any number of objects in that class. The object is created with the help of the new keyword.</p>
        <b>Calling Member Function</b>
        <p>When the object is created we can access the variables and method function of the class with the help of operator '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;"> -></code>, accessing the method is done to get the information of that method. </p>
        <p>Example:</p>
        <div class="demo-code">
            <code>
                function setPrice($param){<br>
                $this->price = $param;<br>
                }<br>
                function getPrice(){<br>
                echo $this->price ."&lt;br/&gt;";<br>
                }<br>
                function setBrand($param){<br>
                $this->brand= $param;<br>
                }<br>
                function getBrand(){<br>
                echo $this->brand." &lt;br/&gt;";<br>
                }<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                SamsungS8<br>
                Iphone7s<br>
                90000<br>
                65000<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 8, 'exercise' => 2]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
    </section>

    <div id="inheritance"></div>
    <section class="main-section">
        <header>
            <h3>Inheritance</h3>
        </header>
        <p>When the properties and the methods of the parent class are accessed by the child class, we call the concept has inheritance. The child class can inherit the parent method and give own method implementation, this property is called overridden method. When the same method of the parent class is inherited we call as inherited method</p>
        <b>Types Of Inheritance</b>
        <ul>
            <li>Single Level Inheritance</li>
            <br>
            <li>Multilevel Inheritance</li>
        </ul>
        <p><b>Single Level Inheritance:</b> In Single Level Inheritance the Parent class methods will be extended by the chil d class. All the methods can be inherited.</p>
        <p>Example:</p>
        <div class="demo-code">
            <code>
                $a = new A();<br>
                $b = new B();<br>
                $a->printItem('Raju');<br>
                $a->printPHP(); <br>
                $b->printItem('savan'); <br>
                $b->printPHP();<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Hi: Pavan<br>
                I am from valuebound<br>
                Hi: savan<br>
                I am from ABC<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 8, 'exercise' => 3]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <p><b>MultiLevel Inheritance :</b> In MultiLevel Inheritance, the parent class method will be inherited by child class and again subclass will inherit the child class method.</p>
        <p>Example:</p>
        <div class="demo-code">
            <code>
                public function myHistory() {<br>
                echo "Class A " .$this->myage();<br>
                echo "Class B ".$this-> mysonage();<br>
                echo "Class C " . $this->mygrandsonage();<br>
                }<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Class A age is 80<br>
                Class B age is 50<br>
                Class C age is 20<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 8, 'exercise' => 4]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>

    </section>

    <div id="interface"></div>
    <section class="main-section">
        <header>
            <h3>Interface</h3>
        </header>
        <ul>
            <li>An interface is a description of the actions that an object can do.</li>
            <br>
            <li>Interface is written in the same way as the class the declaration with interface keyword.</li>
        </ul>
        <br>
        <b>Rules of Interfaces:</b>
        <ul>
            <li>All methods declared in an interface must be public; this is the nature of an interface.</li>
            <br>
            <li>All methods in the interface must be implemented within a class; failure to do so will result in a fatal erro</li>
            <br>
            <li>The class implementing the interface must use the exact same method signatures as are defined in the interface</li>
            <br>
            <li>Interfaces can be extended like classes using the extends operator.</li>
        </ul>

        <p>Example:</p>
        <div class="demo-code">
            <code>
                interface A {<br>
                public function setProperty($x);<br>
                public function description();<br>
                }<br>
                class Mangoes implements A {<br>
                public function setProperty($x) {<br>
                $this->x = $x;<br>
                }<br>
                public function description() {<br>
                echo 'Describing' . $this->x . 'tree';<br>
                }<br>
                }<br>
                $Mango = new Mangoes();<br>
                $Mango->setProperty(" mango ");<br>
                $Mango->description();<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Describing mango tree
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 8, 'exercise' => 5]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <p class="lead">Interface can be extended with another interface using extends keyword.</p>
        <p>Example:</p>
        <div class="demo-code">
            <code>
                interface B extends A {<br>
                public function Divide();<br>
                }<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Quotient of 10/2 is 5<br>
                Product of 2 * 3 is 6<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 8, 'exercise' => 6]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <b>Note on Interfaces:-</b>
        <ul>
            <li>We cannot create objects to interface, but the class implementing the interface can have objects</li>
            <br>
            <li>We cannot define a variable in an interface.</li>
            <br>
            <li>If we extend interface all the methods of the interface must be implemented in the child clas s.</li>
        </ul>
    </section>

    <div id="abstract"></div>
    <section class="main-section">
        <header>
            <h3>Abstract Classes:</h3>
        </header>
        <ul>
            <li>An abstract class is a class that contains at least one abstract method. The abstract method is function declaration without anybody and it has the only name of the method and its parameters.</li>
            <br>
            <li>There can be any number of methods in the class and we have to declare the class as abstract only when there is an abstract method</li>
        </ul>

        <p>Example:</p>
        <div class="demo-code">
            <code>
                $car = new Baleno();<br>
                $car1 = new Santro();<br>
                echo $car->getCompanyName();<br>
                echo $car->getPrice();<br>
                echo $car1->getCompanyName();<br>
                echo $car1->getPrice();<br>
            </code>
        </div>
        <br>
        Output:
        <br>
        <div class="demo-code">
            <code>
                Maruthi Suzuki<br>
                720000<br>
                Hyundai<br>
                300000<br>

            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 8, 'exercise' => 7]) }}" target="_blank">
            <button class="run-button">try this code</button>
        </a>
        <br>
        <br>
        <b>Notes on Abstract classes</b>
        <ul>
            <li>Objects cannot be created for the abstract classes.</li>
            <br>
            <li>If a class has only one method as abstract, then that class must be an abstract class.</li>
            <br>
            <li>The child class which extends an abstract class must define all the methods of the abstract class.</li>
            <br>
            <li>If the abstract method is defined as protected in the parent class, the function implementation must be defined as either protected or public, but not private.</li>
            <br>
            <li>The signatures of the methods must match, optional parameter given in the child class will not be accepted and error will be shown.</li>
            <br>
            <li>Abstract classes that declare all their methods as abstract are not interfaces with different names. One can implement multiple interfaces, but not extend multiple classes (or abstract classes).</li>
        </ul>


    </section>

    <div id="abstract_vs_interface"></div>
    <section class="main-section">
        <header>
            <h3>Abstract vs. Interface</h3>
        </header>
        <center>
            <table>
                <thead>
                    <tr>
                        <th>Abstract class</th>
                        <th>Interface</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>It can have constants, members, method stubs (methods without a body), methods </td>
                        <td>It can only have constants and methods stubs.</td>
                    </tr>
                    <tr>
                        <td>Methods and members can have public or protected visibility</td>
                        <td>Methods of interface should only be public not any other visibility</td>
                    </tr>
                    <tr>
                        <td>The concept of multiple inheritances not supported.</td>
                        <td>An interface can extend or a class can implement multiple other interfaces.</td>
                    </tr>
                    <tr>
                        <td>Child class must implement all the abstract method of parent class when extend keyword is used.</td>
                        <td>No need of implementing methods from parent interface when interface is extending another interface</td>
                    </tr>
                </tbody>
            </table>
        </center>
    </section>


    <div id="constructor"></div>
    <section class="main-section">
        <header>
            <h3>Constructor Functions</h3>
        </header>
        <p>Constructor Functions are special type of functions which are called automatically whenever an object is created. PHP provides a special function called <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">__construct()</code> to define a constructor. You can pass as many as arguments you like into the constructor function.</p>
        <p>Example:</p>
        <div class="demo-code">
            <code>
                class Books {<br>
                /* Member variables */<br>
                var $price;<br>
                var $title;<br>
                <br>
                /* member constructor */<br>
                function __construct( $par1, $par2 ) {<br>
                $this->title = $par1;<br>
                $this->price = $par2;<br>
                }<br>
                /* Member functions */<br>
                function setPrice($par){<br>
                $this->price = $par;<br>
                }<br>
                <br>
                function getPrice(){<br>
                echo $this->price ."&lt;br/&gt;";<br>
                }<br>
                <br>
                function setTitle($par){<br>
                $this->title = $par;<br>
                }<br>
                <br>
                function getTitle(){<br>
                echo $this->title ." &lt;br/&gt;";<br>
                }<br>
                }<br>
            </code>
        </div>
        <p class="lead">You don’t need to call setter function separately to set the price and title. We can initialize these two membervariables at the time of object creation.</p>
        <div class="demo-code">
            <code>
                $physics = new Books( "Physics for High School", 10 );<br>
                $maths = new Books ( "Advanced Chemistry", 15 );<br>
                $chemistry = new Books ("Algebra", 7 );<br>
                /* Get those set values */<br>
                $physics->getTitle();<br>
                $chemistry->getTitle();<br>
                $maths->getTitle();<br>
                $physics->getPrice();<br>
                $chemistry->getPrice();<br>
                $maths->getPrice();<br>
            </code>
        </div>
        Output:
        <div class="demo-code">
            <code>
                Physics for High School<br>
                Algebra<br>
                Advanced Chemistry<br>
                10<br>
                7<br>
                15<br>
            </code>
        </div>
        <br>
        <a href="{{ route('ide', ['topic' => 8, 'exercise' => 8]) }}" target="_blank">
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
            <a id="quiz-btn" href="{{ route('quiz', ['topic' => 8]) }}" target="_blank">
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