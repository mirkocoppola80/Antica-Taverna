<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ristorante Antica Taverna - I sapori della cucina toscana. Qui potrete assaggioare piatti tipici toscani fatti come dice la tradizione culinaria.">
    <meta name="keywords" content="cucina toscana, ristoranti a firenze, ristoranti tipici, taverna toscana">
    <title>Ristorante Antica Taverna - I sapori della cucina Toscana</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Cantata+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
        <div id="info" class="container">
          <p class="text-left pull-left">Aperto: <br class="visible-xs"><span>Dal Martedì alla Domenica dalle 19 alle 01</span></p>
          <p class="text-right hidden-xs">Prenotazioni: <a href="tel:055256801"><span>055-663399</span></a></p>
      </div>
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="pull-left hidden-xs">
            <div id="logo-img" alt="Logo image"></div>
          </a>

          <div class="navbar-brand visible-xs">
            <a href="index.html"><h1>Ristorante Antica Taverna</h1></a>
          </div>

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li id="navHomeButton" class="visible-xs">
              <a href="index.html">
                <i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li id="navMenuButton">
              <a href="menu-items.html">
                <i class="fa fa-cutlery" aria-hidden="true"></i><br class="hidden-xs"> Menu</a>
            </li>
            <li>
              <a href="gallery.html">
                <i class="fa fa-picture-o" aria-hidden="true"></i><br class="hidden-xs"> Galleria</a>
            </li>
            <li class="active">
              <a href="contact.php">
                <i class="fa fa-envelope" aria-hidden="true"></i><br class="hidden-xs"> Contatti</a>
            </li>
           </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

  <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:055256801">
    <span class="glyphicon glyphicon-earphone"></span>
    055-256801
    </a>
  </div>
  <div id="xs-deliver" class="text-center visible-xs">Per prenotare</div>

  <div id="main-content" class="container">

    <h1 class="col-sm-6 col-sm-offset-3 text-center">Contattaci</h1>
    <p class="col-sm-6 col-sm-offset-3 text-center">Per qualsiasi informazione riguardo al nostro ristorante o per prenotazioni di matrimoni, battesimi e feste, riempi il form qui sotto e verrai ricontattato.</p>

    <?php
        if(isset($_POST['submit']))
        {
            if(empty($_POST['nome'])      ||
               empty($_POST['email'])     ||
               empty($_POST['motivo'])     ||
               empty($_POST['messaggio'])   ||
               !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
               {
               echo '<p class="text-danger col-sm-6 col-sm-offset-3 text-center">No arguments Provided!</p>';
               // return false;
               }
            else
                {

                    $nome = strip_tags(htmlspecialchars($_POST['nome']));
                    $email_address = strip_tags(htmlspecialchars($_POST['email']));
                    $motivo = strip_tags(htmlspecialchars($_POST['motivo']));
                    $messaggio = strip_tags(htmlspecialchars($_POST['messaggio']));

                    // Create the email and send the message
                    $to = 'mirkocoppola80@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
                    $email_subject = "Website Contact Form:  $nome";
                    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $nome\n\nEmail: $email_address\n\nOggetto: $motivo\n\nMessaggio:\n$messaggio";
                    $headers = "From: mirkocoppola80@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
                    $headers .= "Reply-To: $email_address";
                    if (@mail($to,$email_subject,$email_body,$headers))
                        {
                        // return true;
                          echo '<p class="text-success col-sm-6 col-sm-offset-3 text-center">Email sent successfully!</p>';

                        }
                        else
                        {
                            echo '<p class="text-danger col-sm-6 col-sm-offset-3 text-center">Errore nell\'invio dell\'email.</p>';
                        }
                }
        }
        ?>

    <form class="form-horizontal col-sm-6 col-sm-offset-3" action="" method="POST">
      <div class="form-group">
        <div class="row">
          <label for="email" class="col-sm-12">Email</label>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="nome" class="col-sm-12">Nome</label>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="motivo" class="col-sm-12">Motivo</label>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <input type="text" class="form-control" name="motivo" id="motivo" placeholder="Motivo">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label for="messaggio" class="col-sm-12">Messaggio</label>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <textarea class="form-control" rows="5" name="messaggio" id="messaggio" placeholder="Motivo">Inserisci il tuo messaggio...</textarea>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="">
          <button type="submit" class="btn btn-default" name="submit">Invia</button>
        </div>
      </div>
    </form>
  </div>

  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>Orario:</span><br>
          Mar-Dom: 19.00 - 01:00<br>
          Lunedi Chiuso
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Indirizzo:</span><br>
          Via de' boschi 4<br>
          Scandicci, 50001
          <p>* Consegnamo entro un raggio di 5 km, minimo d'ordine 15€, sovraprezzo di 3€ per ogni ordine.</p>
          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
          <p>"Il miglior ristorante toscano, piatti tipici tradizionali e la fantastica simpatia del personale."</p>
          <p>"Cibo buono e genuino, ambiente tranquillo che ti mette a tuo agio. Per passare qualche ora in relax e gustare prelibatezze."</p>
        </section>
      </div>
      <div class="text-center">&copy; Copyright Ristorante Antica Taverna 2016</div>
    </div>
  </footer><!-- End Footer -->

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>
</html>
