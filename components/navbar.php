<?php
  echo "<nav class=\"navbar navbar-toggleable-md navbar-light bg-faded\" style=\"background: orange\">";
  echo "<button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
  echo "<span class=\"navbar-toggler-icon\"></span>";
  echo "</button>";
  echo "<a class=\"navbar-brand\" href=\"#\">Project 4</a>";

  //Brooks: This section should only be visible if there is a session present.
  //if (session present)
  //{
    echo "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">";
    echo "<ul class=\"navbar-nav mr-auto\">";
    echo "<li class=\"nav-item active\">";
    echo "<a class=\"nav-link\" href=\"main.php\">Home <span class=\"sr-only\">(current)</span></a>";
    echo "</li>";
    echo "<li class=\"nav-item\">";
    echo "<a class=\"nav-link\" href=\"inventory.php\">Browse Inventory</a>";
    echo "</li>";
    echo "<li class=\"nav-item\">";
    echo "<a class=\"nav-link\" href=\"profile.php\">Profile</a>";
    echo "</li>";
    echo "</ul>";
    echo "<form class=\"form-inline my-2 my-lg-0\">";
    echo "<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">";
    echo "<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>";
    echo "</form>";
    echo "</div>";
  //}
  echo "</nav>";
?>
