<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class StaticpagesController extends Controller
{	/* About Us */
    public function about(){
        return view('static.a-propos-de-nous');
    }
    /* How It Work */
    public function howitwork(){
    	View::share("title", "Comment Ça Marche");
        return view('static.comment-ca-marche');
    }
    /* Join Us */
    public function joinus(){
        View::share("title", "Rejoignez Nous");
        return view('static.rejoignez-nous');
    }
    /* FAQS Clients */
    public function faqsclients(){
        View::share("title", "FAQs pour Clients");
        return view('static.faqs-clients');
    }
    /* FAQS Vendeur */
    public function faqsseller(){
        View::share("title", "FAQs pour Entreprises");
        return view('static.faqs-entreprises');
    }
    /* Politique de Confidentialite */
    public function confidentialite(){
        View::share("title", "Politique de Confidentialité");
        return view('static.politique-de-confidentialite');
    }
    /* Politique de Cookies */
    public function cookies(){
        View::share("title", "Politique de Cookies");
        return view('static.politique-de-cookies');
    }
    /* Conditions Generales */
    public function cgenerales(){
        View::share("title", "Condition Général de Vente");
        return view('static.conditions-generales');
    }
    /* Contact Us */
    public function contact(){
        return view('static.contactez-nous');
    }
}
