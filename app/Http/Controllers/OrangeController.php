<?php

namespace App\Http\Controllers;

use App\APIOrange\OrangeMoney;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class OrangeController extends Controller
{
    //obtenir le lien de paiement
    public function orange_payement_link()
    {

        $payment = new OrangeMoney();

        $order_id = "orangeapi" . rand(10, 999);

        $amount = 200000;

        $data = [
            // votre code marchant ex:2536623q
            "merchant_key"=> '*****',
            "currency" => "OUV",
            "order_id" => $order_id,
            "amount" => $amount,

            // les lien de votre site::appli
            "return_url" => "http://orange.api/status",
            "cancel_url" => 'http://orange.api/',
            "notif_url" => 'http://orange.api/status',
            "lang" => "fr",
            "reference" => "Produit orangeapi",
        ];

        // si tous marche bien on doit avoir le token
        // avec le tocken on obtien url de retour
        // on dirige le client vers ce url
        $result = $payment->webPayment($data);
        $payment_url = $result['payment_url'];

        // on met le token en session pour recherche la notification de paiement
        $pay_token = $result['pay_token'];
        Cookie::queue('pay_token', $pay_token, '10');
        Cookie::queue('amount', $amount, '10');
        Cookie::queue('order_id', $order_id, '10');

        return redirect($payment_url);

    }

    // obtenir le status du paiement

    public function status(Request $request)
    {
        // nous allons utiliser nos trois variables de session
        $pay_token = $request->cookie('pay_token');
        $order_id = $request->cookie('order_id');
        $amount = $request->cookie('amount');

        $payment = new OrangeMoney();
        $rep = $payment->checkTransactionStatus($order_id, $amount, $pay_token);

        // pour eviter d'aficher une erreur lorsque le token n'existe pas
        if (!is_string($rep)) {
            // obtenir le status du paiement
            $status = $rep['status'];
            if ($status == "SUCCESS") {
                // on peut maintenant ajouter le paiement dans la base de donné
            }

            // nous allons maintenant detruie les session
            // pour que si on click sur le bouton retour on enregistre pas une autre ligne dans la bdd 
            Cookie::queue(Cookie::forget('pay_token'));
            Cookie::queue(Cookie::forget('amount'));
            Cookie::queue(Cookie::forget('order_id'));

            // returner la vue notification avec la variable status
             return view('retourorange', compact('status'));    
        }

        // si le token n'existe pas ridiriger vers la page d'accueil pour eviter les erreurs
             return redirect('promotion');

        }

    

}
