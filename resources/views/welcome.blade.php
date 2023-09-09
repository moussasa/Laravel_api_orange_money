

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>smspro</title>
    <link rel="icon" type="image/x-icon"  href="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="/retour/css/fontawesome.css" rel="stylesheet">
     <link href="/retour/css/brands.css" rel="stylesheet">
    <link href="/retour/css/solid.css" rel="stylesheet">
    <link href="/retour/css/all.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://onecall.ci/fr/smspro/assets/libs/bootstrap/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="https://onecall.ci/fr/smspro/assets/libs/bootstrap-toggle/css/bootstrap-toggle.min.css" /> 
    <link rel="stylesheet" href="https://onecall.ci/fr/smspro/assets/libs/alertify/css/alertify.css" /> 
    <link rel="stylesheet" href="https://onecall.ci/fr/smspro/assets/libs/alertify/css/alertify-bootstrap-3.css" /> 
    <link rel="stylesheet" href="https://onecall.ci/fr/smspro/assets/libs/bootstrap-select/css/bootstrap-select.min.css" /> 
    <link rel="stylesheet" href="https://onecall.ci/fr/smspro/assets/css/style.css" /> 
    <link rel="stylesheet" href="https://onecall.ci/fr/smspro/assets/css/responsive.css" /> 
    <link rel="stylesheet" href="https://onecall.ci/fr/smspro/assets/css/admin.css" /> 
   
    <script src="https://onecall.ci/fr/smspro/assets/libs/jquery-1.10.2.min.js"></script>
    <script src="https://onecall.ci/fr/smspro/assets/libs/jquery.slimscroll.min.j"></script> 
    <script src="https://onecall.ci/fr/smspro/assets/libs/bootstrap/js/bootstrap.min.js"></script> 
    <script src="https://onecall.ci/fr/smspro/assets/libs/bootstrap-toggle/js/bootstrap-toggle.min.j"></script> 
    <script src="https://onecall.ci/fr/smspro/assets/libs/alertify/js/alertify.js"></script> 
    <script src="https://onecall.ci/fr/smspro/assets/libs/bootstrap-select/js/bootstrap-select.min.js"></script>   
    <script src="https://onecall.ci/fr/smspro/assets/js/scripts.js"></script> 
    

 
 <style>
    .user-profile .user-image {
    margin-top: 11 px;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    margin-top: -10px;
    }
    </style>
</head>



<body class="left-bar-open ">

<nav id="left-nav" class="left-nav-bar">
    <div class="nav-top-sec">
    <div class="app-logo"><a href="https://onecall.ci/fr/">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwb1rudke1KlpArd38pLGTkYO0UCYP64IXr3exdplZqu_HFJxYt1zt1u3G6UWHEvchHdY&usqp=CAU"  width="70px" height="50px">
             </a>
        </div>


        <a href="#" id="bar-setting" class="bar-setting"><i class="fa fa-bars"></i></a>
    </div>
    <div class="nav-bottom-sec">
         <ul class="left-navigation" id="left-navigation">

            
            <li><a href="https://onecall.ci/fr/smspro/dashboard"><span class="menu-text">Tableau de Bord</span> <span class="menu-thumb"><i class="fa fa-dashboard"></i></span></a></li>

        </li>
             <li><a href="https://onecall.ci/fr/smspro/user/all"><span class="menu-text"></span>Sous-compte<span class="menu-thumb"><i class="fa fa-dashboard"></i></span></a></li>
           
            <li ><a href="https://onecall.ci/fr/smspro/user/phone-book"><span class="menu-text">Contact</span> <span class="menu-thumb"><i class="fa fa-user"></i></span></a></li>
            <li><a href="https://onecall.ci/fr/smspro/user/sms/purchase-sms-plan"><span class="menu-text">Acheter un pack SMS</span> <span class="menu-thumb"><i class="fa fa-wifi"></i></span></a></li>
            <li><a href="https://onecall.ci/fr/smspro/user/sms/quick-sms"><span class="menu-text">Envoi sms</span> <span class="menu-thumb"><i class="fa fa-book"></i></span></a></li>
            <li><a href="https://onecall.ci/fr/smspro/user/sms/send-recurring-sms"><span class="menu-text">Sms récurrent</span> <span class="menu-thumb"><i class="fa fa-credit-card"></i></span></a></li>
            <li><a href="https://onecall.ci/fr/smspro/user/sms/sms-templates"><span class="menu-text">Modele de Sms</span> <span class="menu-thumb"><i class="fa fa-line-chart"></i></span></a></li>
            <li><a href="https://onecall.ci/fr/smspro/user/sms/sender-id-management"><span class="menu-text">Id de l'expediteur</span> <span class="menu-thumb"><i class="fa fa-user-secret"></i></span></a></li>
            <li><a href="https://onecall.ci/fr"><span class="menu-text">Assistance Message</span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>
            <li><a href="https://onecall.ci/fr/smspro/dashboard"><span class="menu-text">Déconnecter</span> <span class="menu-thumb"><i class="fa fa-power-off"></i></span></a></li>

        </ul>
    </div>
</nav>

<main id="wrapper" class="wrapper">

    <div class="top-bar clearfix">
        <ul class="top-info-bar">
           
        </ul>



        <div class="navbar-right">
            <div class="clearfix">
                <div class="dropdown user-profile pull-right" style="display: flex;">
                <span class="m-r-30" style="margin-top: 7px;"></span>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  

                        <span class="user-info"></span>
                       

                    </a>
                    <ul class=" dropdown-menu arrow right-arrow" role="menu">
                        <li><a href="{{url('user/edit-profile')}}"><i class="fa fa-edit"></i> </a></li>
                        <li><a href="{{url('user/change-password')}}"><i class="fa fa-lock"></i> </a></li>
                        <li class="bg-dark">
                            <a href="{{url('logout')}}" class="clearfix">
                                <span class="pull-left"></span>
                                <span class="pull-right"><i class="fa fa-power-off"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="language-var user-info">
            <a href="#" class="dropdown-toggle text-success" data-toggle="dropdown" role="button" aria-expanded="false">
                <img src="">
            </a>
            <ul class="dropdown-menu lang-dropdown arrow right-arrow" role="menu">
               
                    <li>
                      
                            <img class="user-thumb" src="" alt="user thumb">
                            <div class="user-name"></div>
                        </a>
                    </li>
                
            </ul>
        </div>

    </div>

<br><br><br><br><br><br>
<div class="row">
             <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"align="center"></h3>
                        </div>
                        <div class="panel-body" align="center">
                      
                              
                       
                       <h3>Dernière Etape Pour finaliser votre payement </h3>
                        
                     
                            </form>
                        </div>
                            <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6" align="center">
                        <!-- test -->

                        <div id="frontendEditor" class="col-8">
        <ul class="nav nav-tabs" role="tablist">
            
            <li role="presentation" class="active">
                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                    <label for="html">Mtn</label>
                   
                </a>
            </li>
            <li role="presentation" >
                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
                <label for="html">Orange</label>
                </a>
            </li>
        </ul>

        <div class="tab-content">
           
            <div role="tabpanel" class="tab-pane" id="messages">
 <!-- paiement -->
            <br>
                                   <label>Nom</label>
                                    <input type="text" class="form-control" name="amount">
                                    <label>Numero de Telephone</label>
                                    <input type="text" class="form-control"   name="amount">
                                    <input type="hidden" class="form-control" value=""  name="amount" readonly>
                                 <br>
                                <button type="submit" class="btn btn-primary"  id="bt_get_signature">finaliser le payement</button>
                                
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">...</div>
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

<script>
  

</script>

</body>

</html>

