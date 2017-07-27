<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LG2 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
	parent::__construct();
	$this->load->model('mymodel');

        date_default_timezone_set('Asia/Jakarta');
	}
	
	
	function header2(){
		$data = array();
		return $this->load->view('global/header2',$data,true);
	}
	
	function footer2(){
		$data = array();
		return $this->load->view('global/footer2',$data,true);
	}
	
	public function index()
	 {	
		$d=date("Y-m-d H:i:s");

		$query = $this->mymodel->get_view($d);		
		$result['view']='';
		$result['event_start']='';
		$result['event_finish']='';
		foreach($query as $row) {
		$result['view']=$row->view;	 
		$result['event_start']=$row->event_start;	 
		$result['event_finish']=$row->event_finish;	 
		}
		
		$query1 = $this->mymodel->get_view1($d);	
		foreach($query1 as $row1) {		
		$result1['event_start']=date("Y-m-d H:i:s",strtotime($row1->event_start));
		$result1['event_finish']=date("Y-m-d H:i:s",strtotime($row1->event_finish));	 
		}
		
		$query2 = $this->mymodel->get_view2($d);	
		foreach($query2 as $row2) {	
		$result2['event_start']=date("Y-m-d H:i:s",strtotime($row2->event_start));
		$result2['event_finish']=$row2->event_finish;	 
		}
		
		$query3 = $this->mymodel->get_view3($d);	
		foreach($query3 as $row3) {
		$result3['event_start']=date("Y-m-d H:i:s",strtotime($row3->event_start));
		$result3['event_finish']=date("Y-m-d H:i:s",strtotime($row3->event_finish));	 
		}
		
		$query4 = $this->mymodel->get_view4($d);	
		foreach($query4 as $row4) {	
		$result4['event_start']=date("Y-m-d H:i:s",strtotime($row4->event_start));
		$result4['event_finish']=date("Y-m-d H:i:s",strtotime($row4->event_finish));	 
		}
		
		$query5 = $this->mymodel->get_view5($d);	
		foreach($query5 as $row5) {	
		$result5['event_start']=date("Y-m-d H:i:s",strtotime($row5->event_start));
		$result5['event_finish']=date("Y-m-d H:i:s",strtotime($row5->event_finish));	 
		}
		
		$query6 = $this->mymodel->get_view6($d);	
		foreach($query6 as $row6) {	
		$result6['event_start']=date("Y-m-d H:i:s",strtotime($row6->event_start));
		$result6['event_finish']=date("Y-m-d H:i:s",strtotime($row6->event_finish));	 
		}
		
		$query7 = $this->mymodel->get_view7($d);	
		foreach($query7 as $row7) {	
		$result7['event_start']=date("Y-m-d H:i:s",strtotime($row7->event_start));
		$result7['event_finish']=date("Y-m-d H:i:s",strtotime($row7->event_finish));	 
		}
		
		
		/*
		echo $d;
                 
		echo "<br>".$result1['event_finish'].">".$result1['event_start']."<br>";
		echo $result2['event_finish'].">".$result2['event_start']."<br>";
		echo $result3['event_finish'].">".$result3['event_start']."<br>";
		echo $result4['event_finish'];
		*/
		
		if(($result1['event_finish'] > $d) &&($result1['event_start'] < $d)){		
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result1['event_finish']));			
			$comp = array(
				'content' => $this->load->view('early_bird/hifi',$data,true),
				'header' => $this->header2(),
				'footer' => $this->footer2(),			
			);
			$this->load->view('layout/index',$comp);
		}else if($result2['event_finish']>=$d && $result2['event_start'] <= $d){		
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result2['event_finish']));
			
			$comp = array(
				'content' => $this->load->view('early_bird/bundling',$data,true),
				'header' => $this->header2(),
				'footer' => $this->footer2(),			
			);
			$this->load->view('layout/index',$comp);  						
		}else if($result3['event_finish']>= $d && $result3['event_start'] <= $d){			
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result3['event_finish']));		
			$comp = array(
				'content' => $this->load->view('early_bird/ear_set',$data,true),
				'header' => $this->header2(),						
				'footer' => $this->footer2(),
			);
			$this->load->view('layout/index',$comp);  
		}else if($result4['event_finish']>= $d && $result4['event_start'] <= $d){			
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result4['event_finish']));
			$comp = array(
				'content' => $this->load->view('early_bird/bundling',$data,true),
				'header' => $this->header2(),
				'footer' => $this->footer2(),
			);
		$this->load->view('layout/index',$comp);  
		}else if($result5['event_finish']>= $d && $result5['event_start'] <= $d){			
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result5['event_finish']));
			$comp = array(
				'content' => $this->load->view('early_bird/cam_360',$data,true),
				'header' => $this->header2(),
				'footer' => $this->footer2(),
			);
		$this->load->view('layout/index',$comp);
		}else if($result6['event_finish']>= $d && $result6['event_start'] <= $d){			
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result6['event_finish']));
			$comp = array(
				'content' => $this->load->view('early_bird/roling_both',$data,true),
				'header' => $this->header2(),
				'footer' => $this->footer2(),
			);
		$this->load->view('layout/index',$comp);
		}else			
		{
			//$this->load->view('early_bird/index',$data);
			echo "<br>Finished on ".$d;
		}
		
	 }
	 
	
	 function phase01() {	
		$this->load->view('LG/index');
	 }	
	
	function phase02() {	
		$data = array();
		
		$d=date("Y-m-d H:i");
					
		//$data['event_time'] = date("Y-m-d H:m:i",strtotime($result['event_finish']));
		$data['event_time']="2016-05-25 23:59:00";
		$comp = array(
			//'content' => $this->load->view('early_bird/p3_01',$data,true),
			//'content' => $this->load->view('LG/exhibition',$data,true),
			//'content' => $this->load->view('LG/mechanism',$data,true),
			'content' => $this->load->view('LG/pre-order',$data,true),
			'header' => $this->header2(),
			'footer' => $this->footer2(),			
		);
		$this->load->view('layout/index',$comp);  
	 }
}
