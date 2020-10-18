<?php

Class main extends CI_Controller {

	function __construct() {

		parent::__construct();

		$this->load->library('table');
		$this->load->library('upload');
		$this->load->library('image_lib');
		$this->load->library('javascript');
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->library('form_validation');

	}
	function index() {
		$this->load->view('login');
	}
	function login() {

		$username = $_POST['Username'];
		$password = $_POST['Password'];

		$queryLogin = $this->db->query("SELECT * FROM users where username= '{$username}' and password='{$password}'");

		if ($queryLogin->num_rows() > 0) {

			$row = $queryLogin->row();
			$userdata = array('userID' => $row->userID, 'Fname' => $row->Fname, 'Mi' => $row->Mi, 'Lname' => $row->Lname, 'user_type' => $row->user_type, 'logged_in' => TRUE);
			$this->session->set_userdata($userdata);

			if (($row->user_type) == "ADMIN") {
				redirect("main/dashboard");
			} else if (($row->user_type) == "USER") {
				if (($row->status) == "DISABLE") {
					$_SESSION['wrongLogIn'] = "Account Disabled. Contact Adminisitrator.";
					$this->load->view('login');
				} else {
					redirect("main/user_page");
				}
			}
		} else {

			$_SESSION['wrongLogIn'] = "Invalid Username Or Password!!";
			$this->load->view('login');
		}
	}
	function dashboard() {
		$this->load->view('dashboard');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect("main/index");
	}

	function register() {
		$this->load->view('sign_up');
	}
	function saveRegister() {
		$verifyu = $_POST['Username'];
		$verifyp = $_POST['Password'];
		$verifyquerylogin = $this->db->query("SELECT * FROM users where username='{$verifyu}'and password='{$verifyp}'");

		if ($verifyquerylogin->num_rows() > 0) {
			$srow = $verifyquerylogin->row();
			if (($srow->username) == $verifyu && ($srow->password) == $verifyp) {
				$_SESSION['wrongLogIn'] = "Username and Password has been taken";
				$this->load->view('login');
			}

		} else {
			$this->db->insert('users', $_POST);
			$_SESSION['message'] = "Successfully Registered!";
			$this->load->view('sign_up');

		}
	}
	function user_page() {
		$this->load->view('user_page');
	}
	function updateUser() {
		$userID = $this->uri->segment(3);
		$this->db->Where('userID', $userID);
		$this->db->update('users', $_POST);
		redirect("main/dashboard");

	}
	function deleteUser() {
		$userID = $this->uri->segment(3);
		$this->db->Where('username', $userID);
		$this->db->delete('users');
		$this->db->Where('username', $userID);
		$this->db->delete('activation');
		redirect("main/dashboard");
	}
	function searchUsers() {
		$this->load->view("dashboard");
	}

	function activation() {
		$this->load->view("activation");
	}
	function activationReq() {
		$verifyUN = $_POST['username'];
		$verifyPW = $_POST['password'];
		$verifyfn = $_POST['Fname'];
		$verifyln = $_POST['Lname'];
		$verifyCredentials = $this->db->query("SELECT * FROM users where username='{$verifyUN}'and password='{$verifyPW}'");
		if ($verifyCredentials->num_rows() > 0) {
			$vrow = $verifyCredentials->row();
			if (($vrow->username) == $verifyUN && ($vrow->password) == $verifyPW) {
				if (($vrow->status) == "DISABLE") {
					if (($vrow->Fname) == $verifyfn && ($vrow->Lname) == $verifyln) {
						$antispam = $this->db->query("SELECT * FROM activation where username='{$verifyUN}'and password='{$verifyPW}'");
						if ($antispam->num_rows() > 0) {
							$arow = $antispam->row();
							if (($arow->username) == $verifyUN && ($arow->password) == $verifyPW) {
								$_SESSION['wrongLogIn'] = "You have already sent a request....";
								$this->load->view('login');

							}
						} else {
							$this->db->insert('activation', $_POST);
							$_SESSION['wrongLogIn'] = "Account Verified. Please Wait...";
							$this->load->view('login');
						}
					} else {
						$_SESSION['message'] = "Why you wont register instead? The credentials has been registered but your name dosen't matched at anyone in the database..";
						$this->load->view('sign_up');
					}

				} elseif (($vrow->status) == "ACTIVE" && ($vrow->Lname) != $verifyln && ($vrow->Fname) != $verifyfn) {
					$_SESSION['message'] = "Why you wont register instead? The credentials has been registered but your name dosen't matched at anyone in the database..";
					$this->load->view('sign_up');
				} else {
					$_SESSION['wrongLogIn'] = "Account has been activated Already. Enter your account";
					$this->load->view('login');
				}
			}
		} else {
			$_SESSION['message'] = "Why you wont register instead? You have no account here..";
			$this->load->view('sign_up');

		}

	}

	function activation_page() {
		$this->load->view('activation_request');
	}
	function deleteRequest() {
		$activationID = $this->uri->segment(3);
		$this->db->Where('activationID', $activationID);
		$this->db->delete('activation');
		redirect("main/activation_page");
	}
	function activateaccount() {
		$un = $this->uri->segment(3);
		$this->db->Where('username', $un);
		$this->db->update('users', $_POST);
		$this->db->Where('username', $un);
		$this->db->delete('activation');
		redirect("main/dashboard");

	}

	function searchRequest() {
		$this->load->view("activation_request");
	}
	function createStory() {
		$this->db->insert('stories', $_POST);
		$_SESSION['message'] = "Successfully Posted!";
		redirect("main/user_page");
	}

}

?>