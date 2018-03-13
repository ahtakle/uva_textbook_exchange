<!DOCTYPE html>
<!--post_textbook.html: consists of a simple form to collect textbook information-->
<html>
<head>
  <meta name="author" content="Lauren Phan and Aditi Takle">
  <meta name="description" content="UVA Textbook Exchange">
  <link href="postbook.css" rel="stylesheet">
</head>
<body>

  <!--navbar with logout, user options-->
  <header>
    <nav>
      <ul>
        <a class="navbar" id="logout" href="logout.php"><img src="logout.png"></a>
        <!--<div class="dropdown-menu">-->
        <a class="navbar" id="user"><img src="user.png"></a>
          <!--<div id="dropdown" class="dropdown-links">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>-
        </div>-->
        <?php include('session.php');
          // includes session start from session.php
        ?>
        </ul>
      </nav>
    </header>

      <!--Form w/ textbook details-->
      <section>
        <h1>Post a textbook for sale!</h1>
        <form>
          <table>
            <tr>
              <td>Textbook Name:</td>
              <td><input type="text" id="name" autofocus required /></td>
            </tr>
            <tr>
              <td>Author:</td>
              <td><input type="text" id="author" required /></td>
            </tr>
            <tr>
              <td>Course Name:</td>
              <td><input type="text" id="coursename" required /></td>
            </tr>
            <tr>
              <td>Professor (optional):</td>
              <td><input type="text" id="professor" /></td>
            </tr>
            <tr>
              <td>Price (optional):</td>
              <td><input type="text" id="price" required /></td>
            </tr>
            <tr>
              <td>Edition:</td>
              <td><input type="text" id="edition" required /></td>
            </tr>
            <tr>
              <td>Type:</td>
              <td><select id="type">
                <option value="hardcover">Hard Cover</option>
                <option value="paperback">Paper Back</option>
                <option value="loose-leaf">Loose-Leaf</option>
              </select></td>
            </tr>
            <tr>
              <td>Condition:</td>
              <td><select id="condition">
                <option value="new">New</option>
                <option value ="excellent">Excellent</option>
                <option value="fair">Fair</option>
                <option value="poor">Poor</option>
              </select></td>
            </tr>
            <tr>
              <td>ISBN:</td>
              <td><input type="text" id="isbn" required /></td>
            </tr>
            <tr>
              <td>Upload Image:</td>
              <td><input type="file" id="image"/></td>
            </tr>
          </table>
          <button class="posttextbook" type="posttextbook" value="posttextbook" title="Login" onclick="addTextbook()"><span>Post Textbook</span></button>
        </form>
      </section>

      <script type="text/javascript" src="textbook_object.js"></script>
      <!--scsript to show dropdown menu-->
      <!-- to implement later
      <script type="text/javscript">
        document.getElementById("dropdown").classList.toggle("show");
        window.onclick = function(event) {
          if (!event.target.matches(#user)) {
            var dropdowns = document.getElementsByClassName("dropwdown-links");
            var i = for (i = 0: i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
          }
        }
      }
    -->
      </script>
    </body>
    </html>
