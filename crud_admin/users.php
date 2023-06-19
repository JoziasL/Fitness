<?php
class users
{
    // properties - eigenschappen ---------------------
    protected $id;
    protected $username;
    protected $name;
    protected $email;
    protected $password;

    // methoden - functies ----------------------------
    // constructor
    function __construct($id=NULL, $username=NULL, $name=NULL, $email=NULL, $password=NULL)
    {
        $this->id=$id;
        $this->username=$username;
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }

    // setters
    public function set_id($id)
    {
        $this->id=$id;
    }
    public function set_username($username)
    {
        $this->username=$username;
    }
    public function set_name($name)
    {
        $this->name=$name;
    }
    public function set_email($email)
    {
        $this->email=$email;
    }
    public function set_password($password)
    {
        $this->password=$password;
    }

    // getters
    public function get_id()
    {
        return $this->id;
    }
    public function get_username()
    {
        return $this->username;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_email()
    {
        return $this->emial;
    }
    public function get_password()
    {
        return $this->password;
    }
}
?>