<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\BloodRequest;
use App\donateHistory;
use PDF;

class DonorController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donors = User::orderBy('id', 'desc')->get();
        return view('admin.donor.index')->with('donors', $donors);
    }



    /**
     * Show single donor details
     * 
     */
    public function details($edit_token){
        $donor = User::where('edit_token', $edit_token)->first();
        $donorRequests = BloodRequest::where('usertoken', $edit_token)->orderBy('id', 'desc')->get();
        $donateHistorys = donateHistory::where('donorID', $donor->id)->orderBy('id', 'desc')->get();
        return view('admin.donor.details', compact('donor', 'donorRequests', 'donateHistorys'));
        
    }



    /**
     * Show all donor information to print pdf file
     * 
     */
    public function pdf(){
        $donors = User::orderBy('id', 'desc')->get();

        $table = "<center><h1 style='color:green;margin-top:0px;margin-bottom:10px;border-bottom:2px solid green;padding-bottom:3px'>All Donor Information</h1></center>";

        $table .= "<div style='width:100%;height:2px;background:green'></div>";

        $table .= "<style type='text/css'>tr:nth-child(odd){background:#dddfe2}</style><table border='1' style='border-collapse:collapse;width:100%' cellpadding='5px'><thead><tr style='background:#f4f4f4'><th>SL</th><th>Name</th><th>Blood</th><th>Phone</th><th>Address</th><th>District</th><th>Last Donate</th></tr></thead><tbody>";
            $i = 1;
            foreach ($donors as $donor) {
                $table .= "<tr>";
                    $table .= "<td>".$i."</td>";
                    $table .= "<td>".$donor->name."</td>";
                    $table .= "<td>".$donor->blood."</td>";
                    $table .= "<td>".$donor->phone."</td>";
                    $table .= "<td>".$donor->street_address."</td>";
                    $table .= "<td>".$donor->district."</td>";
                    $table .= "<td>".$donor->last_donate_date."</td>";
                $table .= "</tr>";
                $i++;
            }
                
        $table .= "</tbody></table>";       

        $pdf = PDF::loadHtml($table);
        return $pdf->stream();
    }




    /**
     * Show single donor information to print pdf file
     * 
     */
    public function detailsPdf($edit_token){
        $donor = User::where('edit_token', $edit_token)->first();
        $donorRequests = BloodRequest::where('usertoken', $edit_token)->orderBy('id', 'desc')->get();
        $donateHistorys = donateHistory::where('donorID', $donor->id)->orderBy('id', 'desc')->get();
        
        $table = "<center><h1 style='color:green;margin-top:0px;margin-bottom:10px;border-bottom:2px solid green;padding-bottom:3px'>Donor Information</h1></center>";

        $table .= "<div style='width:100%;height:2px;background:green'></div>";

        $table .= "<h3><b style='color:green'>Name:</b> ".$donor->name."<br>";
        $table .= "<b style='color:green'>Blood:</b> ".$donor->blood."<br>";
        $table .= "<b style='color:green'>Phone:</b> 0".$donor->phone."<br>";
        $table .= "<b style='color:green'>Address:</b> ".$donor->street_address.", ".$donor->district.", ".$donor->division.".<br>";
        $table .= "<b style='color:green'>Last Donate Date:</b> ".$donor->last_donate_date."</h3>";


        $table .= "<h3 style='color:green;margin-top:0px;margin-bottom:5px;border-bottom:2px solid green;padding-bottom:3px'>Donate History</h3>";

        $table .= "<div style='width:100%;height:2px;background:green'></div>";

        
        $table .= "<style type='text/css'>tr:nth-child(odd){background:#dddfe2}</style><table border='1' style='border-collapse:collapse;width:100%' cellpadding='5px'><thead><tr style='background:#f4f4f4'><th>SL</th><th>Name</th><th>Blood</th><th>Donate Date</th><th>Bag Quentity</th></tr></thead><tbody>";
            $i = 1;
            foreach ($donateHistorys as $donateHistory) {
                $table .= "<tr>";
                    $table .= "<td>".$i."</td>";
                    $table .= "<td>".$donateHistory->name."</td>";
                    $table .= "<td>".$donateHistory->blood."</td>";
                    $table .= "<td>".$donateHistory->donate_date."</td>";
                    $table .= "<td>".$donateHistory->bag_quantity."</td>";
                $table .= "</tr>";
                $i++;
            }
                
        $table .= "</tbody></table>"; 


        $table .= "<br><br>";

        $table .= "<h3 style='color:green;margin-top:0px;margin-bottom:5px;border-bottom:2px solid green;padding-bottom:3px'>Blood Request History</h3>";

        $table .= "<div style='width:100%;height:2px;background:green'></div>";

        
        $table .= "<style type='text/css'>tr:nth-child(odd){background:#dddfe2}</style><table border='1' style='border-collapse:collapse;width:100%' cellpadding='5px'><thead><tr style='background:#f4f4f4'><th>SL</th><th>Name</th><th>Blood</th><th>Request Date</th><th>Bag Quentity</th><th>Status</th></tr></thead><tbody>";
            $i = 1;
            foreach ($donorRequests as $donorRequest) {
                $table .= "<tr>";
                    $table .= "<td>".$i."</td>";
                    $table .= "<td>".$donorRequest->name."</td>";
                    $table .= "<td>".$donorRequest->blood."</td>";
                    $table .= "<td>".$donorRequest->date."</td>";
                    $table .= "<td>".$donorRequest->bag_quantity."</td>";
                    if($donorRequest->status == 0){
                        $table .= "<td>Pending</td>";
                    }else{
                        $table .= "<td>Accept</td>";
                    }
                $table .= "</tr>";
                $i++;
            }
                
        $table .= "</tbody></table>"; 
        

        $pdf = PDF::loadHtml($table);
        return $pdf->stream();
    }


}
