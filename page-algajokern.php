<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Älgåjokern | Älgå Sportklubb</title>
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/algajokern/css/style.css">
    </head>
    <body>

        <header class="site-header box-w-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pull-left">
                            <img src="<?php bloginfo( 'template_directory' );?>/algajokern/images/algajokern-logo.png" alt="Älgåjokern">
                            <img src="<?php bloginfo( 'template_directory' );?>/algajokern/images/algajokern-text-logo.png" alt="Älgåjokern">
                        </div>
                        <div class="pull-right">
                            <img src="<?php bloginfo( 'template_directory' );?>/algajokern/images/algask-klubbmarke.svg" alt="Älgå Sportklubb">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <main class="box-w-shadow">
                        <section class="inner-section">
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <h1><small>Vinstchansen:</small><br>1.000 kr/veckan</h1>
                                    <p>Ta chansen att vinna 1.000 kronor i veckan samtidigt som du stödjer Älgå SK.</p>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <h1><small>Insatsen:</small><br>20 kr/nummer</h1>
                                    <p>För endast 20 kronor per valt nummer har du chansen att bli 1.000 kronor rikare.</p>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <h1><small>Du väljer:</small><br>Ditt turnummer</h1>
                                    <p>Boka ditt, eller dina, turnummer under så många veckor som du själv önskar.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-xs-12">
                                    <h1>Köp jokernummer</h1>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-8">
                                    <h2>1. Välj nummer</h2>
                                    <form>
                                        <div class="form-group">
                                            <label for="search-number">Sök nummer</label>
                                            <input type="text" id="search-number" class="form-control" placeholder="Sök nummer">
                                        </div>
                                    </form>
                                    <ol class="lot-list">
                                    <?php for ( $i = 0; $i < 100; $i++ ) : ?>
                                        <li class="lot-number">
                                            <label>
                                                <h3><?php echo sprintf('%02d', $i);?></h3>
                                                <input type="checkbox">
                                            </label>
                                        </li>
                                    <?php endfor; ?>
                                    </ol>
                                                
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <h2>2. Välj betalmetod</h2>
                                    
                                    <form action="">
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="payment_method" value="Swish" checked="checked">
                                                    Swish
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="payment_method" value="Kontoöverföring">
                                                    Kontoöverföring
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="payment_method" value="Bankgiro">
                                                    Bankgiro
                                                </label>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Swish</h3>
                                        </div>
                                        <div class="panel-body">Lorem ipsum dolor sit amet.</div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Kontoöverföring</h3>
                                        </div>
                                        <div class="panel-body">Lorem ipsum dolor sit amet.</div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Bankgiro</h3>
                                        </div>
                                        <div class="panel-body">Lorem ipsum dolor sit amet.</div>
                                    </div>

                                    <h2>3. Dina uppgifter</h2>
                                    

                                </div>
                            </div>

                        </section>
                    </main>
                
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/algajokern/javascripts/bootstrap.min.js"></script>
    </body>
</html>