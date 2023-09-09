<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noification</title>
</head>
<body>
    <div class="success">

        @if($status =="SUCCESS")

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center"></h3>
                    </div>
                    <div class="panel-body" align="center">


                        <div><img src=" https://icons.veryicon.com/png/o/miscellaneous/cloud-call-center/success-24.png"
                                alt="Trulli" width="200" height="200">

                            <h4>
                                <a href="{{route('home')}}">Paiement effectué avec succès cliquez ici pour aller à la page d'accueil </a>

                            </h4>

                            <!--success-->

                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6" align="center">
                                <!-- test -->

                                <div id="frontendEditor" class="col-8">


                                    <div class="tab-content">

                                        <div role="tabpanel" class="tab-pane" id="settings">

                                            <!-- paiement direction orange -->
                                            <br>

                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3"></div>


                        </div>
                    </div> <br>
                    <div class="col-lg-3"></div>
                    <br>
                </div>
            </div>
            @elseif($status =="FAILED" OR $status =="INITIATED" OR $status =="PENDING" OR $status =="EXPIRED")
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center"></h3>
                        </div>
                        <div class="panel-body" align="center">


                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Crystal_Clear_action_button_cancel.svg/768px-Crystal_Clear_action_button_cancel.svg.png"
                                alt="Trulli" width="150" height="200">
                            <h4>
                                <a href="{{route('orange_payement_link')}}">Payement Echoué veuillez cliquer ici pour reprendre la procédure Svp </a>
                            </h4>


                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6" align="center">
                                <!-- test -->

                                <div id="frontendEditor" class="col-8">


                                    <div class="tab-content">

                                        <div role="tabpanel" class="tab-pane" id="settings">

                                            <!-- paiement direction orange -->
                                            <br>

                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3"></div>


                        </div>
                    </div> <br>
                    <div class="col-lg-3"></div>
                    <br>
                </div>
            </div>
            @endif
    </div>
</body>
</html>