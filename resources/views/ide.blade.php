@extends('layouts.ide_app')
<div>
    <div class="switch-container">
        <span class="switch-label">Light Mode</span>
        <label class="switch">
            <input type="checkbox" onclick="toggleTheme()">
            <span class="slider round"></span>
        </label>
        <button class="run-button" onclick="runCode()">Run</button>
    </div>
    <div style="overflow: auto;">
        <div id="editorContainer"></div>
        <div id="output"></div>
    </div>
</div>

<script>
    var editor;
    let currentTheme = 'tomorrow_night';

    // Load the Ace Editor
    window.onload = function() {
        var fileContents = @json($fileContents ?? null);

        // Now you can use the fileContents variable in your JavaScript code

        editor = ace.edit("editorContainer");
        editor.session.setMode("ace/mode/php");
        if (fileContents !== null && fileContents !== undefined) {
            editor.setValue(fileContents);
        } else {
            editor.setValue(`<?php echo '<!DOCTYPE html>
<html>
<body>

<?php
   echo "Greetings, Dangal ng Bayan!";
?>

</body>
</html>'; ?>`);
        }
        editor.setOption("wrap", true); // Enable word wrap
        setTheme(currentTheme); // Call setTheme to apply initial theme
    };

    function runCode() {
        const code = editor.getValue();

        // Send the code to the server for execution
        fetch('/editor.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'code=' + encodeURIComponent(code),
            })

            .then(response => response.text())
            .then(data => {
                document.getElementById('output').innerHTML = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function toggleTheme() {
        currentTheme = currentTheme === 'tomorrow_night' ? 'tomorrow' : 'tomorrow_night';
        setTheme(currentTheme);
    }

    function setTheme(theme) {
        editor.setTheme(`ace/theme/${theme}`);
        document.getElementById('output').style.backgroundColor = theme === 'tomorrow_night' ? '#25282C' : 'white';
        document.getElementById('output').style.color = theme === 'tomorrow_night' ? 'white' : 'black';
    }
</script>