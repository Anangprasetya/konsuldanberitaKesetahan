<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;


    private $dbh;
    private $stmt;

    public function __construct()
    {
        // Create connection
        $this->dbh = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        // Check connection
        if ($this->dbh->connect_error) {
            die("Connection failed: " . $this->dbh->connect_error);
        }
    }

    public function query($qr)
    {
        $this->stmt = $qr;
    }

    public function execute()
    {
        return $this->dbh->query($this->stmt);
    }

    public function textToSlug($text = '')
    {
        $text = trim($text);
        if (empty($text)) return '';
        $text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
        $text = strtolower(trim($text));
        $text = str_replace(' ', '-', $text);
        $text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
        return $text;
    }
}
