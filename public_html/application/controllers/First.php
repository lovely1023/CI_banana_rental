<?php
/**
 * 
 */
class First extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Rent_m');
		$this->load->model('Payment_m');
		$this->load->library('email');
		if($this->session->userdata('language')=='en'){
			$this->lang->load("first","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("first","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("first","fr");
		}
		else{
			$this->lang->load("first","pt");
		}


		$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'hosting47.serverhs.org';
        $config['smtp_port']    = '587';
        $config['smtp_user']    = 'suporte@bananacampers.pt';
        $config['smtp_pass']    = 'S&t7PN0KrPF&';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html';
        $config['validation'] = TRUE;


        $this->email->initialize($config);
		$this->config->load('paypal');
		$config = array(
			'Sandbox' => $this->config->item('Sandbox'),
			'APIUsername' => $this->config->item('APIUsername'),
			'APIPassword' => $this->config->item('APIPassword'),
			'APISignature' => $this->config->item('APISignature'),
			'APISubject' => '',
			'APIVersion' => $this->config->item('APIVersion'),
			'DeviceID' => $this->config->item('DeviceID'),
			'ApplicationID' => $this->config->item('ApplicationID'),
			'DeveloperEmailAccount' => $this->config->item('DeveloperEmailAccount')
		);
		if ($config['Sandbox']) {
			error_reporting(E_ALL);
			ini_set('display_errors', '1');
		}
		$this->load->library('paypal/paypal_pro', $config);
		if($this->session->userdata('language')=='en'){
			$this->lang->load("first","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("first","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("first","fr");
		}
		else{
			$this->lang->load("first","pt");
		}
	}

	public function index()
	{
		$var['title']="Motorhome rental";
		$this->load->view('components/header',$var);

		$data = $this->Rent_m->get_all_first();
		$data['recent'] = $this->Rent_m->get_recent();
		$data['user'] = $this->User_m->get_sign();
		// var_dump($data['user']);exit;

		$data['notes'] = $this->Rent_m->get_note();
		$data['num'] = $this->Rent_m->note_num();

		$this->load->view('first',$data);
		$this->load->view('components/footer');
	}

    public function faqowner()
    {
        if($this->session->userdata('language')=='en'){
            $this->lang->load("faqowner","en");
        }elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("faqowner","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("faqowner","fr");
		}
		else{
            $this->lang->load("faqowner","pt");
        }

        $var['title']="Frequently Asked Questions(Owner)";
        $this->load->view('components/header',$var);
        $this->load->view('faq/faqowner');
        $this->load->view('components/footer');
    }

    public function faqtenant()
    {
        if($this->session->userdata('language')=='en'){
            $this->lang->load("faqtenant","en");
        }elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("faqtenant","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("faqtenant","fr");
		}
		else{
            $this->lang->load("faqtenant","pt");
        }

        $var['title']="Frequently Asked Questions(Tenant)";
        $this->load->view('components/header',$var);
        $this->load->view('faq/faqtenant');
        $this->load->view('components/footer');
    }

	public function language()
	{
		$lang = $this->input->get_post('lang');
		if($lang=='en'){
			$this->session->set_userdata('language','en');
		}elseif ($lang=='fr') {
			$this->session->set_userdata('language','fr');
		}elseif ($lang=='sp') {
			$this->session->set_userdata('language','sp');
		}
		else{
			$this->session->set_userdata('language','pt');
		}
	}

	public function sign_up()
	{
		if($this->session->userdata('language')=='en'){
			$this->lang->load("signup","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("signup","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("signup","fr");
		}
		else{
			$this->lang->load("signup","pt");
		}

		$var['title']="Sign up";
		// $this->load->view('components/header',$var);
		// $this->load->view('sign/sign_up');
		$this->load->view('sign/sign_up-new', $var);
		$this->load->view('components/footer');
	}

	public function sign_in(){
		if($this->session->userdata('language')=='en'){
			$this->lang->load("signin","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("signin","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("signin","fr");
		}
		else{
			$this->lang->load("signin","pt");
		}
		$var['title']="Sign in";
		// $this->load->view('components/header',$var);
		// $this->load->view('sign/sign_in');
		$this->load->view('sign/login', $var);
		$this->load->view('components/footer');
		
	}

	public function register(){
	    
		$user['first']=$this->input->post('first');
		$user['last']=$this->input->post('last');
		$yy=$this->input->post('yy');
		$mm=$this->input->post('mm');
		$dd=$this->input->post('dd');
		$user['birth']=$yy.'-'.$mm.'-'.$dd;
		$user['email']=$this->input->post('email');
		$user['password']=md5($this->input->post('password'));
		$user['phone_num']=$this->input->post('phone');
		$user['Country']=$this->input->post('Country');
		$user['City']=$this->input->post('City');
		$user['House_number']=$this->input->post('House_number');
		$user['Street']=$this->input->post('Street');
		$user['Postal_Code']=$this->input->post('Postal_Code');

		$result=$this->User_m->read_check($user['email'],$user['password']);

		if ($result=="new_email") {
		  
			$this->User_m->register($user);
			$text1 = $this->lang->line('text1');
			$text2 = $this->lang->line('text2');
			$text3 = $this->lang->line('text3');
			$text4 = $this->lang->line('text4');
			$this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
			$this->email->to($user['email']);
		
			$this->email->subject($text1);
			$this->email->message(
			'<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
				<td align="center" bgcolor="#e9ecef">      
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
						<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">'.$text2.'</h1>
						</td>
					</tr>
					</table>     
				</td>
				</tr>   
				<tr>
				<td align="center" bgcolor="#e9ecef">       
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
						<p style="margin: 0;">'.$text3.'</p>
						</td>
					</tr>
					
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
						<p style="margin: 0;">'.$text4.'</p>
						</td>
					</tr>
					</table>       
				</td>
				</tr>
			</table>');
	
			$result = $this->email->send();
			
			$this->email->clear();
			
			$this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
			$this->email->to('suporte@bananacampers.pt');
		
			$this->email->subject('A new user sign up successfully!');
			$this->email->message(
			'<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
				<td align="center" bgcolor="#e9ecef">      
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
						<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">A new user sign up now!</h1>
						</td>
					</tr>
					</table>     
				</td>
				</tr>   
				<tr>
				<td align="center" bgcolor="#e9ecef">       
					<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
						<p style="margin: 0;">user email:'.$user["email"].'</p>
						</td>
					</tr>
					
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
						<p style="margin: 0;">A new user sign up now.
						Please check your site. </p>
						</td>
					</tr>
					</table>       
				</td>
				</tr>
			</table>');
	        
	        $this->email->send();
	        $this->email->print_debugger();
			
			$this->session->set_userdata('email',$user['email']);
			
			echo "pass";
		}
		else{
			echo $result;			
		}
	}

	public function send_mail_bookend()
	{
		$this->Rent_m->send_mail_bookingend();
	}

	public function login(){
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		echo $this->User_m->check_user($email,$password);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('https://bananacampers.pt', 'refresh'); 
	}

	function forgot_pwd(){
		if($this->session->userdata('language')=='en'){
			$this->lang->load("forgotpw","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("forgotpw","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("forgotpw","fr");
		}
		else{
			$this->lang->load("forgotpw","pt");
		}
		$var['title']="Forgotten your password";
		// $this->load->view('components/header',$var);
		// $this->load->view('sign/forgot_pwd');
		$this->load->view('sign/forgot_pwd-new', $var);
		$this->load->view('components/footer');
	}

	function send_pwd(){
		if($this->session->userdata('language')=='en'){
			$this->lang->load("forgotpw","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("forgotpw","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("forgotpw","fr");
		}
		else{
			$this->lang->load("forgotpw","pt");
		}

		$to_email=$this->input->post('email');
		$result_check_email=$this->User_m->check_email($to_email);

		if($result_check_email=="yes"){
			$code=rand();
			$this->User_m->check_pin($to_email,$code);
			
			$reset = $this->lang->line('reset');
			$rescon = $this->lang->line('rescon');
			$greet = $this->lang->line('greet');
			$this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
			$this->email->to($to_email);
			
			$this->email->subject('suporte@bananacampers.pt:Forgotten-password');
			$this->email->message(
				'<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
					<td align="center" bgcolor="#e9ecef">      
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
							<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">'.$reset.'</h1>
							</td>
						</tr>
						</table>     
					</td>
					</tr>   
					<tr>
					<td align="center" bgcolor="#e9ecef">       
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
							<p style="margin: 0;">'.$rescon.'</p>
							</td>
						</tr>
						<tr>
							<td align="left" bgcolor="#ffffff">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
								<td align="center" bgcolor="#ffffff" style="padding: 12px;">
									<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
										<a href="http://bananacampers.pt/index.php/First/reset_pwd?code='.$code.'" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">'.$reset.'</a>
										</td>
									</tr>
									</table>
								</td>
								</tr>
							</table>
							</td>
						</tr> 
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
							<p style="margin: 0;">'.$greet.'</p>
							</td>
						</tr>
						</table>       
					</td>
					</tr>
				</table>');
			
			$result = $this->email->send();
			if($result){
				echo "send_ok";
			}else{
				echo "send_err";
			}
		}else{
			echo $result_check_email;
		}
	}

	function reset_pwd(){
		if($this->session->userdata('language')=='en'){
			$this->lang->load("forgotpw","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("forgotpw","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("forgotpw","fr");
		}
		else{
			$this->lang->load("forgotpw","pt");
		}
		$var['title']=$this->lang->line('reset');
		$data['code']=$this->input->get('code');

		
		$data['title']=$this->lang->line('reset');
		// $this->load->view('components/header',$var);
		// $this->load->view('sign/reset_pwd',$data);
		$this->load->view('sign/reset_pwd-new',$data);
		$this->load->view('components/footer');
	}

	function reset(){
		$password = md5($this->input->post('new_pwd'));
		$code = $this->input->post('code');

		$val=$this->User_m->reset_password($password,$code);
		if($val!=='err'){
			$this->session->set_userdata('email',$val->email);
			$this->session->set_userdata('first',$val->first);
			echo 1;
		}else{
			echo 0;
		}
	}

	public function driv()
	{
		$driving_up = $_FILES['driving_up'];
		$oldname1= $driving_up['name'];
		$x = explode('.', $oldname1);
		$extension1 = end($x);
		$data['driv_doc'] = time().'.'.$extension1;

		@move_uploaded_file($_FILES['driving_up']['tmp_name'], './uploads/driving_license/'.$data['driv_doc']);

		$idt_up = $_FILES['idt_up'];
		$oldname2= $idt_up['name'];
		$y = explode('.', $oldname2);
		$extension2 = end($y);
		$data['identity'] = time().'.'.$extension1;

		@move_uploaded_file($_FILES['idt_up']['tmp_name'], './uploads/identity_cards/'.$data['identity']);
 
		$email = $this->input->get_post('email');
		$driving = $this->input->get_post('driving');
		$identity = $this->input->get_post('identity');

		$val=$this->User_m->fileinfo_up($email,$data['driv_doc'],$data['identity'],$driving,$identity);

		$this->session->set_userdata('email',$email);
		
		
	}



	public function deposit_paypal($money,$bookid)
	{
		
		if($this->session->userdata('language')=='en'){
			$this->lang->load("deposit","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("deposit","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("deposit","fr");
		}
		else{
			$this->lang->load("deposit","pt");
		}
		$this->session->set_userdata('bookid',$bookid);
		if($money<=0){
			redirect('/');
		}else{

			$this->session->unset_userdata('PayPalResult');		
			$this->session->unset_userdata('shopping_cart');
			
			
			$cart['shopping_cart'] = array(
				'subtotal' => $money,
				'shipping' => 0,
				'handling' => 0,
				'tax' => 0,
			);
			$cart['shopping_cart']['grand_total'] =
				$cart['shopping_cart']['subtotal'] + $cart['shopping_cart']['shipping'] + $cart['shopping_cart']['handling'] + $cart['shopping_cart']['tax'];

			$this->load->vars('cart', $cart);		
			$this->session->set_userdata('shopping_cart', $cart);
			$cart = $this->session->userdata('shopping_cart');
			$SECFields = array(
				'maxamt' => round($cart['shopping_cart']['grand_total'] * 2,2), 
				'returnurl' => ('https://bananacampers.pt/index.php/First/GetExpressCheckoutDetails'),
				'cancelurl' => ('https://bananacampers.pt/index.php/First/OrderCancelled'),
				'brandname' => 'Bananacampers',
				'customerservicenumber' => '555-555-5555',
			);
			$Payments = array();
			$Payment = array(
				'amt' => $cart['shopping_cart']['grand_total'],
				'currencycode' => 'EUR',
			);
			array_push($Payments, $Payment);
			$PayPalRequestData = array(
				'SECFields' => $SECFields,
				'Payments' => $Payments,
			);
			
			$PayPalResult = $this->paypal_pro->SetExpressCheckout($PayPalRequestData);
			
			if(!$this->paypal_pro->APICallSuccessful($PayPalResult['ACK']))
			{
				
				$errors = array('Errors'=>$PayPalResult['ERRORS']);
				$this->load->vars('errors', $errors);
				$this->load->view('paypal/paypal_error');
			}
			else
			{						
				$this->session->set_userdata('PayPalResult', $PayPalResult);
				redirect($PayPalResult['REDIRECTURL'], 'Location');
			}
		}
	}

	function GetExpressCheckoutDetails()
	{ 
				
		if($this->session->userdata('language')=='en'){
			$this->lang->load("deposit","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("deposit","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("deposit","fr");
		}
		else{
			$this->lang->load("deposit","pt");
		}

		$cart = $this->session->userdata('shopping_cart');
		$SetExpressCheckoutPayPalResult = $this->session->userdata('PayPalResult');
		$PayPal_Token = $SetExpressCheckoutPayPalResult['TOKEN'];
		$PayPalResult = $this->paypal_pro->GetExpressCheckoutDetails($PayPal_Token);
		
		if(!$this->paypal_pro->APICallSuccessful($PayPalResult['ACK']))
		{
			
			$errors = array('Errors'=>$PayPalResult['ERRORS']);
			var_dump($errors);exit;
			$this->load->vars('errors', $errors);

			$this->load->view('paypal/paypal_error');
		}
		else
		{	
				
			$cart['paypal_payer_id'] = isset($PayPalResult['PAYERID']) ? $PayPalResult['PAYERID'] : '';
			$cart['phone_number'] = isset($PayPalResult['PHONENUM']) ? $PayPalResult['PHONENUM'] : '';
			$cart['email'] = isset($PayPalResult['EMAIL']) ? $PayPalResult['EMAIL'] : '';
			$cart['first_name'] = isset($PayPalResult['FIRSTNAME']) ? $PayPalResult['FIRSTNAME'] : '';
			$cart['last_name'] = isset($PayPalResult['LASTNAME']) ? $PayPalResult['LASTNAME'] : '';

			foreach($PayPalResult['PAYMENTS'] as $payment) {
				$cart['shipping_name'] = isset($payment['SHIPTONAME']) ? $payment['SHIPTONAME'] : '';
				$cart['shipping_street'] = isset($payment['SHIPTOSTREET']) ? $payment['SHIPTOSTREET'] : '';
				$cart['shipping_city'] = isset($payment['SHIPTOCITY']) ? $payment['SHIPTOCITY'] : '';
				$cart['shipping_state'] = isset($payment['SHIPTOSTATE']) ? $payment['SHIPTOSTATE'] : '';
				$cart['shipping_zip'] = isset($payment['SHIPTOZIP']) ? $payment['SHIPTOZIP'] : '';
				$cart['shipping_country_code'] = isset($payment['SHIPTOCOUNTRYCODE']) ? $payment['SHIPTOCOUNTRYCODE'] : '';
				$cart['shipping_country_name'] = isset($payment['SHIPTOCOUNTRYNAME']) ? $payment['SHIPTOCOUNTRYNAME'] : '';
			}			
			// $cart['shopping_cart']['shipping'] = $cart['shopping_cart']['subtotal']*0.04;
			$cart['shopping_cart']['shipping'] = 0;
			$cart['shopping_cart']['handling'] = 0;
			$cart['shopping_cart']['tax'] = 0;
			$cart['shopping_cart']['grand_total'] = number_format(
				$cart['shopping_cart']['subtotal']
				+ $cart['shopping_cart']['shipping']
				+ $cart['shopping_cart']['handling']
				+ $cart['shopping_cart']['tax'],2);

			
			$this->session->set_userdata('shopping_cart', $cart);
			
			$this->load->vars('cart', $cart);
			$cart = $this->session->userdata('shopping_cart');

			$SetExpressCheckoutPayPalResult = $this->session->userdata('PayPalResult');
			$PayPal_Token = $SetExpressCheckoutPayPalResult['TOKEN'];

			$DECPFields = array(
				'token' => $PayPal_Token, 								
				'payerid' => $cart['paypal_payer_id'], 							
			);
			$Payments = array();
			$Payment = array(
				'amt' => $cart['shopping_cart']['grand_total'],
				'itemamt' => number_format($cart['shopping_cart']['subtotal'],2),
				'currencycode' => 'EUR', 					                    
				'shippingamt' => number_format($cart['shopping_cart']['shipping'],2),
				'handlingamt' => number_format($cart['shopping_cart']['handling'],2),
				'taxamt' => number_format($cart['shopping_cart']['tax'],2), 			
				'shiptoname' => $cart['shipping_name'], 					           
				'shiptostreet' => $cart['shipping_street'], 					        
				'shiptocity' => $cart['shipping_city'], 					           
				'shiptostate' => $cart['shipping_state'], 					            
				'shiptozip' => $cart['shipping_zip'], 						            
				'shiptocountrycode' => $cart['shipping_country_code'], 				   
				'shiptophonenum' => $cart['phone_number'],  				   
				'paymentaction' => 'Sale', 					                               
			);		
			array_push($Payments, $Payment);		
			$PayPalRequestData = array(
				'DECPFields' => $DECPFields,
				'Payments' => $Payments,
			);		
			$PayPalResult = $this->paypal_pro->DoExpressCheckoutPayment($PayPalRequestData);
			
			if(!$this->paypal_pro->APICallSuccessful($PayPalResult['ACK']))
			{
				
				$errors = array('Errors'=>$PayPalResult['ERRORS']);

				$this->load->vars('errors', $errors);

				$this->load->view('paypal/paypal_error');
			}
			else
			{
				
				foreach($PayPalResult['PAYMENTS'] as $payment)
				{
					$cart['paypal_transaction_id'] = isset($payment['TRANSACTIONID']) ? $payment['TRANSACTIONID'] : '';
					$cart['paypal_fee'] = isset($payment['FEEAMT']) ? $payment['FEEAMT'] : '';
				}	
				$this->session->set_userdata('shopping_cart', $cart);
				$cart = $this->session->userdata('shopping_cart');
				
				if(empty($cart)) redirect('/');
				$this->load->vars('cart', $cart);

				$bookid = $this->session->userdata('bookid');
				$this->session->unset_userdata('bookid');

				$this->Payment_m->deposit($bookid);
				$data = $this->Payment_m->get_info($bookid);
				$amount = $data->allday_pr;
				$owner_email = $data->owner_email;

				$owner1 = $this->lang->line('owner1');
				$owner2 = $this->lang->line('owner2');
				$owner3 = $this->lang->line('owner3');
				$owner4 = $this->lang->line('owner4');
				$owner5 = $this->lang->line('owner5');

				$this->email->from('suporte@bananacampers.pt', 'Bananacampers.pt');
				$this->email->to($owner_email);    
				$this->email->subject($owner1);
				$this->email->message(
				'<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
					<td align="center" bgcolor="#e9ecef">      
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
							<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">
								'.$owner2.'
							</h1>
							</td>
						</tr>
						</table>     
					</td>
					</tr>   
					<tr>
					<td align="center" bgcolor="#e9ecef">       
						<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
								<p style="margin: 0;">'.$owner3.'</p>
							</td>
						</tr>
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
								<p style="margin: 0;">'.$owner4.$amount.' EUR</p>
							</td>
						</tr>
						<tr>
							<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
							<p style="margin: 0;">'.$owner5.'</p>
							</td>
						</tr>
						</table>       
					</td>
					</tr>
				</table>');
				$this->email->send();
				
				redirect('https://bananacampers.pt/index.php/My_booking');
			}
		}
	}

	public function OrderCancelled()
	{
		if($this->session->userdata('language')=='en'){
			$this->lang->load("deposit","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("deposit","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("deposit","fr");
		}
		else{
			$this->lang->load("deposit","pt");
		}
		$this->session->unset_userdata('PayPalResult');
		$this->session->unset_userdata('shopping_cart');
		$this->load->view('paypal/deposit_cancelled');
	}

	public function withdraw()
	{
		if($this->session->userdata('language')=='en'){
			$this->lang->load("deposit","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("deposit","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("deposit","fr");
		}
		else{
			$this->lang->load("deposit","pt");
		}
		if($this->session->has_userdata('email')){
			$var['title']=$this->lang->line('with');
			$data['user'] = $this->User_m->get_sign();
			$this->load->view('components/header',$var);
			$data['notes'] = $this->Rent_m->get_note();
		    $data['num'] = $this->Rent_m->note_num();
			$this->load->view('userpage/components/header',$data);			
			$this->load->view('components/footer');
			$this->load->view('withdraw');
		}else{
			$var['title']= $this->lang->line('motorental');
			$this->load->view('components/header',$var);
			$data = $this->Rent_m->get_all_first();
			$data['recent'] = $this->Rent_m->get_recent();
			$data['user'] = $this->User_m->get_sign();
			$this->load->view('first',$data);
			$this->load->view('components/footer'); 
		}
		
	}

	public function withdraw_fund()
	{
		$data['amt'] = $this->input->get_post('amt');
		$data['email'] = $this->session->userdata('email');
		$user = $this->User_m->get_user_info($data['email']);
		$data['first'] = $user->first;
		$data['last'] = $user->last;
		$data['paypal'] = $user->iban;
		$data['balance'] = $user->balance;
		if($data['amt']>$data['balance']){
			echo "amt_err";
		}else{
			$state = $this->Payment_m->ck_withdraw();
			if(!$state){
				$this->Payment_m->create($data);
				echo "ok";
			}else{
				echo "no";
			}
			
		}
		
	}

	public function get_withdraws()
	{
		if($this->session->userdata('language')=='en'){
			$this->lang->load("deposit","en");
		}elseif ($this->session->userdata('language')=='sp') {
			$this->lang->load("deposit","sp");
		}elseif ($this->session->userdata('language')=='fr') {
			$this->lang->load("deposit","fr");
		}
		else{
			$this->lang->load("deposit","pt");
		}
		$email = $this->session->userdata('email');
		$data['withraw'] = $this->Payment_m->get($email);
		return $this->load->view('with_table',$data);
	}

	public function cancel_with()
	{
		$id = $this->input->get_post('id');
		$this->Payment_m->delete($id);
	}
}
?>