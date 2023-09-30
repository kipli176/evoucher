<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session(); 
        // print_r($_SESSION);
        // print_r(session()->get());
        if(session()->get('datane')){
            if(array_key_exists('_id',session()->get('datane'))){
                return redirect()->to('/barcode/'.session()->get('datane')['_id']);
            }else{
            return view('index');
            }
        }else{
            return view('index');
        }
    } 
    public function set()
    {
        $session = session(); 
        session()->set('user',['coa'=>'coba']);
    } 
    public function qr($id)
    {
        $data = BASE.'/merchant/'.$id;
        $size = '512x512';
        $logo = 'img/logo.png';
        header('Content-type: image/png');
        $QR = imagecreatefrompng('https://chart.googleapis.com/chart?cht=qr&chld=H|0&chs='.$size.'&chl='.urlencode($data));
        if($logo !== FALSE){
            $logo = imagecreatefromstring(file_get_contents($logo));

            $QR_width = imagesx($QR);
            $QR_height = imagesy($QR);
            
            $logo_width = imagesx($logo);
            $logo_height = imagesy($logo);
            
            $logo_qr_width = $QR_width/3;
            $scale = $logo_width/$logo_qr_width;
            $logo_qr_height = $logo_height/$scale;
            
            imagecopyresampled($QR, $logo, $QR_width/3, $QR_height/3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
        }
        imagepng($QR);
        imagedestroy($QR);
    }
    public function verif($id)
    {
        $data['id_merchant']=$id;
        return view('verif',$data);
    }
    public function nopol()
    {
        helper(['mongo']);
        session()->remove('datane');
        $nopol=$this->request->getPost('dp').'-'.$this->request->getPost('tg').'-'.$this->request->getPost('bl');
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://evoucher.sukipli.work/ceknopol.php', ['verify' => false,'query' => ['nopol' => $nopol]]);
        $nopole=json_decode($response->getBody(),true);
        $nopole +=['id_merchant'=>$this->request->getPost('id_merchant')]; 
        $nopole +=['wa'=>$this->request->getPost('hp')];  
        // print_r($nopole);
        if(getNopol('data',$nopol)!=''){  
            $data['errors']=array('Maaf nopol sudah pernah menggunakan eVoucher'); 
            $data['id_merchant']= $this->request->getPost('id_merchant');
            return view('verif',$data);
        }else if($nopole['pemilik']==''){  
            $data['errors']=array('Maaf nopol kendaraan anda belum terdaftar dalam sistem atau belum tersedia'); 
            $data['id_merchant']= $this->request->getPost('id_merchant');
            return view('verif',$data);
        }else{ 
            $data['nopol']= $nopole;
            session()->set('datane', $nopole);
            return view('detail',$data);
        }
    } 
    public function simpan()
    { 
        helper(['mongo']); 
        $sesi=session()->get('datane'); 
        // print_r(session()->get());
        $simpan=saveData('data',$sesi); 
        $usere=getId('data',$simpan);
        // session()->push('datane', $usere); 
        return redirect()->to('/barcode/'.$simpan); 
    }

    public function barcode($id)
    {
        helper(['mongo']);
        $usere=getId('data',$id);
        $merchant=getId('merchant',$usere['id_merchant']);
        session()->push('datane', $usere); 
        $data['_id']=$id;
        $data['usere']=$merchant;
        return view('barcode',$data);
    }
    
    // public function barcoded($id)
    // {
    //     helper(['mongo']);
    //     $session = session();  
    //     // echo $session->tnkb;
    //     print_r($_SESSION);
    //     $data['barcode']=$session;
    //     // $simpan=saveData('data',$_SESSION);
    //     return view('barcode',$data);
    //     // if(getNopol('data',$nopole['tnkb'])==''){ 
    //     //     $data['nopol']= $nopole;
    //     //     $data['wa']= $this->request->getPost('hp');
    //     //     $simpan=saveData('data',$nopole);
    //     //     return view('detail',$data);
    //     // }else{
    //     //     $data['errors']=array('Maaf nopol kendaraan anda sudah memakai eVoucher');
    //     //     return view('verif',$data);

    //     // }


    //     // if(getId('data',$id)==''){
    //     //     $data['errors']=array('Maaf nopol kendaraan anda sudah memakai eVoucher');
    //     //     return view('verif',$data);
    //     // }else{
    //     //     prosesNopol('data',$id);
    //     //     // return view('barcode');
    //     // }
    // }
    public function tutup()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/');
    }
}
