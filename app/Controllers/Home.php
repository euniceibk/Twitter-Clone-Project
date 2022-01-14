<?php

namespace App\Controllers;
use App\Models\DataModel;
// $this->DataModel = new \App\Models\DataModel();

class Home extends BaseController
{
    public function index(){

        $this->DataModel = new DataModel();

        $random = $featured_news = $this->DataModel->where('status', 0)->orderBy('rand()')->limit(1)->find();
        $total = $this->DataModel->countAll();
        $done = $this->DataModel->where('status', 1)->countAllResults();

        $data = [
            'pidgin' => $random[0]->pidgin,
            'id' => $random[0]->id,
            'total' => $total,
            'done' => $done
        ];
        echo view('ibukun', $data);
    }


    public function update_pidgin(){
        $rules = [
            'id' => 'required',
            'english' => 'required'
        ];

        if (!$this->validate($rules)) {
            $response['message'] = $this->validator;
            $response['status'] = 'error';
        } else {

            $this->DataModel = new DataModel();
            
            $english = $this->request->getVar('english');
            $id = $this->request->getVar('id');
            
            if($this->DataModel->updatePidgin($id,$english)){
                $response['message'] = 'Saved successfully!';
                $response['status'] = 'success';
            } else {
                $response['message'] = 'Unable to save english text in the DB';
                $response['status'] = 'error';
            }

        }
        // $response['status'] = "success";
        // $response['message'] = "Success";
        
        return json_encode($response);
    }

    public function twitter_clone(){
        $data = [];
        echo view('twitter_clone', $data);
    }
}
