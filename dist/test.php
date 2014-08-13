<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
 
    <div class="container-narrow">
  
          <h3><span class="glyphicon glyphicon-asterisk" style="color:#5cb85c"></span> Listening Test</h3>
          <hr> 



           <div class="row">
             <div class="equation">
                 
                   <audio controls>
                         <source src="speech.wav" type="audio/mpeg">       
                   </audio> 
              </div>
           </div>

          <form method="post" action="demo.php">
            <div class="col-md-12">
              <br>
              <h4>Please type the equation you just heard</h4>

                 <textarea rows="2" cols="60" type="text" name="equationinput">
                 </textarea><br>      
              <input class="submit" type="submit" value="Continue">
            </div>
           </form> 


    </div>








  
 

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  
  </body>
</html>
