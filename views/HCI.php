<?php
include "header.php";

echo"   
<div class='card bg-white text-white'>
  <img class='card-img bg-transparent' src='images/tangerine.png' alt='Card image' >
  <div class='card-img-overlay'>
    <h2 class='card-title' style='color:white;'>Mission Page</h2>
    <div class='col-lg-4'> 
      <div class='card-body'>
        <ul class='nav nav-tabs' id='myTab' role='tablist'>
          <li class='nav-item'>
            <a class='nav-link active' id='signup-tab' data-toggle='tab' href='#signup' role='tab' aria-controls='signup' aria-selected='true'>Sign Up</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' id='signin-tab' data-toggle='tab' href='#signin' role='tab' aria-controls='signin' aria-selected='false'>Sign In</a>
          </li>
        </ul>
        <div class='tab-content' id='myTabContent'>
          <div class='tab-pane fade show active' id='signup' role='tabpanel' aria-labelledby='signup-tab'>
            <form action='signup.php' method='post'>
              <div class='form-group'>
                <label for='name'>Name:</label>
                <input type='text' class='form-control' id='name' name='name' required>
              </div>
              <div class='form-group'>
                <label for='email'>Email:</label>
                <input type='email' class='form-control' id='email' name='email' required>
              </div>
              <div class='form-group'>
                <label for='password'>Password:</label>
                <input type='password' class='form-control' id='password' name='password' required>
              </div>
              <button type='submit' class='btn btn-primary btn-block'>Sign Up</button>
            </form>
          </div>
          <div class='tab-pane fade' id='signin' role='tabpanel' aria-labelledby='signin-tab'>
            <form action='signin.php' method='post'>
              <div class='form-group'>
                <label for='email'>Email:</label>
                <input type='email' class='form-control' id='email' name='email' required>
              </div>
              <div class='form-group'>
                <label for='password'>Password:</label>
                <input type='password' class='form-control' id='password' name='password' required>
              </div>
              <button type='submit' class='btn btn-primary btn-block'>Sign In</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





 ";

include 'footer.php';
echo"</body></html>";

?>