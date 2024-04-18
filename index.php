<!doctype html>
<html>
  <head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="description" content="Kilos to Pounds Converter"/>
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Logan Connors" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="192x192" href="./images/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
    <link rel="manifest" href="./images/site.webmanifest" />
    <!-- MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Linking files -->
    <script>
      /* Function to convert kilos to pounds */
      function convertKilosToPounds() {
          // Get input value
          var kilos = parseFloat(document.getElementById("inputKilos").value);

          // Check if input is a valid number
          if (!isNaN(kilos)) {
              // Perform conversion
              var pounds = kilos * 2.20462;
              // Round to 2 decimal places
              pounds = Math.round(pounds * 100) / 100;
              // Display result
              document.getElementById("result").innerHTML = "Result: " + kilos + " kilos is approximately " + pounds + " pounds.";
          } else {
              // Display error message if input is not a number
              document.getElementById("result").innerHTML = "Please enter a valid number.";
          }
      }
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Kilos to Pounds Converter</title>
  </head>

  <body>
    <h1>Kilos to Pounds Converter</h1>
    <div id="container">
      <p class="colored-text">Enter a value below in kilos to convert to pounds</p>
      <input type="number" id="inputKilos" step="0.01" min="0" placeholder="Enter kilos" autofocus pattern="\d*\.?\d+" title="Please enter a positive number">
      <button onclick="convertKilosToPounds()">Convert</button>
    </div>
    <!-- MDL Progress Bar with Indeterminate Progress -->
    <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    <img src="./images/k2l.png" alt="Weight" width="250" height="175">
    <p id="result" class="colored-text">Result:</p>
  </body>
</html>