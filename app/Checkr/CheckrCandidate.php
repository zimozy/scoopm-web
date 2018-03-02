<?php
namespace ScoopM\CheckrAPI;

class CheckrCandidate extends CheckrAPI
{
    protected $urlEnding = 'candidates';
    private $report;

    public function executeQuery() {
        parent::executeQuery();
        $this->report = new CheckrReport(
            [ 
                'candidate_id' => $this->id,
                'package' => 'tasker_pro'
            ]
        );
    }

    public function getReport() {
        return $this->report;
    }
}