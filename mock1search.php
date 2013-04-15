<!DOCTYPE html> 
<html> 
    <head> 
        <title>Suchleiste</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>

    </head> 
    <body> 
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#">Action</a></li>
            <li><a tabindex="-1" href="#">Another action</a></li>
            <li><a tabindex="-1" href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="#">Separated link</a></li>
        </ul>
        <div class="input-prepend input-append" style="margin-left:2px;">
            <button class="btn" style="width: 20px" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <input class="span2" id="appendedInputButtons" type="text" style="width: 110px;">
            <button class="btn" type="button">Search</button>
            <button class="btn" style="width: 20px" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
   
            <p></p>
              <div class="btn-group">
    <button class="btn btn-inverse">myPorts</button>
    <button class="btn btn-inverse">myVessels</button>
    <button class="btn btn-inverse"><i class="icon-list icon-white"></i></button>
    </div>
        </div>
    </body>
</html>
