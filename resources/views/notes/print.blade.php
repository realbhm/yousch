<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('dist/css/adminlte.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('dist/css/printstyle.css') }}">

    <title>Imprimer le bulletin</title>
</head>

<body>
    <div class="my-5 page" size="A4">
        <div class="p-5">
            <section class="top-content d-flex justify-content-between">
                <div class="logo">
                    <img src="{{ asset('dist/img/bulletin/logo.png') }}" alt="" class="img-fluid">
                </div>
                <div class="top-left">
                  
                    <div class="position-relative" style="font-weight: bold;">
                        <p> <span>ESTIAM PARIS</span></p>
                        <p> <span>31 rue Paul Meurice 75020 Paris,
                            FRANCE</span></p>
                    </div>
                </div>
            </section>

            <section class="store-user bb mt-5" style="z-index: 6">
                <div class="col-12 ">
                    <div class="row pb-3">
                        <div class="row col-12">
                            <div class="col-12">
                                <h2 class="text-center" style="font-weight: bold">BULLETIN DE NOTES</h2>
                            </div>
                            <div class="col-6">
                                <p class="address"> Étudiant : John Doe</p>
                                <p>Date de naissance : 1 </p>
                                <p>Adresse : 1 </p>
                           
                            </div>
                            <div class="col-6">
                                <p>Classe : 1 </p>
                                <p>Campus : 1 </p>
                                <p>Semestre :  1 & 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="row extra-info pt-3">
                        <div class="col-12">
                            <p class="text-center">Année académique 2021 - 2022 - Cursus Expert en Informatique Appliquée 2ème année</p>
                        </div>
    
                    </div>
                </div>
            </section>

            <section class="product-area mt-4" style="z-index: 6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Unité d'enseignements</td>
                            <td>ECTS </td>
                            <td>Moyenne </td>
                            <td>Crédits</td>
                            <td>Grades</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p class="mt-0 title">2TECH1 (10 ECTS) </p>
                                    <p> Windows server OS administration </p>
                                    
                                        
                                    </div>
                                </div>
                            </td>
                            <td>3 </td>
                            <td>14.35 </td>
                            <td>Acquis</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                    <p> Linux client OS administration</p>
                                    
                                        
                                    </div>
                                </div>
                            </td>
                            <td>3</td>
                            <td>19</td>
                            <td>Acquis</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <p> Cisco CCNA Switching,Routing and
                                        Wireless </p>
                                    
                                        
                                    </div>
                                </div>
                            </td>
                            <td>4</td>
                            <td>16</td>
                            <td>Acquis</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p class="mt-0 title">2TECH2 (16 ECTS)  </p>
                                    <p> Web Programming - PHP Frameworks-Advanced</p>
                                    
                                        
                                    </div>
                                </div>
                            </td>
                            <td>2</td>
                            <td>19</td>
                            <td>2</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                    <p> Algorithmics and data structures </p>
                                    
                                        
                                    </div>
                                </div>
                            </td>
                            <td>2</td>
                            <td>15</td>
                            <td>Acquis</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                    <p> Manga programming - Advanced </p>  
                                    </div>
                                </div>
                            </td>
                            <td>3</td>
                            <td>19</td>
                            <td>Acquis</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section class="balance-info mt-5" style="z-index: 6">
                <div class="row">
                    <div class="col-5 border">
                        <p class="m-0 font-weight-bold"> Décision du jury : </p>
                        <p>Bon travail, passage en classe de 3è année autorisé sous
                            réserve de valider le stage de fin d'année.</p>
                    </div>
                    <div class="col-3">

                    </div>
                    <div class="col-4">
                        <table class="table border-0 table-hover">
                            <tr>
                                <td>ECTS attendus:</td>
                                <td>17</td>
                            </tr>
                            <tr>
                                <td>ECTS acquis:</td>
                                <td>17</td>
                            </tr>
                            <tfoot>
                                <tr>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- Signature -->
                        <div class="col-12">
                            <img src="{{ asset('dist/img/bulletin/signature.png') }}" class="img-fluid" alt="">
                            <p class="text-center m-0"> Signature du directeur </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
 
    </div>
             <!-- Cart BG -->
             <img src="{{ asset('dist/img/bulletin/logo2.png') }}" class="img-fluid cart-bg" alt="">
</body></html>