<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Clients;
use App\Models\Clients as ModelsClients;

class client extends Controller
{
    //

    function save(Request $req){
        //print_r($req->input());
        $client= new ModelsClients();
        $client->pilot=$req->pilot;
        $client->nairobi=$req->nairobi;
        $client->client=$req->client;
        $client->ref=$req->ref;
        $client->date=$req->date;
        $client->age=$req->age;
        $client->gender=$req->gender;
        $client->dob=$req->dob;
        $client->email=$req->email;
        $client->contact_address=$req->caddress;
        $client->mobile_number=$req->no;
        $client->other_contacts=$req->ocontacts;
        $client->residence=$req->residence;
        $client->level_of_education=$req->loe;
        $client->language=$req->language;
        $client->proficiency_level=$req->pl;
        $client->employment_status=$req->employment_status;
        $client->occupation=$req->occupation;
        $client->income_per_month=$req->ipm;
        $client->pay_per_day=$req->pd;
        $client->marital_status=$req->marital_status;
        $client->vulnerability=$req->vulnerability;
        $client->abuse_of_office=$req->aof;
        $client->criminal=$req->criminal;
        $client->sexual_violence=$req->sexual_violence;
        $client->civil=$req->civil;
        $client->fileToUpload=$req->fileToUpload;
        $client->summary_of_case=$req->summary_of_case;
        $client->action_taken=$req->action_taken;
        $client->know_about_us=$req->know_about_us;
        $client->legal_aid=$req->legal_ait;
        $client->institute=$req->institute;
        $client->contacts=$req->contacts;
        $client->nature_of_assistance=$req->nature;
        $client->date_of_case_filed=$req->date_of_case_filed;
        $client->court=$req->court;
        $client->court_no=$req->court_no;
        $client->status_of_case=$req->status_of_case;
        $client->times_attended_court=$req->times;
        $client->rep=$req->rep;
        $client->results=$req->results;
        $client->recommendation=$req->recommendation;
        $client->officer=$req->officer;
        $client->date_today=$req->date_today;
        $client->save();
        return redirect('submit');
    }
   

}
