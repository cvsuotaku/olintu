@extends('layouts.app')
@section('title', 'OLINTU - Quiz')
@section('content')
<section class="text-gray-600 body-font">
    <!-- Navigation -->
    <nav class="p-4 text-white" style="background-color: #2E6D32;">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">OLINTU - Quiz</h1>
        </div>
    </nav>
    <div id="quiz-container" class="container px-5 py-24 mx-auto">

    </div>
    <div class="flex justify-end mt-20 pr-6">
        <button id="prev-btn" class="w-40 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800" disabled>Previous</button>
        <button id="next-btn" class="w-40 ml-4 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-800">Next</button>
    </div>


    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const questions = @json($questions); // Assuming $questions is an array of questions

        let currentQuestionIndex = 0;
        const quizContainer = document.getElementById('quiz-container');
        const nextButton = document.getElementById('next-btn');
        const prevButton = document.getElementById('prev-btn');
        const radioButtons = document.getElementsByName('list-radio');
        let selectedAnswers = {};

        function displayQuestion(index) {
            const question = questions[index];

            if (question) {
                quizContainer.innerHTML = `
                <div class="flex flex-wrap w-full mb-10 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Question ${index + 1} out of ${questions.length}</h1>
        </div>
        <div class="flex flex-wrap w-full mb-10 flex-col items-center text-center">
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
                ${question['QUESTION']}
            </p>
        </div>
        <div class="flex flex-wrap w-50 flex-col items-center text-center">
            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-A" type="radio" value="A" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" checked>
                        <label for="horizontal-list-radio-A" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">${question['OPTION_A']}</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-B" type="radio" value="B" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-B" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">${question['OPTION_B']}</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-C" type="radio" value="C" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-C" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">${question['OPTION_C']}</label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-D" type="radio" value="D" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-D" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">${question['OPTION_D']}</label>
                    </div>
                </li>
            </ul>
                `;
            }

            // Set the previously selected answer, if any
            const selectedAnswer = selectedAnswers[index];
            if (selectedAnswer) {
                const selectedRadioButton = document.getElementById(`horizontal-list-radio-${selectedAnswer}`);
                if (selectedRadioButton) {
                    selectedRadioButton.checked = true;
                }
            } else {
                const selectedRadioButton = document.getElementById(`horizontal-list-radio-A`);
                if (selectedRadioButton) {
                    selectedRadioButton.checked = true;
                }
            }
        }

        function updateButtons() {
            // Hide the previous button on the first question
            prevButton.style.display = currentQuestionIndex === 0 ? 'none' : 'block';

            // Change the text of the next button to "Submit" on the last question
            nextButton.textContent = currentQuestionIndex === questions.length - 1 ? 'Submit' : 'Next';
        }

        nextButton.addEventListener('click', function() {
            if (currentQuestionIndex < questions.length - 1) {
                saveSelectedAnswer();
                currentQuestionIndex++;
                displayQuestion(currentQuestionIndex);
                updateButtons();
            } else {
                // Handle submission logic here
                saveSelectedAnswer(); // Save the answer for the last question
                submitQuiz();
            }
        });

        prevButton.addEventListener('click', function() {
            if (currentQuestionIndex > 0) {
                saveSelectedAnswer();
                currentQuestionIndex--;
                displayQuestion(currentQuestionIndex);
                updateButtons();
            }
        });

        function saveSelectedAnswer() {
            const selectedRadioButton = Array.from(radioButtons).find(rb => rb.checked);
            if (selectedRadioButton) {
                const option = selectedRadioButton.value;
                selectedAnswers[currentQuestionIndex] = option;
            }
            console.log(selectedAnswers);
        }
        

         function submitQuiz() {
        fetch("{{ route('quiz.grade') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for Laravel security
                },
                body: JSON.stringify({
                    selectedAnswers: selectedAnswers,
                    questions: questions.map(question => {
                        // Map the keys to lowercase for consistency
                        return {
                            quiz_id: question.QUIZ_ID,
                            topic: question.TOPIC,
                            question: question.QUESTION,
                            answer: question.ANSWER,
                            option_a: question.OPTION_A,
                            option_b: question.OPTION_B,
                            option_c: question.OPTION_C,
                            option_d: question.OPTION_D,
                            cognitive_level: question.COGNITIVE_LEVEL // Add Bloom's Taxonomy level
                        };
                    })
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = "/grade";
                } else {
                    console.error('Error:', data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
        // Initial display
        displayQuestion(currentQuestionIndex);
        updateButtons();
    });
</script>
@endsection