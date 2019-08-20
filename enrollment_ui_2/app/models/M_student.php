<?php
class M_student extends CI_model {
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        // Prep the query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // Run the query
        $query = $this->db->get('admin');
        // Let's check if there are any results
        if($query->num_rows() == 1){
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'id' => $row->id,
                    'username' => $row->username,
                    'password' => $row->password,
                    'validated' => true
                    );
            $this->session->set_userdata($data);            
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
	function add_student($data){
        return $this->db->insert('student', $data);
    }
    function list_student(){
    	$this->db->select("*");
        $this->db->from("student");
		$result = $this->db->get()->result();
		return $result;
    }
    function single_student($id){
    	return $this->db->where('id', $id)->get('student')->row();
    }
    function update_student($data, $id){       
        return $this->db->where('id', $id)->update('student', $data);
    }
    function delete_student($id){
        return $this->db->where('id', $id)->delete('student');
    }
    function search_student($keyword){
        // return "found";
        $this->db->like('name', $keyword);
        $this->db->or_like('dept', $keyword);
        $this->db->or_like('session', $keyword);
        $result = $this->db->get('student')->result();
        return $result;
    }
}
?>