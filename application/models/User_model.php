<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function getUsers($number, $offset)
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('user', $number, $offset);
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function getProfile()
    {
        $id = $this->session->userdata('id');
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function getOrder()
    {
        $id = $this->session->userdata('id');
        $this->db->where('status !=', 4);
        $this->db->where('user', $id);
        $this->db->order_by('id', 'desc');
        return $this->db->get('invoice');
    }

    public function getFinishOrder()
    {
        $id = $this->session->userdata('id');
        $this->db->where('status', 4);
        $this->db->where('user', $id);
        $this->db->order_by('id', 'desc');
        return $this->db->get('invoice');
    }

    public function getOrderByInvoice($id)
    {
        $user = $this->session->userdata('id');
        return $this->db->get_where('invoice', ['invoice_code' => $id, 'user' => $user])->row_array();
    }

    public function register()
    {
        $brand = $this->input->post('brand');
        $company = $this->input->post('company');
        $country   = $this->input->post('country');
        $contact   = $this->input->post('contact');
        $phone     = $this->input->post('phone');
        $whatsapp  = $this->input->post('whatsapp');
        $website   = $this->input->post('website');

        if ($type = !$this->input->post('type1')) {
            $type = '';
        } else {
            $type = $this->input->post('type1');
        }

        if ($detail_other = !$this->input->post('detail_other')) {
            $detail_other = '';
        } else {
            $detail_other = $this->input->post('detail_other');
        }

        if ($region1 = !$this->input->post('region1')) {
            $region1 = '';
        } else {
            $region1 = $this->input->post('region1');
        }

        if ($region2 = !$this->input->post('region2')) {
            $region2 = '';
        } else {
            $region2 = $this->input->post('region2');
        }

        if ($region3 = !$this->input->post('region3')) {
            $region3 = '';
        } else {
            $region3 = $this->input->post('region3');
        }

        if ($region4 = !$this->input->post('region4')) {
            $region4 = '';
        } else {
            $region4 = $this->input->post('region4');
        }

        if ($region5 = !$this->input->post('region5')) {
            $region5 = '';
        } else {
            $region5 = $this->input->post('region5');
        }
        if ($region6 = !$this->input->post('region6')) {
            $region6 = '';
        } else {
            $region6 = $this->input->post('region6');
        }

        if ($region7 = !$this->input->post('region7')) {
            $region7 = '';
        } else {
            $region7 = $this->input->post('region7');
        }

        if ($region8 = !$this->input->post('region8')) {
            $region8 = '';
        } else {
            $region8 = $this->input->post('region8');
        }

        if ($region_other = !$this->input->post('region_other')) {
            $region_other = '';
        } else {
            $region_other = $this->input->post('region_other');
        }
        $flashop_store = $this->input->post('flashop_store');

        if ($indoor = !$this->input->post('indoor')) {
            $indoor = '';
        } else {
            $indoor = $this->input->post('indoor');
        }

        if ($outdoor = !$this->input->post('outdoor')) {
            $outdoor = '';
        } else {
            $outdoor = $this->input->post('outdoor');
        }

        if ($buy_form1 = !$this->input->post('buy_form1')) {
            $buy_form1 = '';
        } else {
            $buy_form1 = $this->input->post('buy_form1');
        }

        if ($buy_form2 = !$this->input->post('buy_form2')) {
            $buy_form2 = '';
        } else {
            $buy_form2 = $this->input->post('buy_form2');
        }

        if ($help = !$this->input->post('help')) {
            $help = '';
        } else {
            $help = $this->input->post('help');
        }

        $email = addslashes(htmlspecialchars($this->input->post('email', true)));
        $checkEmail = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($checkEmail) {
            $this->session->set_flashdata('failed', '<div class="alert alert-danger" role="alert">
            Email already exists!
            </div>');
            redirect(base_url() . 'register');
        } else {
            $name = addslashes(htmlspecialchars($this->input->post('name', true)));
            $password = $this->input->post('password');
            $token = sha1(rand());
            function textToSlug($text = '')
            {
                $text = trim($text);
                if (empty($text)) return '';
                $text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
                $text = strtolower(trim($text));
                $text = str_replace(' ', '-', $text);
                $text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
                return $text;
            }
            $username = textToSlug($name);
            $checkUsername = $this->db->get_where('user', ['username' => $username])->row_array();
            if ($checkUsername) {
                $username = $username . substr(rand(), 0, 3);
            }
            $data = [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'date_register' => date('Y-m-d H:i:s'),
                'token' => $token,
                'photo_profile' => 'default.png',
                'brand' => $brand,
                'company'    => $company,
                'country'   => $country,
                'contact'   => $contact,
                'whatsapp'  => $whatsapp,
                'phone'     => $phone,
                'website'   => $website,
                'busines'   => $type,
                'detail_other'  => $detail_other,
                'region1'       => $region1,
                'region2'       => $region2,
                'region3'       => $region3,
                'region4'       => $region4,
                'region5'       => $region5,
                'region6'       => $region6,
                'region7'       => $region7,
                'region8'       => $region8,
                'region_other'  => $region_other,
                'flashop_store' => $flashop_store,
                'indoor'        => $indoor,
                'outdoor'       => $outdoor,
                'buy_form1'     => $buy_form1,
                'buy_form2'     => $buy_form2,
                'help'          => $help
            ];
            $this->db->insert('user', $data);

            $data = [
                'email' => $email,
                'date_subs' => date('Y-m-d H:i:s'),
                'code' => time() . rand()
            ];
            $this->db->insert('subscriber', $data);

            $this->load->library('email');
            $config['charset'] = 'utf-8';
            $config['useragent'] = $this->Settings_model->general()["app_name"];
            $config['smtp_crypto'] = $this->Settings_model->general()["crypto_smtp"];
            $config['protocol'] = 'smtp';
            $config['mailtype'] = 'html';
            $config['smtp_host'] = $this->Settings_model->general()["host_mail"];
            $config['smtp_port'] = $this->Settings_model->general()["port_mail"];
            $config['smtp_timeout'] = '5';
            $config['smtp_user'] = $this->Settings_model->general()["account_gmail"];
            $config['smtp_pass'] = $this->Settings_model->general()["pass_gmail"];
            $config['crlf'] = "\r\n";
            $config['newline'] = "\r\n";
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);
            $this->email->from($this->Settings_model->general()["account_gmail"], $this->Settings_model->general()["app_name"]);
            $this->email->to($email);
            $this->email->subject('Verifikasi Alamat Email ' . $this->Settings_model->general()["app_name"]);
            $this->email->message(
                '<p><strong>Halo ' . $name . '</strong><br>
                Terima kasih telah mendaftar di ' . $this->Settings_model->general()["app_name"] . '. <br/>
                Silakan verifikasi email dengan klik link dibawah ini: <br/>
                <a href="' . base_url() . 'auth/verification?email=' . $email . '&token=' . $token . '">' . base_url() . 'auth/verification?email=' . $email . '&token=' . $token . '</a><br/>
                Terima kasih</p>
                '
            );
            $this->email->send();
        }
    }

    public function getProductByInvoice($id)
    {
        $user = $this->session->userdata('id');
        return $this->db->get_where('transaction', ['user' => $user, 'id_invoice' => $id]);
    }

    public function uploadPhoto()
    {
        $config['upload_path'] = './assets/images/profile/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = round(microtime(true) * 1000);

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('newphoto')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function updateProfile($file)
    {
        if ($file == "") {
            $name = $this->input->post('name');
            $this->db->set('name', $name);
            $this->db->where('id', $this->session->userdata('id'));
            $this->db->update('user');
        } else {
            $name = $this->input->post('name');
            $this->db->set('name', $name);
            $this->db->set('photo_profile', $file);
            $this->db->where('id', $this->session->userdata('id'));
            $this->db->update('user');
        }
    }
}
