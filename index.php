<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Average Calculator</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Average Calculator</h1>
    <h3>BS CpE 3A 1st Semester</h3>
    <div class="body">
      <!-- <form action=""> -->
      <table id="grades">
        <tr>
          <th>Subject:</th>
          <th class="units">Units:</th>
          <th class="grade">Grade:</th>
        </tr>
        <tr>
          <td>Logics Circuit and Design:</td>
          <td class="units">4</td>
          <td class="grade"><input type="number" id="a" /></td>
        </tr>
        <tr>
          <td>Operating System:</td>
          <td class="units">3</td>
          <td class="grade"><input type="number" id="b" /></td>
        </tr>
        <tr>
          <td>Data and Digital Communications:</td>
          <td class="units">3</td>
          <td class="grade"><input type="number" id="c" /></td>
        </tr>
        <tr>
          <td>Introduction to HDL</td>
          <td class="units">1</td>
          <td class="grade"><input type="number" id="d" /></td>
        </tr>
        <tr>
          <td>Feedback and Control System:</td>
          <td class="units">3</td>
          <td class="grade"><input type="number" id="e" /></td>
        </tr>
        <tr>
          <td>Fundamentals of Mixed Signals and Sensors:</td>
          <td class="units">3</td>
          <td class="grade"><input type="number" id="f" /></td>
        </tr>
        <tr>
          <td>Computer Engineering Drafting and Design:</td>
          <td class="units">1</td>
          <td class="grade"><input type="number" id="g" /></td>
        </tr>
        <tr>
          <td>Readings in Philippine Histroy:</td>
          <td class="units">3</td>
          <td class="grade"><input type="number" id="h" /></td>
        </tr>
        <tr>
          <td>Understanding the Self:</td>
          <td class="units">3</td>
          <td class="grade"><input type="number" id="i" /></td>
        </tr>
        <tr>
          <td>Average:</td>
          <td class="units">24</td>
          <td class="grade" id="avg">0</td>
        </tr>
      </table>
      <button type="submit" onclick="average()">Compute</button>
      <!-- </form> -->
    </div>
    <script src="script.js"></script>
  </body>
</html>
