<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_Model extends CI_Model {

	public function add_job($job_details)
    {
        $this->db->insert('jobs', $job_details);
        
    }

}

/* End of file Jobs.php */
/* Location: ./application/models/Jobs.php */