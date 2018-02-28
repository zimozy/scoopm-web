<?php

use setasign\Fpdi\Fpdi;

class ProofOfAuthorization extends Fpdi {
    public function __construct($signature, $time, $ip, $ipFromHeaders) {
        parent::__construct('P', 'in', 'letter');

        $this->setSourceFile("/var/www/app/testAuthorization.pdf");
        
        $this->AddPage();
        $this->useTemplate($this->importPage(1));

        $this->AddPage();
        $this->useTemplate($this->importPage(2));
        
            //SIGNATURE NAME
            $this->SetXY(3, 10);
            $this->SetFont('Arial','B',13);
            $this->Write(0, $signature);

            //DETAILS
            $this->SetXY(0.8, 10.2);
            $this->SetFont('Arial','',12);
            $time = date('c', $time); //ISO 8601 date
            $ipFromHeaders = empty($ipFromHeaders) ? 'N/A' : $ipFromHeaders; //If empty
            $this->Write(0, "At: $time, IP Address: $ip, IP Address from client browser: $ipFromHeaders");

        $this->AddPage();
        $this->useTemplate($this->importPage(3));

        $this->AddPage();
        $this->useTemplate($this->importPage(4));
    }
}