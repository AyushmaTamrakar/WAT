<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="style.css" rel="stylesheet" />
    <title>HTML Recap</title>
  </head>
  <body>
    <div class="container">
      <div class="box1">
        <!-- <img src="web.jpg"  alt="Web Technology" /> -->
        <div class="txt"><span class="caps">W</span>eb <span class="caps">A</span>pplication <span class="caps">T</span>echnologies</p></div>
      </div>
      <div class="box2">
        <h1>Links</h1>
        <ul>
          <li><a href="https://chubkins.herokuapp.com/">Chubkins</a></li>
          <li><a href="https://www.w3schools.com">W3 Schools</a></li>
          <li>
            <a href="https://developer.mozilla.org/en-US/docs/Learn"
              >Learn Web Dev</a
            >
          </li>
          <li>
            <a href="https://www.w3schools.com/colors/colors_name.asp"
              >Colour Reference</a
            >
          </li>
        </ul>
      </div>
      <div class="box3">
        <div>WAT Lecture</div>
        <div class="side">12:00-13:00LTB</div>
        <br> 
        <div >Every<span class="caps1">WED</span></div>
      </div>
      <div class="box4">
        <h1>WAT Assessment</h1>
        <table>
          <thead>
            <tr>
              <th>Title</th>
              <th>Weight</th>
              <th>Due</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Work in progress</td>
              <td>20%</td>
              <td>See VLE</td>
            </tr>
            <tr>
              <td>Portfolio</td>
              <td>50%</td>
              <td>See VLE</td>
            </tr>
            <tr>
              <td>Phase Exam</td>
              <td>30%</td>
              <td>See VLE</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="box5">
        <h1>Search for Property</h1>
        <label for="location">Location: </label>
        <input type="text" id="location" placeholder="e.g this or that" />
        <br /><label for="category">Category: </label>
        <select id="category">
          <option>Flat</option>
          <option>Villa</option>
          <option>Mansion</option>
          <option>Condominium</option>
        </select>
        <label for="beds">Beds: </label>
        <input type="number" id="beds" min="3" max="100" value ="4" />
        <br />
        <input
          type="radio"
          id="price"
          name="props"
          value="PRICE"
          checked="checked"
        />
        <label for="price">Price</label>
        <input type="radio" id="bed" name="props" value="BED" />
        <label for="bed">Beds</label>
        <input type="radio" id="alpha" name="props" value="ALPHA" />
        <label for="alpha">Alpha</label>
        <br />
        <button type="submit">Submit</button>
      </div>
    </div>
  </body>
</html>
