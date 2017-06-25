<?php
function save_joker_numbers() {
    $numbers = $_POST['lot-numbers'];
    foreach ( $numbers as $number ) {
        $number = (int) wp_strip_all_tags( $number );
        if ( get_page_by_title( $number, 'object', 'jokernummer' ) == null ) {
            save_joker_number($number);
        }
    }
}

function save_joker_number($number) {
    $post_id = wp_insert_post( array(
        'post_type' => 'jokernummer',
        'post_status' => 'publish',
        'post_title' => $number,
        'post_content' => '',
        'post_author' => 1
    ), true );

    $owner_name = wp_strip_all_tags( $_POST['owner-name'] );
    $owner_phone = wp_strip_all_tags( $_POST['phonenumber'] );
    $selected_weeks = wp_strip_all_tags( $_POST['selected-weeks'] );
    $payment_method = wp_strip_all_tags( $_POST['payment_method'] );
    $booking_date = date('ymd');

    update_post_meta( $post_id, 'joker_number_verified', false );
    update_post_meta( $post_id, 'joker_number_owner_name', $owner_name );
    update_post_meta( $post_id, 'joker_number_owner_phone', $owner_phone );
    update_post_meta( $post_id, 'joker_number_weeks_booked', $selected_weeks );
    update_post_meta( $post_id, 'joker_number_booking_date', $booking_date );
    update_post_meta( $post_id, 'joker_number_payment_method', $payment_method );
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="fb:app_id" content="675650232448908"/>
        <meta property="og:url" content="http://www.algask.se/algajokern"/>
        <meta property="og:title" content="Älgåjokern | Älgå Sportklubb"/>
        <meta property="og:site_name" content="Älgåjokern | Älgå Sportklubb"/>
        <meta property="og:description" content="Chans på 1.000 kr/vecka. Dragning varje lördag."/>
        <meta property="og:image:width" content="1200"/>
        <meta property="og:image:height" content="630"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="<?php bloginfo( 'template_directory' );?>/algajokern/images/share.jpg"/>
        <meta property="og:locale" content="sv_se"/>
        <title>Älgåjokern | Älgå Sportklubb</title>
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/algajokern/css/style.css">
    </head>
    <body>

        <header class="site-header box-w-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pull-left">
                            <div class="joker-logo">
                                <img class="symbol" src="<?php bloginfo( 'template_directory' );?>/algajokern/images/algajokern-logo.png" alt="Älgåjokern">
                                <img class="text" src="<?php bloginfo( 'template_directory' );?>/algajokern/images/algajokern-text-logo.png" alt="Älgåjokern">
                            </div>
                        </div>
                        <div class="pull-right">
                            <img class="club-logo" src="<?php bloginfo( 'template_directory' );?>/algajokern/images/algask-klubbmarke.svg" alt="Älgå Sportklubb">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php 
        if ( isset($_POST['_wpnonce']) ) :
            if ( wp_verify_nonce( $_POST['_wpnonce'], 'reserve_joker_number' ) ) :
                save_joker_numbers();
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="alert">
                                <section class="inner-section">
                                    <h1>Tack <?php echo $_POST['owner-name'];?>!</h1>
                                    <p>Du har reserverat jokernummer <?php echo implode(', ', $_POST['lot-numbers']);?> i <?php echo $_POST['selected-weeks'];?> veckor. Observera att du inte kan vinna förrän du betalat. Betalningen måste vara gjord senast klockan 18 på lördag.<br>Lycka till och tack för ditt bidrag till Älgå Sportklubb.</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
            endif;
        endif;
        ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <main class="box-w-shadow">
                        <section class="inner-section">

                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <h1><small>Vecka <?php the_field('algajokern_week', 'option');?></small><br>Veckans jokernummer: <?php the_field('algajokern_number', 'option');?></h1>
                                </div>
                            </div>

                            <hr>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <h1><small>Satsa 20 kr</small><br>Vinn 1.000 kr</h1>
                                    <p>För 20 kronor/nummer har du chansen att vinna 1.000 kronor – samtidigt som du stödjer Älgå SK.</p>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <h1><small>Lottodragningen</small><br>Chans varje lördag</h1>
                                    <p>De två sista jokernumren från lördagens <a href="https://www.svenskaspel.se/lotto" target="_blank">Lotto</a> är också veckans vinnare i Älgåjokern.</p>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-center">
                                    <h1><small>Fritt antal veckor</small><br>Ditt turnummer</h1>
                                    <p>Boka ditt, eller dina, turnummer under så många veckor du önskar ha chansen att vinna.</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-xs-12 col-sm-8">
                                    <h1>Köp jokernummer</h1>
                                    <p>Välj ett eller flera nummer mellan 00–99 för 20 kronor styck i veckan. <strong>Tips:</strong> boka ett nummer i fem veckor för 100 kronor och missa inte chansen att vinna!<br>Betalning görs genom Swish eller bankgiro.</p>
                                </div>
                            </div>

                            <form action="<?php the_permalink();?>" method="POST">
                                <?php wp_nonce_field( 'reserve_joker_number' ); ?>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <h2>1. Välj nummer</h2>
                                        <ol class="lot-list">
                                        <?php 
                                        $taken_joker_numbers = get_posts( array(
                                            'post_type' => 'jokernummer',
                                            'posts_per_page' => -1
                                        ) );
                                        ?>
                                        <?php for ( $i = 0; $i < 100; $i++ ) : ?>
                                            <?php 
                                            $is_taken = array_shift( array_filter( $taken_joker_numbers, function( $number ) use ($i) {
                                                return $number->post_title == $i;
                                            } ) );
                                            ?>
                                            <li class="lot-number <?php echo ( $is_taken ) ? 'taken' : 'avaliable';?>">
                                                <label>
                                                    <h3><?php echo sprintf('%02d', $i);?></h3>
                                                    <input type="checkbox" name="lot-numbers[]" v-model="lotNumbers" v-on:click="selectLotNumber" value="<?php echo sprintf('%02d', $i);?>" <?php echo ( $is_taken ) ? 'disabled="disabled"' : '';?>>
                                                </label>
                                            </li>
                                        <?php endfor; ?>
                                        </ol>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <h2>2. Välj antal veckor</h2>
                                        <div class="form-group">
                                            <label for="selected-weeks">Veckor</label>
                                            <input type="number" id="selected-weeks" name="selected-weeks" class="form-control" min="1" v-model="weeks">
                                        </div>
                                        <div class="well">
                                            Pris: {{cost}} kr
                                        </div>
                                        
                                        <div v-show="lotNumbers.length">
                                            <h2>3. Dina uppgifter</h2>
                                            <div class="form-group">
                                                <label for="name">Namn</label>
                                                <input type="text" class="form-control" id="name" name="owner-name" placeholder="Namn" v-model="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="phonenumber">Telefonnummer</label>
                                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Telefonnummer" v-model="phonenumber">
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <strong>Betalmetod:</strong>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="payment_method" value="Swish" checked="checked" v-model="payment_method">
                                                        Swish
                                                    </label>
                                                </div>
                                                <!--<div class="radio">
                                                    <label>
                                                        <input type="radio" name="payment_method" value="Kontoöverföring" v-model="payment_method">
                                                        Kontoöverföring
                                                    </label>
                                                </div>-->
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="payment_method" value="Bankgiro" v-model="payment_method">
                                                        Bankgiro
                                                    </label>
                                                </div>
                                            </div>
                                            
                                            <div class="panel panel-primary" v-if="payment_method == 'Swish'">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Instruktioner: Swish</h3>
                                                </div>
                                                <div class="panel-body">
                                                    Swisha {{cost}} kronor till 070-283 71 34.<br>
                                                    <strong>Meddelande:</strong> 
                                                    <span v-show="lotNumbers.length">
                                                        {{selectedLotNumbers}}. 
                                                        {{weeks}} <span v-if="weeks == 1">vecka</span><span v-else>veckor</span>.
                                                    </span>
                                                    <hr>
                                                    <div>
                                                        <strong>Exempel:</strong>
                                                        <img src="<?php bloginfo( 'template_directory' ); ?>/algajokern/images/example-swish.jpg" alt="Swish">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!--<div class="panel panel-primary" v-if="payment_method == 'Kontoöverföring'">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Instrukationer: Kontoöverföring</h3>
                                                </div>
                                                <div class="panel-body">
                                                    För över {{cost}} kronor till kontonummer 8431-9, 53 012 168-0.<br>
                                                    <strong>Meddelande:</strong><br>
                                                    <span v-show="name">{{name}}.</span>
                                                    <span v-show="phonenumber">{{phonenumber}}.</span>
                                                    <span v-show="lotNumbers.length">
                                                        Nr {{selectedLotNumbers}}. {{weeks}}
                                                    </span>
                                                    <hr>
                                                    <div>
                                                        <strong>Exempel:</strong>
                                                        <img src="<?php bloginfo( 'template_directory' );?>/algajokern/images/example-bankaccount.png" alt="Kontoöverföring">
                                                    </div>
                                                </div>
                                            </div>-->
                                            
                                            <div class="panel panel-primary" v-if="payment_method == 'Bankgiro'">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Instruktioner: Bankgiro</h3>
                                                </div>
                                                <div class="panel-body">
                                                    För över {{cost}} kronor till bankgironummer 5410-7404.<br>
                                                    <strong>Meddelande:</strong><br>
                                                    <span v-show="name">{{name}}.</span>
                                                    <span v-show="phonenumber">{{phonenumber}}.</span>
                                                    <span v-show="lotNumbers.length">
                                                        Nummer {{selectedLotNumbers}}. 
                                                        {{weeks}} <span v-if="weeks == 1">vecka</span><span v-else>veckor</span>.
                                                    </span>
                                                    <hr>
                                                    <div>
                                                        <strong>Exempel:</strong>
                                                        <img src="<?php bloginfo( 'template_directory' ); ?>/algajokern/images/example-bankgiro.png" alt="Bankgiro">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <p>Dina jokernummer reserveras tills din betalning är bekräftad. <strong>Observera att du kan inte kan vinna förrän dina nummer är betalade. Betalningen måste vara gjord senast klockan 18 på lördag.</strong></p>
                                            
                                            <div class="input-group">
                                                <button type="submit" class="btn btn-primary">Reservera</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </section>
                    </main>
                
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/algajokern/javascripts/bootstrap.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/algajokern/javascripts/app.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-30098036-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>