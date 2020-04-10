<?php

namespace App\Http\Controllers;

use Storage;
use DB;
use Illuminate\Http\Request;

class JudgmentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function judgment()
    {
        $data['allCourtList'] = DB::table('courtlist')->orderBy('DisplayName', 'ASC')->get();
        $data['supremeCourtValue'] = '';
        $data['highCourtValue'] = '';
        $data['tribunalCourtValue'] = '';
        foreach($data['allCourtList'] as $key=>$value){
            if($value->CourtTypeId == 1){
                $data['supremeCourtValue'] .= $value->Id.',';
            }elseif($value->CourtTypeId == 2){
                $data['highCourtValue'] .= $value->Id.',';
            }else{
                $data['tribunalCourtValue'] .= $value->Id.',';
            }
            
        }
        // echo('<pre>');
        // print_r($data['allCourtList']);die;
        return view('pages.judgment', $data);
    }

    public function getMetadata(Request $request)
    {
        if (isset($request->searchString) && !empty($request->searchString)) {
            $searchString = str_replace(" ", "%20", $request->searchString);
        } else {
            $searchString = '';
        }
        $pageNo = $request->pageNo;
        $type = $request->type;
        $jsonString = $request->jsonString;
        $filter = ''; //$request->filter;
        $sortBy = $request->sortBy;
        $pageSize = $request->pageSize;
        $supremeCourtCaseCount = 0;
        $highCourtCaseCount = 0;
        $tribunalCourtCaseCount = 0;
        $client = new \GuzzleHttp\Client();
        // $res = $client->get('http://legitquestapi-sat.ap-south-1.elasticbeanstalk.com/api/Search/GetJudgmentDetailsWithFilter?searchString=' . $searchString . '&pageNo=' . $pageNo . '&totalSize=' . $pageSize . '&type=' . $type . '&filterList=' . $jsonString . '&filter=' . $filter . '&sortby=' . $sortBy, ['auth' =>  ['user', 'pass']]);

        // By ABHI
        // $res = $client->get('http://legitquestapi-sat.ap-south-1.elasticbeanstalk.com/api/Search/GetJudgmentDetails?searchString=' . $searchString . '&pageNo=' . $pageNo . '&totalSize=' . $pageSize . '&type=' . $type . '&filter=' . $filter . '&sortby=' . $sortBy, ['auth' =>  ['user', 'pass']]);
        $allCourtList = DB::table('courtlist')->get();
        $res = $client->get('http://legitquestapi-sat.ap-south-1.elasticbeanstalk.com/api/Search/GetJudgmentDetailsWithFilter?searchString=' . $searchString . '&pageNo=' . $pageNo . '&totalSize=' . $pageSize . '&type=' . $type . '&filterList=' . $jsonString . '&filter=' . $filter . '&sortby=' . $sortBy, ['auth' =>  ['user', 'pass']]);
        // echo $res->getStatusCode(); // 200
        // print_r($res->getBody());
        // echo $res->getBody(); // { "type": "User", ....
        // dd($res->getBody());
        $metaData = json_decode($res->getBody()->getContents());
        // $metaData->SupremeCourtList = [];
        // $metaData->HighCourtList = [];
        // $metaData->OtherCourtList = [];
        foreach ($allCourtList as $allCourtListKey => $allCourtListValue) {
            if (!empty($metaData->CourtList)) {
                foreach ($metaData->CourtList as $CourtListKey => $CourtListValue) {
                    if ($CourtListValue->CourtId == $allCourtListValue->Id) {
                        $metaData->CourtList[$CourtListKey]->CourtName = $allCourtListValue->Name;
                        $metaData->CourtList[$CourtListKey]->CourtTypeId = $allCourtListValue->CourtTypeId;
                        $metaData->CourtList[$CourtListKey]->Short_Name = $allCourtListValue->Short_Name;
                        /* if ($allCourtListValue->CourtTypeId == 1) {
                            $supremeCourtCaseCount = $supremeCourtCaseCount + $CourtListValue->CaseCount;
                            $temp = array('CourtName' => "Supreme Court", 'CaseCount' => $supremeCourtCaseCount, 'CaseIds' => "1");
                            array_push($metaData->SupremeCourtList, $temp);
                        } elseif ($allCourtListValue->CourtTypeId == 2) {
                            $highCourtCaseCount = $supremeCourtCaseCount + $CourtListValue->CaseCount;
                            $temp = array('CourtName' => "High Court", 'CaseCount' => $highCourtCaseCount, 'CaseIds' => "1");
                            array_push($metaData->HighCourtList, $temp);
                        } else {
                            $tribunalCourtCaseCount = $supremeCourtCaseCount + $CourtListValue->CaseCount;
                            $temp = array('CourtName' => "Tribunal", 'CaseCount' => $tribunalCourtCaseCount, 'CaseIds' => "1");
                            array_push($metaData->OtherCourtList, $temp);
                        } */
                    }
                }
            }
            if (!empty($metaData->JudgmentList)) {
                foreach ($metaData->JudgmentList as $JudgmentListKey => $JudgmentListValue) {
                    if ($JudgmentListValue->CourtId == $allCourtListValue->Id) {
                        $metaData->JudgmentList[$JudgmentListKey]->CourtName = $allCourtListValue->Name;
                        $metaData->JudgmentList[$JudgmentListKey]->CourtTypeId = $allCourtListValue->CourtTypeId;
                        $metaData->JudgmentList[$JudgmentListKey]->Short_Name = $allCourtListValue->Short_Name;
                    }
                }
            }
        }
        return response()->json(array('success' => true, 'metaData' => $metaData));
    }

    public function getCaseDetailsByBenchFilter(Request $request)
    {
        if (isset($request->SearchText) && !empty($request->SearchText)) {
            $SearchText = str_replace(" ", "%20", $request->SearchText);
        } else {
            $SearchText = '';
        }
        $pageNo = $request->pageNo;
        $type = $request->type;
        if (isset($request->Courtarray) && !empty($request->Courtarray)) {
            $temp = array(array('FilterField' => 'courtId', 'FilterType' => 'filter', 'FilterValue' => $request->Courtarray));
            $jsonString = json_encode($temp);
            $filterListJson = '&filterList=' . $jsonString;
        }else{
            $filterListJson = '';
        }
        // $jsonString = '[{"FilterField":"courtId","FilterType":"filter","FilterValue":"1,"}]';
        // $request->jsonString;
        // print_r($jsonString);die;
        $filter = ''; //$request->filter;
        $sortBy = $request->sortBy;
        $pageSize = $request->pageSize;
        $client = new \GuzzleHttp\Client();
        $allCourtList = DB::table('courtlist')->get();
        $res = $client->get('http://legitquestapi-sat.ap-south-1.elasticbeanstalk.com/api/Search/GetJudgmentDetailsWithFilter?searchString=' . $SearchText . '&pageNo=' . $pageNo . '&totalSize=' . $pageSize . '&type=' . $type . $filterListJson . '&filter=' . $filter . '&sortby=' . $sortBy, ['auth' =>  ['user', 'pass']]);
        // echo $res->getStatusCode(); // 200
        // print_r($res->getBody());
        // echo $res->getBody(); // { "type": "User", ....
        // dd($res->getBody());
        $metaData = json_decode($res->getBody()->getContents());
        // $metaData->SupremeCourtList = [];
        // $metaData->HighCourtList = [];
        // $metaData->OtherCourtList = [];
        // $metaData->caseText = $SearchText;
        // $metaData->UserId = '' ;
        // $metaData->IsMobileDevice = false ;
        // $metaData->filterValueList = "";
        // $metaData->filterList = '' ;
        foreach ($allCourtList as $allCourtListKey => $allCourtListValue) {
            if (!empty($metaData->CourtList)) {
                foreach ($metaData->CourtList as $CourtListKey => $CourtListValue) {
                    if ($CourtListValue->CourtId == $allCourtListValue->Id) {
                        $metaData->CourtList[$CourtListKey]->CourtName = $allCourtListValue->Name;
                        $metaData->CourtList[$CourtListKey]->CourtTypeId = $allCourtListValue->CourtTypeId;
                        $metaData->CourtList[$CourtListKey]->Short_Name = $allCourtListValue->Short_Name;
                        /* if ($allCourtListValue->CourtTypeId == 1) {
                            $supremeCourtCaseCount = $supremeCourtCaseCount + $CourtListValue->CaseCount;
                            $temp = array('CourtName' => "Supreme Court", 'CaseCount' => $supremeCourtCaseCount, 'CaseIds' => "1");
                            array_push($metaData->SupremeCourtList, $temp);
                        } elseif ($allCourtListValue->CourtTypeId == 2) {
                            $highCourtCaseCount = $supremeCourtCaseCount + $CourtListValue->CaseCount;
                            $temp = array('CourtName' => "High Court", 'CaseCount' => $highCourtCaseCount, 'CaseIds' => "1");
                            array_push($metaData->HighCourtList, $temp);
                        } else {
                            $tribunalCourtCaseCount = $supremeCourtCaseCount + $CourtListValue->CaseCount;
                            $temp = array('CourtName' => "Tribunal", 'CaseCount' => $tribunalCourtCaseCount, 'CaseIds' => "1");
                            array_push($metaData->OtherCourtList, $temp);
                        } */
                    }
                }
            }
            if (!empty($metaData->JudgmentList)) {
                foreach ($metaData->JudgmentList as $JudgmentListKey => $JudgmentListValue) {
                    if ($JudgmentListValue->CourtId == $allCourtListValue->Id) {
                        $metaData->JudgmentList[$JudgmentListKey]->CourtName = $allCourtListValue->Name;
                        $metaData->JudgmentList[$JudgmentListKey]->CourtTypeId = $allCourtListValue->CourtTypeId;
                        $metaData->JudgmentList[$JudgmentListKey]->Short_Name = $allCourtListValue->Short_Name;
                    }
                }
            }
        }
        return response()->json(array('success' => true, 'metaData' => $metaData));
    }
}
